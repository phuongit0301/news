<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsToMany('App\Models\User', 'user_category');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(\Illuminate\Http\Request $request)
    {
        return [
            'name' => 'required|min:2',
            'slug' => 'required|unique:categories,slug,'.$request->route()->parameter('id'),
            'description' => 'min:5'
        ];
    }
}
