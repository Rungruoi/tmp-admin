@if (isset($label))
    <label for="{{ $name }}" class="col-form-label">{{ $label }}</label>
@endif

<div class="kt-checkbox-inline">
    @foreach($options as $key => $option)
        <label class="kt-checkbox kt-checkbox--brand">
            {!! Form::checkbox($name, $key, in_array($key, $checkedOptions ?? [])) !!} {{ $option }}
            <span></span>
        </label>
    @endforeach
</div>

@error($name)
<span class="help-block has-error">{{ $message }}</span>
@enderror
