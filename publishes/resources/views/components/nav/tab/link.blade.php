<li class="nav-item" role="presentation">
  <button class="nav-link {{ $active ? 'active' : '' }}" id="{{ $pane . '-tab' }}" data-bs-toggle="tab" data-bs-target="#{{ $pane }}" type="button" role="tab" aria-controls="{{ $pane }}" aria-selected="{{ $active ? 'true' : 'false' }}">{{ $slot }}</button>
</li>
