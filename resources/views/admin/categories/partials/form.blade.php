<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter the category name']) !!}
    @if(Route::is('admin.categories.edit') )
        <span class="text-muted text-sm">Courses registered with this category: {{ count($category_courses) }}</span>
    @endif
</div>

@error('name')
    <span class="text-danger">{{ $message }}</span>
@enderror

<!-- course-slug -->
<div class="form-group">
    {!! Form::label( 'slug', Lang::get('Slug') ) !!}
    {!! Form::text('slug', null, ['readonly' => 'readonly', 'class' => 'form-control' ]) !!}
</div>
@error('slug')
    <span class="text-danger">{{ $message }}</span>
@enderror

 <!-- icon -->
 <div class="form-group">
    {!! Form::label( 'icon', Lang::get('Icono') ) !!}
    {!! Form::text('icon', null, ['class' => 'form-control', 'placeholder' => 'Enter the icon class from Font Awesome' ]) !!}
</div>
@error('icon')
    <span class="text-danger">{{ $message }}</span>
@enderror

<!-- course-slug -->
<div class="form-group">
    {!! Form::hidden('modality_id', null, ['class' => 'form-control' ]) !!}
</div>


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
        <h2 class="card-title"><strong>Subcategories or Themes</strong></h2>
        <p class="card-text">Select the topics that will be related to this category.</p>
      </div>
      <div class="d-flex flex-wrap justify-content-start p-4">
        @foreach ( $topics as $topic )
            <div class="col col-md-4 p-2">
                <label>
                    {!! Form::checkbox('topics[]', $topic->id, null, ['class' => 'mr-1']) !!}
                    {{ $topic->name }}
                </label>
            </div>
        @endforeach
        </div>
</div>
