<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Models\Order;

class ProductController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function catalog(){
       $items = Item::all();
       return view('catalog', data: compact(var_name: "items"));
    }
    public function product($productId){
        $item = Item::where('ItemId', $productId)->first();
        return view('product', data: compact(var_name: "item"));

    }
    public function addToOrder(Request $request)
    {
        $request->validate([
            'itemId' => 'required|exists:items,ItemId',
            'quantity' => 'required|integer|min:1'
        ]);

        Order::create([
            'date' => now()->toDateString(),
            'productId' => $request->itemId,
            'quantity' => $request->quantity
        ]);

        return redirect()->route('catalog')->with('success', 'Товар добавлен в заказ!');
    }

    public function showOrders(){
        $orders = Order::all();
        return view('orders', compact('orders'));
    }
}
