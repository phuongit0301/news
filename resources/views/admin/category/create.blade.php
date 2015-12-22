@extends('layouts.admin.index')

@section('content')

    <h1>Create Category</h1>

    {!! Form::open(['route' => 'admin.categories.store', 'method' => 'POST']) !!}
        @include('admin.category._form', [$label='Create'])
    {!! Form::close() !!}

@endsection