@extends('layouts.admin.index')

@section('content')
    <h1>Show Categories</h1>
    <table class="table">
        <tr>
            <th>Name</th>
            <td>{{ $category->name }}</td>
        </tr>
        <tr>
            <th>Slug</th>
            <td>{{ $category->slug }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ $category->description }}</td>
        </tr>
        <tr>
            <th>Date Create</th>
            <td>{{ $category->created_at }}</td>
        </tr>
        <tr>
            <th></th>
            <td>{!! link_to_route('admin.categories.show', 'Edit', [$category->id], ['class' => 'btn btn-primary']) !!}</td>
        </tr>
    </table>

@endsection