<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Title;
use App\User;

class Post extends Model
{
    protected $fillable = ['content','user_id','id_title','name'];
    protected $table ='posts';
    public function title()
   {
       return $this->belongsTo('App\Model\Title','id_title','id');
   }
   public function user()
   {
   	return $this->belongsTo('App\User','user_id','id');
   }
}
