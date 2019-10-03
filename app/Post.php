<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    public $primary_key = 'id';
    public $timestamps = true;

    // Buat relationship
    public function user(){
        return $this->belongsTo('App\User');
    }
}
