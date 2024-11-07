<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu_Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Menu_Category = [
            [
                'category_name' => 'Makanan',
            ],
            [
                'category_name' => 'Minuman',
            ],
            [
                'category_name' => 'Extra',
            ],
        ];        

        foreach ($Menu_Category as $category) {
            Menu_Category::create($category);
        }
    }
}
