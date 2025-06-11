@props([
    'name',
    'label' => '',
    'type' => 'text',
    'placeholder' => '',
    'icon' => 'bi-person-circle'
])

<div class="mb-3">
    @if ($label)
        <label for="{{ $name }}" class="form-label fw-semibold">
            <i class="bi {{ $icon }} me-1"></i>
            {{ $label }} <span class="text-danger">*</span>
        </label>
    @endif

    <input
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        placeholder="{{ $placeholder }}"
         value="{{ old($name) }}"
        {{ $attributes->merge(['class' => 'form-control']) }}
    >

    @error($name)
        <div class="invalid-feedback d-block">{{ $message }}</div>
    @enderror
</div>
