<li  {{ $attributes->merge(['class' => $classes ]) }} {{ $active ? 'aria-current="page"' : '' }}>
  @if($href)
    <a href="{{ $href }}">{{ $slot }}</a>
  @else
    {{ $slot }}
  @endif
</li>
