@php
    $label ??= ucfirst($name);
    $class ??= null;

    // Vérifie si $status est défini et non null, sinon initialise à false
    $status = isset($status) ? $status : false;
@endphp

<div class="form-check form-switch @error($name) is-invalid @enderror">
    <input type="hidden" name="{{ $name }}" value="0">
    <input
        type="checkbox"
        id="{{ $name }}"
        name="{{ $name }}"
        class="form-check-input"
        {{ old($name, $status) ? 'checked' : '' }}
    >
    <label class="form-check-label" for="{{ $name }}">{{ $label }}</label>
</div>

@error($name)
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror
