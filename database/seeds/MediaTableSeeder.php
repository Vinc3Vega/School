<?php
use Illuminate\Database\Seeder;
class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medias')->insert(
            [
                [
                    'm_filename' => 'img/1.jpg',
                    'm_size' => '50',
                    'm_type' => 'jpeg',
                    'post_id' => '1'
                ],
                [
                    'm_filename' => 'img/2.jpg',
                    'm_size' => '50',
                    'm_type' => 'jpeg',
                    'post_id' => '2'
                ],
                [
                    'm_filename' => 'img/3.jpg',
                    'm_size' => '50',
                    'm_type' => 'jpeg',
                    'post_id' => '3'
                ],
                [
                    'm_filename' => 'img/4.jpg',
                    'm_size' => '50',
                    'm_type' => 'jpeg',
                    'post_id' => '4'
                ],
                [
                    'm_filename' => 'img/5.jpg',
                    'm_size' => '50',
                    'm_type' => 'jpeg',
                    'post_id' => '5'
                ],
                [
                    'm_filename' => 'img/6.jpg',
                    'm_size' => '50',
                    'm_type' => 'jpeg',
                    'post_id' => '6'
                ],
                [
                    'm_filename' => 'img/7.jpg',
                    'm_size' => '50',
                    'm_type' => 'jpeg',
                    'post_id' => '7'
                ],
                [
                    'm_filename' => 'img/8.jpg',
                    'm_size' => '50',
                    'm_type' => 'jpeg',
                    'post_id' => '8'
                ],
                [
                    'm_filename' => 'img/9.jpg',
                    'm_size' => '50',
                    'm_type' => 'jpeg',
                    'post_id' => '9'
                ],
                [
                    'm_filename' => 'img/10.jpg',
                    'm_size' => '50',
                    'm_type' => 'jpeg',
                    'post_id' => '10'
                ],
                [
                    'm_filename' => 'img/11.jpg',
                    'm_size' => '50',
                    'm_type' => 'jpeg',
                    'post_id' => '1'
                ],
                [
                    'm_filename' => 'img/12.jpg',
                    'm_size' => '50',
                    'm_type' => 'jpeg',
                    'post_id' => '2'
                ],
                [
                    'm_filename' => 'img/13.jpg',
                    'm_size' => '50',
                    'm_type' => 'jpeg',
                    'post_id' => '3'
                ],
                [
                    'm_filename' => 'img/14.jpg',
                    'm_size' => '50',
                    'm_type' => 'jpeg',
                    'post_id' => '4'
                ],
                [
                    'm_filename' => 'img/15.jpg',
                    'm_size' => '50',
                    'm_type' => 'jpeg',
                    'post_id' => '5'
                ],
                [
                    'm_filename' => 'img/16.jpg',
                    'm_size' => '50',
                    'm_type' => 'jpeg',
                    'post_id' => '6'
                ],
                [
                    'm_filename' => 'img/17.jpg',
                    'm_size' => '50',
                    'm_type' => 'jpeg',
                    'post_id' => '7'
                ],
                [
                    'm_filename' => 'img/18.jpg',
                    'm_size' => '50',
                    'm_type' => 'jpeg',
                    'post_id' => '8'
                ],
                [
                    'm_filename' => 'img/19.jpg',
                    'm_size' => '50',
                    'm_type' => 'jpeg',
                    'post_id' => '9'
                ],
                [
                    'm_filename' => 'img/20.jpg',
                    'm_size' => '50',
                    'm_type' => 'jpeg',
                    'post_id' => '20'
                ],
            ]
        );
    }
}