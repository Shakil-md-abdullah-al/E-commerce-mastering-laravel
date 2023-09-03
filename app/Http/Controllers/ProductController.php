<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product.manage-product',[
            'products'=>Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.product.add-product");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::saveProduct($request);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        return view('admin.product.edit-product',[
            'product'=>Product::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    //    return $request;
        Product::updateProduct($request,$id);
       
        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        if($product->image){
            if(file_exists($product->image)){
                unlink($product->image);
            }
        }
        $product->delete();
        return back();
    }
}
