<x-button {{ $attributes }} theme="{{ $theme ?? 'primary' }}" type="button" tag="button" data-bs-toggle="modal" data-bs-target="#{{ $target }}">
  {{ $slot }}
</x-button>
