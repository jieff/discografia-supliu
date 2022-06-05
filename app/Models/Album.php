<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Track;

class Album extends Model
{

    protected $fillable = ['name', 'year'];

    public function tracks()
    {
        return $this->hasMany(Track::class);
    }

    public function track()
    {
        return $this->hasOne(Track::class, 'album_track');
    }

    
}
