<?php

namespace Database\Seeders;

use App\Models\Store\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Lojinha Maneira',
            'password' => 'password',
            'email' => 'shop1@example.com',
            'address' => '1 Chome-2-1 Hirosawa, Chuo Ward, Hamamatsu, Shizuoka 432-8013',
            'location' => 'https://maps.app.goo.gl/p9nTAWbNobLRBeXY8',
        ]);
        User::create([
            'name' => 'Mercearia da Maria',
            'password' => 'password',
            'email' => 'shop2@example.com',
            'address' => '39 Mikumicho, Chuo Ward, Hamamatsu, Shizuoka 432-8017',
            'location' => 'https://maps.app.goo.gl/cVzVkBfkBKbv4VDcA',
        ]);
        User::create([
            'name' => 'Pet Shop do Cachorrão',
            'password' => 'password',
            'email' => 'shop3@example.com',
            'address' => '〒430-0926 Shizuoka, Hamamatsu, Chuo Ward, Sunayamacho, 1168番地',
            'location' => 'https://maps.app.goo.gl/7mBSgpVKRgsDyqbf6',
        ]);
        User::create([
            'name' => 'Choperia Aloha Chop',
            'password' => 'password',
            'email' => 'shop4@example.com',
            'address' => '2 Chome-1-1 Central, Chuo Ward, Hamamatsu, Shizuoka 430-0929',
            'location' => 'https://maps.app.goo.gl/EEi7DcsXZN9uKhZ4A',
        ]);
    }
}
