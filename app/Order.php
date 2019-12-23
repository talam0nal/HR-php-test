<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\OrderProduct;

class Order extends Model
{
    protected $fillable = [
        'client_email',
        'partner_id',
        'status',
    ];

    public function partner()
    {
        return $this->belongsTo('App\Partner');
    }

    /**
     * Возвращает статус заказа в текстовом представлении
    */
    public static function getStatusText($status) : string
    {
        switch ($status) {
            case 0:
                return 'Новый';
                break;
            case 10:
                return 'Подтверждён';
                break;
            case 20:
                return 'Завершён';
                break;
        }
    }

    /**
     * Возвращает стоимость заказа
    */
    public static function getPrice($order_id) : int
    {
        $items = OrderProduct::where('order_id', $order_id)->get();
        $price = 0;
        foreach ($items as $item) {
            $price += $item->price * $item->quantity;
        }
        return $price;
    }
}
