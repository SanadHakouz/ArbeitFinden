<form {{ $attributes->merge(['class' => 'max-w-2xl mx-auto space-y-6']) }} method="{{ $attributes->get('method', 'POST') }}" action="{{ $attributes->get('action', '') }}">
    {{-- Only add CSRF token and method spoofing if the method is not GET --}}
    @if ($attributes->get('method', 'POST') !== 'GET')
        @csrf
        @method($attributes->get('method'))
    @endif
    
    {{ $slot }}
</form>
