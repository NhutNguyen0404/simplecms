@props(['label', 'options', 'message', 'value', 'name'])
<div class="form-group">
    <label>{{ $label }}:</label>
    <select name="{{ $name }}" {{ $attributes->merge(['class' => 'form-control']) }}>
        @foreach($options as $key => $item)
            <option value="{{ $key }}" @if ($key == $value) selected @endif>{{ $item }}</option>
        @endforeach
    </select>
</div>
@if (!empty($message))
    <label class="validation-invalid-label">{{ $message }}</label>
@endif
