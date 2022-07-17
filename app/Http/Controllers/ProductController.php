<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $products = Product::select('*')->get();


        return view('product.index',compact('products'));
    }

    public function create(Request $request){
        // dd($request);
        if($request->action == 'Save'){
        // dd($request->action);
            $createP = Product::insert([
                'product_name'=> $request->product_name,
                'product_code'=> $request->product_code,
                'category_id'=>  $request->category,
                'supplier_id'=>  $request->supplier,
                'quantity_per_unit'=>  $request->quantity_per_unit,
                'unit_price'=>  $request->list_price,
                'discontinued' =>  $request->discontinued,
            ]);


            return redirect()->route('product.index')->with('success', 'product has been added');
        }



        return view('product.create');
    }
}
