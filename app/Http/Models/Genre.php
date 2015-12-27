<?php

namespace App\App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Album;

class Genre extends Model
{
    protected $table = 'genres';

    protected $fillable = ['name'];

    protected $guarded = ['id', 'token'];

    public function albums()
    {
    	return $this->hasMany(Album::class);
    }
}
