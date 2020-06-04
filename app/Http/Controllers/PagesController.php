<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function products()
    {
        $products =  Product::all();
        return view('pages.products')->with('products', $products);
    }
}