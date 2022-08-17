@props(['label', 'message', 'value', 'name'])
<div class="form-group">
    <label>{{ $label }}:</label>
    <textarea rows="5" cols="5" name="{{ $name }}" {{ $attributes->merge(['class' => 'form-control']) }}></textarea>
</div>
@if (!empty($message))
    <label class="validation-invalid-label">{{ $message }}</label>
@endif
