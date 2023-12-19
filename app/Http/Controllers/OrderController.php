<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{


    public function create(){

        $products = DB::table('products')->get();
        return view('pages.order.create',compact('products'));
    }
  public function store(Request $request, $id)
  {
    dd($request->all());
         
   
            // $this->validate($request, [
            //     'product_title' => 'required',
            //     'product_price' => 'required',
            //     'product_quantity' => 'required',

            // ]);

            // //update price and quantity in products table

            // $countQty = DB::table('products')->count('product_quantity');
            
            // $newQty = $request->product_quantity - $countQty;
            
            // DB::table('products')->where('id',$id)->update([

            //     'product_quantity' => $newQty
            // ]);

            // //insert into orders table
            // DB::table('orders')->insert([
                
            //     'price' => $request->product_price,
            //     'quantity' => $request->product_quantity,
            //     'product_id' => $request->product_id
            // ]);
            
            // return redirect()->back()->with('success', 'Order created successfully.');
            
           
            
            
    
  }
}
