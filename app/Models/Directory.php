<?php

namespace App\ModelDirectorio;

use Illuminate\Database\Eloquent\Model;

class Directory extends Model
{
    //
    protected $table = 'directories';

    public function municipalities()
    {
        return $this->hasOne('App\Models\Municipality', 'id', 'id' );
    }


}
