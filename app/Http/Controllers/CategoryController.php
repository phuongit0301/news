<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Http\Controllers\Controller;
use App\Http\Models\Category;
use App\Http\Models\User;
use Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($slug)
    {
        $listCategories = Category::orderBy('sort')->get();
        return view('category.index', compact('listCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = new Category();
        $listCategories = Category::lists('name', 'id')->prepend('Please Select Category');
        return view('category.create', compact('category', 'listCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        try {
            User::find(Auth::user()->id)->category()->create($request->all());
        } catch (Exception $e) {
            echo 'Error Add Category: '. $e->getMessage();
        }
        return redirect('admin/categories')->with('message','Category successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $listCategories = Category::where('id', '<>', $category->id)->lists('name', 'id')->prepend('Please Select Category');
        return view('category.edit', compact('category', 'listCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        try {
            $input = $request->except(['_method', '_token']);
            Category::findOrFail($id)->update($input);
        } catch (Exception $e) {
            echo 'Error Update Category: '. $e->getMessage();
        }
        return redirect('admin/categories')->with('message', 'Category successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('admin/categories')->with('message', 'Category successfully delete!');
    }
}
