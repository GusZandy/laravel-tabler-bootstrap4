<div class="form-group">
  <label class="form-label">{{ !empty($field['label']) ? $field['label'] : title_case(str_replace('_', ' ', snake_case($field['name']))) }}{{ !empty($field['required']) ? '*' : '' }}</label>
  <div class="input-group">
    <div class="input-group-prepend">
      <span class="input-group-text"><i class="fa fa-calendar"></i></span>
    </div>
    <input type="text"
      class="form-control js-datetimepicker {{ $errors->has($field['name']) ? 'is-invalid' : '' }}"
      name="{{ $field['name'] }}"
      value="{{ old($field['name'], isset($model) ? $model->{$field['name']} : null) }}"{{ !empty($field['required']) ? 'required' : '' }}
      autocomplete="off"
      >
  </div>
  @if ($errors->has($field['name']))
  <div class="invalid-feedback">
    {{ $errors->first($field['name']) }}
  </div>
  @endif
</div>
