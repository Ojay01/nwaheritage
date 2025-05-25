@props([
    'historyTitle' => 'Rich Historical Background',
    'historySubtitle' => 'Our Roots',
    'historyDescription' => 'Explore the origins, migrations, and historical developments that shaped the Nwa Sub-Division.',
    'historyCards' => [
        [
            'title' => 'Origins & Migration',
            'description' => 'Discover how succession disputes led to migrations from the Tikar ethnic group, seeking fertile land and greener pastures in what would become the Mbaw Plain.',
            'icon' => 'fas fa-scroll'
        ],
        [
            'title' => 'Traditional Governance',
            'description' => 'Each village across the three clans is governed by a Fon who serves as the custodian of culture and tradition, maintaining social order and preserving heritage.',
            'icon' => 'fas fa-users'
        ],
        [
            'title' => 'Modern Challenges',
            'description' => 'Learn about the evolution of farmer-grazer conflicts and other contemporary issues facing the clans, as well as community efforts to address them.',
            'icon' => 'fas fa-balance-scale'
        ]
    ],
    'timeline' => [
        [
            'title' => 'Early Migrations',
            'description' => 'Tikar groups migrated due to succession disputes, seeking fertile land.',
            'step' => 1
        ],
        [
            'title' => 'Village Establishments',
            'description' => 'Formation of the villages that now constitute the three clans.',
            'step' => 2
        ],
        [
            'title' => 'Administrative Development',
            'description' => 'Establishment of Nwa Sub-Division with administrative centers.',
            'step' => 3
        ],
        [
            'title' => 'Modern Era',
            'description' => 'Development of infrastructure, education, and healthcare facilities.',
            'step' => 4
        ]
    ],
    'funFact' => [
        'title' => 'Did you know?',
        'description' => 'The caves in the Mfumte clan were historically used during raids for protection.'
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


<!-- History Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 via-white to-green-50/30 relative">
    @if($showAnimations)
    <!-- Decorative Elements -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-1/4 right-10 w-40 h-40 bg-green-300 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 left-10 w-32 h-32 bg-blue-300 rounded-full blur-2xl animate-bounce"></div>
    </div>
    @endif
    
    <div class="container mx-auto px-4 relative z-10">
        <!-- History Header -->
        <div class="text-center mb-16 {{ $showAnimations ? 'opacity-0 animate-fade-in-up' : '' }}" 
             @if($showAnimations) style="animation-delay: 0.1s;" @endif>
            <span class="text-green-500 font-medium text-sm uppercase tracking-wider bg-green-50 px-4 py-2 rounded-full inline-block">
                {{ $historySubtitle }}
            </span>
            <h2 class="text-4xl md:text-5xl font-bold mt-4 mb-6 bg-gradient-to-r from-gray-900 via-green-800 to-green-900 bg-clip-text text-transparent">
                {{ $historyTitle }}
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto text-lg leading-relaxed">
                {{ $historyDescription }}
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <!-- History Cards -->
<div class="space-y-6">
    @foreach($historyCards as $index => $card)
        <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-500 {{ $showAnimations ? 'opacity-0 animate-fade-in-up' : '' }}"
             @if($showAnimations) style="animation-delay: {{ 0.2 + ($index * 0.2) }}s;" @endif>
             
            <div class="flex items-center space-x-4 mb-3">
                <div class="bg-gradient-to-r from-green-100 to-emerald-100 p-2 rounded-xl shadow-sm">
                    <i class="{{ $card['icon'] }} text-green-500 text-lg"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800">{{ $card['title'] }}</h3>
            </div>
            <p class="text-gray-600 leading-relaxed">{{ $card['description'] }}</p>
        </div>
    @endforeach
</div>
            
            <!-- Timeline -->
            <div class="relative">
                <div class="bg-white/80 backdrop-blur-sm p-8 rounded-2xl shadow-xl {{ $showAnimations ? 'opacity-0 animate-slide-in-right' : '' }}" 
                     @if($showAnimations) style="animation-delay: 0.3s;" @endif>
                    <h3 class="text-2xl font-bold mb-8 text-center">Timeline of Key Events</h3>
                    <div class="space-y-2">
                        @foreach($timeline as $index => $event)
                        <div class="flex items-start space-x-4 {{ $showAnimations ? 'opacity-0 animate-slide-in-right' : '' }}" 
                             @if($showAnimations) style="animation-delay: {{ 0.5 + ($index * 0.1) }}s;" @endif>
                            <div class="flex flex-col items-center">
                                <div class="bg-gradient-to-r from-green-500 to-emerald-600 rounded-full w-10 h-10 flex items-center justify-center text-white font-bold shadow-lg transform hover:scale-110 transition-transform duration-300">
                                    {{ $event['step'] }}
                                </div>
                                @if(!$loop->last)
                                <div class="h-12 w-0.5 bg-gradient-to-b from-green-300 to-transparent mt-2"></div>
                                @endif
                            </div>
                            <div class="flex-1 pb-4">
                                <h4 class="font-bold text-gray-800 mb-2">{{ $event['title'] }}</h4>
                                <p class="text-gray-600">{{ $event['description'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <!-- Fun Fact Tooltip -->
                <div class="absolute -top-12 -right-0 bg-gradient-to-r from-green-500 to-emerald-600 text-white p-4 rounded-2xl shadow-xl hidden lg:block transform hover:scale-105 transition-transform duration-300 {{ $showAnimations ? 'opacity-0 animate-fade-in-up' : '' }}" 
                     @if($showAnimations) style="animation-delay: 0.8s;" @endif>
                    <p class="font-bold text-sm">{{ $funFact['title'] }}</p>
                    <p class="text-xs opacity-90 mt-1">{{ $funFact['description'] }}</p>
                    <div class="absolute -bottom-2 left-8 w-4 h-4 bg-gradient-to-r from-green-500 to-emerald-600 transform rotate-45"></div>
                </div>
            </div>
        </div>
    </div>
</section>