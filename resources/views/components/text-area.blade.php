@props(['value' => ''])

<textarea {{ $attributes->merge(['class' => 'form-control mb-3']) }}>{{ $value }}</textarea>
