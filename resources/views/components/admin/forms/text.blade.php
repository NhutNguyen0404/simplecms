@props(['label', 'type', 'message', 'value', 'name'])
<div class="form-group">
    <label>{{ $label }}:</label>
    <input type="{{ $type ?? 'text' }}" name="{{ $name }}" {{ $attributes->merge(['class' => 'form-control']) }}>
</div>
@if (!empty($message))
    <label class="validation-invalid-label">{{ $message }}</label>
@endif
