<nav aria-label="{!! $label ?? __('Page navigation', 'sage') !!}">
  <ul {{ $attributes->merge(['class' => 'pagination']) }}>
    {{ $slot }}
  </ul>
</nav>
