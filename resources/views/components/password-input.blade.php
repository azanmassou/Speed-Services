@props([
    'name',
    'label' => '',
    'placeholder' => '••••••••',
    'iconColor' => 'text-dark'
])

<div class="mb-3 position-relative">
    @if ($label)
        <label for="{{ $name }}" class="form-label fw-semibold">
            <i class="bi bi-lock-fill me-1"></i>
            {{ $label }} <span class="text-danger"> * </span>
        </label>
    @endif

    <div class="input-group">
        <input
            type="password"
            id="{{ $name }}"
            name="{{ $name }}"
            placeholder="{{ $placeholder }}"
             value="{{ old($name) }}"
            {{ $attributes->merge(['class' => 'form-control border-end-0']) }}
        >

        <button type="button"
                class="btn btn-secondary border-start-0"
                onclick="togglePasswordVisibility('{{ $name }}')"
                aria-label="Afficher ou masquer le mot de passe">
            <i class="bi bi-eye {{ $iconColor }}" id="{{ $name }}_icon"></i>
        </button>
    </div>

    @error($name)
        <div class="invalid-feedback d-block">{{ $message }}</div>
    @enderror
</div>




@once
    @push('scripts')
    <script>
        function togglePasswordVisibility(id) {
            const input = document.getElementById(id);
            const icon = document.getElementById(id + '_icon');

            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.replace('bi-eye', 'bi-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.replace('bi-eye-slash', 'bi-eye');
            }
        }
    </script>
    @endpush
@endonce
