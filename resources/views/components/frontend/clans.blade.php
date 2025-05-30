@props([
    'title' => 'The Three Clans of Nwa',
    'subtitle' => 'Our Heritage',
    'description' => 'The Nwa Sub-Division is home to three distinct clans, each with their unique culture, governance, and contributions to the region.',
    'clans' => [
        [
            'name' => 'Yamba Clan',
            'villages' => 15,
            'description' => 'The administrative center of the sub-division with rich cultural heritage and potential for development.',
            'image' => 'https://cdn.pixabay.com/photo/2017/01/19/23/46/panorama-1993645_1280.jpg',
            'tags' => ['Administrative Hub', 'Healthcare', 'Tourism'],
            'color' => 'yellow',
            'link' => route('clans.show', ['clan' => 'yamba'])
        ],
        [
            'name' => 'Mbaw Clan',
            'villages' => 14,
            'description' => 'Known for agricultural richness, fertile plains, and vibrant economic activities in Sabongari.',
            'image' => 'https://cdn.pixabay.com/photo/2017/01/19/23/46/panorama-1993645_1280.jpg',
            'tags' => ['Agricultural Hub', 'Markets', 'Education'],
            'color' => 'green',
            'link' => route('clans.show', ['clan' => 'mbaw'])
        ],
        [
            'name' => 'Mfumte Clan',
            'villages' => 13,
            'description' => 'Known for hospitality and border advantages, this clan is strategically located near Nigeria.',
            'image' => 'https://cdn.pixabay.com/photo/2017/01/19/23/46/panorama-1993645_1280.jpg',
            'tags' => ['Border Trade', 'Security', 'Development'],
            'color' => 'blue',
            'link' => route('clans.show', ['clan' => 'mfumte'])
        ]
    ],

    'showAnimations' => true,
    'bgGradient' => 'from-white via-green-50/30 to-blue-50/30'
])

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

.animate-fade-in-up { animation: fadeInUp 0.8s ease-out forwards; }
.animate-slide-in-right { animation: slideInRight 0.8s ease-out forwards; }
.animate-slide-in-left { animation: slideInLeft 0.8s ease-out forwards; }

@media (prefers-reduced-motion: reduce) {
    *, *::before, *::after { animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; }
}
</style>

<!-- Clans Section -->
<section id="clans" class="py-20 bg-gradient-to-br {{ $bgGradient }} relative overflow-hidden">
    @if($showAnimations)
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-20 h-20 bg-green-400 rounded-full blur-xl animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-32 h-32 bg-blue-400 rounded-full blur-xl animate-bounce"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-emerald-300 rounded-full blur-lg animate-ping"></div>
    </div>
    @endif
    
    <div class="container mx-auto px-4 relative z-10">
        <!-- Header -->
        <div class="text-center mb-16 {{ $showAnimations ? 'opacity-0 animate-fade-in-up' : '' }}" 
             @if($showAnimations) style="animation-delay: 0.2s;" @endif>
            <span class="text-green-500 font-medium text-sm uppercase tracking-wider bg-green-50 px-4 py-2 rounded-full inline-block transform hover:scale-105 transition-all duration-300">
                {{ $subtitle }}
            </span>
            <h2 class="text-4xl md:text-5xl font-bold mt-4 mb-6 bg-gradient-to-r from-gray-900 via-green-800 to-green-900 bg-clip-text text-transparent">
                {{ $title }}
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto text-lg leading-relaxed">
                {{ $description }}
            </p>
        </div>
        
        <!-- Clans Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
            @foreach($clans as $index => $clan)
            <div class="group bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-2xl overflow-hidden transform hover:-translate-y-2 hover:rotate-1 transition-all duration-500 {{ $showAnimations ? 'opacity-0 animate-fade-in-up' : '' }}" 
                 @if($showAnimations) style="animation-delay: {{ 0.4 + ($index * 0.2) }}s;" @endif>
                
                <!-- Clan Image -->
                <div class="h-56 bg-gradient-to-br from-{{ $clan['color'] }}-100 to-{{ $clan['color'] }}-200 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    <img src="{{ $clan['image'] }}" 
                         alt="{{ $clan['name'] }} Landscape" 
                         class="h-full w-full object-cover group-hover:scale-110 transition-transform duration-700">
                    
                    <!-- Village Count Badge -->
                    <div class="absolute top-4 right-4 bg-gradient-to-r from-{{ $clan['color'] }}-500 to-{{ $clan['color'] }}-600 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg transform group-hover:scale-110 transition-transform duration-300">
                        {{ $clan['villages'] }} Villages
                    </div>
                </div>
                
                <!-- Clan Content -->
                <div class="p-6 space-y-4">
                    <h3 class="text-2xl font-bold text-gray-800 group-hover:text-{{ $clan['color'] }}-600 transition-colors duration-300">
                        {{ $clan['name'] }}
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        {{ $clan['description'] }}
                    </p>
                    
                    <!-- Tags -->
                    <div class="flex flex-wrap gap-2">
                        @foreach($clan['tags'] as $tag)
                        <span class="bg-{{ $clan['color'] }}-50 text-{{ $clan['color'] }}-700 px-3 py-1 rounded-full text-sm font-medium transform hover:scale-105 hover:shadow-md transition-all duration-200 cursor-default">
                            {{ $tag }}
                        </span>
                        @endforeach
                    </div>
                    
                    <!-- Learn More Link -->
                    <a href="{{ $clan['link'] }}" 
                       class="inline-flex items-center text-{{ $clan['color'] }}-500 hover:text-{{ $clan['color'] }}-600 font-semibold group/link transform hover:translate-x-1 transition-all duration-300">
                        Learn more 
                        <i class="fas fa-arrow-right ml-2 group-hover/link:translate-x-1 transition-transform duration-300"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
