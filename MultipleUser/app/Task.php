<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
   //table name
    protected $table='tasks';
    //primary key
    protected $primaryKey ='id';
    //timestamps
    public $timestamps =true;
}
