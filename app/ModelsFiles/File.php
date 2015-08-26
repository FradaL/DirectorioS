<?php

namespace App\ModelsFiles;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //
    protected $table = 'files';

    protected $fillable = ['snip', 'town', 'year', 'numberbag', 'locker','user'];

   

    public function bags()
    {
        return $this->hasOne('App\ModelsFiles\Bag', 'id', 'numberbag' );
    }

    public function lockers()
    {
        return $this->hasOne('App\ModelsFiles\Locker', 'id', 'locker');
    }

    public function municipalitie()
    {
        return $this->hasOne('App\ModelsFiles\Municipalitie', 'id', 'town');
    }

    public function years()
    {
        return $this->hasOne('App\ModelsFiles\Year', 'id', 'year');
    }

    public function scopeSearchSnip($query, $snip)
    {    
        if (trim($snip) != "")
        {
                return $query->where('snip', $snip);
         }       
    }

    public function setUserAttribute($value)
    {

        return $this->attributes['user'] = \Auth::user()->id;

    }
}
