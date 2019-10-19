<div class="alert alert-{{ $type ?? 'warning' }} {{ $class ?? '' }} {{ $dismissible ? 'alert-dismissible' : '' }} {{ $animate ? 'fade show' : '' }}" role="alert">
    @if($dismissible)
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    @endif

    {{ $slot }}
</div>
