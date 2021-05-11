<li class="breadcrumb-item {{ $active ? 'active' : '' }}" {{ $active ? 'aria-current="page"' : '' }}>
  @if($href)
    <a href="{{ $href }}">{{ $slot }}</a>
  @else
    {{ $slot }}
  @endif
</li>
