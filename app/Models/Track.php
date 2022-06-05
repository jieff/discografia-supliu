<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $fillable = ['tname', 'duration'];
    
    public function album()
    {
        return $this->belongsToMany(Album::class, 'album_track');
    }

    
}
