<?php
use App\Comment;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          factory(App\Post::class, 10)->create()->each(function ($post) {
                 $faker = \Faker\Factory::create(); // une instance de faker
                 for ($i = 0; $i < rand(1, 5); $i++) {
                     $comment = new Comment([
                         'c_email'        => $faker->email,
                         'c_message'      => $faker->paragraph(1),
                         'post_id'      => $post->id
                     ]);
                     $comment->c_spam = (int)(rand(1, 5) == 3);
                     $comment->save();
                 }
             });

    }
}