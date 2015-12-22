<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CategoryRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $idCategory = $this->route('categories');
        /*return [
            'name' => 'required|min:2',
            'slug' => 'required|unique:categories,slug,'.$request->route()->parameter('id'),
            'description' => 'min:5'
        ];*/
        return [
            'name' => 'required|min:2',
            'slug' => 'required|unique:categories,slug,' . $idCategory,
            'description' => 'min:5',
            'sort' => 'numeric'
        ];
    }
}
