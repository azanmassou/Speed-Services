@props(['name', 'label', 'checked' => false])

<div class="form-check">
    <input type="checkbox"
           name="{{ $name }}"
           id="{{ $name }}"
           {{ $checked ? 'checked' : '' }}
           {{ $attributes->merge(['class' => 'form-check-input']) }}>
    <label for="{{ $name }}" class="form-check-label">
        {{ $label }}
    </label>
</div>
