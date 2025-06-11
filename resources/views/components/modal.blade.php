<div>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->


    @props(['id', 'title'])

    <div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="{{ $id }}Label"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="{{ $id }}Label">{{ $title }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                </div>
                <div class="modal-body">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>

</div>


{{-- <x-modal id="confirmDelete" title="Confirmer la suppression">
    Êtes-vous sûr de vouloir supprimer cet élément ?
</x-modal> --}}
