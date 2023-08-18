<h3 class="pt-4 mb-4">Text</h3>
<div class="form-group">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null, [
        'class' => 'form-control',
        'placeholder' => 'Enter the title of the slide',
        'autocomplete' => 'off',
    ]) !!}
</div>
@error('title')
    <span class="text-danger">{{ $message }}</span>
@enderror

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
</div>

<div class="form-row">
    <div class="form-group col-md-10">
        {!! Form::label('title_color', 'Title Color') !!}
        {!! Form::select(
            'title_color',
            [
                'text-white' => 'White',
                'text-blue' => 'Blue',
                'text-red' => 'Red',
                'text-gray' => 'Gray',
                'text-yellow' => 'Yellow',
                'text-green' => 'Green',
            ],
            null,
            ['class' => 'form-control input-lg mt-1'],
        ) !!}
    </div>
    <div class="form-group col-md-2">
        {!! Form::label('title_color_saturation', 'Saturation') !!}
        {!! Form::select(
            'title_color_saturation',
            [
                '100' => '100',
                '200' => '200',
                '300' => '300',
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
                '800' => '800',
                '900' => '900',
            ],
            null,
            ['class' => 'form-control input-lg mt-1'],
        ) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('content', 'Information') !!}
    {!! Form::textarea('content', null, [
        'class' => 'form-control',
        'placeholder' => 'Enter a short description for this slide',
    ]) !!}
</div>
@error('content')
    <span class="text-danger">{{ $message }}</span>
@enderror

<div class="form-row">
    <div class="form-group col-md-10">
        {!! Form::label('content_color', 'Content Color') !!}
        {!! Form::select(
            'content_color',
            [
                'text-white' => 'White',
                'text-blue' => 'Blue',
                'text-red' => 'Red',
                'text-gray' => 'Gray',
                'text-yellow' => 'Yellow',
                'text-green' => 'Green',
            ],
            null,
            ['class' => 'form-control input-lg mt-1'],
        ) !!}
    </div>
    <div class="form-group col-md-2">
        {!! Form::label('content_color_saturation', 'Saturation') !!}
        {!! Form::select(
            'content_color_saturation',
            [
                '100' => '100',
                '200' => '200',
                '300' => '300',
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
                '800' => '800',
                '900' => '900',
            ],
            null,
            ['class' => 'form-control input-lg mt-1'],
        ) !!}
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-8">
        {!! Form::label('background_color', 'Background color') !!}
        {!! Form::select(
            'background_color',
            [
                'text-white' => 'White',
                'text-blue' => 'Blue',
                'text-red' => 'Red',
                'text-gray' => 'Gray',
                'text-yellow' => 'Yellow',
                'text-green' => 'Green',
            ],
            null,
            ['class' => 'form-control input-lg mt-1'],
        ) !!}
    </div>
    <div class="form-group col-md-2">
        {!! Form::label('background_color_saturation', 'Saturation') !!}
        {!! Form::select(
            'background_color_saturation',
            [
                '100' => '100',
                '200' => '200',
                '300' => '300',
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
                '800' => '800',
                '900' => '900',
            ],
            null,
            ['class' => 'form-control input-lg mt-1'],
        ) !!}
    </div>
    <div class="form-group col-md-2">
        {!! Form::label('background_color_opacity', 'Opacity') !!}
        {!! Form::select(
            'background_color_opacity',
            [
                'bg-opacity-100' => '100%',
                'bg-opacity-75' => '75%',
                'bg-opacity-50' => '50%',
                'bg-opacity-25' => '25%',
                'bg-opacity-0' => '0%',
            ],
            null,
            ['class' => 'form-control input-lg mt-1'],
        ) !!}
    </div>
</div>

<hr>

<h3 class="pt-4">Link</h3>
<p class="text-muted">If you want you can add a link to display it on the slide.</p>
<div class="form-group">
    {!! Form::label('link', 'URL') !!}
    {!! Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'link url']) !!}
</div>
@error('link')
    <span class="text-danger">{{ $message }}</span>
@enderror

<div class="form-group">
    {!! Form::label('link_text', 'Text of the link') !!}
    {!! Form::text('link_text', null, [
        'class' => 'form-control',
        'placeholder' => 'Enter the text that the link will display',
    ]) !!}
</div>
@error('subtitle')
    <span class="text-danger">{{ $message }}</span>
@enderror

<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('link_type', 'link type') !!}
        {!! Form::select('link_type', ['btn' => 'Button', 'font-italic' => 'Link'], null, [
            'class' => 'form-control input-lg mt-1',
        ]) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('target', 'Open link in...') !!}
        {!! Form::select('target', ['none' => 'in the same window', '_blank' => 'a new window'], null, [
            'class' => 'form-control input-lg mt-1',
        ]) !!}
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-10">
        {!! Form::label('link_color', 'text color') !!}
        {!! Form::select(
            'link_color',
            [
                'text-white' => 'White',
                'text-blue' => 'Blue',
                'text-red' => 'Red',
                'text-gray' => 'Gray',
                'text-yellow' => 'Yellow',
                'text-green' => 'Green',
            ],
            null,
            ['class' => 'form-control input-lg mt-1'],
        ) !!}
    </div>
    <div class="form-group col-md-2">
        {!! Form::label('link_color_saturation', 'Saturation') !!}
        {!! Form::select(
            'link_color_saturation',
            [
                '100' => '100',
                '200' => '200',
                '300' => '300',
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
                '800' => '800',
                '900' => '900',
            ],
            null,
            ['class' => 'form-control input-lg mt-1'],
        ) !!}
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-10">
        {!! Form::label('link_bg_color', 'Background color') !!}
        {!! Form::select(
            'link_bg_color',
            [
                'text-white' => 'White',
                'text-blue' => 'Blue',
                'text-red' => 'Red',
                'text-gray' => 'Gray',
                'text-yellow' => 'Yellow',
                'text-green' => 'Green',
            ],
            null,
            ['class' => 'form-control input-lg mt-1'],
        ) !!}
    </div>
    <div class="form-group col-md-2">
        {!! Form::label('link_bg_color_saturation', 'Saturation') !!}
        {!! Form::select(
            'link_bg_color_saturation',
            [
                '100' => '100',
                '200' => '200',
                '300' => '300',
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
                '800' => '800',
                '900' => '900',
            ],
            null,
            ['class' => 'form-control input-lg mt-1'],
        ) !!}
    </div>
</div>

<hr>
<h3 class="pt-4">Image</h3>
<!-- partner logo -->
<div class="row py-5">
    <div class="col-sm-12 col-md-6 text-center">
        <figure>
            @isset($slide->image)
                <img id="picture" class="img-fluid" src="{{ Storage::url($slide->image->url) }}" alt=""
                    style="max-height: 125px;">
            @else
                <img id="picture" class="img-fluid" src="{{ asset('images/home/slider/default.png') }}" alt=""
                    style="max-height: 1366px;">
            @endisset
        </figure>
    </div>
    <div class="col-sm-12 col-md-6">
        <p class="mb-3">
            Select an image to display as the background on the cover carousel.
            <br><small>Recommended size: 1366x400 pixels</small>
        </p>
        {!! Form::file('file', ['class' => 'form-input', 'id' => 'file']) !!}
    </div>
</div>

<hr>
<h3 class="pt-4">Additional Information</h3>
<p class="text-muted">If necessary, you can add information such as date, time, address or telephone.</p>
<div class="form-group">
    {!! Form::label('information', 'Information') !!}
    {!! Form::textarea('information', null, [
        'class' => 'form-control',
        'placeholder' => 'Add an address, date, time, etc...',
    ]) !!}
</div>
@error('information')
    <span class="text-danger">{{ $message }}</span>
@enderror

<div class="form-group">
    {!! Form::label('status', 'slide status') !!}
    {!! Form::select('status', [1 => 'Disguise', 2 => 'Show'], null, ['class' => 'form-control input-lg mt-1']) !!}
</div>
@error('status')
    <span class="text-danger">{{ $message }}</span>
@enderror
