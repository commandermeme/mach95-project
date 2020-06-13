@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <h2 class="my-4 text-dark">
                <i class="fa fa-dropbox"></i>
                <a class="text-decoration-none" href="{{ route('products.index') }}">Products</a>/Update
            </h2>
            <form action="{{ route('products.update', $product->id) }}" method="POST" id="signupForm" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <div class="modal-title" id="addProductLabel">
                            <p class="lead m-0">Item</p>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="model">Model</label>
                                    <input type="text" id="model" class="form-control" name="model" value="{{ $product->model }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="brand_name">Brand Name</label>
                                    <input type="text" id="brand_name" class="form-control" name="brand_name" value="{{ $product->brand_name }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" class="form-control" name="description">{{ $product->description }}</textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="stock">Stock</label>
                                    <input type="number" id="stock" class="form-control" name="stock" value="{{ $product->stock }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="type">Type</label>
                                    <select id="type" class="form-control" name="type">
                                        <option value="{{ $product->type }}">{{ $product->type }}</option>
                                        <option value="necklace">necklace</option>
                                        <option value="cap">cap</option>
                                        <option value="eyeglass">eyeglass</option>
                                        <option value="earring">earring</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="prod_image">Image</label>
                                    <input type="file" name="prod_image" id="prod_image" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" id="price" class="form-control" name="price" value="{{ $product->price }}">
                                </div>
                            </div>
                        </div>
                        <input class="btn btn-primary px-4" type="submit" value="Save">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection