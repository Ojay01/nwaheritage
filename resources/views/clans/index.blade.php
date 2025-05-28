<x-guest-layout>
    <x-frontend.banner 
        title="Clans of Nwa Sub-Division" 
        description="Learn about the vibrant Yamba, Mbaw, and Mfumte clans, each with a rich history, unique culture, and significant contributions to the Nwa Sub-Division." 
        background="/images/clans.jpg" 
    />

    <!-- Clans Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 via-white to-green-50 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-20 left-20 w-32 h-32 bg-green-500 rounded-full blur-2xl animate-pulse"></div>
            <div class="absolute bottom-32 right-32 w-40 h-40 bg-green-400 rounded-full blur-2xl animate-bounce"></div>
            <div class="absolute top-1/2 left-1/3 w-24 h-24 bg-green-600 rounded-full blur-xl animate-ping"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <span class="text-green-600 font-semibold text-lg uppercase tracking-wider bg-green-100 px-6 py-3 rounded-full inline-block">
                    Our Clans
                </span>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mt-8 mb-6 text-gray-800">
                    Discover the Heart of <span class="text-green-600">Nwa</span>
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto text-lg md:text-xl leading-relaxed">
                    Explore the unique histories, cultural heritage, and contributions of the Yamba, Mbaw, and Mfumte clans, shaping the vibrant identity of Nwa Sub-Division.
                </p>
            </div>

            <!-- Clans Grid -->
            @php
                $clans = [
                    [
                        'name' => 'Yamba',
                        'image' => '/images/village.jpg',
                        'description' => 'The Yamba clan, with 15 villages, is the administrative and cultural hub of Nwa Sub-Division. Governed by Fons, it boasts health facilities, security infrastructure, and iconic touristic sites like Kopdze Cave and Mapong Dam. Its prominent elites and artists drive cultural preservation and development.',
                        'icon' => 'fas fa-landmark',
                        'link' => route('clans.show', ['clan' => 'yamba'])
                    ],
                    [
                        'name' => 'Mbaw',
                        'image' => '/images/village.jpg', 
                        'description' => 'The Mbaw clan, rooted in Tikar migrations, thrives on the fertile Mbaw Plain with 14 villages. Known for agriculture (rice, corn, palm) and the vibrant Sabongari markets, it faces farmer-grazer conflicts but is supported by education and economic growth.',
                        'icon' => 'fas fa-leaf',
                        'link' => route('clans.show', ['clan' => 'mbaw'])
                    ],
                    [
                        'name' => 'Mfumte',
                        'image' => '/images/village.jpg',
                        'description' => 'The Mfumte clan, with 13 villages near the Cameroon-Nigeria border, is renowned for hospitality and growth. Governed by Fons and supported by MFUCUDA, it offers touristic potential with hilly terrain and historic caves, enhanced by trade and cultural exchange.',
                        'icon' => 'fas fa-mountain',
                        'link' => route('clans.show', ['clan' => 'mfumte'])
                    ]
                ];
            @endphp

            <div id="clans-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($clans as $clan)
                    <div class="clan-card bg-white rounded-xl shadow-lg overflow-hidden">
                        @if ($clan['image'])
                            <img src="{{ $clan['image'] }}" alt="{{ $clan['name'] }} Clan"      class="w-full h-48 object-cover transition-transform cursor-pointer duration-300 ease-in-out transform hover:scale-110">

                        @else
                            <div class="h-48 bg-gray-200 relative">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i class="{{ $clan['icon'] }} text-gray-400 text-6xl"></i>
                                </div>
                            </div>
                        @endif
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="text-xl font-bold">{{ $clan['name'] }} Clan</h3>
                                <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded-full">{{ $clan['name'] }}</span>
                            </div>
                            <p class="text-gray-600 mb-4">{{ $clan['description'] }}</p>
                            <a href="{{ $clan['link'] }}" class="text-green-500 hover:text-green-600 font-medium flex items-center">
                                Learn more <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-frontend.newsletter />

</x-guest-layout>