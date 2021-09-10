<div {{ $attributes->merge(['class' => 'form-check']) }}>
  <input class="form-check-input" id="{{ $id }}" type="radio" name="{{ $name }}" value="{{ $value ?? '' }}" {{ $checked ? 'checked="checked"' : '' }}>
  <label class="form-check-label" for="{{ $id }}">{{ $slot }}</label>
</div>
