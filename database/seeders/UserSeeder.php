<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Ib',
            'last_name' => 'Aimak',
            'email' => 'ibgirl@gmail.com',
            'phone_number' => '0791294829',
            'address' => '133 Bells Lane',
            'password' => '123456',
        ]);

        User::create([
            'first_name' => 'Rose',
            'last_name' => 'Water',
            'email' => 'rosew@gmail.com',
            'phone_number' => '077737300',
            'address' => '12 Jingle bells',
            'password' => '123456',
        ]);

        User::create([
            'first_name' => 'Joke',
            'last_name' => 'Silva',
            'email' => 'jokes@gmail.com',
            'phone_number' => '0799994829',
            'address' => '135 Bells Lane',
            'password' => '123456',
        ]);
    }
}
