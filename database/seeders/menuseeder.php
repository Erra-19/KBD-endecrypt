<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class menuseeder extends Seeder
{
    public function run(): void
    {
        $Menu = [
            [
                'menu_name' => 'Nasi Goreng',
                'menu_category_id' => 1,
                'menu_price' => 15000.00,
            ],
            [
                'menu_image' => 'img/4b268a58-4b52-4fbc-aa38-45d07d4e05e5.png',
                'menu_name' => 'Mie Tek-Tek',
                'menu_category_id' => 1,
                'menu_price' => 15000.00,
            ],
            [
                'menu_image' => 'img/u9aKAqg5.png',
                'menu_name' => 'Indomie Rebus',
                'menu_category_id' => 1,
                'menu_price' => 11000.00,
            ],
            [
                'menu_name' => 'Indomie Goreng',
                'menu_category_id' => 1,
                'menu_price' => 11000.00,
            ],
            [
                'menu_name' => 'Nasi Putih',
                'menu_category_id' => 1,
                'menu_price' => 5000.00,
            ],
            [
                'menu_name' => 'Pizza Mie',
                'menu_category_id' => 1,
                'menu_price' => 14000.00,
            ],
            [
                'menu_name' => 'Roti Bakar',
                'menu_category_id' => 1,
                'menu_price' => 12000.00,
            ],
            [
                'menu_name' => 'Pisang Bakar Cokelat Keju',
                'menu_category_id' => 1,
                'menu_price' => 15000.00,
            ],
            [
                'menu_image' => 'img/6e72fb42-25cd-4637-b731-9b9f816ac9d5.png',
                'menu_name' => 'Kentang Goreng',
                'menu_category_id' => 1,
                'menu_price' => 15000.00,
            ],
            [
                'menu_name' => 'Singkong Goreng',
                'menu_category_id' => 1,
                'menu_price' => 15000.00,
            ],
            [
                'menu_name' => 'Kopi Tubruk',
                'menu_category_id' => 2,
                'menu_price' => 15000.00,
            ],
            [
                'menu_name' => 'Vietnam Drip',
                'menu_category_id' => 2,
                'menu_price' => 18000.00,
            ],
            [
                'menu_name' => 'V60',
                'menu_category_id' => 2,
                'menu_price' => 15000.00,
            ],
            [
                'menu_name' => 'Espresso',
                'menu_category_id' => 2,
                'menu_price' => 15000.00,
            ],
            [
                'menu_name' => 'Americano',
                'menu_category_id' => 2,
                'menu_price' => 15000.00,
            ],
            [
                'menu_name' => 'Hot Chocolate',
                'menu_category_id' => 2,
                'menu_price' => 15000.00,
            ],
            [
                'menu_name' => 'Ice Chocolate',
                'menu_category_id' => 2,
                'menu_price' => 20000.00,
            ],
            [
                'menu_name' => 'Mc Flurry Oreo',
                'menu_category_id' => 2,
                'menu_price' => 20000.00,
            ],
            [
                'menu_name' => 'Affogato',
                'menu_category_id' => 2,
                'menu_price' => 20000.00,
            ],
            [
                'menu_name' => 'Es Kopi Susu Gula Aren',
                'menu_category_id' => 2,
                'menu_price' => 20000.00,
            ],
            [
                'menu_name' => 'Kapal Api',
                'menu_category_id' => 2,
                'menu_price' => 6000.00,
            ],
            [
                'menu_name' => 'Kopi Liong',
                'menu_category_id' => 2,
                'menu_price' => 7000.00,
            ],
            [
                'menu_name' => 'Aqua Botol 600Ml',
                'menu_category_id' => 2,
                'menu_price' => 6000.00,
            ],
            [
                'menu_name' => 'Bandrek',
                'menu_category_id' => 2,
                'menu_price' => 6000.00,
            ],
            [
                'menu_image' => 'img/9ebd2457-67d8-4cc2-bdf3-0c6d0d0f68f6.png',
                'menu_name' => 'Teh Manis',
                'menu_category_id' => 2,
                'menu_price' => 6000.00,
            ],
            [
                'menu_name' => 'Coffee Mix',
                'menu_category_id' => 2,
                'menu_price' => 7000.00,
            ],
            [
                'menu_name' => 'Luwak White Coffee',
                'menu_category_id' => 2,
                'menu_price' => 7000.00,
            ],
            [
                'menu_name' => 'Toracino',
                'menu_category_id' => 2,
                'menu_price' => 8000.00,
            ],
            [
                'menu_name' => 'Ovaltine',
                'menu_category_id' => 2,
                'menu_price' => 8000.00,
            ],
            [
                'menu_name' => 'Milo',
                'menu_category_id' => 2,
                'menu_price' => 8000.00,
            ],
            [
                'menu_name' => 'Teh Tarik',
                'menu_category_id' => 2,
                'menu_price' => 8000.00,
            ],
            [
                'menu_name' => 'Lemon Tea',
                'menu_category_id' => 2,
                'menu_price' => 7000.00,
            ],
            [
                'menu_name' => 'Jeruk Panas',
                'menu_category_id' => 2,
                'menu_price' => 7000.00,
            ],
            [
                'menu_name' => 'Extra Joss Es',
                'menu_category_id' => 2,
                'menu_price' => 8000.00,
            ],
            [
                'menu_name' => 'Kukubima Es',
                'menu_category_id' => 2,
                'menu_price' => 8000.00,
            ],
            [
                'menu_name' => 'Susu',
                'menu_category_id' => 2,
                'menu_price' => 8000.00,
            ],
            [
                'menu_name' => 'Minuman Soda Es',
                'menu_category_id' => 2,
                'menu_price' => 9000.00,
            ],
            [
                'menu_name' => 'Teh Susu',
                'menu_category_id' => 2,
                'menu_price' => 9000.00,
            ],
            [
                'menu_name' => 'Jahe Panas',
                'menu_category_id' => 2,
                'menu_price' => 14000.00,
            ],
            [
                'menu_name' => 'Teh Jahe',
                'menu_category_id' => 2,
                'menu_price' => 15000.00,
            ],
        ];        
        foreach ($Menu as $menu) {
            Menu::create($menu);
        }
    }
}
