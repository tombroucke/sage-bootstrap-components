<nav aria-label="breadcrumb">
  <ol {{ $attributes->merge(['class' => 'breadcrumb']) }}>
    {{ $slot }}
  </ol>
</nav>
