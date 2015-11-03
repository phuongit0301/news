@extends('layouts.admin.index')

@section('content')

    <h1>Edit Category</h1>

    {!! Form::model($category, ['route' => ['admin.categories.update', $category->id], 'method' => 'PATCH']) !!}
        @include('admin.category._form', [$label='Update'])
    {!! Form::close() !!}

@endsection