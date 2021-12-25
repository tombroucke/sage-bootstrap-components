<nav aria-label="{!! esc_attr($label ?? __('Page navigation', 'sage')) !!}">
  <ul {{ $attributes->merge(['class' => 'pagination']) }}>
    {{ $slot }}
  </ul>
</nav>
