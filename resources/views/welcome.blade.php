<x-layout>
    <header style="background-image: url('{{ asset('image/header.jpg') }}')" class="relative w-screen h-[80vh] bg-cover bg-center flex items-center justify-center">
        <div class="absolute inset-0 bg-black/50"></div>

        <!-- Centered Text -->
        <div class="relative z-10 text-center">
            <h1 class="text-white text-4xl md:text-5xl font-bold">
                Welcome to My Website
            </h1>
            <p class="text-white mt-2 text-lg opacity-90">
                Build something amazing
            </p>
        </div>
    </header>
</x-layout>
