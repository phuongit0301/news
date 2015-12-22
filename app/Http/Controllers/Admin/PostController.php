<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\Post;
use App\Http\Models\User;
use App\Library\HtmlDom;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*$htmlDom = new HtmlDom();
        $html = $htmlDom->file_get_html('http://vnexpress.net');
        Post::getPostFromWebsite($htmlDom, $html);*/
        $post = new Post();
        return view('admin.post.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            User::find(Auth::user()->id)->post()->create($request->all());
        } catch (Exception $e) {
            echo 'Error Add Post: '. $e->getMessage();
        }
        return redirect('admin/posts')->with('message','Post successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $nameUser = User::where('id', $post->user_id)->lists('first_name');
        return view('admin.post.edit', compact('post', 'nameUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $input = $request->except(['_method', '_token']);
            Post::findOrFail($id)->update($input);
        } catch (Exception $e) {
            echo 'Error Update Category: '. $e->getMessage();
        }
        return redirect('admin/post')->with('message', 'Post successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
