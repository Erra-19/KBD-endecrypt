<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Table;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Table = [
            [
                'table_code' => 'G7D9Q',
                'table_number' => '1',
            ],
            [
                'table_code' => 'X3R1P',
                'table_number' => '2',
            ],
            [
                'table_code' => 'T6Y2L',
                'table_number' => '3',
            ],
            [
                'table_code' => 'J8W4B',
                'table_number' => '4',
            ],
            [
                'table_code' => 'M2N7S',
                'table_number' => '5',
            ],
            [
                'table_code' => 'R9F5T',
                'table_number' => '6',
            ],
            [
                'table_code' => 'Z3K1J',
                'table_number' => '7',
            ],
            [
                'table_code' => 'A5H9L',
                'table_number' => '8',
            ],
            [
                'table_code' => 'D1C8Q',
                'table_number' => '9',
            ],
            [
                'table_code' => 'W2M6R',
                'table_number' => '10',
            ],
            [
                'table_code' => 'B7P3N',
                'table_number' => '11',
            ],
            [
                'table_code' => 'K4T9F',
                'table_number' => '12',
            ],
            [
                'table_code' => 'Y6L2W',
                'table_number' => '13',
            ],
            [
                'table_code' => 'N1V5J',
                'table_number' => '14',
            ],
            [
                'table_code' => 'L8Q4P',
                'table_number' => '15',
            ],
        ];        

        foreach ($Table as $table) {
            Table::create($table);
        }
    }
}
