<x-button {{ $attributes }} theme="{{ $theme ?? 'primary' }}" type="button" id="js-trigger-toast-{{ $target }}">
  {{ $slot }}
</x-button>
