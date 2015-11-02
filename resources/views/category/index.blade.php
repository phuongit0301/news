@extends('layouts.admin.index')

@section('content')

    <h1>List Categories</h1>

    {!! link_to_route('admin.categories.create', 'Add a new one', [], ['class' => 'btn btn-primary']) !!}
    <table class="table">
        <tr>
            <th>TT</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Description</th>
            <th>Date Create</th>
            <th></th>
        </tr>
        <?php $i = 1; ?>
        @foreach($listCategories as $listCategory)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $listCategory->name }}</td>
                <td>{{ $listCategory->slug }}</td>
                <td>{{ $listCategory->description }}</td>
                <td>{{ $listCategory->created_at }}</td>
                <td>
                    {!! link_to_route('admin.categories.show', 'View', [$listCategory->id], ['class' => 'btn btn-info']) !!}
                    {!! link_to_route('admin.categories.edit', 'Edit', [$listCategory->id], ['class' => 'btn btn-primary']) !!}
                    {!! Form::open(['method' => 'DELETE', 'route' => ['admin.categories.destroy', $listCategory->id]]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        <?php $i++; ?>
        @endforeach
    </table>

@endsection