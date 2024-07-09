<?php

namespace App\Http\Controllers;

use App\Http\Requests\updateRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductManagementController extends Controller
{
    public function productList(){
        $products=Product::select('title','color','details','product_code')->get();
        return view('main',compact('products'));
    }
    public function productUpdate(updateRequest $request){
        $product=Product::update([
            'title'=>$request->title,
            'color'=>$request->color,
            'product_code'=>$request->product_code,
            'details'=>$request->details
        ]);
    }
    public function productStore(updateRequest $request){
        $product=Product::create([
            'title'=>$request->title,
            'color'=>$request->color,
            'product_code'=>$request->product_code,
            'details'=>$request->details
        ]);
    }
}
