<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

            $this->call(UsersSeeder::class);
            $this->call(PostSeeder::class);
            $this->call(CommentsSeeder::class);
            $this->call(TagsSeeder::class);
            $this->call(Post_tagSeeder::class);
            $this->call(LikesSeeder::class);
            $this->call(FollowsSeeder::class);
        
    }
}