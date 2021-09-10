<div {{ $attributes->merge(['class' => $classes]) }}>
  <input class="form-check-input" id="{{ $id }}" type="checkbox" name="{{ $name }}" value="{{ $value ?? '' }}" {{ $checked ? 'checked="checked"' : '' }}>
  <label class="form-check-label" for="{{ $id }}">{{ $slot }}</label>
</div>
