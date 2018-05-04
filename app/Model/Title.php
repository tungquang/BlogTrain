<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Post;

class Title extends Model
{
    protected $fillable = [
        'name', 'sorttitle'
    ];
    protected $table = 'titles';
     public function post()
   {
       return $this->hasMany('App\Model\Post','id_title','id');
   }
    
}
