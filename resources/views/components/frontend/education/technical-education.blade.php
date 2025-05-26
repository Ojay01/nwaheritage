@props([
    'showAnimations' => true,
    'sectionConfig' => [
        'badge' => [
            'text' => 'Skill Development',
            'bgColor' => 'bg-orange-900/30',
            'textColor' => 'text-orange-400'
        ],
        'title' => 'Technical Education',
        'description' => 'Hands-on vocational training and technical education programs designed to create skilled professionals ready for immediate employment and entrepreneurship opportunities in various technical fields.',
        'bgColor' => 'bg-gray-100'
    ],
    'programs' => [
        [
            'id' => 'baccalaureat',
            'title' => 'Baccalauréat Technique',
            'subtitle' => 'Advanced Technical Diploma',
            'duration' => '2 Years',
            'image' => 'https://cdn.pixabay.com/photo/2020/07/08/04/12/work-5382501_1280.jpg',
            'imageAlt' => 'Technical Training',
            'gradientFrom' => 'from-purple-400',
            'gradientTo' => 'to-purple-600',
            'overlayFrom' => 'from-purple-900/60',
            'colorScheme' => 'purple',
            'overview' => 'Advanced technical certification combining theoretical knowledge with intensive practical applications. Students master complex technical concepts and industry-standard practices.',
            'specializations' => [
                'Industrial Electronics',
                'Mechanical Engineering', 
                'Civil Construction',
                'Computer Technology'
            ],
            'careers' => [
                'Technical Supervisor',
                'Engineering Technician',
                'Project Manager',
                'Technical Consultant'
            ],
            'buttonText' => 'See Past Questions',
            'buttonIcon' => 'fas fa-tools',
            'animationDelay' => '0.4s'
        ],
        [
            'id' => 'probatoire',
            'title' => 'Probatoire Technique',
            'subtitle' => 'Technical Foundation Certificate',
            'duration' => '1 Year',
            'image' => 'https://cdn.pixabay.com/photo/2020/07/08/04/12/work-5382501_1280.jpg',
            'imageAlt' => 'Probatoire Technical',
            'gradientFrom' => 'from-indigo-400',
            'gradientTo' => 'to-indigo-600',
            'overlayFrom' => 'from-indigo-900/60',
            'colorScheme' => 'indigo',
            'overview' => 'Foundation-level technical program focusing on essential skills and practical knowledge. Prepares students for technical careers or advanced technical education.',
            'specializations' => [
                'Basic Electronics',
                'Automotive Mechanics',
                'Building Construction',
                'Computer Basics'
            ],
            'careers' => [
                'Technical Assistant',
                'Maintenance Technician',
                'Workshop Assistant',
                'Entry-level Technician'
            ],
            'buttonText' => 'See Past Questions',
            'buttonIcon' => 'fas fa-wrench',
            'animationDelay' => '0.6s'
        ],
        [
            'id' => 'cap',
            'title' => 'CAP (Certificat d\'Aptitude Professionnelle)',
            'subtitle' => 'Professional Skills Certificate',
            'duration' => '4 Years',
            'image' => 'https://cdn.pixabay.com/photo/2020/07/08/04/12/work-5382501_1280.jpg',
            'imageAlt' => 'CAP Training',
            'gradientFrom' => 'from-emerald-400',
            'gradientTo' => 'to-emerald-600',
            'overlayFrom' => 'from-emerald-900/60',
            'colorScheme' => 'emerald',
            'overview' => 'Professional certification program with 4 foundational specializations. Combines theoretical learning with extensive practical training for immediate job market readiness.',
            'specializations' => [
                'Industrial Mechanics & Maintenance',
                'Electrical Installation & Systems',
                'Building & Construction Trades',
                'Information Technology & Digital Skills'
            ],
            'careers' => [
                'Certified Technician',
                'Workshop Supervisor',
                'Independent Contractor',
                'Technical Specialist'
            ],
            'buttonText' => 'Explore Programs',
            'buttonIcon' => 'fas fa-graduation-cap',
            'animationDelay' => '0.8s'
        ]
    ]
])

<!-- Technical Education Section -->
<section class="py-16 {{ $sectionConfig['bgColor'] }} text-gray-800 relative overflow-hidden">
    @if($showAnimations)
    <!-- Animated Background -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 left-20 w-32 h-32 bg-orange-500 rounded-full blur-2xl animate-pulse"></div>
        <div class="absolute bottom-32 right-32 w-40 h-40 bg-purple-500 rounded-full blur-2xl animate-bounce"></div>
        <div class="absolute top-1/2 left-1/3 w-24 h-24 bg-teal-400 rounded-full blur-xl animate-ping"></div>
        <div class="absolute top-1/4 right-1/4 w-28 h-28 bg-emerald-500 rounded-full blur-2xl animate-pulse" style="animation-delay: 1s;"></div>
    </div>
    @endif
    
    <div class="container mx-auto px-6 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-24 {{ $showAnimations ? 'opacity-0 animate-fade-in-up' : '' }}" 
             @if($showAnimations) style="animation-delay: 0.2s;" @endif>
            <span class="text-green-500 font-medium text-sm uppercase tracking-wider bg-green-50 px-4 py-2 rounded-full inline-block">
                {{ $sectionConfig['badge']['text'] }}
            </span>
            <h2 class="text-5xl md:text-6xl lg:text-7xl font-bold mt-8 mb-8 bg-gradient-to-r from-gray-800 via-gray-700 to-gray-800 bg-clip-text text-transparent">
                {{ $sectionConfig['title'] }}
            </h2>
            <p class="text-gray-700 max-w-4xl mx-auto text-xl md:text-2xl leading-relaxed">
                {{ $sectionConfig['description'] }}
            </p>
        </div>

        <!-- Programs Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 max-w-8xl mx-auto">
            @foreach($programs as $program)
            <div class="group bg-gradient-to-br from-white to-gray-50 rounded-3xl shadow-2xl hover:shadow-3xl overflow-hidden transform hover:-translate-y-6 transition-all duration-500 {{ $showAnimations ? 'opacity-0 animate-fade-in-up' : '' }}" 
                 @if($showAnimations) style="animation-delay: {{ $program['animationDelay'] }};" @endif>
                
                <!-- Program Image Header -->
                <div class="h-64 bg-gradient-to-br {{ $program['gradientFrom'] }} {{ $program['gradientTo'] }} relative overflow-hidden">
                    <img src="{{ $program['image'] }}" 
                         alt="{{ $program['imageAlt'] }}" 
                         class="h-full w-full object-cover group-hover:scale-110 transition-transform duration-700 opacity-80">
                    <div class="absolute inset-0 bg-gradient-to-t {{ $program['overlayFrom'] }} to-transparent"></div>
                    
                    <div class="absolute top-6 right-6 bg-white/20 backdrop-blur-sm text-white px-4 py-2 rounded-full text-sm font-semibold">
                        {{ $program['duration'] }}
                    </div>
                    
                    <div class="absolute bottom-6 left-6 text-white">
                        <h3 class="text-2xl font-bold mb-2">{{ $program['title'] }}</h3>
                        <p class="text-{{ $program['colorScheme'] }}-100 text-base">{{ $program['subtitle'] }}</p>
                    </div>
                </div>
                
                <!-- Program Content -->
                <div class="p-8 text-gray-800 space-y-6">
                    <!-- Program Overview -->
                    <div>
                        <h4 class="font-bold mb-3 text-{{ $program['colorScheme'] }}-600 text-lg">Program Overview</h4>
                        <p class="text-gray-600 text-base leading-relaxed">
                            {{ $program['overview'] }}
                        </p>
                    </div>
                    
                    <!-- Career Prospects -->
                    <div>
                        <h4 class="font-bold mb-3 text-{{ $program['colorScheme'] }}-600 text-lg">Career Prospects</h4>
                        <ul class="text-gray-600 text-sm space-y-2">
                            @foreach($program['careers'] as $career)
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-{{ $program['colorScheme'] }}-500 mr-3"></i>
                                {{ $career }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <!-- Action Button -->
                    <a href="#" 
                       class="w-full bg-gradient-to-r from-{{ $program['colorScheme'] }}-500 to-{{ $program['colorScheme'] }}-600 text-white py-4 px-6 rounded-xl font-bold hover:from-{{ $program['colorScheme'] }}-600 hover:to-{{ $program['colorScheme'] }}-700 transform hover:scale-105 transition-all duration-300 flex items-center justify-center text-base group/btn shadow-lg">
                        <i class="{{ $program['buttonIcon'] }} mr-3 group-hover/btn:rotate-12 transition-transform duration-300 text-lg"></i>
                        {{ $program['buttonText'] }}
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>