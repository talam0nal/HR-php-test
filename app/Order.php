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
}
