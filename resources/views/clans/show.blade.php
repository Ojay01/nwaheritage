<x-guest-layout>
    <x-frontend.banner 
        title="{{ $clan['name'] }} Clan"
        description="{{ $clan['description'] }}" 
        background="{{ $clan['image'] ?? '/images/default-clan.jpg' }}" 
    />

    <!-- Clan Detail Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 via-white to-green-50 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-20 left-20 w-32 h-32 bg-green-500 rounded-full blur-2xl animate-pulse"></div>
            <div class="absolute bottom-32 right-32 w-40 h-40 bg-green-400 rounded-full blur-2xl animate-bounce"></div>
            <div class="absolute top-1/2 left-1/3 w-24 h-24 bg-green-600 rounded-full blur-xl animate-ping"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Clan Overview -->
            <div class="mb-16">
                <div class="flex flex-col md:flex-row gap-8">
                    <div class="md:w-1/3">
                        @if ($clan['image'])
                            <img src="{{ $clan['image'] }}" alt="{{ $clan['name'] }} Clan" class="w-full h-64 object-cover rounded-xl shadow-lg">
                        @else
                            <div class="h-64 bg-gray-200 relative rounded-xl shadow-lg">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i class="{{ $clan['icon'] }} text-gray-400 text-6xl"></i>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="md:w-2/3">
                        <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">{{ $clan['name'] }} Clan</h2>
                        <p class="text-gray-600 text-lg leading-relaxed">{{ $clan['description'] }}</p>
                    </div>
                </div>
            </div>

            <!-- History Section -->
            <div class="mb-16">
                <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-book text-green-600 mr-3"></i> History
                </h3>
                <p class="text-gray-600 leading-relaxed">{{ $clan['history'] }}</p>
            </div>

            <!-- Governance Section -->
            <div class="mb-16">
                <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-gavel text-green-600 mr-3"></i> Governance
                </h3>
                <p class="text-gray-600 leading-relaxed">{{ $clan['governance'] }}</p>
            </div>

            <!-- Features Section -->
            <div class="mb-16">
                <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-star text-green-600 mr-3"></i> Key Features
                </h3>
                <p class="text-gray-600 leading-relaxed">{{ $clan['features'] }}</p>
            </div>

            <!-- Touristic Sites Section -->
            <div class="mb-16">
                <h3 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-mountain text-green-600 mr-3"></i> Touristic Sites
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($clan['touristic_sites'] as $site)
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                            @if ($site['image'])
                                <img src="{{ $site['image'] }}" alt="{{ $site['name'] }}" class="w-full h-48 object-cover">
                            @else
                                <div class="h-48 bg-gray-200 relative">
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <i class="{{ $site['icon'] }} text-gray-400 text-6xl"></i>
                                    </div>
                                </div>
                            @endif
                            <div class="p-6">
                                <div class="flex justify-between items-center mb-2">
                                    <h4 class="text-xl font-bold">{{ $site['name'] }}</h4>
                                    <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded-full">{{ $clan['name'] }}</span>
                                </div>
                                <p class="text-gray-600 mb-4">{{ $site['description'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Challenges Section -->
            <div class="mb-16">
                <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-exclamation-triangle text-green-600 mr-3"></i> Challenges
                </h3>
                <p class="text-gray-600 leading-relaxed">{{ $clan['challenges'] }}</p>
            </div>
        </div>
    </section>

    <x-frontend.newsletter />

</x-guest-layout>