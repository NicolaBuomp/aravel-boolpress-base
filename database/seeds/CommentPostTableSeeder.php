<?php

use Illuminate\Database\Seeder;
use App\Comment_post;
use App\Post;
use Faker\Generator as Faker;

class CommentPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $comment = 20;
        $posts = Post::all();

        for ($i = 0; $i < $comment; $i++){
            $newComment = new Comment_post();

            $newComment-> post_id = $posts->random()->id;
            $newComment-> name = $faker->name();
            $newComment-> comment = $faker->text(50);

            $newComment->save();
        }
    }
}
