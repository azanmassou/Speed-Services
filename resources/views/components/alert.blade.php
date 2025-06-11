<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->


    @props(['type' => 'success'])

    <div class="alert alert-{{ $type }} alert-dismissible fade show" role="alert">
        {{ $slot }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

</div>

{{-- <x-alert type="danger">Erreur lors de la connexion</x-alert> --}}

{{-- @if(session('success'))
    <x-alert type="success">{{ session('success') }}</x-alert>
@endif --}}

