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
    
         
   
            $this->validate($request, [
                'product_title' => 'required',
                'product_price' => 'required',
                'product_quantity' => 'required',

            ]);

         

            //insert into orders table
            DB::table('orders')->insert([
                
                'price' => $request->product_price,
                'quantity' => $request->product_quantity,
                'product_id' => $request->product_id
            ]);
            DB::table('products')
            ->where('id','=',$id)
            ->decrement('product_quantity',$request->input('product_quantity'));

        DB::table('products')
            ->where('product_quantity','=',0)
            ->delete();
            
            return redirect()->back()->with('success', 'Order created successfully.');
            
  }
  public function view(){
    $today=   DB::table('orders')
    ->whereDate('created_at','=',today())
    ->sum(DB::raw('price * Quantity '));

$yesterday= DB::table('orders')
->whereDate('created_at','=',today()->subDay())
->sum(DB::raw('price * Quantity'));

$thisMonth= DB::table('orders')
->whereMonth('created_at','=',now()->month)
->sum(DB::raw('price * Quantity'));

$lastMonth=DB::table('orders')
->whereMonth('created_at','=',now()->subMonth()->month)
->sum(DB::raw('price * Quantity'));


return view('pages.dashboard',[

  'today'=>$today,
  'yesterday'=>$yesterday,
  'thisMonth'=> $thisMonth,
  'lastMonth'=>$lastMonth


]);
  }
}
