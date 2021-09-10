<div class="position-fixed bottom-0 end-0 p-3">
  <div {{ $attributes->merge(['class' => $classes ]) }} role="alert" aria-live="assertive" aria-atomic="true">

    @isset($header)
      <div class="toast-header">
        <strong class="me-auto">{{ $header }}</strong>
        <x-button.close dismiss="toast" />
      </div>
    @endisset

    <div class="d-flex">
      <div class="toast-body ">
        {{ $slot }}
      </div>
      @unless(isset($header))
        <x-button.close dismiss="toast" />
      @endunless
    </div>

  </div>
</div>
