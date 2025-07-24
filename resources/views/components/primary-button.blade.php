<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-secondary w-100 mb-3']) }}>
    {{ $slot }}
</button>
