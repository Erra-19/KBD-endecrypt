<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable=[
        'staff_id',
        'customer_id',
        'menu_order_id',
    ]
}
