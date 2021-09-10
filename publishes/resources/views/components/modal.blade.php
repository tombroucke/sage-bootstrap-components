<div {{ $attributes->merge(['class' => 'modal fade']) }} id="{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="{{ $label }}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="{{ $label }}">{{ $title }}</h5>
        <x-button.close dismiss="modal" />
      </div>

      <div class="modal-body">
        {{ $slot }}
      </div>

      @isset($footer)
        <div class="modal-footer">
          {{ $footer }}
        </div>
      @endisset

    </div>
  </div>
</div>
