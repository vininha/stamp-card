<?php

namespace Database\Seeders;

use App\Models\Store\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $user1 = User::create([
            'name' => 'Lojinha Maneira',
            'password' => 'password',
            'email' => 'shop1@example.com',
            'address' => '1 Chome-2-1 Hirosawa, Chuo Ward, Hamamatsu, Shizuoka 432-8013',
            'location' => 'https://maps.app.goo.gl/p9nTAWbNobLRBeXY8',
        ]);
        $user2 = User::create([
            'name' => 'Mercearia da Maria',
            'password' => 'password',
            'email' => 'shop2@example.com',
            'address' => '39 Mikumicho, Chuo Ward, Hamamatsu, Shizuoka 432-8017',
            'location' => 'https://maps.app.goo.gl/cVzVkBfkBKbv4VDcA',
        ]);
        $user3 = User::create([
            'name' => 'Pet Shop do Cachorrão',
            'password' => 'password',
            'email' => 'shop3@example.com',
            'address' => '〒430-0926 Shizuoka, Hamamatsu, Chuo Ward, Sunayamacho, 1168番地',
            'location' => 'https://maps.app.goo.gl/7mBSgpVKRgsDyqbf6',
        ]);
        $user4 = User::create([
            'name' => 'Choperia Aloha Chop',
            'password' => 'password',
            'email' => 'shop4@example.com',
            'address' => '2 Chome-1-1 Central, Chuo Ward, Hamamatsu, Shizuoka 430-0929',
            'location' => 'https://maps.app.goo.gl/EEi7DcsXZN9uKhZ4A',
        ]);
        $user1->rule()->create([
            'store_id' => $user1->id,
            'max_stamps' => 10,
            'discount_amount' => 500,
            'discount_type' => 'cash',
            'expiration_in_months' => 3
        ]);
        $user2->rule()->create([
            'store_id' => $user2->id,
            'max_stamps' => 20,
            'discount_amount' => 10,
            'discount_type' => 'percentage',
            'expiration_in_months' => 12
        ]);
        $user3->rule()->create([
            'store_id' => $user3->id,
            'max_stamps' => 15,
            'discount_amount' => 1200,
            'discount_type' => 'cash',
            'expiration_in_months' => 6
        ]);
        $user4->rule()->create([
            'store_id' => $user4->id,
            'max_stamps' => 20,
            'discount_amount' => 20,
            'discount_type' => 'percentage',
            'expiration_in_months' => 1
        ]);
    }
}
