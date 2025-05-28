<x-guest-layout>
    <x-frontend.banner 
        title="Explore Nwa Sub-Division" 
        description="Discover the rich cultural heritage and natural beauty of the Yamba, Mbaw, and Mfumte clans through their unique touristic sites." 
        background="/images/tourism.jpg" 
    />

    <!-- Touristic Sites Section -->
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
                    Touristic Attractions
                </span>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mt-8 mb-6 text-gray-800">
                    Discover the Beauty of <span class="text-green-600">Nwa</span>
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto text-lg md:text-xl leading-relaxed">
                    Explore the stunning landscapes, cultural landmarks, and vibrant communities of the Yamba, Mbaw, and Mfumte clans. Filter by clan to find your next adventure!
                </p>
            </div>

            <!-- Clan Filter -->
            <div class="flex justify-center mb-12">
                <div class="inline-flex rounded-xl bg-white shadow-md p-2">
                    <button class="clan-filter px-6 py-3 text-sm font-semibold rounded-lg transition-all duration-300 bg-green-600 text-white hover:bg-green-700" data-clan="all">All</button>
                    <button class="clan-filter px-6 py-3 text-sm font-semibold rounded-lg transition-all duration-300 hover:bg-green-600 hover:text-white" data-clan="Yamba">Yamba</button>
                    <button class="clan-filter px-6 py-3 text-sm font-semibold rounded-lg transition-all duration-300 hover:bg-green-600 hover:text-white" data-clan="Mbaw">Mbaw</button>
                    <button class="clan-filter px-6 py-3 text-sm font-semibold rounded-lg transition-all duration-300 hover:bg-green-600 hover:text-white" data-clan="Mfumte">Mfumte</button>
                </div>
            </div>

            <!-- Touristic Sites Grid -->
            @php
                $touristicSites = [
                    // Yamba Clan Sites
                    [
                        'clan' => 'Yamba',
                        'name' => 'Kopdze Cave of Nwa',
                        'image' => '/images/site.jpg',
                        'description' => 'A historic cave showcasing the cultural heritage of the Yamba clan, perfect for history enthusiasts.',
                        'icon' => 'fas fa-cave',
                        'link' => '/tourism/kopdze-cave'
                    ],
                    [
                        'clan' => 'Yamba',
                        'name' => 'Mapong Dam of Nwa',
                        'image' => '/images/site.jpg',
                        'description' => 'A serene dam offering breathtaking views and a peaceful retreat for visitors.',
                        'icon' => 'fas fa-water',
                        'link' => '/tourism/mapong-dam'
                    ],
                    [
                        'clan' => 'Yamba',
                        'name' => 'Nzebuck Dam of Mbem',
                        'image' => '/images/site.jpg',
                        'description' => 'A picturesque dam surrounded by natural beauty, ideal for nature lovers.',
                        'icon' => 'fas fa-water',
                        'link' => '/tourism/nzebuck-dam'
                    ],
                    [
                        'clan' => 'Yamba',
                        'name' => 'Majang Hill of Mbem',
                        'image' => '/images/site.jpg',
                        'description' => 'A stunning hill offering panoramic views and hiking opportunities.',
                        'icon' => 'fas fa-mountain',
                        'link' => '/tourism/majang-hill'
                    ],
                    [
                        'clan' => 'Yamba',
                        'name' => 'River Mantung',
                        'image' => '/images/site.jpg',
                        'description' => 'A scenic river perfect for relaxation and photography.',
                        'icon' => 'fas fa-water',
                        'link' => '/tourism/river-mantung'
                    ],
                    [
                        'clan' => 'Yamba',
                        'name' => 'Kopjwue Hill Site in Rom',
                        'image' => '/images/site.jpg',
                        'description' => 'A cultural hill site with historical significance and stunning views.',
                        'icon' => 'fas fa-mountain',
                        'link' => '/tourism/kopjwue-hill'
                    ],
                    [
                        'clan' => 'Yamba',
                        'name' => 'Rom Rock',
                        'image' => '/images/site.jpg',
                        'description' => 'A unique rock formation enhancing the Yamba clan\'s touristic appeal.',
                        'icon' => 'fas fa-rock',
                        'link' => '/tourism/rom-rock'
                    ],
                    [
                        'clan' => 'Yamba',
                        'name' => 'Yamba Palaces and Caves',
                        'image' => '/images/site.jpg',
                        'description' => 'Cultural landmarks reflecting the rich history and traditions of the Yamba people.',
                        'icon' => 'fas fa-landmark',
                        'link' => '/tourism/yamba-palaces'
                    ],
                    [
                        'clan' => 'Yamba',
                        'name' => 'Makop of Mfe',
                        'image' => '/images/site.jpg',
                        'description' => 'A natural site showcasing the unique geological features of the Yamba clan.',
                        'icon' => 'fas fa-mountain',
                        'link' => '/tourism/makop-mfe'
                    ],
                    // Mbaw Clan Sites
                    [
                        'clan' => 'Mbaw',
                        'name' => 'Mbaw Plain',
                        'image' => '/images/site.jpg', // No image, use placeholder
                        'description' => 'A fertile plain ideal for agricultural tourism and scenic exploration.',
                        'icon' => 'fas fa-leaf',
                        'link' => '/tourism/mbaw-plain'
                    ],
                    [
                        'clan' => 'Mbaw',
                        'name' => 'Sabongari Markets',
                        'image' => '/images/site.jpg',
                        'description' => 'Vibrant markets offering a cultural experience with border, council, and cattle markets.',
                        'icon' => 'fas fa-market',
                        'link' => '/tourism/sabongari-markets'
                    ],
                    // Mfumte Clan Sites
                    [
                        'clan' => 'Mfumte',
                        'name' => 'Mfumte Hilly Terrain',
                        'image' => '/images/site.jpg',
                        'description' => 'Scenic hills offering hiking opportunities and breathtaking views.',
                        'icon' => 'fas fa-mountain',
                        'link' => '/tourism/mfumte-hills'
                    ],
                    [
                        'clan' => 'Mfumte',
                        'name' => 'Mfumte Natural Caves',
                        'image' => '/images/site.jpg', // No image, use placeholder
                        'description' => 'Historic caves used during raids, now a cultural tourism attraction.',
                        'icon' => 'fas fa-cave',
                        'link' => '/tourism/mfumte-caves'
                    ],
                    [
                        'clan' => 'Mfumte',
                        'name' => 'Cameroon-Nigeria Border',
                        'image' => '/images/site.jpg',
                        'description' => 'A unique location for cultural exchange and cross-border tourism.',
                        'icon' => 'fas fa-globe',
                        'link' => '/tourism/mfumte-border'
                    ]
                ];
            @endphp

            <div id="sites-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($touristicSites as $site)
                    <div class="site-card bg-white rounded-xl shadow-lg overflow-hidden" data-clan="{{ $site['clan'] }}">
                        @if ($site['image'])
                            <img src="{{ $site['image'] }}" alt="{{ $site['name'] }}" 
     class="w-full h-48 object-cover transition-transform cursor-pointer duration-300 ease-in-out transform hover:scale-110">

                        @else
                            <div class="h-48 bg-gray-200 relative">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i class="{{ $site['icon'] }} text-gray-400 text-6xl"></i>
                                </div>
                            </div>
                        @endif
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="text-xl font-bold">{{ $site['name'] }}</h3>
                                <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded-full">{{ $site['clan'] }}</span>
                            </div>
                            <p class="text-gray-600 mb-4">{{ $site['description'] }}</p>
                            <a href="{{ $site['link'] }}" class="text-green-500 hover:text-green-600 font-medium flex items-center">
                                View details <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-frontend.newsletter />


    <!-- JavaScript for Clan Filter -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.clan-filter');
            const siteCards = document.querySelectorAll('.site-card');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Update active button
                    filterButtons.forEach(btn => {
                        btn.classList.remove('bg-green-600', 'text-white');
                        btn.classList.add('hover:bg-green-600', 'hover:text-white');
                    });
                    this.classList.add('bg-green-600', 'text-white');
                    this.classList.remove('hover:bg-green-600', 'hover:text-white');

                    // Filter sites
                    const selectedClan = this.getAttribute('data-clan');
                    siteCards.forEach(card => {
                        if (selectedClan === 'all' || card.getAttribute('data-clan') === selectedClan) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
</x-guest-layout>