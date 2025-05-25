@props([
    'title' => 'Discover the Rich Heritage',
    'highlight' => 'Nwa Sub-Division',
    'description' => 'Explore the cultural wealth, history, and traditions of Yamba, Mbaw, and Mfumte clans in Cameroon.',
    'backgroundImage' => 'https://cdn.pixabay.com/photo/2025/05/04/11/13/california-9577976_1280.jpg',
    'primaryButton' => [],
    'secondaryButton' => [],
    'minHeight' => 'min-h-screen',
    'textAlign' => 'text-center',
    'overlayOpacity' => 'bg-opacity-60',
    'titleSize' => 'text-4xl md:text-6xl',
    'descriptionSize' => 'text-xl',
    'highlightColor' => 'text-green-400',
    'buttonLayout' => 'flex-col md:flex-row'
])

<section 
    class="hero-section {{ $minHeight }} flex items-center bg-cover bg-center bg-no-repeat relative"
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ $backgroundImage }}');"
>
    <div class="container mx-auto px-4 {{ $textAlign }} py-20 relative z-10">
        <h1 class="{{ $titleSize }} font-bold text-white mb-6">
            {{ $title }} 
            @if($highlight)
                <span class="{{ $highlightColor }}">{{ $highlight }}</span>
            @endif
        </h1>
        
        @if($description)
            <p class="{{ $descriptionSize }} text-gray-200 mb-10 max-w-3xl mx-auto">
                {{ $description }}
            </p>
        @endif
        
        @if(!empty($primaryButton) || !empty($secondaryButton))
            <div class="flex {{ $buttonLayout }} gap-4 justify-center">
                @if(!empty($primaryButton))
                    <a 
                        href="{{ $primaryButton['url'] ?? '#' }}" 
                        class="bg-green-500 hover:bg-green-600 text-white px-8 py-3 rounded-lg transition-all duration-300 font-medium shadow-lg hover:shadow-xl transform hover:scale-105"
                    >
                        @isset($primaryButton['icon'])
                            <i class="{{ $primaryButton['icon'] }} mr-2"></i>
                        @endisset
                        {{ $primaryButton['text'] ?? 'Primary Action' }}
                    </a>
                @endif
                
                @if(!empty($secondaryButton))
                    <a 
                        href="{{ $secondaryButton['url'] ?? '#' }}" 
                        class="bg-transparent border-2 border-white hover:border-green-400 hover:text-green-400 text-white px-8 py-3 rounded-lg transition-all duration-300 font-medium backdrop-blur-sm hover:backdrop-blur-md"
                    >
                        @isset($secondaryButton['icon'])
                            <i class="{{ $secondaryButton['icon'] }} mr-2"></i>
                        @endisset
                        {{ $secondaryButton['text'] ?? 'Secondary Action' }}
                    </a>
                @endif
            </div>
        @endif
        
        {{-- Optional slot for custom content --}}
        @isset($slot)
            <div class="mt-8">
                {{ $slot }}
            </div>
        @endisset
    </div>
</section>