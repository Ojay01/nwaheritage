@props([
    'title' => 'Villages Map',
    'subtitle' => 'Geography',
    'description' => 'Explore the geographical distribution of villages across the three clans of Nwa Sub-Division.',
    'clans' => [],
    'showMap' => true,
    'mapHeight' => 'h-96',
    'bgColor' => 'bg-gray-50',
    'containerClass' => 'py-20'
])

@php
    // Default clans data if none provided
    $defaultClans = [
        [
            'name' => 'Yamba',
            'color' => 'yellow',
            'villages' => [
                'NTIM', 'NTONG', 'KWAK', 'FA\'AM', 'NGUNG', 'SIH', 'BOM', 
                'GOM', 'MFE', 'NWA', 'MBEM', 'NKOT', 'ROM', 'YANG', 'BANG'
            ]
        ],
        [
            'name' => 'Mbaw',
            'color' => 'green',
            'villages' => [
                'NGURI', 'NTEM', 'NWANTI', 'NGU', 'MBIRIKPA', 'NKING', 'NKWAT',
                'NGOM-SABONGARI', 'NYURONG', 'NGOMKOW', 'JATOR-NGWEMBE', 
                'NGAMFE-KURT', 'LIH'
            ]
        ],
        [
            'name' => 'Mfumte',
            'color' => 'blue',
            'villages' => [
                'ADERE', 'BITUI', 'NCHIA', 'LUS', 'KOM', 'MBALLA', 'JUI',
                'KOFFA', 'MANANG', 'MBAH', 'MBAT', 'MBEPJI', 'SA\'AM'
            ]
        ]
    ];
    
    $clansData = empty($clans) ? $defaultClans : $clans;
    $totalVillages = collect($clansData)->sum(fn($clan) => count($clan['villages']));
@endphp

<section class="{{ $containerClass }} {{ $bgColor }}">
    <div class="container mx-auto px-4">
        <!-- Header Section -->
        <div class="text-center mb-16">
              <span class="text-green-500 font-medium text-sm uppercase tracking-wider bg-green-50 px-4 py-2 rounded-full inline-block transform hover:scale-105 transition-all duration-300">
                {{ $subtitle }}
            </span>
            
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mt-2 mb-4 text-gray-900">
                {{ $title }}
            </h2>
            
            @if($description)
                <p class="text-gray-600 max-w-2xl mx-auto text-lg leading-relaxed">
                    {{ $description }}
                </p>
            @endif
            
            <!-- Statistics -->
            <div class="flex justify-center items-center mt-6 space-x-8">
                <div class="text-center">
                    <div class="text-2xl font-bold text-green-500">{{ count($clansData) }}</div>
                    <div class="text-sm text-gray-500 uppercase tracking-wide">Clans</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-blue-500">{{ $totalVillages }}</div>
                    <div class="text-sm text-gray-500 uppercase tracking-wide">Villages</div>
                </div>
            </div>
        </div>
        
        <!-- Main Content Card -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            @if($showMap)
                <!-- Map Section -->
               <!-- Map Section -->
<div class="lg:p-8">
    <div class="{{ $mapHeight }} relative rounded-xl border-2 border-dashed border-gray-200 hover:border-gray-300 transition-colors duration-300 overflow-hidden">

        <!-- Google Map iframe background -->
        <iframe
            class="absolute inset-0 w-full h-full pointer-events-none opacity-20"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1987486.7554188665!2d11.522702920111824!3d6.35734649225909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1061315a236f8d89%3A0x4d7e3a7607f29976!2sCameroon!5e0!3m2!1sen!2scm!4v1716761234567!5m2!1sen!2scm"
            frameborder="0"
            allowfullscreen=""
            {{-- loading="lazy" --}}
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>

        <!-- Overlay Content -->
        <div class="relative z-10 flex items-center justify-center h-full text-center">
            <div>
                <div class="inline-flex items-center justify-center w-16 h-16 bg-green-100 rounded-full mb-4">
                    <i class="fas fa-map-marked-alt text-2xl text-green-500"></i>
                </div>
                <p class="text-gray-900 font-medium mb-2">Interactive Map</p>
                <p class="text-sm text-gray-600">Coming Soon</p>
            </div>
        </div>
    </div>
</div>

<div class="border-t border-gray-100"></div>

            @endif
            
            <!-- Villages Grid Section -->
            <div class="p-6 lg:p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($clansData as $index => $clan)
                        <div class="group">
                            <!-- Clan Header -->
                            <div class="flex items-center mb-6 p-4 bg-{{ $clan['color'] }}-50 rounded-lg border border-{{ $clan['color'] }}-100">
                                <div class="flex items-center justify-center w-8 h-8 bg-{{ $clan['color'] }}-500 rounded-full mr-3">
                                    <i class="fas fa-circle text-xs text-white"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-{{ $clan['color'] }}-600">
                                        {{ $clan['name'] }} Villages
                                    </h3>
                                    <p class="text-sm text-{{ $clan['color'] }}-500">
                                        {{ count($clan['villages']) }} {{ Str::plural('village', count($clan['villages'])) }}
                                    </p>
                                </div>
                            </div>
                            <!-- Villages List -->
                            <div class="space-y-3 grid grid-cols-2 gap-4">
                                @foreach($clan['villages'] as $villageIndex => $village)
                                    <div class="flex items-center p-3 cursor-pointer bg-gray-50 rounded-lg hover:bg-{{ $clan['color'] }}-50 hover:border-{{ $clan['color'] }}-200 border border-transparent transition-all duration-200 group-hover:transform group-hover:translate-x-1">
                                        <div class="flex items-center justify-center w-6 h-6 bg-{{ $clan['color'] }}-100 text-{{ $clan['color'] }}-600 rounded-full mr-3 text-xs font-semibold">
                                            {{ $villageIndex + 1 }}
                                        </div>
                                        <span class="text-gray-700 font-medium ">{{ $village }}</span>
                                    </div>
                                @endforeach
                            </div>
                            
                            <!-- Clan Footer Stats -->
                            <div class="mt-6 p-3 bg-gray-50 rounded-lg text-center">
                                <span class="text-sm text-gray-500">Population: </span>
                                <span class="text-sm font-semibold text-{{ $clan['color'] }}-600">Data Coming Soon</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            
            <!-- Footer Actions -->
            <div class="bg-gray-50 px-6 lg:px-8 py-4 border-t border-gray-100">
                <div class="flex flex-col sm:flex-row justify-between items-center space-y-3 sm:space-y-0">
                    <div class="text-sm text-gray-500">
                        Last updated: {{ now()->format('M d, Y') }}
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
