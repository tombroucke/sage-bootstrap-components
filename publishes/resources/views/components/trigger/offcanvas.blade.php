<x-button {{ $attributes }} theme="{{ $theme ?? 'primary' }}" type="button" data-bs-toggle="offcanvas" data-bs-target="{{ $target }}" aria-controls="{{ str_replace('#', '', $target) }}">
  {{ $slot }}
</x-button>
