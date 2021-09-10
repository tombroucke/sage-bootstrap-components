<div {{ $attributes->merge(['class' => $classes]) }} role="alert">

  @if($dismissible)
      <x-button.close dismiss="alert" />
  @endif

  {!! $message ?? $slot !!}

</div>

