<div class="form-group">
    {!! Form::label('Title', 'Title:') !!}
    {!! Form::text('title', $post->title, ['class' => 'form-control', 'id' => 'name']) !!}
</div>
<div class="form-group">
    {!! Form::label('Content', 'Content:') !!}
    {!! Form::textarea('content', $post->content, ['class' => 'form-control', 'id' => 'content']) !!}
</div>
<div class="form-group">
    {!! Form::label('Slug', 'Slug:') !!}
    {!! Form::text('slug', $post->slug, ['class' => 'form-control', 'id' => 'slug']) !!}
</div>
<div class="form-group">
    {!! Form::label('Status', 'Status:') !!}
    {!! Form::checkbox('status', $post->status, true, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! link_to_route('admin.posts.index', 'Go Back', [], ['class' => 'btn btn-info']) !!}
    {!! Form::submit($label, ['class' => 'btn btn-primary']) !!}
</div>
@section('scripts')
    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'content', {
            filebrowserBrowseUrl: "{{ route('files.list') }}",
            filebrowserImageBrowseUrl: "{{ route('files.list', ['type' => 'images']) }}",
            filebrowserUploadUrl: "{{ route('files.upload', ['_token' => csrf_token()]) }}",
            filebrowserImageUploadUrl: "{{ route('files.upload', ['_token' => csrf_token(), 'type' => 'images']) }}",
            extraPlugins: "imageuploader"
        });
    </script>
@endsection