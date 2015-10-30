<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

use Illuminate\Support\Str;

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10)
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    $title = $faker->sentence();
    $slug = Str::slug($title);
    return [
        'title'       => $title,
        'slug'        => $slug,
        'content'     => $faker->paragraph(3),
        'published_at' => Carbon\Carbon::now(),
        'categorie_id' => rand(1, 2)
    ];
});

$factory->define(App\Tag::class, function (Faker\Generator $faker) {
    return [
        't_name' => $faker->word(1)
    ];
});