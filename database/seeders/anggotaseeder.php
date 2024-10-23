<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Anggota;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Anggota::insert ([
            [
                'nama' => 'Errico',
                'no_telp' => '081210015352',
            ],
            [
                'nama' => 'Abdan',
            
                'no_telp' => '085171070702',
            ],
        ]);
    }
}