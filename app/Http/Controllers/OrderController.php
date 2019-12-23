<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\{Order, Partner};

class OrderController extends Controller
{

    /**
     * Страница со списком заказов
    */
    public function index()
    {
        $orders = Order::paginate(50);
        foreach ($orders as $order) {
            $order->status_text = Order::getStatusText($order->status);
            $order->price = Order::getPrice($order->id);
            $order->products = Order::getProducts($order->id);
        }
        return view('orders', compact('orders'));
    }

    /**
     * Форма редактирования заказа
    */
    public function edit($id)
    {
        $item = Order::findOrFail($id);
        $partners = Partner::get();
        $price = Order::getPrice($id);
        return view('edit_order', compact('item', 'partners', 'price'));
    }

    public function update($id)
    {
        $order = Order::findOrFail($id);
        $order->client_email = request()->client_email;
        $order->partner_id = request()->partner_id;
        $order->status = request()->status;
        $order->save();
        return back();
    }

}