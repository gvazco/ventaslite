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
    User::create([
        'name' => 'Gustavo Vazco',
        'phone' => '5581853675',
        'email' => 'gustavovazco@hotmail.com',
        'profile' => 'ADMIN',
        'status' => 'ACTIVE',
        'password' => bcrypt('123')
      ]);

    User::create([
        'name' => 'Betzael Vazco',
        'phone' => '5523569837',
        'email' => 'gbvazquez@gmail.com',
        'profile' => 'EMPLOYEE',
        'status' => 'ACTIVE',
        'password' => bcrypt('123')
      ]);
    }
}
