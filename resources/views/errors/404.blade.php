@props([
    'title' => 'Page Not Found',
    'subtitle' => 'Error 404',
    'description' => 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.',
    'homeLink' => '/',
    'showAnimations' => true,
    'bgGradient' => 'from-gray-800 via-gray-700 to-gray-800'
])

<x-guest-layout>
    <style>
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideInRight {
            from { opacity: 0; transform: translateX(30px); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes slideInLeft {
            from { opacity: 0; transform: translateX(-30px); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes bounce404 {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            60% { transform: translateY(-5px); }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .animate-fade-in-up { animation: fadeInUp 0.8s ease-out forwards; }
        .animate-slide-in-right { animation: slideInRight 0.8s ease-out forwards; }
        .animate-slide-in-left { animation: slideInLeft 0.8s ease-out forwards; }
        .animate-bounce-404 { animation: bounce404 2s infinite; }
        .animate-float { animation: float 3s ease-in-out infinite; }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { 
                animation-duration: 0.01ms !important; 
                animation-iteration-count: 1 !important; 
            }
        }
    </style>

    <!-- 404 Error Section -->
    <section class="min-h-screen flex items-center justify-center py-20 bg-gradient-to-br {{ $bgGradient }} relative overflow-hidden">
        @if($showAnimations)
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-20 h-20 bg-green-400 rounded-full blur-xl animate-pulse"></div>
            <div class="absolute bottom-20 right-20 w-32 h-32 bg-blue-400 rounded-full blur-xl animate-bounce"></div>
            <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-emerald-300 rounded-full blur-lg animate-ping"></div>
            <div class="absolute top-1/4 right-1/3 w-24 h-24 bg-yellow-300 rounded-full blur-xl animate-float"></div>
        </div>
        @endif
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                
                <!-- Error Code -->
                <div class="mb-8 {{ $showAnimations ? 'opacity-0 animate-fade-in-up' : '' }}" 
                     @if($showAnimations) style="animation-delay: 0.1s;" @endif>
                    <div class="text-8xl md:text-9xl font-bold bg-gradient-to-r from-green-500 via-green-600 to-yellow-500 bg-clip-text text-transparent {{ $showAnimations ? 'animate-bounce-404' : '' }}">
                        404
                    </div>
                </div>

                <!-- Error Badge -->
                <div class="mb-6 {{ $showAnimations ? 'opacity-0 animate-slide-in-left' : '' }}" 
                     @if($showAnimations) style="animation-delay: 0.3s;" @endif>
                    <span class="text-green-500 font-medium text-sm uppercase tracking-wider bg-green-50 px-4 py-2 rounded-full inline-block transform hover:scale-105 transition-all duration-300">
                        {{ $subtitle }}
                    </span>
                </div>

                <!-- Title -->
                <h1 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-white via-green-300 to-blue-300 bg-clip-text text-transparent {{ $showAnimations ? 'opacity-0 animate-fade-in-up' : '' }}" 
                    @if($showAnimations) style="animation-delay: 0.5s;" @endif>
                    {{ $title }}
                </h1>

                <!-- Description -->
                <p class="text-gray-300 max-w-2xl mx-auto text-lg leading-relaxed mb-12 {{ $showAnimations ? 'opacity-0 animate-slide-in-right' : '' }}" 
                   @if($showAnimations) style="animation-delay: 0.7s;" @endif>
                    {{ $description }}
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-row gap-4 justify-center items-center {{ $showAnimations ? 'opacity-0 animate-fade-in-up' : '' }}" 
                     @if($showAnimations) style="animation-delay: 0.9s;" @endif>
                    
                    <!-- Back to Home Button -->
                    <a href="{{ $homeLink }}" 
                       class="group bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white px-4 md:px-8 py-4 rounded-full font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 inline-flex items-center space-x-2">
                        <i class="fas fa-home group-hover:rotate-12 transition-transform duration-300"></i>
                        <span>Back to Home</span>
                    </a>

                    <!-- Go Back Button -->
                    <button onclick="history.back()" 
                            class="group bg-white/10 backdrop-blur-sm hover:bg-white/20 text-gray-300 hover:text-green-400 px-4 md:px-8 py-4 rounded-full font-semibold border border-gray-600 hover:border-green-400 shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 inline-flex items-center space-x-2">
                        <i class="fas fa-arrow-left group-hover:-translate-x-1 transition-transform duration-300"></i>
                        <span>Go Back</span>
                    </button>
                </div>


            </div>
        </div>
    </section>
</x-guest-layout>