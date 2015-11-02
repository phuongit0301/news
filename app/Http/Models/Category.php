<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name','slug', 'description', 'sort'];

    protected $guarded = ['id', '_token'];

    public function user()
    {
        return $this->belongsToMany('App\Models\User', 'user_category')->withTimestamps();
    }
}
