<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontEnd.home.home',[
            'products'=>Product::all()
        ]);
    }

    public function productDetails($id){
        return view('frontEnd.product.product-details',[
            'product'=>product::find($id)
        ]);
    }

}
