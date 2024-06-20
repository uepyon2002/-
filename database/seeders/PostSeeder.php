<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
                'user_id' => '1',
                'title' => 'like',
                'body' => 'like',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'report' => '1',
                'movie_url' => null,
                'like_count' => '2',
                'follow_count' => '0',
         ]);
    }
}
