<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categories';
    protected $fillable = ['cat_title', 'cat_description'];

    public function posts(){
        return $this->hasMany('App\Post');
    }
}
