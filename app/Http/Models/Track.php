<?php

namespace App\App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Lyric;
use App\Http\Models\Album;

class Track extends Model
{
    protected $table = 'tracks';

    protected $fillable = ['name', 'playtime', 'lyric_id', 'album_id'];

    protected $guarded = ['id', 'token'];

    public function lyrics()
    {
    	return $this->belongsTo(Lyric::class);
    }

    public function albums()
    {
    	return $this->belongsTo(Album::class);
    }

    public function playlists()
    {
    	return $this->hasMany(Playlist::class);
    }
}
