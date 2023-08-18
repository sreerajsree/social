<div class="form-group">
    {!! Form::label('title', 'Name') !!}
    {!! Form::text('title', null, [
        'class' => 'form-control',
        'placeholder' => 'Enter the name of the company or institution',
    ]) !!}
</div>
@error('title')
    <span class="text-danger">{{ $message }}</span>
@enderror

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
</div>

<div class="form-group">
    {!! Form::label('content', 'Company Details') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Enter company details']) !!}
</div>
@error('content')
    <span class="text-danger">{{ $message }}</span>
@enderror

<hr>

<h3 class="pt-4">Link</h3>
<p class="text-muted">If you want you can add a link to display it along with the banner.</p>
<div class="form-group">
    {!! Form::label('link', 'URL') !!}
    {!! Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'link url']) !!}
</div>
@error('link')
    <span class="text-danger">{{ $message }}</span>
@enderror

<hr>
<h3 class="pt-4">Image</h3>
<!-- partner logo -->
<div class="row py-5">
    <div class="col-sm-12 col-md-6 text-center">
        <figure>
            @isset($partner->image)
                <img id="picture" class="img-fluid" src="{{ Storage::url($partner->image->url) }}" alt=""
                    style="max-height: 125px;">
            @else
                <img id="picture" class="img-fluid" src="{{ asset('images/courses/logo-cloud.png') }}" alt=""
                    style="max-height: 1366px;">
            @endisset
        </figure>
    </div>
    <div class="col-sm-12 col-md-6">
        <p class="mb-3">
            Select an image to display as the logo of the institution or company with which you have an agreement
            or association.
            <br><small>Recommended size: 1366x400 pixels</small>
        </p>
        {!! Form::file('file', ['class' => 'form-input', 'id' => 'file']) !!}
    </div>
</div>

{{-- <!-- partner logo -->
            <div class="row py-5">
                <div class="col-sm-12 col-md-6 text-center">
                    <figure>
                        @isset($partner->image)
                            <img id="picture" class="img-fluid" src="{{ Storage::url($partner->image->url) }}" alt="" style="max-height: 125px;">
                        @else
                            <img id="picture" class="img-fluid" src="{{ asset('images/courses/logo-cloud.png') }}" alt="" style="max-height: 125px;" >
                        @endisset
                    </figure>
                </div>
                <div class="col-sm-12 col-md-6">
                    <p class="mb-3">
                        Selecciona una imagen para mostrar como logo de la institución o empresa con la que se tiene algún convenio o asociación.
                        <br><small>Tamaño recomendado: 200x155 pixeles</small>
                    </p>
                    {!! Form::file('file', ['class' => 'form-input', 'id' => 'file', 'accept' => 'image/*']) !!}
                </div>
            </div>
            <!-- --> --}}

<div class="form-group">
    {!! Form::label('status', 'State') !!}
    {!! Form::select('status', [1 => 'Disguise', 2 => 'Show'], null, ['class' => 'form-control input-lg mt-1']) !!}
</div>
@error('status')
    <span class="text-danger">{{ $message }}</span>
@enderror
