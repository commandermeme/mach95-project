<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        //Handle file upload
        if ($request->hasFile('prod_image')) {
            $filenameWithExt = $request->file('prod_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extention = $request->file('prod_image')->getClientOriginalExtension();
            $fileNameToStore = $filename. '_' .time(). '.' .$extention;
            $path = $request->file('prod_image')->storeAs('public/prod_images', $fileNameToStore);
            
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $product = new Product;
        $product->model = $request->model;
        $product->brand_name = $request->brand_name;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->type = $request->type;
        $product->price = $request->price;
        $product->prod_image = $fileNameToStore;
        $product->save();

        return redirect('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request;
        $product = Product::find($id);
        if ($request->hasFile('prod_image')) {
            $filenameWithExt = $request->file('prod_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extention = $request->file('prod_image')->getClientOriginalExtension();
            $fileNameToStore = $filename. '_' .time(). '.' .$extention;
            $path = $request->file('prod_image')->storeAs('public/prod_images', $fileNameToStore);
            
        } else {
            $fileNameToStore = $product->prod_image;
        }

        
        $product->model = $request->model;
        $product->brand_name = $request->brand_name;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->type = $request->type;
        $product->price = $request->price;
        $product->prod_image = $fileNameToStore;
        $product->save();

        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('products');
    }
}
