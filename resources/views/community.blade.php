<x-guest-layout>
    <x-frontend.banner 
        title="Our Community" 
        description="Connect with talented professionals, artisans, and experts from the Nwa Sub-Division community. Discover their skills, experience, and book their services." 
        background="/images/community.jpg" 
    />

    <!-- Community Profiles Section -->
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
                    Meet Our Experts
                </span>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mt-8 mb-6 text-gray-800">
                    Talented <span class="text-green-600">Professionals</span>
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto text-lg md:text-xl leading-relaxed">
                    Browse through our community of skilled professionals ready to help you with your projects and needs.
                </p>
            </div>

            <!-- Filter Bar -->
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button class="filter-btn bg-green-600 text-white px-6 py-3 rounded-full font-medium hover:bg-green-700 transition-colors" data-filter="all">All Professionals</button>
                <button class="filter-btn bg-white text-green-600 border border-green-200 px-6 py-3 rounded-full font-medium hover:bg-green-50 transition-colors" data-filter="technology">Technology</button>
                <button class="filter-btn bg-white text-green-600 border border-green-200 px-6 py-3 rounded-full font-medium hover:bg-green-50 transition-colors" data-filter="agriculture">Agriculture</button>
                <button class="filter-btn bg-white text-green-600 border border-green-200 px-6 py-3 rounded-full font-medium hover:bg-green-50 transition-colors" data-filter="arts">Arts & Crafts</button>
                <button class="filter-btn bg-white text-green-600 border border-green-200 px-6 py-3 rounded-full font-medium hover:bg-green-50 transition-colors" data-filter="business">Business</button>
            </div>

            <!-- Profiles Grid -->
            @php
                $professionals = [
                    [
                        'name' => 'John Mbah',
                        'specialty' => 'Full-Stack Developer',
                        'description' => 'Experienced web developer specializing in React, Node.js, and modern web technologies. Passionate about creating scalable solutions for businesses.',
                        'location' => 'Yamba Clan, Nwa',
                        'experience' => '5+ years experience',
                        'cost_range' => '$50-100/hour',
                        'rating' => '4.9',
                        'category' => 'technology',
                       'image' => '/images/pro.jpg',                        
                       'availability' => 'Available',
                        'availability_color' => 'bg-green-500',
                        'slug' => 'john-mbah'
                    ],
                    [
                        'name' => 'Grace Ashu',
                        'specialty' => 'Agricultural Consultant',
                        'description' => 'Expert in sustainable farming practices, crop optimization, and agricultural project management. Helping farmers maximize yields while preserving the environment.',
                        'location' => 'Mbaw Clan, Nwa',
                        'experience' => '8+ years experience',
                        'cost_range' => '$40-80/hour',
                        'rating' => '4.8',
                        'category' => 'agriculture',
                       'image' => '/images/pro.jpg',                        
                       'availability' => 'Available',
                        'availability_color' => 'bg-green-500',
                        'slug' => 'grace-ashu'
                    ],
                    [
                        'name' => 'Peter Nkeng',
                        'specialty' => 'Traditional Craftsman',
                        'description' => 'Master craftsman specializing in traditional Nwa wood carvings, sculptures, and cultural artifacts. Preserving ancient techniques while creating modern pieces.',
                        'location' => 'Mfumte Clan, Nwa',
                        'experience' => '12+ years experience',
                        'cost_range' => '$30-70/project',
                        'rating' => '4.7',
                        'category' => 'arts',
                       'image' => '/images/pro.jpg',                       
                       'availability' => 'Busy',
                        'availability_color' => 'bg-yellow-500',
                        'slug' => 'peter-nkeng'
                    ],
                    [
                        'name' => 'Mary Fon',
                        'specialty' => 'Business Consultant',
                        'description' => 'Strategic business advisor helping small and medium enterprises grow. Specializes in market analysis, financial planning, and business development.',
                        'location' => 'Yamba Clan, Nwa',
                        'experience' => '10+ years experience',
                        'cost_range' => '$60-120/hour',
                        'rating' => '5.0',
                        'category' => 'business',
                       'image' => '/images/pro.jpg',                        
                       'availability' => 'Available',
                        'availability_color' => 'bg-green-500',
                        'slug' => 'mary-fon'
                    ],
                    [
                        'name' => 'Samuel Keng',
                        'specialty' => 'Mobile App Developer',
                        'description' => 'Mobile application developer with expertise in Flutter and React Native. Creating innovative mobile solutions for businesses and startups.',
                        'location' => 'Mbaw Clan, Nwa',
                        'experience' => '4+ years experience',
                        'cost_range' => '$45-90/hour',
                        'rating' => '4.6',
                        'category' => 'technology',
                       'image' => '/images/pro.jpg',                        
                       'availability' => 'Available',
                        'availability_color' => 'bg-green-500',
                        'slug' => 'samuel-keng'
                    ],
                    [
                        'name' => 'Rose Tabi',
                        'specialty' => 'Fashion Designer',
                        'description' => 'Contemporary fashion designer blending traditional African patterns with modern styles. Creating unique clothing and accessories for special occasions.',
                        'location' => 'Mfumte Clan, Nwa',
                        'experience' => '6+ years experience',
                        'cost_range' => '$25-60/item',
                        'rating' => '4.9',
                        'category' => 'arts',
                        'image' => '/images/pro.jpg',
                        'availability' => 'Available',
                        'availability_color' => 'bg-green-500',
                        'slug' => 'rose-tabi'
                    ],
                    [
                        'name' => 'James Tiku',
                        'specialty' => 'Digital Marketing Expert',
                        'description' => 'Digital marketing specialist helping businesses grow their online presence. Expert in social media marketing, SEO, and content strategy.',
                        'location' => 'Yamba Clan, Nwa',
                        'experience' => '7+ years experience',
                        'cost_range' => '$35-75/hour',
                        'rating' => '4.8',
                        'category' => 'business',
                        'image' => '/images/pro.jpg',
                        'availability' => 'Available',
                        'availability_color' => 'bg-green-500',
                        'slug' => 'james-tiku'
                    ],
                    [
                        'name' => 'Ruth Che',
                        'specialty' => 'Organic Farmer',
                        'description' => 'Sustainable agriculture pioneer promoting organic farming methods. Specializes in permaculture design and eco-friendly crop production techniques.',
                        'location' => 'Mbaw Clan, Nwa',
                        'experience' => '9+ years experience',
                        'cost_range' => '$30-65/consultation',
                        'rating' => '4.7',
                        'category' => 'agriculture',
                       'image' => '/images/pro.jpg',                        
                       'availability' => 'Limited',
                        'availability_color' => 'bg-orange-500',
                        'slug' => 'ruth-che'
                    ]
                ];
            @endphp

            <div id="professionals-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @foreach ($professionals as $professional)
                    <div class="professional-card bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:transform hover:-translate-y-2 hover:shadow-xl" data-category="{{ $professional['category'] }}">
                        <div class="relative">
                            @if ($professional['image'])
                                <img src="{{ $professional['image'] }}" alt="{{ $professional['name'] }}" 
                                     class="w-full h-48 object-cover transition-transform duration-300 hover:scale-105">
                            @else
                                <div class="h-48 bg-gradient-to-br from-gray-200 to-gray-300 relative flex items-center justify-center">
                                    <div class="w-20 h-20 bg-green-500 rounded-full flex items-center justify-center">
                                        <span class="text-white text-2xl font-bold">{{ substr($professional['name'], 0, 1) }}</span>
                                    </div>
                                </div>
                            @endif
                            <div class="absolute top-4 right-4">
                                <span class="{{ $professional['availability_color'] }} text-white px-3 py-1 rounded-full text-sm font-medium">
                                    {{ $professional['availability'] }}
                                </span>
                            </div>
                        </div>
                        
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-gray-800">{{ $professional['name'] }}</h3>
                                    <p class="text-green-600 font-medium">{{ $professional['specialty'] }}</p>
                                </div>
                                <div class="flex items-center text-yellow-400">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= floor($professional['rating']))
                                            <i class="fas fa-star text-sm"></i>
                                        @elseif ($i - 0.5 <= $professional['rating'])
                                            <i class="fas fa-star-half-alt text-sm"></i>
                                        @else
                                            <i class="far fa-star text-sm"></i>
                                        @endif
                                    @endfor
                                    <span class="text-gray-600 text-sm ml-1">({{ $professional['rating'] }})</span>
                                </div>
                            </div>
                            
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                {{ $professional['description'] }}
                            </p>
                            
                            <div class="space-y-2 mb-4">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-map-marker-alt w-4 text-green-500"></i>
                                    <span class="ml-2">{{ $professional['location'] }}</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-briefcase w-4 text-green-500"></i>
                                    <span class="ml-2">{{ $professional['experience'] }}</span>
                                </div>
                                <div class="flex items-center text-sm font-semibold text-green-600">
                                    <i class="fas fa-dollar-sign w-4"></i>
                                    <span class="ml-2">{{ $professional['cost_range'] }}</span>
                                </div>
                            </div>
                            
                            <a href="#" 
                               class="block w-full bg-green-600 text-white text-center py-3 rounded-lg font-medium hover:bg-green-700 transition-colors">
                                See More Details
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button class="bg-white border-2 border-green-600 text-green-600 px-8 py-3 rounded-full font-medium hover:bg-green-600 hover:text-white transition-colors">
                    Load More Professionals
                </button>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-teal-600 to-teal-700 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-24 h-24 bg-white rounded-full blur-xl animate-pulse"></div>
            <div class="absolute bottom-20 right-20 w-32 h-32 bg-white rounded-full blur-2xl animate-bounce"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center">
                <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6">
                    Join Our <span class="text-green-200">Community</span>
                </h3>
                <p class="text-green-100 text-lg md:text-xl mb-8 max-w-3xl mx-auto leading-relaxed">
                    Are you a skilled professional from Nwa Sub-Division? Join our community and showcase your talents to potential clients worldwide.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#" 
                       class="bg-white text-green-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition-colors inline-flex items-center justify-center">
                        <i class="fas fa-user-plus mr-2"></i>
                        Become a Member
                    </a>
                    <a href="#" 
                       class="border-2 border-white text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-white hover:text-green-600 transition-colors inline-flex items-center justify-center">
                        <i class="fas fa-info-circle mr-2"></i>
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <x-frontend.newsletter />

    <!-- Custom Styles -->
    <style>
        .professional-card {
            transition: all 0.3s ease;
        }
        
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .filter-btn.active {
            background-color: #16a34a !important;
            color: white !important;
            border-color: #16a34a !important;
        }
    </style>

    <!-- JavaScript for filtering -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const professionalCards = document.querySelectorAll('.professional-card');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const filter = this.getAttribute('data-filter');
                    
                    // Update active button
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Filter cards with animation
                    professionalCards.forEach(card => {
                        const category = card.getAttribute('data-category');
                        if (filter === 'all' || category === filter) {
                            card.style.display = 'block';
                            setTimeout(() => {
                                card.style.opacity = '1';
                                card.style.transform = 'translateY(0)';
                            }, 100);
                        } else {
                            card.style.opacity = '0';
                            card.style.transform = 'translateY(20px)';
                            setTimeout(() => {
                                card.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });

            // Set initial active state
            document.querySelector('.filter-btn[data-filter="all"]').classList.add('active');
        });
    </script>
</x-guest-layout>