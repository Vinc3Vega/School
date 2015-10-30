<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'medias';
    protected $fillable = ['m_filename', 'm_size', 'm_type'];

    public function posts(){
        $this->belongsTo('App\Post');
    }

}
