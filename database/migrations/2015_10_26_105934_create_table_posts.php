<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255);
            $table->string('slug',255)->unique();
            $table->string('excerpt',255);
            $table->longText('content');
            $table->dateTime('published_at');
            $table->enum('status', ['publié', 'dé-publié', 'supprimé']);
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('categorie_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
