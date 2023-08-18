<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter the item name']) !!}
</div>
@error('name')
    <span class="text-danger">{{ $message }}</span>
@enderror

<div class="form-group">
    {!! Form::label('link', 'Link') !!}
    {!! Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'Enter the link that will be associated with this item']) !!}
</div>
@error('link')
    <span class="text-danger">{{ $message }}</span>
@enderror

<div class="form-group">
    {!! Form::label('status', 'State') !!}
    {!! Form::select('status', [1 => 'Ocultar', 2 => 'Show'], null, ['class' => 'form-control input-lg mt-1']) !!}
</div>
@error('status')
    <span class="text-danger">{{ $message }}</span>
@enderror
