<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller //It's good to have a parent class incase there are common code we'd like to use in future.
{
    public function index(){

        return view('products.index',[
            'products'=> Product::all() //The first side is the name in the view.
        ]);
    }
}
