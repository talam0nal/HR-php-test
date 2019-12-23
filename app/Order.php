<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
