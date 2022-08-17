@props(['label', 'options', 'message', 'value', 'name'])
<div class="form-group" {{ $attributes->merge(['class' => 'form-group']) }}>
    <label class="d-block">{{ $label }}:</label>
    @foreach($options as $key => $item)
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <div class="uniform-choice">
                    <span class="@if ($key == $value || (is_array($value) && in_array($key, $value))) checked @endif">
                        <input type="checkbox"
                               class="form-input-styled"
                               name="{{ $name }}"
                               @if ($key == $value || (is_array($value) && in_array($key, $value))) checked @endif
                               data-fouc="">
                    </span>
                </div>
                Male
            </label>
        </div>
    @endforeach
</div>

@if (!empty($message))
    <label class="validation-invalid-label">{{ $message }}</label>
@endif
