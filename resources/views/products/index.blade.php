@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <h2 class="my-4 text-dark"><i class="fa fa-dropbox"></i> Products</h2>
            

            <div class="card">
                <div class="card-header bg-primary">
                    {{-- <i class="fa fa-users"></i> <span class="lead">List</span> --}}
                    <button type="button" class="btn btn-sm btn-outline-light" data-toggle="modal" data-target="#addProduct">
                        <i class="fa fa-plus"></i> Add Product
                    </button>
                </div>
                <div class="card-body">
                    {{-- <div class="table-responsive-xl"> --}}
                        <table  class="table table-striped table-borderless datatable table-responsive-xl">
                            <thead>
                                <tr>
                                    <th>Model</th>
                                    <th>Brand Name</th>
                                    <th>Type</th>
                                    <th>Availability</th>
                                    <th>Price</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->model }}</td>
                                        <td>{{ $product->brand_name }}</td>
                                        <td>{{ $product->type }}</td>
                                        <td>{{ $product->stock }}</td>
                                        <td>{{ number_format($product->price, 2) }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('products.edit', $product->id) }}" type="button" class="btn btn-outline-primary mr-1">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <form class="d-inline mr-1" action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" onclick="return confirm('Are you sure to delete?')" class="btn btn-outline-primary"><i class="fa fa-close"></i></button>
                                                </form>
                                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-outline-primary">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    {{-- </div> --}}
                </div>
            </div> 
            
            <!--MODALS-->
            <!--add product modal-->
            <div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="addProductLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form action="{{ route('products.store') }}" method="POST" id="signupForm" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <div class="modal-title" id="addProductLabel">
                                    <i class="fa fa-user-plus"></i> <span class="lead">Add Product</span>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="model">Model</label>
                                            <input type="text" id="model" class="form-control" name="model">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="brand_name">Brand Name</label>
                                            <input type="text" id="brand_name" class="form-control" name="brand_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea id="description" class="form-control" name="description"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="stock">Stock</label>
                                            <input type="number" id="stock" class="form-control" name="stock">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="type">Type</label>
                                            <select id="type" class="form-control" name="type">
                                                <option value="">Please Select</option>
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
                                            <input type="number" id="price" class="form-control" name="price">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <input class="btn btn-primary" type="submit" value="Save">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection