@extends('layouts.admin.index')

@section('content')

    <h1>List Posts</h1>

    {!! link_to_route('admin.posts.create', 'Add a new one', [], ['class' => 'btn btn-primary']) !!}
    <table class="table">
        <tr>
            <th>TT</th>
            <th>User</th>
            <th>Title</th>
            <th>Short Content</th>
            <th>Content</th>
            <th>Status</th>
            <th>Date Publish</th>
            <th></th>
        </tr>
        <?php $i = 1; ?>
        @foreach($posts as $post)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $post->user_id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->short_content }}</td>
                <td>{!! $post->content  !!}</td>
                <td>{{ $post->status == 1 ? 'actived' : 'closed' }}</td>
                <td>{{ $post->publisted_at }}</td>
                <td>
                    {!! link_to_route('admin.posts.show', 'View', [$post->id], ['class' => 'btn btn-info']) !!}
                    {!! link_to_route('admin.posts.edit', 'Edit', [$post->id], ['class' => 'btn btn-primary']) !!}
                    {!! Form::open(['method' => 'DELETE', 'route' => ['admin.posts.destroy', $post->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            <?php $i++; ?>
        @endforeach
    </table>

@endsection