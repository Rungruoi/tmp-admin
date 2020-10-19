@php
    if (!isset($attributes)) {
        $attributes = [];
    }

    $attributes['class'] = collect(['form-control width-min-percent', $attributes['class'] ?? ''])->unique()->implode(' ');
@endphp

@if (@$label)
    {!! Form::label($name, $label, ['class' => 'col-form-label ' . (isset($attributes['required']) && $attributes['required'] ? 'required-flag' : '')]) !!}
@endif
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text mark-input">{{ $markInputValue ?? null }}</span>
        </div>
        {!! Form::text($name, $value ?? null, $attributes ?? []); !!}
    </div>
{{ $slot }}

@error($name)
<span class="help-block has-error">{{ $message }}</span>
@enderror
