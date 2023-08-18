<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center submit-btn']) }}>
    {{ $slot }}
</button>
