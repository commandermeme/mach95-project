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
                                    <th>Item No.</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Availability</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($clients as $client) --}}
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="" class="btn btn-outline-primary mr-1">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <form class="d-inline mr-1" action="" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" onclick="return confirm('Are you sure to delete?')" class="btn btn-outline-primary"><i class="fa fa-close"></i></button>
                                                </form>
                                                <a href="" class="btn btn-outline-primary">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                {{-- @endforeach --}}
                            </tbody>
                        </table>
                    {{-- </div> --}}
                </div>
            </div> 
            
            <!--MODALS-->
            <!--add client modal-->
            <div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="addProductLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form action="" method="POST" id="signupForm">
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
                                            <label for="fname">Item No.</label>
                                            <input type="text" id="fname" class="form-control" name="fname">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lname">Name</label>
                                            <input type="text" id="lname" class="form-control" name="lname">
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
                                            <label for="phone">Stock</label>
                                            <input type="number" id="phone" class="form-control" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="licence">Type</label>
                                            <select id="licence" class="form-control" name="licence">
                                                <option value="">Please Select</option>
                                                <option value="watch">watch</option>
                                                <option value="earing">earing</option>
                                                <option value="eyeglass">eyeglass</option>
                                                <option value="hat">hat</option>
                                            </select>
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