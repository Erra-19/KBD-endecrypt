<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class menu_order extends Model
{
    public $incrementing = false;
    protected $primaryKey = ['id', 'menu_id'];
    protected $fillable = [
        'id',
        'menu_id',
    ]
}
