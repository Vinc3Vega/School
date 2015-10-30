<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(PostTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(PostTagTableSeeder::class);
        $this->call(CategorieTableSeeder::class);
        $this->call(MediaTableSeeder::class);

        Model::reguard();
    }
}
