<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ArasakaTradingTimeline;

class ArasakaTradingTimelineController extends Controller
{
    public function index(){
        
        return view('arasaka_trading_timeline.index',[
            'ModelData' => ArasakaTradingTimeline::all()
        ]);
    }
}
