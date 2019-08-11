<div class="form-group">
  @if (!empty($field['type']) && $field['type'] == 'checkbox')
  <div class="custom-controls-stacked">
    {{-- <input type="hidden" name="{{ $field['name'] }}" value="0"> --}}
    <label class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" name="{{ $field['name'] }}" value="1" {{ old($field['name'], isset($model) ? $model->{$field['name']} : null) == 1 ? 'checked' : '' }}>
      <span class="custom-control-label">{{ !empty($field['label']) ? $field['label'] : title_case(str_replace('_', ' ', snake_case($field['name']))) }}{{ !empty($field['required']) ? '*' : '' }}</span>
    </label>
    @if ($errors->has($field['name']))
    <div class="invalid-feedback">
      {{ $errors->first($field['name']) }}
    </div>
    @endif
  </div>
  @elseif (!empty($field['type']) && $field['type'] == 'radio')
  @foreach ($field['options'] as $key => $option)
  <div class="custom-controls-stacked">
    <label class="custom-control custom-radio">
      <input type="radio" class="custom-control-input"  name="{{ $field['name'] }}" type="radio" value="{{ $option['value'] }}" {{ old($field['name'], isset($model) ? $model->{$field['name']} : null) == $option['value'] ? 'checked' : '' }}>
      <div class="custom-control-label">{{ $option['text'] }}</div>
    </label>
    @if ($errors->has($field['name']) && $loop->last)
    <div class="invalid-feedback">
      {{ $errors->first($field['name']) }}
    </div>
    @endif
  </div>
  @endforeach
  @else
  <label class="form-label">{{ !empty($field['label']) ? $field['label'] : title_case(str_replace('_', ' ', snake_case($field['name']))) }}{{ !empty($field['required']) ? '*' : '' }}</label>
  <input type="{{ !empty($field['type']) ? $field['type'] : 'text' }}"
         class="form-control {{ $errors->has($field['name']) ? 'is-invalid' : '' }}"
         name="{{ $field['name'] }}"
         value="{{ old($field['name'], isset($model) ? $model->{$field['name']} : null) }}"
         @if (!empty($field['type']) && $field['type'] == 'number')
         step="{{ !empty($field['step']) ? $field['step'] : 'any ' }}"
         @endif
         {{ !empty($field['required']) ? 'required' : '' }}>
  @if ($errors->has($field['name']))
  <div class="invalid-feedback">
    {{ $errors->first($field['name']) }}
  </div>
  @endif
  @endif
</div>
