<x-guest-layout>
    <x-frontend.banner 
        title="MASU Elites" 
        description="Meet the dedicated leaders and key members of the Mantung Association Students Union, driving cultural preservation and community development." 
        background="/images/elites.jpg" 
    />

    <!-- Elites Section -->
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
                    Our Key Members
                </span>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mt-8 mb-6 text-gray-800">
                    Meet the <span class="text-green-600">MASU</span> Team
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto text-lg md:text-xl leading-relaxed">
                    Discover the passionate individuals leading the Mantung Association Students Union, committed to fostering cultural heritage and community growth in Nwa Sub-Division.
                </p>
            </div>

            <!-- Elites Grid -->
            @php
                $elites = [
                    [
                        'name' => 'Fumlak Kenneth K.',
                        'role' => 'President of MASU',
                        'image' => '/images/elites.jpg', // No image, use placeholder
                        'description' => 'Fumlak Kenneth K. holds a BSc in Biochemistry and an MSc in Food and Bioresource Technology from the College of Technology at the University of Bamenda. Newly married, he is a visionary leader driving MASU’s mission to empower students and preserve cultural heritage.',
                        'location' => 'Mutengene, SWR',
                        'icon' => 'fas fa-user',
                    ],
                    [
                        'name' => 'Chufor Mercy',
                        'role' => 'Traditional Wear Designer & MASU National Organizer II',
                        'image' => null, // No image, use placeholder
                        'description' => 'Chufor Mercy is a talented traditional wear designer and dedicated MASU National Organizer II. Her creative designs and organizational skills strengthen MASU’s cultural initiatives and community engagement.',
                        'location' => 'Bafoussam',
                        'icon' => 'fas fa-paint-brush',
                    ],
                ];
            @endphp

            <div id="elites-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($elites as $elite)
                    <div class="elite-card bg-white rounded-xl mt-12  shadow-lg  relative">
                        <div class="flex justify-center -mt-16">
                            @if ($elite['image'])
                                <img src="{{ $elite['image'] }}" alt="{{ $elite['name'] }}" class="w-32 h-32 object-cover rounded-full border-4 border-white shadow-md transform scale-110">
                            @else
                                <div class="w-32 h-32 bg-gray-200 rounded-full border-4 border-white shadow-md flex items-center justify-center transform scale-110">
                                    <i class="{{ $elite['icon'] }} text-gray-400 text-4xl"></i>
                                </div>
                            @endif
                        </div>
                        <div class="p-6 ">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="text-xl font-bold">{{ $elite['name'] }}</h3>
                                <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded-full">{{ $elite['role'] }}</span>
                            </div>
                            <p class="text-gray-600 mb-4">{{ $elite['description'] }}</p>
                            <p class="text-gray-500 text-sm flex items-center">
                                <i class="fas fa-map-marker-alt text-green-600 mr-2"></i> {{ $elite['location'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-frontend.newsletter />
</x-guest-layout>