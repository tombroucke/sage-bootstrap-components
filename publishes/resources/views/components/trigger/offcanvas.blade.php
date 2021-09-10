<x-button {{ $attributes }} theme="{{ $theme ?? 'primary' }}" type="button" data-bs-toggle="offcanvas" data-bs-target="{{ $target }}" aria-controls="{{ $target }}">
  {{ $slot }}
</x-button>
