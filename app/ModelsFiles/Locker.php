<?php

namespace App\ModelsFiles;

use Illuminate\Database\Eloquent\Model;

class Locker extends Model
{
    //
   
   protected $table = 'lockers';


    
    protected $fillable = ['locker'];

    
   public function file()
   {
   	    return $this->belongsTo('App\ModelsFiles\File', 'id', 'locker');
   }


}
