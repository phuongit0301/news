@extends('layouts.admin.index')

@section('content')

    <h1>Create Category</h1>

    {!! Form::open(['route' => 'admin.posts.store', 'method' => 'POST']) !!}
        @include('admin.post._form', [$label='Create'])
    {!! Form::close() !!}

@endsection