@extends('admin.master')
@section('content')

    <div class="container-fluid px-4">
        <br>
        <br>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Manage Product
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Category Name</th>
                        <th>Brand Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->product_name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->category_name}}</td>
                            <td>{{$product->brand_name}}</td>
                            <td>{{$product->description}}</td>
                            <td>
                                <img src="{{asset($product->image)}}" alt="" class="img-fluid" width="50px" height="50px">
                            </td>
                            <td class="d-flex">
                                <a href="{{route('product.edit',$product->id)}}" class="btn btn-primary">Edit</a>
                                <form action="{{route('product.destroy',$product->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
