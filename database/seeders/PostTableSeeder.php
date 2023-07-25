<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post;
use App\Models\User;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post :: factory() -> count(100) -> make();

        foreach ($posts as $post) {

            $user = User :: inRandomOrder() -> first();

            $post -> user_id = $user -> id;
            $post -> save();
        }
    }
}
