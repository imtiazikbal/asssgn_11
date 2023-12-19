<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        return view('pages.products.index',compact('products'));
    }  
    public function create()
    {
        return view('pages.products.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_title' => 'required|string|max:255',
            'product_description' => 'required|string|max:255',
            'product_price' => 'required|string|max:255',
            'product_quantity' => 'required|string|max:255',
        ]);

        DB::table('products')->insert([
            'product_name' => trim($request->product_title),
            'product_description' => trim($request->product_description),
            'product_price' => trim($request->product_price),
            'product_quantity' => trim($request->product_quantity),
        ]);
        
        return redirect()->back()->with('success', 'Product created successfully.');
    }

    public function edit($id){
        $product = DB::table('products')->where('id',$id)->first();
        return view('pages.products.edit',compact('product'));
    }

    public function update(Request $request,$id){

        $this->validate($request, [
            'product_title' => 'required|string|max:255',
            'product_description' => 'required|string|max:255',
            'product_price' => 'required|string|max:255',
            'product_quantity' => 'required|string|max:255',
        ]);
        
        DB::table('products')->where('id',$id)->update([
            'product_name' => trim($request->product_title),
            'product_description' => trim($request->product_description),
            'product_price' => trim($request->product_price),
            'product_quantity' => trim($request->product_quantity),
        ]);
        
        return redirect()->back()->with('success', 'Product Updated successfully.');
    }

    public function destroy($id){
        DB::table('products')->where('id',$id)->delete();
        return redirect()->back()->with('success', 'Product Deleted successfully.');
 }
    public function orderView(){
        $product = DB::table('products')->first();
        return view('pages.order.create',compact('product'));
    }
}
    
