<div class="alert alert-{{ $type }}" role="alert">
    {{ $slot->isEmpty() ? $message() : $slot }}
</div>
