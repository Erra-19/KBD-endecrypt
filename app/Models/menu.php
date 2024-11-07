<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $fillable =[
        'menu_image',
        'menu_name',
        'menu_category_id',
        'menu_price',
    ];
    public function addons()
    {
        return $this->hasMany(Menu_Addon::class, 'menu_id', 'id');
    }
}
