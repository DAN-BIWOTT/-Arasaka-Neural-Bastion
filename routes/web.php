<?php

use Illuminate\Support\Facades\Route; //Calling the root class
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ArasakaTradingTimelineController;
// next use methods from the root class
// Route::get('/', function () { //the get function takes two arguments, the url path and the callback function
//     return view('welcome');
// });

// Route::get('/hello', function(){
//     return view('hello');
// });
/* Browser -> Routes -> Views
OR
Controller -> View -> Routes -> Browser
*/
Route::get('/products',[ProductController::class,'index']) //we take the route and an array with the particular class and specific method
    ->name('product.index'); //we can use the helper function to give a route a unique name. Now the route can change but since the name stays the same,
    //we don't have to edit all files where the route appears.
//To display just the view without a controller use the View method.
Route::view('/','home')
    ->name('home'); //it takes two variables, the route and the view
Route::get('/info',[InfoController::class, 'index'])
    ->name('info.index');
Route::get('/timeline',[ArasakaTradingTimelineController:: class, 'index'])
    ->name('arasaka_trading_timeline.index');
Route::get('/products/create',[ProductController::class, 'create'])
    ->name('product.create');
Route::post('/products/store', [ProductController::class, 'store'])
    ->name('product.store');
/*  Common used cmd commands
php artisan serve -> starts the server
php artisan list -> shows all available commands.
php artisan make:view [Name] (plural folder, underscore)
php artisan make:component [Name] --view (underscore)
php artisan make:controller [Name] (Mixedcase)
php artisan make:migration [Name] (snake_case)
php artisan migrate
php artisan migrate:rollback
php artisan make:model [Name] (capital letter start)
setting Protected $table in model lets php use the actual database table name
use dd() dump and die function instead of die() when debugging.
add @csrf to any form to handle crossscript problems
*/