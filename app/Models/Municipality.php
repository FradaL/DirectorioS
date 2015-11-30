<?php

namespace App\Municipality;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    //
    protected $table = 'municipalities';

    public function directories()
    {
        return $this->belongsTo('App\Models\Directory', 'id', 'id');
    }
}





