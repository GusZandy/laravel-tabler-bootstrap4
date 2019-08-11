<div class="form-group">
  <label class="form-label">{{ !empty($field['label']) ? $field['label'] : title_case(str_replace('_', ' ', snake_case($field['name']))) }}{{ !empty($field['required']) ? '*' : '' }}</label>
  <textarea class="form-control {{ $errors->has($field['name']) ? 'is-invalid' : '' }}" name="{{ $field['name'] }}"
    rows="{{ !empty($field['row']) ? $field['row'] : 4 }}"
    cols="{{ !empty($field['cols']) ? $field['cols'] : 80 }}"
    {{ !empty($field['required']) ? 'required' : '' }}>{{ old($field['name'], isset($model) ? $model->{$field['name']} : null) }}</textarea>
  @if ($errors->has($field['name']))
  <div class="invalid-feedback">
    {{ $errors->first($field['name']) }}
  </div>
  @endif
</div>
