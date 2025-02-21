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
            $table->json('features')->nullable();

            // Scaling Parameters
            $table->json('scaling_mean')->nullable();
            $table->json('scaling_std_dev')->nullable();

            // Performance Metrics (Remain as Float)
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
