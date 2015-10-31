@extends('layouts.admin.index')

@section('content')

    <h1>Create Category</h1>

    {!! Form::open(['routes' => 'category.store', 'method' => 'POST']) !!}
        <div class="form-group">
            {!! Form::label('Categories', 'Categories:') !!}
            {!! Form::select('parent_id', $listCategories, null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Name', 'Name:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Slug', 'Slug:') !!}
            {!! Form::text('slug',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Description', 'Description:') !!}
            {!! Form::text('description',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}

@endsection