<div class="card">
  @if(isset($header) || isset($title))
    <div class="card-header">
      @if(isset($header))
      {{ $header }}
      @else
      <h3 class="card-title">{{ $title }}</h3>
      @isset($tools)
      <div class="card-options">
        {{ $tools }}
      </div>
      @endisset
      @endif
    </div>
  @endisset
  <div class="card-body">
    {{ !empty($body) ? $body : $slot }}
  </div>
  @isset($footer)
  <div class="card-footer">
    {{ $footer }}
  </div>
  @endisset
</div>
