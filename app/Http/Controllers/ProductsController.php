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
            
        return 'eyeglasses';
        }
        else if($category == 'necklace')
        {
            return 'necklace';
        }
        else if($category == 'earrings')
        {
            return 'earrings';
        }
        else if($category == 'hat')
        {
            return 'hat';
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
