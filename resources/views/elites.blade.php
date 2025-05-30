<x-guest-layout>
    <x-frontend.banner title="MASU team"
        description="Meet the dedicated leaders and key members of the Mantung Students Union, driving cultural preservation and community development."
        background="/images/elites.jpg" />

    <!-- Enhanced team Section -->
    <section
        class="py-24 bg-gradient-to-br from-slate-50 via-white to-emerald-50 relative overflow-hidden min-h-screen">
        <!-- Enhanced Background Pattern -->
        <div class="absolute inset-0 opacity-20">
            <div
                class="absolute top-20 left-20 w-64 h-64 bg-gradient-to-r from-emerald-400 to-teal-400 rounded-full blur-3xl animate-pulse">
            </div>
            <div
                class="absolute bottom-32 right-32 w-72 h-72 bg-gradient-to-r from-green-300 to-emerald-300 rounded-full blur-3xl animate-float">
            </div>
            <div
                class="absolute top-1/2 left-1/4 w-48 h-48 bg-gradient-to-r from-teal-400 to-cyan-400 rounded-full blur-2xl animate-bounce-slow">
            </div>
            <div class="absolute top-1/4 right-1/4 w-32 h-32 bg-emerald-500/30 rounded-full blur-xl animate-ping-slow">
            </div>
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
                <div
                    class="inline-flex items-center gap-3 bg-gradient-to-r from-emerald-500/10 to-teal-500/10 backdrop-blur-sm border border-emerald-200/50 px-8 py-4 rounded-full mb-8">
                    <div class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></div>
                    <span class="text-emerald-700 font-semibold text-lg uppercase tracking-wider">
                        Our Key Members
                    </span>
                    <div class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></div>
                </div>

                <h2 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-8 text-slate-800 leading-tight">
                    Meet the
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 via-teal-600 to-green-600 animate-gradient">
                        MASU
                    </span>
                    Team
                </h2>

                <div class="max-w-4xl mx-auto">
                    <p class="text-slate-600 text-xl md:text-2xl leading-relaxed font-light">
                        Discover the passionate individuals leading the Mantung Students Union, committed to fostering
                        <span class="text-emerald-600 font-medium">cultural heritage</span> and
                        <span class="text-teal-600 font-medium">community growth</span> in Nwa Sub-Division.
                    </p>
                </div>
            </div>

            <!-- Enhanced team Grid -->
            @php
                $team = [
                    [
                        'name' => 'Fumlak Kenneth Kongbuin',
                        'role' => 'President of MASU',
                        'nickname' => 'LORDSMITH_1',
                        'image' => '/images/team/fumlak.png',
                        'description' => 'Fumlak Kenneth is a charismatic leader and respected cryptocurrency trader, known by the handle LORDSMITH_1. He holds a Bachelor\'s degree (BSc) in Biochemistry and a Master\'s degree (MSc) in Food and Bioresource Technology from the College of Technology at the University of Bamenda. Newly wedded, he brings visionary leadership to MASU\'s mission of empowering students and preserving cultural heritage.',
                        'location' => 'Mutengene, SWR',
                        'icon' => 'fas fa-crown',
                        'gradient' => 'from-emerald-500 to-teal-500',
                        'bg_pattern' => 'emerald',
                    ],
                    [
                        'name' => 'Voh Bryant Rihnwi',
                        'role' => 'National Secretary General',
                        'nickname' => null,
                        'image' => '/images/team/voh.png',
                        'description' => 'Bryant is from Nwa Central and holds a Teacher Grade I certificate from Baptist Teacher\'s Training College in Ndop, a degree in Educational Psychology from the Faculty of Education at the University of Bamenda, and is a first-class graduate of DIPEN II in Science of Education from Private École Normale Supérieure (ENS). Currently seeking employment opportunities.',
                        'location' => 'Bamenda, NWR',
                        'icon' => 'fas fa-file-alt',
                        'gradient' => 'from-blue-500 to-indigo-500',
                        'bg_pattern' => 'blue',
                    ],
                    [
                        'name' => 'Bonvomuk Cedrick',
                        'role' => 'Vice President of MASU',
                        'nickname' => 'BTC Lord (BONVIBTC)',
                        'image' => '/images/team/ben.jpg',
                        'description' => 'Known as the "BTC Lord" for his deep knowledge and involvement in cryptocurrency, Cedrick hails from ROM village. He holds a Bachelor\'s degree in Physics from the University of Buea and a degree in Petroleum Engineering from National Higher Polytechnique Institute (NAHPI) at the University of Bamenda.',
                        'location' => 'Buea, SWR',
                        'icon' => 'fas fa-bitcoin',
                        'gradient' => 'from-orange-500 to-red-500',
                        'bg_pattern' => 'orange',
                    ],
                    [
                        'name' => 'Mengu Armstrong Nsong',
                        'role' => 'Treasurer of MASU',
                        'nickname' => null,
                        'image' => '/images/team/mengu.jpg',
                        'description' => 'From Nwa Central, Armstrong serves as Manager of the Bamenda Police Cooperative Credit Union (BAPCCUL Nwa Branch). A proud father of five children (three daughters and two sons), he has ten years of experience at BAPCCUL, starting as a marketer, promoted to credit officer after two years, and became manager in 2023.',
                        'location' => 'Nwa Central',
                        'icon' => 'fas fa-coins',
                        'gradient' => 'from-green-500 to-emerald-500',
                        'bg_pattern' => 'green',
                    ],
                    [
                        'name' => 'Gabuin Nena Epouse Kimbi',
                        'role' => 'Female Sports Coordinator',
                        'nickname' => null,
                        'image' => null,
                        'description' => 'Hailing from Mfe village, Gabuin Nena is a passionate blogger and serves as the female sports coordinator for MASU. She is married with four children and brings creative content creation skills to the organization.',
                        'location' => 'Nwa',
                        'icon' => 'fas fa-running',
                        'gradient' => 'from-pink-500 to-rose-500',
                        'bg_pattern' => 'pink',
                    ],
                    [
                        'name' => 'Webnjoh Bless Webngong',
                        'role' => 'National Organizing Secretary',
                        'nickname' => null,
                        'image' => null,
                        'description' => 'Bless brings valuable expertise in economics and finance to the MASU team. He holds a Bachelor\'s degree in Economics and Management, specializing in Money, Banking, and Finance from the University of Yaoundé II-SOA. Currently seeking employment opportunities.',
                        'location' => 'Yaoundé, Center Region',
                        'icon' => 'fas fa-chart-line',
                        'gradient' => 'from-purple-500 to-violet-500',
                        'bg_pattern' => 'purple',
                    ],
                    [
                        'name' => 'Lakbub Kwasinwi Craford',
                        'role' => 'Financial Secretary',
                        'nickname' => 'CEO of Kwassy Bites',
                        'image' => '/images/team/lakbub.png',
                        'description' => 'From Gom village, Craford holds a Bachelor\'s degree in Mass Communication from the University of Bamenda. She is also the CEO of Kwassy Bites, specializing in cakes and pastries. Currently seeking employment opportunities while managing her business.',
                        'location' => 'Nwa',
                        'icon' => 'fas fa-calculator',
                        'gradient' => 'from-teal-500 to-cyan-500',
                        'bg_pattern' => 'teal',
                    ],
                    [
                        'name' => 'Voh Buikame Armstrong Kawa',
                        'role' => 'Patron of MASU',
                        'nickname' => 'Prince of Nwa Palace',
                        'image' => '/images/team/kawa.png',
                        'description' => 'A prince of Nwa palace and veteran President of MASU (1994), Armstrong currently serves as the Divisional Officer for Tiko Sub Division. His extensive administrative experience and former presidency provide pivotal guidance for MASU\'s vision of community development.',
                        'location' => 'Tiko Sub Division',
                        'icon' => 'fas fa-shield-alt',
                        'gradient' => 'from-yellow-500 to-amber-500',
                        'bg_pattern' => 'yellow',
                    ],
                    [
                        'name' => 'Adamu Wilfred Kaleng',
                        'role' => 'Social Media & PR Specialist',
                        'nickname' => 'WILFRED PLANNER, Founder of W-Pictures',
                        'image' => '/images/team/adamu.jpg',
                        'description' => 'From Mbem village, Wilfred is a filmmaker and Founder of W-Pictures. He serves as the social media and public relations specialist for MASU, bringing creative storytelling and digital marketing expertise to promote the union\'s mission.',
                        'location' => 'Douala, Littoral Region',
                        'icon' => 'fas fa-video',
                        'gradient' => 'from-indigo-500 to-blue-500',
                        'bg_pattern' => 'indigo',
                    ],
                    [
                        'name' => 'Mrs. Lakbub née Frida Mbosimuan Menyong',
                        'role' => 'Matron of MASU',
                        'nickname' => null,
                        'image' => '/images/team/friday.png',
                        'description' => 'Mrs. Lakbub is a retired teacher of Basic Education and native of Mbirikpa, married to Lakbub John of Gom. She began teaching in 1981, spending 27 years in primary and nursery schools. She later became a Divisional Pedagogic Adviser and Inspector of Basic Education for Nwa, Ako, and Nkum. Currently serves as Donga Divisional Representative of the North West Regional Assembly and is a mother of seven.',
                        'location' => 'Nwa',
                        'icon' => 'fas fa-chalkboard-teacher',
                        'gradient' => 'from-rose-500 to-pink-500',
                        'bg_pattern' => 'rose',
                    ],
                ];
            @endphp

            <div id="team-grid" class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-12 max-w-7xl mx-auto">
                @foreach ($team as $index => $elite)
                    <div class="elite-card group mt-8 relative bg-white/70 backdrop-blur-sm rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-white/50"
                        style="animation-delay: {{ $index * 0.2 }}s">

                        <!-- Card Background Pattern -->
                        <div class="absolute inset-0 rounded-3xl opacity-5">
                            <div
                                class="absolute top-4 right-4 w-20 h-20 bg-gradient-to-r {{ $elite['gradient'] }} rounded-full blur-2xl">
                            </div>
                            <div
                                class="absolute bottom-6 left-6 w-16 h-16 bg-gradient-to-r {{ $elite['gradient'] }} rounded-full blur-xl">
                            </div>
                        </div>

                        <!-- Glassmorphism overlay -->
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent rounded-3xl pointer-events-none">
                        </div>

                        <!-- Profile Image Section -->
                        <div class="relative flex justify-center -mt-16 mb-8">
                            <div class="relative group-hover:scale-110 transition-transform duration-500">
                                @if ($elite['image'])
                                    <img src="{{ $elite['image'] }}" alt="{{ $elite['name'] }}"
                                        class="w-36 h-36 object-cover rounded-full border-4 border-white shadow-2xl ring-4 ring-{{ $elite['bg_pattern'] }}-100">
                                @else
                                    <div
                                        class="w-36 h-36 bg-gradient-to-br {{ $elite['gradient'] }} rounded-full border-4 border-white shadow-2xl ring-4 ring-{{ $elite['bg_pattern'] }}-100 flex items-center justify-center group-hover:rotate-12 transition-transform duration-500">
                                        <i class="{{ $elite['icon'] }} text-white text-5xl drop-shadow-lg"></i>
                                    </div>
                                @endif

                                <!-- Status Indicator -->
                                <div
                                    class="absolute -bottom-2 -right-2 w-8 h-8 bg-gradient-to-r from-green-400 to-emerald-400 rounded-full border-3 border-white shadow-lg flex items-center justify-center">
                                    <div class="w-3 h-3 bg-white rounded-full animate-pulse"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Content -->
                        <div class="px-8 pb-8 relative z-10">
                            <!-- Name and Role -->
                            <div class="text-center mb-6">
                                <h3
                                    class="text-2xl font-bold text-slate-800 mb-2 group-hover:text-emerald-600 transition-colors duration-300">
                                    {{ $elite['name'] }}
                                </h3>

                                @if ($elite['nickname'])
                                    <p class="text-sm text-slate-500 mb-2 italic">{{ $elite['nickname'] }}</p>
                                @endif

                                <div
                                    class="inline-flex items-center gap-2 bg-gradient-to-r {{ $elite['gradient'] }} text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                                    <i class="{{ $elite['icon'] }} text-xs"></i>
                                    <span>{{ $elite['role'] }}</span>
                                </div>
                            </div>

                            <!-- Description with See More/Less -->
                            <div class="mb-6">
                                <div class="description-container" data-index="{{ $index }}">
                                    <div class="description-content overflow-hidden transition-all duration-700 ease-in-out"
                                        style="max-height: 6rem;">
                                        <p
                                            class="text-slate-600 leading-relaxed text-center group-hover:text-slate-700 transition-colors duration-300">
                                            {{ $elite['description'] }}
                                        </p>
                                    </div>
                                </div>

                                @if (strlen($elite['description']) > 120)
                                    <div class="text-center mt-4">
                                        <button
                                            class="see-more-btn inline-flex items-center gap-2 text-emerald-600 hover:text-emerald-700 font-medium text-sm transition-all duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-opacity-50 rounded-lg px-3 py-1"
                                            onclick="toggleDescription({{ $index }})">
                                            <span class="btn-text">See more</span>
                                            <i class="fas fa-chevron-down transition-transform duration-300 btn-icon"></i>
                                        </button>
                                    </div>
                                @endif
                            </div>

                            <!-- Location -->
                            <div
                                class="flex items-center justify-center gap-3 text-slate-500 bg-slate-50/50 backdrop-blur-sm px-4 py-3 rounded-full border border-slate-100">
                                <div
                                    class="w-8 h-8 bg-gradient-to-r {{ $elite['gradient'] }} rounded-full flex items-center justify-center">
                                    <i class="fas fa-map-marker-alt text-white text-sm"></i>
                                </div>
                                <span class="font-medium">{{ $elite['location'] }}</span>
                            </div>

                            <!-- Hover Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-{{ $elite['bg_pattern'] }}-500/5 to-transparent rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-frontend.newsletter />

    <!-- Tailwind Animations and Custom Styles -->
    <style>
        /* Custom animations using Tailwind-compatible approach */
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

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(5deg);
            }
        }

        @keyframes bounce-slow {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes ping-slow {
            0% {
                transform: scale(1);
                opacity: 1;
            }

            75%,
            100% {
                transform: scale(2);
                opacity: 0;
            }
        }

        @keyframes spin-slow {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        @keyframes sway {

            0%,
            100% {
                transform: rotate(-3deg);
            }

            50% {
                transform: rotate(3deg);
            }
        }

        @keyframes gradient {

            0%,
            100% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Smooth height transitions for description */
        .description-expanded {
            max-height: 1000px !important;
        }
    </style>

    <!-- Enhanced JavaScript for Smooth See More/Less functionality -->
    <script>
        function toggleDescription(index) {
            const container = document.querySelector(`[data-index="${index}"]`);
            const content = container.querySelector('.description-content');
            const button = container.parentElement.querySelector('.see-more-btn');
            const btnText = button.querySelector('.btn-text');
            const btnIcon = button.querySelector('.btn-icon');

            const isExpanded = content.classList.contains('description-expanded');

            if (isExpanded) {
                // Collapse
                content.classList.remove('description-expanded');
                content.style.maxHeight = '6rem';
                btnText.textContent = 'See more';
                btnIcon.style.transform = 'rotate(0deg)';

                // Add subtle bounce effect
                button.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    button.style.transform = 'scale(1)';
                }, 150);
            } else {
                // Expand
                content.classList.add('description-expanded');
                content.style.maxHeight = content.scrollHeight + 'px';
                btnText.textContent = 'See less';
                btnIcon.style.transform = 'rotate(180deg)';

                // Add subtle bounce effect
                button.style.transform = 'scale(1.05)';
                setTimeout(() => {
                    button.style.transform = 'scale(1)';
                }, 150);
            }
        }

        // Add smooth transitions on page load
        document.addEventListener('DOMContentLoaded', function () {
            const descriptions = document.querySelectorAll('.description-content');
            descriptions.forEach(desc => {
                desc.style.transition = 'max-height 0.7s cubic-bezier(0.4, 0, 0.2, 1)';
            });

            const buttons = document.querySelectorAll('.see-more-btn');
            buttons.forEach(btn => {
                btn.style.transition = 'all 0.3s ease';
            });
        });
    </script>
</x-guest-layout>