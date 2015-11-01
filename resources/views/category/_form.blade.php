<div class="form-group">
    {!! Form::label('Categories', 'Categories:') !!}
    {!! Form::select('parent_id', $listCategories, $category->parent_id, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Name', 'Name:') !!}
    {!! Form::text('name',$category->name,['class'=>'form-control', 'id' => 'name']) !!}
</div>
<div class="form-group">
    {!! Form::label('Slug', 'Slug:') !!}
    {!! Form::text('slug',$category->slug,['class'=>'form-control', 'id' => 'slug']) !!}
</div>
<div class="form-group">
    {!! Form::label('Description', 'Description:') !!}
    {!! Form::text('description',$category->description,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Order', 'Order:') !!}
    {!! Form::text('sort',$category->sort,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! link_to_route('admin.categories.index', 'Go back to all categories', [], ['class' => 'btn btn-info']) !!}
    {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
</div>
@section('scripts')
    <script src="{{ asset('js/global.js') }}"></script>
@endsection