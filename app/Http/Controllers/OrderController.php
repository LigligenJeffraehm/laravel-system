<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

         $orders = DB::table('orders')
        ->join('customers', 'orders.customer_id', '=', 'customers.id')
        ->join('products', 'orders.product_id', '=', 'products.id')
        ->select('orders.*', 'products.productName', 'products.price', 'customers.customerName')
        ->get();

    return view('orderList', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $products = Product::all();
        $customers = Customer::all();
        return view('orderCreate', compact('products', 'customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
       
        Order::create($request -> all());
        return redirect()->route('orders.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        $customers=Customer::all();
        $products=Product::all();
        return view('orderEdit', compact('order','products','customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $order->update($request->all());
        return redirect()->route('orders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
         $order->delete();
        return redirect()->route('orders.index');
    }
}
