<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Directory extends Model
{
    //
    protected $table = 'directories';

    public function municipalities()
    {
        return $this->hasOne('App\Models\Municipality', 'id', 'id' );
    }



    public function getNameAttribute()
    {
    	return ($this->first_name . $this->second_name . $this->first_surname . $this->second_surname);
    }

}
