<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $User = [
            [
                'name'=>'Errico',
                'phone'=>'081210015352',
                'role'=>'SuperAdmin',
                'status'=>'1',
                'email'=>'erra1904@gmail.com',
                'password'=>bcrypt('SAdmin1234'),
            ],
            [
                'name'=>'Abdan',
                'phone'=>'085171070702',
                'role'=>'Admin',
                'status'=>'1',
                'email'=>'mikotola19@gmail.com',
                'password'=>bcrypt('Admin1234'),
            ],
            [
                'name'=>'Nindy',
                'phone'=>'085930419479',
                'role'=>'Customer',
                'status'=>'1',
                'email'=>'takakuro1305@gmail.com',
                'password'=>bcrypt('customer123'),
            ],
        ];        

        foreach ($User as $user) {
            User::create($user);
        }
    }
}
