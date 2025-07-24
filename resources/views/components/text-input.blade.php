@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control border-0 border-bottom mb-3 ps-0']) !!}>
