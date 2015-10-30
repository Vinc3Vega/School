<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['c_email', 'c_message', 'c_spam'];

    public function posts(){
        return $this->belongsTo('App\Post');
    }
}
