<div class="form-group">
  <label class="control-label">{{ !empty($field['label']) ? $field['label'] : title_case(str_replace('_', ' ', snake_case($field['name']))) }}{{ !empty($field['required']) ? '*' : '' }}</label>
  <select class="form-control js-select2 {{ $errors->has($field['name']) ? 'is-invalid' : '' }}" name="{{ $field['name'] }}">
    @foreach ($field['options'] as $option)
    <option value="{{ $option['value'] }}" {{ $option['value'] == old($field['name'], isset($model) ? $model->{$field['name']} : null) ? 'selected' : '' }}>{{ $option['text'] }}</option>
    @endforeach
  </select>
  @if ($errors->has($field['name']))
  <div class="invalid-feedback">
    {{ $errors->first($field['name']) }}
  </div>
  @endif
</div>
