<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-danger mb-3']) }}>
    {{ $slot }}
</button>
