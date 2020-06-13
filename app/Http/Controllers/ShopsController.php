<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShopsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('shop.index')->with('products', $products);
    }
}
