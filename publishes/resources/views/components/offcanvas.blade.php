<div {{ $attributes->merge(['class' => 'offcanvas offcanvas-' . $type]) }} tabindex="-1" id="{{ $name }}" aria-labelledby="{{ $name . '-label' }}">

  <div class="offcanvas-header">
    @if(isset($header))
      <h5 class="offcanvas-title" id="{{ $name . '-label' }}">{{ $header }}</h5>
    @endif
    <x-button.close dismiss="offcanvas" />
  </div>

  <div class="offcanvas-body">
    {{ $slot }}
  </div>

</div>
