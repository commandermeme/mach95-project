<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index($category)
    {
        if($category == 'all')
        {
            $products =  Product::all();
            return view('pages.products')->with('products', $products);
        }
        else if($category == 'eyeglasses')
        {    
            $products = Product::where('category', '=', 'eyeglasses')->get();
            return view('pages.products')->with('products', $products);
        }
        else if($category == 'necklace')
        {
            $products = Product::where('category', '=', 'necklace')->get();
            return view('pages.products')->with('products', $products);
        }
        else if($category == 'earrings')
        {
            $products = Product::where('category', '=', 'earrings')->get();
            return view('pages.products')->with('products', $products);
        }
        else if($category == 'hat')
        {
            $products = Product::where('category', '=', 'hat')->get();
            return view('pages.products')->with('products', $products);
        }
    }

    public function show($id) 
    {
        $product = Product::find($id);
        return view('pages.productdetail')->with('product', $product);
    }

    public function eyeglasses()
    {
        return 'eyeglasses';
    }
}
