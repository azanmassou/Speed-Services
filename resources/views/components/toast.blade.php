@props([
    'message' => 'Action effectuée avec succès.',
    'type' => 'success', // success, danger, warning, info
    'delay' => 5000 // délai en millisecondes
])

@php
    $icons = [
        'success' => 'bi-check-circle-fill',
        'danger' => 'bi-x-circle-fill',
        'warning' => 'bi-exclamation-triangle-fill',
        'info' => 'bi-info-circle-fill',
    ];
@endphp

<div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1055;">
    <div class="toast text-bg-success show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="{{ $delay }}" data-bs-autohide="true">
        <div class="toast-header bg-{{ $type }} text-white">
            <i class="bi {{ $icons[$type] ?? 'bi-info-circle-fill' }} me-2"></i>
            <strong class="me-auto">Speed Services</strong>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Fermer"></button>
        </div>
        <div class="toast-body">
            {{ $message }}
        </div>
    </div>
</div>

{{-- <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1055;">
    <div class="toast text-bg-{{ $type }} border-0 shadow s" role="alert" aria-live="assertive" aria-atomic="true"
         data-bs-delay="{{ $delay }}" data-bs-autohide="true">
        <div class="toast-header bg-{{ $type }} text-white">
            <i class="bi {{ $icons[$type] ?? 'bi-info-circle-fill' }} me-2"></i>
            <strong class="me-auto">Speed Services</strong>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Fermer"></button>
        </div>
        <div class="toast-body">
            {{ $message }}
        </div>
    </div>
</div> --}}

