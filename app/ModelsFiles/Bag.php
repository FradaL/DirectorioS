<?php

namespace App\ModelsFiles;

use Illuminate\Database\Eloquent\Model;

class Bag extends Model
{
    //

    protected $table = 'bags';

    protected $fillable = ['bag'];



    public function file()
    {
        return $this->belongsTo('App\ModelsFiles\File', 'id', 'numberbag');
    }
}
