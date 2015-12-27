<?php

namespace App\App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Lyric extends Model
{
    protected $table = 'lyrics';

    protected $fillable = ['name'];

    protected $guarded = ['id', 'token'];
}
