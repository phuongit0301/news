<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'files';

    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
