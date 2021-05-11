<div class="card">
  <div class="card-header" id="{{ $headingId }}">
    <h5 class="mb-0">
      <button class="btn btn-link" data-toggle="collapse" data-target="#{{ $id }}" aria-expanded="{{ $show ? 'true' : 'false' }}" aria-controls="{{ $id }}">
        {{ $heading }}
      </button>
    </h5>
  </div>

  <div id="{{ $id }}" class="collapse {{ $show ? 'show' : '' }}" aria-labelledby="{{ $headingId }}" data-parent="#{{ $accordionId }}">
    <div class="card-body">
      {{ $slot }}
    </div>
  </div>
</div>
