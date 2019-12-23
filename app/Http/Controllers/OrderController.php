<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Order;

class OrderController extends Controller
{

    /**
     * Страница со списком заказов
    */
    public function index()
    {
        $orders = Order::get();
        foreach ($orders as $order) {
            $order->status_text = Order::getStatusText($order->status);
            $order->price = Order::getPrice($order->id);
        }
        return view('orders', compact('orders'));
    }

}