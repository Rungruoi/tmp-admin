<label class="kt-checkbox">
    {!! Form::checkbox($name, $value, $checked ?? false, $attributes ?? [])!!} {{ $text ?? '' }}
    <span></span>
</label>
