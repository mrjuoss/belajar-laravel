<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Method Accesor (get+nama_accessor+Attribute)
    public function getInfoWaktuAttribute()
    {
      return $this->created_at->diffForHumans();
    }

    // Method Scope (scope+nama_scope)
    public function scopeDataTerakhir()
    {
      return $this->orderBy('created_at', 'asc');
    }

}
