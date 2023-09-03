@extends('admin.master')
@section('title')
    Edit Products
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Products</h3></div>
                    <div class="card-body">
                        <h3>{{session('message')}}</h3>
                        <form action="{{route('users.update',$user->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="name" type="text" placeholder="Enter Name" value="{{$user->name}}"/>
                                        <label for="inputFirstName">Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" value="{{$user->email}}" id="inputPassword" name="email" disabled type="email" placeholder="Email" />
                                        <label for="productPrice">Email</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPassword" name="old_password" type="password" placeholder="Old Password" />
                                        <label for="categoryName">Old Password</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Password" />
                                        <label for="categoryName">Password</label>
                                    </div>
                                </div>
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
