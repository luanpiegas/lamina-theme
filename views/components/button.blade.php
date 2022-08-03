@props([
    'type' => 'default',
])

<button
    {{ $attributes->merge(['class' => 'btn btn-'.$type]) }}
>
    {{ $slot }}
</button>
