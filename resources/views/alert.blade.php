@if (isset($type))
    <div class="alert alert-{{ $type }}">
        {{ $slot }}
    </div>
@else
    <div class="alert alert-primary">
        {{ $slot }}
    </div>
@endif
