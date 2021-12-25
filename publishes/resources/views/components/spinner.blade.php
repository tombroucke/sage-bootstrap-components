<div {{ $attributes->merge(['class' => 'spinner-' . (isset($type) ? $type : 'border') . ' text-' . (isset($theme) ? $theme : 'primary') ]) }} role="status">
  <span class="visually-hidden">{!! esc_html(__('Loading...', 'sage')) !!}</span>
</div>
