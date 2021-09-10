@if(isset($label))
  <label class="form-label">{{ $label }}</label>
@endif

<div {{ $attributes->merge(['class' => 'input-group mb-3']) }}>

  @if(isset($start))
    <span class="input-group-text">{{ $start }}</span>
  @endif

  {{ $slot }}

  @if(isset($end))
    <span class="input-group-text">{{ $end }}</span>
  @endif

</div>
