<div class="form-group">
    {!! Form::label('category_id', 'Parent Category') !!}
    {!! Form::select('category_id', $category_list, null, ['class' => 'form-control']) !!}
</div>

@error('category_id')
    <span class="text-danger">{{ $message }}</span>
@enderror

<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, [
        'class' => 'form-control',
        'placeholder' => 'Enter the name of the subcategory',
    ]) !!}
</div>

@error('name')
    <span class="text-danger">{{ $message }}</span>
@enderror

<!-- course-slug -->
<div class="form-group">
    {!! Form::label('slug', Lang::get('Slug')) !!}
    {!! Form::text('slug', null, ['readonly' => 'readonly', 'class' => 'form-control']) !!}
</div>
@error('slug')
    <span class="text-danger">{{ $message }}</span>
@enderror

<!-- icon -->
<div class="form-group">
    {!! Form::label('icon', Lang::get('Icon')) !!}
    {!! Form::text('icon', null, [
        'class' => 'form-control',
        'placeholder' => 'Enter the icon class from FontAwesome',
    ]) !!}
</div>
@error('icon')
    <span class="text-danger">{{ $message }}</span>
@enderror

<!-- course-slug -->
{{-- <div class="form-group">
    {!! Form::hidden('category_id', null, ['class' => 'form-control' ]) !!}
</div> --}}


<hr class="mt-8">


{{-- @error('permissions')
    <div>
        <small class="text-danger">
            <strong>{{ $message }}</strong>
        </small>
    </div>
@enderror --}}

<div class="card">
    <div class="card-body">
        <h2 class="card-title"><strong>Tags</strong></h2>
        <p class="card-text">Select the tags that will be related to this subcategory.</p>
    </div>
    <div class="d-flex flex-wrap justify-content-start p-4">
        @foreach ($tags as $tag)
            <div class="col col-md-4 p-2">
                <label>
                    {!! Form::checkbox('tags[]', $tag->id, null, ['class' => 'mr-1']) !!}
                    {{ $tag->name }}
                </label>
            </div>
        @endforeach
    </div>
</div>
