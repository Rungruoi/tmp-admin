@php
    if (!isset($attributes)) {
        $attributes = [];
    }

    $attributes['class'] = collect(['form-control timepicker-input'], $attributes['class'] ?? '')->implode(' ');
    $attributes['autocomplete'] = 'off'
@endphp

{!! Form::label($name, $label, ['class' => 'col-form-label' . (isset($attributes['required']) && $attributes['required'] ? ' required-flag' : '')]) !!}
{!! Form::text($name, $value ?? null, $attributes); !!}

@error(($name))
<span class="help-block has-error">{{ $message }}</span>
@enderror
