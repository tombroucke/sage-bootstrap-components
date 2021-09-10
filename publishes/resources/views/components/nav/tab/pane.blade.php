<div class="tab-pane fade {{ $show ? 'show active' : '' }}" id="{{ $id }}" role="tabpanel" aria-labelledby="{{ $id . '-tab' }}">
  {{ $slot }}
</div>
