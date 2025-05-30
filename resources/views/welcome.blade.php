<x-guest-layout>

        <x-frontend.hero   :primary-button="[
        'text' => 'Explore Clans',
        'url' => route('clans'),
        'icon' => 'fas fa-compass'
    ]"
    :secondary-button="[
        'text' => 'Discover Sites',
        'url' => route('tourism'),
        'icon' => 'fas fa-map-marker-alt'
    ]" />

        <x-frontend.clans />

        <x-frontend.history />




    <!-- Tourism Section -->
    <section id="tourism" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="text-green-500 font-medium">Explore</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-2 mb-4">Tourist Attractions</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Discover the natural beauty and cultural landmarks across the Nwa Sub-Division's three clans.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Attraction 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="h-48 bg-gray-200 relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <i class="fas fa-cave text-gray-400 text-6xl"></i>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-xl font-bold">Kopdze Cave</h3>
                            <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded-full">Yamba</span>
                        </div>
                        <p class="text-gray-600 mb-4">A historic cave located in Nwa with significant cultural importance to the Yamba people.</p>
                        <a href="{{route('tourism')}}" class="text-green-500 hover:text-green-600 font-medium flex items-center">
                            View details <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Attraction 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="h-48 bg-gray-200 relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <i class="fas fa-water text-gray-400 text-6xl"></i>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-xl font-bold">Mapong Dam</h3>
                            <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded-full">Yamba</span>
                        </div>
                        <p class="text-gray-600 mb-4">A picturesque dam in Nwa offering scenic views and recreational opportunities.</p>
                        <a href="/tourism/mapong-dam" class="text-green-500 hover:text-green-600 font-medium flex items-center">
                            View details <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Attraction 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="h-48 bg-gray-200 relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <i class="fas fa-mountain text-gray-400 text-6xl"></i>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-xl font-bold">Majang Hill</h3>
                            <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded-full">Yamba</span>
                        </div>
                        <p class="text-gray-600 mb-4">An impressive hill in Mbem providing breathtaking views of the surrounding landscape.</p>
                        <a href="/tourism/majang-hill" class="text-green-500 hover:text-green-600 font-medium flex items-center">
                            View details <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Attraction 4 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="h-48 bg-gray-200 relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <i class="fas fa-water text-gray-400 text-6xl"></i>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-xl font-bold">Nzebuck Dam</h3>
                            <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded-full">Yamba</span>
                        </div>
                        <p class="text-gray-600 mb-4">A beautiful dam in Mbem that serves both practical and aesthetic purposes for the community.</p>
                        <a href="/tourism/nzebuck-dam" class="text-green-500 hover:text-green-600 font-medium flex items-center">
                            View details <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Attraction 5 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="h-48 bg-gray-200 relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <i class="fas fa-place-of-worship text-gray-400 text-6xl"></i>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-xl font-bold">Traditional Palaces</h3>
                            <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded-full">All Clans</span>
                        </div>
                        <p class="text-gray-600 mb-4">Visit the traditional palaces of the Fons that showcase the cultural heritage of the clans.</p>
                        <a href="/tourism/palaces" class="text-green-500 hover:text-green-600 font-medium flex items-center">
                            View details <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Attraction 6 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="h-48 bg-gray-200 relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <i class="fas fa-monument text-gray-400 text-6xl"></i>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-xl font-bold">Rom Rock</h3>
                            <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded-full">Yamba</span>
                        </div>
                        <p class="text-gray-600 mb-4">A natural rock formation with cultural significance to the people of Rom village.</p>
                        <a href="/tourism/rom-rock" class="text-green-500 hover:text-green-600 font-medium flex items-center">
                            View details <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <a href="{{route('tourism')}}" class="bg-green-500 hover:bg-green-600 text-white px-8 py-3 rounded-lg transition font-medium inline-flex items-center">
                    <i class="fas fa-map-marked-alt mr-2"></i> View All Attractions
                </a>
            </div>
        </div>
    </section>



    <x-frontend.geography />

    <!-- Newsletter Section -->
<x-frontend.newsletter/>
    


</x-guest-layout>