<div class="alert alert-{{ isset($type) ? $type : 'success' }}">
  @isset($text)
    {{ $text }}
  @endisset
</div>
