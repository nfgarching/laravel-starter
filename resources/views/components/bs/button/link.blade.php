@props([
    'click' => '',
    'href' => '',
    'type' => 'primary',
    'tooltip' => '',
])

<a @if ($click) wire:click="{{ $click }}" @endif
    @if ($href) href="{{ $href }}" @endif
    {{ $attributes->merge(['class' => 'btn btn-' . $type]) }}
    @if ($tooltip)
        data-bs-toggle="tooltip"
        data-bs-title="{{ $tooltip }}"
    @endif
    role="button"
>
    {{ $slot }}
    
</a>
