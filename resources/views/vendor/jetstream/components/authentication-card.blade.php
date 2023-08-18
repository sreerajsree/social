<div class="min-h-screen flex flex-col sm:justify-center items-center mt-20 sm:pt-0 bg-white">
    @if (route('login'))
    <h2 class="text-5xl">Log in to your account</h2>
    @else
    <h2 class="text-5xl">Sign up for free today</h2>
    @endif
    <div class="w-full sm:max-w-3xl mt-6 px-6 py-4 bg-white overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
