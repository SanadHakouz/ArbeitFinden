@props(['label', 'name', 'type' => 'text']) <!-- Add a type prop with a default value -->

@php
    $defaults = [
        'type' => $type,  // Now uses the passed type or defaults to 'text'
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full',
        'value' => $type !== 'file' ? old($name) : null // Avoid setting a value for file inputs
    ];
@endphp

<x-forms.field :$label :$name>
    <input {{ $attributes->merge($defaults) }}> <!-- Ensure defaults are merged with any custom attributes -->
</x-forms.field>
