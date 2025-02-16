<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('arasaka_trading_timeline', function (Blueprint $table) {
            $table->id();
            $table->string('model_name');
            
            // Features
            $table->float('Open')->nullable();
            $table->float('High')->nullable();
            $table->float('Low')->nullable();
            $table->float('Close')->nullable();
            $table->float('Price_Difference')->nullable();
            $table->float('Open_Close_Change_Pct')->nullable();
            $table->float('High_Low_Change_Pct')->nullable();
            $table->float('Volume')->nullable();
            $table->float('Volume_MA_20')->nullable();
            $table->float('Volume_Change_Pct')->nullable();
            $table->float('median_t_1')->nullable();
            $table->float('median_t_2')->nullable();
            
            // Performance Metrics
            $table->float('train_mse')->nullable();
            $table->float('test_mse')->nullable();
            $table->float('train_rmse')->nullable();
            $table->float('test_rmse')->nullable();
            $table->float('train_mae')->nullable();
            $table->float('test_mae')->nullable();
            $table->float('train_r2')->nullable();
            $table->float('test_r2')->nullable();
            $table->float('train_explained_variance')->nullable();
            $table->float('test_explained_variance')->nullable();
            
            // Scaling Parameters (Serialized JSON Format for Arrays)
            $table->json('scaling_mean')->default("[0,1,2]");
            $table->json('scaling_std_dev')->default("[0,1,2]");
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arasaka_trading_timeline');
    }
};
