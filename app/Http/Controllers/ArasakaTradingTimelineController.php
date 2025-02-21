<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ArasakaTradingTimeline;

class ArasakaTradingTimelineController extends Controller
{
    public function index(){
        
        return view('arasaka_trading_timeline.index');
    }

    public function create(){
        return view('arasaka_trading_timeline.create');
    }

    public function store(Request $request)
    {

        if ($request->hasFile('logs')) {
            $file = $request->file('logs');
            // Ensure it's a JSON file
            if ($file->getClientOriginalExtension() !== 'json') {
                return back()->withErrors(['logs' => 'The uploaded file must be a JSON file.']);
            }

            // Read file contents
            $jsonData = file_get_contents($file->getRealPath());

            // Decode JSON into an array
            $data = json_decode($jsonData, true);

            // Check for JSON errors
            if (json_last_error() !== JSON_ERROR_NONE) {
                return back()->withErrors(['logs' => 'Invalid JSON format.']);
            }
            // dd($data);
             // Extract and remap data
            $mappedData = [
                'model_name' => $data['model_name'] ?? null,

                // Features (Ensuring field names match our migration)
                'features' => $data['features'] ?? null,
                // Scaling Parameters
                'scaling_mean' => $data['scaling_parameters']['mean'] ?? null,
                'scaling_std_dev' => $data['scaling_parameters']['std_dev'] ?? null,
                // Performance Metrics
                'train_mse' => $data['performance_metrics']['train_mse'] ?? null,
                'test_mse' => $data['performance_metrics']['test_mse'] ?? null,
                'train_rmse' => $data['performance_metrics']['train_rmse'] ?? null,
                'test_rmse' => $data['performance_metrics']['test_rmse'] ?? null,
                'train_mae' => $data['performance_metrics']['train_mae'] ?? null,
                'test_mae' => $data['performance_metrics']['test_mae'] ?? null,
                'train_r2' => $data['performance_metrics']['train_r2'] ?? null,
                'test_r2' => $data['performance_metrics']['test_r2'] ?? null,
                'train_explained_variance' => $data['performance_metrics']['train_explained_variance'] ?? null,
                'test_explained_variance' => $data['performance_metrics']['test_explained_variance'] ?? null,
            ];

            // store it in the database
            // dd($mappedData);
            ArasakaTradingTimeline::create($mappedData);

            return redirect()->route('arasaka_trading_timeline.analytics')->with('success', 'JSON uploaded successfully.');
        }

        return back()->withErrors(['logs' => 'No file was uploaded.']);
}


    public function analytics()
    {
        return view('arasaka_trading_timeline.analytics', [
            'models' => ArasakaTradingTimeline::latest()->paginate(2) // Paginate 2 per page
        ]);
    }

}
