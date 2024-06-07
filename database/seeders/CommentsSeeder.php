<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
{
        DB::table('comments')->insert([
                'user_id' => '1',
                'post_id' => '1',
                'comment' => 'コメント',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
                'movie_url' => null,
                'report' => '1',
                'mention' => null,
         ]);
}

        
}
