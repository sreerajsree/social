<x-app-layout>

    <!-- hero -->
    <section class="bg-cover text-white text-center" style="background:#823d80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" style="padding-bottom: 18rem; padding-top: 6rem">
            <p class="text-5xl">Online health and social care courses</p>
            <p class="text-2xl mt-8">71 courses to choose from, with new courses being added regularly.</p>
            <h2 class="mt-16 text-4xl">Featured courses</h2>
        </div>
    </section>

    <main>
        @livewire('courses-index')
    </main>

    <!-- Page Footer -->
    @if(isset($footer))
    <footer class="bg-gray-800">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $footer }}
        </div>
    </footer>
    @endif

    <!-- Page Copyright -->
    @if(isset($copyright))
    <section class="bg-gray-900 hidden md:block">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-white">
            {{ $copyright }}
        </div>
    </section>
    @endif

</x-app-layout>
