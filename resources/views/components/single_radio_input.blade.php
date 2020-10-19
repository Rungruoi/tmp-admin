@php
    if (!isset($attributes)) {
        $attributes = [];
    }
@endphp

<label class="kt-radio">
    {!! Form::radio($name, $value, $checked ?? false, $attributes ?? []) !!} {{ $text ?? '' }}
    <span></span>
</label>

@error($name)
<span class="help-block has-error">{{ $message }}</span>
@enderror
