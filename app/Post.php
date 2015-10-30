<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{

    protected $table = 'posts';
    protected $fillable = ['title', 'slug', 'excerpt', 'content', 'published_at', 'categorie_id'];
//    protected $hidden = ['status', 'user_id'];

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function users(){
        return $this->belongsTo('App\User');
    }

    public function categories(){
        return $this->belongsTo('App\Categorie');
    }

    public function medias(){
        return $this->hasMany('App\Media');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }
}