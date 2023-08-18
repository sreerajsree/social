<div class="card-body">
    <div class="form-group">
        {!! Form::label('name', 'Name: ') !!}
        {!! Form::text('name', null, [
            'class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''),
            'placeholder' => 'Type a name for this role',
        ]) !!}

        @error('name')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <strong>Permissions</strong>

    @error('permissions')
        <div>
            <small class="text-danger">
                <strong>{{ $message }}</strong>
            </small>
        </div>
    @enderror

    @foreach ($permissions as $permission)
        <div>
            <label>
                {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
                {{ $permission->name }}
            </label>
        </div>
    @endforeach

</div>
