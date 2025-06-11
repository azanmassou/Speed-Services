<div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->

    @props(['type' => 'button', 'variant' => 'primary'])

    <button type="{{ $type }}" {{ $attributes->merge(['class' => "btn btn-$variant"]) }}>
        {{ $slot }}
    </button>

</div>

{{-- <x-button variant="warning">Enregistrer</x-button>
<x-button type="submit" variant="danger">Supprimer</x-button> --}}
