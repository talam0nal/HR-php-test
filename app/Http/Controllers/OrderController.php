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
        return view('orders', compact('orders'));
    }

}