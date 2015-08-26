<?php

namespace App\ModelsFiles;

use Illuminate\Database\Eloquent\Model;

class Municipalitie extends Model
{
    //

	protected $table = 'municipalities';
	
    public function file()
    {
        return $this->belongsTo('App\ModelsFiles\File', 'id', 'town');
    }
}
