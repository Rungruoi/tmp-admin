{!! Form::label($name, $label, ['class' => 'col-form-label ' . (isset($attributes['required']) && $attributes['required'] ? 'required-flag' : '')]) !!}
{!! Form::password($name, $attributes ?? []); !!}

@error($name)
<span class="help-block has-error">{{ $message }}</span>
@enderror
