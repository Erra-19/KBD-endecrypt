<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $fillable =[
        'customer_name',
        'table_code',
    ];
}
