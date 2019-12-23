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
        $orders = Order::paginate(50);
        foreach ($orders as $order) {
            $order->status_text = Order::getStatusText($order->status);
            $order->price = Order::getPrice($order->id);
            $order->products = Order::getProducts($order->id);
        }
        return view('orders', compact('orders'));
    }

}