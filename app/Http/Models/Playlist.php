<?php

namespace App\App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table = 'playlists';

    protected $guarded = ['id', 'token'];

    public function artists()
    {
    	return $this->belongsToMany(Artist::class);
    }

    public function albums()
    {
    	return $this->belongsToMany(Album::class);
    }

    public function tracks()
    {
    	return $this->belongsToMany(Track::class);
    }
}
