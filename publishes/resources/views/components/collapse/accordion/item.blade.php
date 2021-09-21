<div {{ $attributes->merge(['class' => 'accordion-item']) }}>
  <div class="accordion-header" id="{{ $headingId }}">
    <h5 class="mb-0">
      <button class="accordion-button {{ $show ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $id }}" aria-expanded="{{ $show ? 'true' : 'false' }}" aria-controls="{{ $id }}">
        {{ $heading }}
      </button>
    </h5>
  </div>

  <div id="{{ $id }}" class="accordion-collapse collapse {{ $show ? 'show' : '' }}" aria-labelledby="{{ $headingId }}" data-bs-parent="#{{ $accordionId }}">
    <div class="accordion-body">
      {{ $slot }}
    </div>
  </div>
</div>
