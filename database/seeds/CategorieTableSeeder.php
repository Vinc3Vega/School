<?php
use Illuminate\Database\Seeder;
class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                [
                    'cat_title' => 'Algorithmie',
                    'cat_description' => 'Tout ce qui touche à l\'algo'
                ],
                [
                    'cat_title' => 'Programmation',
                    'cat_description' => 'Tout ce qui touche à la programmation'
                ],
            ]
        );
    }
}