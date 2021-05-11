<nav aria-label="Page navigation">
  <ul {{ $attributes->merge(['class' => 'pagination']) }}>
    {{ $slot }}
  </ul>
</nav>
