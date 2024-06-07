<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
                'name' => 'admin',
                'email' => 'admin',
                'email_verified_at' => null,
                'password' => Hash::make('admin'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'introduction' => '自己紹介',
                'career' => '経歴',
                'profile_photo' => null,
                'like_count' => '123',
                'follow_count' => '2',
         ]);
    }
}
