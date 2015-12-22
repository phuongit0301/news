@extends('layouts.admin.index')

@section('content')

    <h1>Edit Category</h1>

    {!! Form::model($post, ['route' => ['admin.posts.update', $post->id], 'method' => 'PATCH']) !!}
        @include('admin.post._form', [$label='Update'])
    {!! Form::close() !!}

@endsection