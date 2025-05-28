@props([
    'title' => 'Contact Us',
    'highlight' => 'Nwa Sub-Division Heritage',
    'description' => 'Connect with Nwa Sub-Division Heritage',
    'breadcrumb' => ['Home', 'Contact'],
    'background' => 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80'
])

<section class="relative h-96 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ $background }}');">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <!-- Banner Content -->
    <div class="relative z-10 max-w-6xl mx-auto h-full px-4 flex items-center justify-center">
        <div class="text-center text-white">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">{{ $title }}</h1>
            <p class="text-xl md:text-2xl mb-6">{{ $description }}</p>
       
        </div>
    </div>

    <!-- Decorative Elements -->
    <div class="absolute bottom-0 left-0 w-full h-16 bg-gradient-to-t from-gray-800 to-transparent"></div>
</section>
