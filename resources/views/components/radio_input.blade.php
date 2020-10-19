@php
    if (!isset($attributes)) {
        $attributes = [];
    }
@endphp

{!! Form::label($name, $label, ['class' => 'col-form-label' . (isset($attributes['required']) && $attributes['required'] ? ' required-flag' : '')]) !!}
<div class="kt-radio-inline">
    @foreach($options as $key => $option)
        <label class="kt-radio text-capitalize">
            	{!! Form::radio($name, $key, false, $attributes) !!} {{ $option }}
            <span></span>
        </label>
    @endforeach
</div>

@error($name)
<span class="help-block has-error">{{ $message }}</span>
@enderror
