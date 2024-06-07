<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class FollowsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
{
        DB::table('follows')->insert([
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'follow_id' => '1',
                'follower_id' => '2',
         ]);
}

}