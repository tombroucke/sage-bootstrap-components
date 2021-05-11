<li class="nav-item">
  <a class="nav-link {{ $active ? 'active' : '' }}" id="{{ $pane }}-tab" data-toggle="tab" href="#{{ $pane }}" role="tab" aria-controls="{{ $pane }}" aria-selected="{{ $active ? 'true' : 'false' }}">{{ $slot }}</a>
</li>
