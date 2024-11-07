<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class menu_addon extends Model
{
    public $incrementing = false;
    protected $fillable =[
        'menu_id',
        'addon_id',
        'addon_image',
        'addon_name',
        'menu_category_id',
        'addon_price',
    ];
}
