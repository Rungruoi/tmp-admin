@php
    if (!isset($attributes)) {
        $attributes = [];
    }

    if (!isset($attributes_from)) {
        $attributes_from = [];
    }

    if (!isset($attributes_to)) {
        $attributes_to = [];
    }

    $attributes_from['class'] = collect(['form-control datepicker-input', $attributes_from['class'] ?? ''])->implode(' ');
    $attributes_from['autocomplete'] = 'off';

    $attributes_to['class'] = collect(['form-control datepicker-input', $attributes_to['class'] ?? ''])->implode(' ');
    $attributes_to['autocomplete'] = 'off';
@endphp

{!! Form::label($name, $label, ['class' => 'col-form-label' . (isset($attributes['required']) && $attributes['required'] ? ' required-flag' : '')]) !!}
<div class="group-input">
    <div class="form-group full-width">
        {!! Form::text($name_from, $value_start_time ?? null, $attributes_from); !!}
        @error($name_from)
        <span class="help-block has-error">{{ $message }}</span>
        @enderror
    </div>
    <span>~</span>
    <div class="form-group full-width">
        {!! Form::text($name_to, $value_end_time ?? null, $attributes_to); !!}
        @error($name_to)
        <span class="help-block has-error">{{ $message }}</span>
        @enderror
    </div>
</div>

