<div class="mb-3">
    @if ($label)
        <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    @endif

    <select id="{{ $name }}" name="{{ $name }}"
            {{ $attributes->merge(['class' => 'form-select']) }}>
        @foreach ($options as $value => $text)
            <option value="{{ $value }}" {{ old($name) == $value ? 'selected' : '' }}>
                {{ $text }}
            </option>
        @endforeach
    </select>
</div>

{{-- <x-select-input name="role" label="Rôle de l'utilisateur"
    :options="['admin' => 'Administrateur', 'agent' => 'Agent', 'caissier' => 'Caissier']" required /> --}}
