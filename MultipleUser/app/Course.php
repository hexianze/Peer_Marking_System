<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $table = 'courses';
    public $primaryKey = 'id';
    public $timestamps = true;

   public function admin(){
       return $this->belongsTo('App\Admin');
   }
}
