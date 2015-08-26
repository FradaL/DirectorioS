<?php

namespace App\ModelsFiles;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    //

	protected $table = 'years';
    public function file()
    {
        return $this->belongsTo('App\ModelsFiles\File', 'id', 'year');
    }
}
