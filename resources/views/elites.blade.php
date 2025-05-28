<x-guest-layout>
    <x-frontend.banner 
        title="MASU Elites" 
        description="Meet the dedicated leaders and key members of the Mantung Association Students Union, driving cultural preservation and community development." 
        background="/images/elites.jpg" 
    />

    <!-- Enhanced Elites Section -->
    <section class="py-24 bg-gradient-to-br from-slate-50 via-white to-emerald-50/60 relative overflow-hidden min-h-screen">
        <!-- Enhanced Background Pattern -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-20 left-20 w-64 h-64 bg-gradient-to-r from-emerald-400 to-teal-400 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-32 right-32 w-72 h-72 bg-gradient-to-r from-green-300 to-emerald-300 rounded-full blur-3xl animate-float"></div>
            <div class="absolute top-1/2 left-1/4 w-48 h-48 bg-gradient-to-r from-teal-400 to-cyan-400 rounded-full blur-2xl animate-bounce-slow"></div>
            <div class="absolute top-1/4 right-1/4 w-32 h-32 bg-emerald-500/30 rounded-full blur-xl animate-ping-slow"></div>
        </div>

        <!-- Floating Geometric Shapes -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-1/3 left-10 w-4 h-4 bg-emerald-400 rotate-45 animate-spin-slow opacity-30"></div>
            <div class="absolute top-2/3 right-20 w-6 h-6 bg-teal-400 rounded-full animate-float opacity-40"></div>
            <div class="absolute bottom-1/4 left-1/3 w-3 h-12 bg-green-400 rounded-full animate-sway opacity-25"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Enhanced Section Header -->
            <div class="text-center mb-20">
                <div class="inline-flex items-center gap-3 bg-gradient-to-r from-emerald-500/10 to-teal-500/10 backdrop-blur-sm border border-emerald-200/50 px-8 py-4 rounded-full mb-8">
                    <div class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></div>
                    <span class="text-emerald-700 font-semibold text-lg uppercase tracking-wider">
                        Our Key Members
                    </span>
                    <div class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></div>
                </div>
                
                <h2 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-8 text-slate-800 leading-tight">
                    Meet the 
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 via-teal-600 to-green-600 animate-gradient">
                        MASU
                    </span> 
                    Team
                </h2>
                
                <div class="max-w-4xl mx-auto">
                    <p class="text-slate-600 text-xl md:text-2xl leading-relaxed font-light">
                        Discover the passionate individuals leading the Mantung Association Students Union, committed to fostering 
                        <span class="text-emerald-600 font-medium">cultural heritage</span> and 
                        <span class="text-teal-600 font-medium">community growth</span> in Nwa Sub-Division.
                    </p>
                </div>
            </div>

            <!-- Enhanced Elites Grid -->
            @php
                $elites = [
                    [
                        'name' => 'Fumlak Kenneth K.',
                        'role' => 'President of MASU',
                        'image' => '/images/elites.jpg',
                        'description' => 'Fumlak Kenneth K. holds a BSc in Biochemistry and an MSc in Food and Bioresource Technology from the College of Technology at the University of Bamenda. Newly married, he is a visionary leader driving MASU\'s mission to empower students and preserve cultural heritage.',
                        'location' => 'Mutengene, SWR',
                        'icon' => 'fas fa-crown',
                        'gradient' => 'from-emerald-500 to-teal-500',
                        'bg_pattern' => 'emerald',
                    ],
                    [
                        'name' => 'Chufor Mercy',
                        'role' => 'Traditional Wear Designer & MASU National Organizer II',
                        'image' => null,
                        'description' => 'Chufor Mercy is a talented traditional wear designer and dedicated MASU National Organizer II. Her creative designs and organizational skills strengthen MASU\'s cultural initiatives and community engagement.',
                        'location' => 'Bafoussam',
                        'icon' => 'fas fa-palette',
                        'gradient' => 'from-teal-500 to-cyan-500',
                        'bg_pattern' => 'teal',
                    ],
                ];
            @endphp

            <div id="elites-grid" class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-12 max-w-7xl mx-auto">
                @foreach ($elites as $index => $elite)
                    <div class="elite-card group mt-8 relative bg-white/70 backdrop-blur-sm rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-white/50" 
                         style="animation-delay: {{ $index * 0.2 }}s">
                        
                        <!-- Card Background Pattern -->
                        <div class="absolute inset-0 rounded-3xl opacity-5">
                            <div class="absolute top-4 right-4 w-20 h-20 bg-gradient-to-r {{ $elite['gradient'] }} rounded-full blur-2xl"></div>
                            <div class="absolute bottom-6 left-6 w-16 h-16 bg-gradient-to-r {{ $elite['gradient'] }} rounded-full blur-xl"></div>
                        </div>

                        <!-- Profile Image Section -->
                        <div class="relative flex justify-center -mt-16 mb-8">
                            <div class="relative group-hover:scale-110 transition-transform duration-500">
                                @if ($elite['image'])
                                    <img src="{{ $elite['image'] }}" 
                                         alt="{{ $elite['name'] }}" 
                                         class="w-36 h-36 object-cover rounded-full border-4 border-white shadow-2xl ring-4 ring-{{ $elite['bg_pattern'] }}-100">
                                @else
                                    <div class="w-36 h-36 bg-gradient-to-br {{ $elite['gradient'] }} rounded-full border-4 border-white shadow-2xl ring-4 ring-{{ $elite['bg_pattern'] }}-100 flex items-center justify-center group-hover:rotate-12 transition-transform duration-500">
                                        <i class="{{ $elite['icon'] }} text-white text-5xl drop-shadow-lg"></i>
                                    </div>
                                @endif
                                
                                <!-- Status Indicator -->
                                <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-gradient-to-r from-green-400 to-emerald-400 rounded-full border-3 border-white shadow-lg flex items-center justify-center">
                                    <div class="w-3 h-3 bg-white rounded-full animate-pulse"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Content -->
                        <div class="px-8 pb-8 relative z-10">
                            <!-- Name and Role -->
                            <div class="text-center mb-6">
                                <h3 class="text-2xl font-bold text-slate-800 mb-3 group-hover:text-emerald-600 transition-colors duration-300">
                                    {{ $elite['name'] }}
                                </h3>
                                <div class="inline-flex items-center gap-2 bg-gradient-to-r {{ $elite['gradient'] }} text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                                    <i class="{{ $elite['icon'] }} text-xs"></i>
                                    <span>{{ $elite['role'] }}</span>
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="mb-6">
                                <p class="text-slate-600 leading-relaxed text-center line-clamp-4 group-hover:text-slate-700 transition-colors duration-300">
                                    {{ $elite['description'] }}
                                </p>
                            </div>

                            <!-- Location -->
                            <div class="flex items-center justify-center gap-3 text-slate-500 bg-slate-50/50 backdrop-blur-sm px-4 py-3 rounded-full border border-slate-100">
                                <div class="w-8 h-8 bg-gradient-to-r {{ $elite['gradient'] }} rounded-full flex items-center justify-center">
                                    <i class="fas fa-map-marker-alt text-white text-sm"></i>
                                </div>
                                <span class="font-medium">{{ $elite['location'] }}</span>
                            </div>

                            <!-- Hover Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-{{ $elite['bg_pattern'] }}-500/5 to-transparent rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                        </div>
                    </div>
                @endforeach
            </div>

         
        </div>
    </section>

    <x-frontend.newsletter />

    <!-- Enhanced Custom Styles -->
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }
        
        @keyframes bounce-slow {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        @keyframes ping-slow {
            0% { transform: scale(1); opacity: 1; }
            75%, 100% { transform: scale(2); opacity: 0; }
        }
        
        @keyframes spin-slow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        @keyframes sway {
            0%, 100% { transform: rotate(-3deg); }
            50% { transform: rotate(3deg); }
        }
        
        @keyframes gradient {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        .animate-bounce-slow {
            animation: bounce-slow 3s ease-in-out infinite;
        }
        
        .animate-ping-slow {
            animation: ping-slow 3s cubic-bezier(0, 0, 0.2, 1) infinite;
        }
        
        .animate-spin-slow {
            animation: spin-slow 8s linear infinite;
        }
        
        .animate-sway {
            animation: sway 4s ease-in-out infinite;
        }
        
        .animate-gradient {
            background-size: 400% 400%;
            animation: gradient 3s ease infinite;
        }
        
        .elite-card {
            animation: fadeInUp 0.8s ease-out forwards;
            opacity: 0;
            transform: translateY(30px);
        }
        
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .line-clamp-4 {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        /* Glass morphism effect */
        .elite-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(255,255,255,0.1), rgba(255,255,255,0));
            border-radius: 1.5rem;
            pointer-events: none;
        }
    </style>
</x-guest-layout>