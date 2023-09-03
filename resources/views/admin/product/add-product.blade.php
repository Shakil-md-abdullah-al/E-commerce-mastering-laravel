@extends('admin.master')
@section('title')
    Add Products
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Products</h3></div>
                    <div class="card-body">
                        <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="product_name" type="text" placeholder="Enter Product Name" />
                                        <label for="inputFirstName">Product Name</label>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPassword" name="price" type="number" placeholder="Product Price" />
                                        <label for="productPrice">Product Price</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPassword" name="category_name" type="text" placeholder="Category Name" />
                                        <label for="categoryName">Category Name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPassword" name="brand_name" type="text" placeholder="Brand Name" />
                                        <label for="brandName">Brand Name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea id="" cols="58" rows="5" name="description" placeholder="Description"></textarea>
                                {{--                                <label for="description">Description</label>--}}
                            </div>

                            <div class="col-md-12">
                                <input type="file" class="form-control" name="image">
                            </div>

                            <div class="mt-4 mb-0">
                                <input type="submit" class="btn btn-outline-success text-center" value="Save Product">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
