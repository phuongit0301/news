<?php

namespace App\App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Genre;
use App\Http\Models\Artist;
use App\Http\Models\Track;

class Album extends Model
{
    protected $table = 'albums';

    protected $fillable = ['name', 'year', 'artist_id', 'genre_id'];

    protected $guarded = ['id', 'token'];

    public function genres()
    {
    	$this->belongsToMany(Genre::class);
    }

    public function artists()
    {
    	$this->belongsToMany(Artist::class);
    }

    public function tracks()
    {
    	return $this->hasMany(Track::class);
    }

    public function playlists()
    {
    	return $this->hasMany(Playlist::class);
    }
}
