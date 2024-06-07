<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
{
        DB::table('tags')->insert([
            [
                'name' => 'タグ',
            ],
            [
                'name' => 'タグ2'
            ],
        ]);
}

}
