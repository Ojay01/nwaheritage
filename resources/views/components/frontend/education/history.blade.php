@props([
    'showAnimations' => true
])

<style>
@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes slideInRight {
    from { opacity: 0; transform: translateX(30px); }
    to { opacity: 1; transform: translateX(0); }
}

@keyframes slideInLeft {
    from { opacity: 0; transform: translateX(-30px); }
    to { opacity: 1; transform: translateX(0); }
}

.animate-fade-in-up { animation: fadeInUp 0.8s ease-out forwards; }
.animate-slide-in-right { animation: slideInRight 0.8s ease-out forwards; }
.animate-slide-in-left { animation: slideInLeft 0.8s ease-out forwards; }

@media (prefers-reduced-motion: reduce) {
    *, *::before, *::after { animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; }
}
</style>

<!-- Education History & Overview -->
<section class="py-12 bg-gray-100 relative overflow-hidden">
    
    <div class="container mx-auto px-4 relative z-10">
        <!-- Header -->
        <div class="text-center mb-20 {{ $showAnimations ? 'opacity-0 animate-fade-in-up' : '' }}" 
             @if($showAnimations) style="animation-delay: 0.2s;" @endif>
            <span class="text-green-500 font-medium text-sm uppercase tracking-wider bg-green-50 px-4 py-2 rounded-full inline-block transform hover:scale-105 transition-all duration-300">
                Educational Excellence
            </span>
            <h2 class="text-4xl md:text-6xl font-bold mt-6 mb-8 bg-gradient-to-r from-gray-900 via-green-800 to-green-900 bg-clip-text text-transparent">
                Education in Nwa Sub-Division
            </h2>
            <p class="text-gray-600 max-w-4xl mx-auto text-xl leading-relaxed">
                Our educational system combines traditional values with modern learning approaches, preparing students for both local and global opportunities through comprehensive general and technical education programs.
            </p>
        </div>

        <!-- Main History Content -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- History Text -->
            <div class="{{ $showAnimations ? 'opacity-0 animate-slide-in-left' : '' }}" 
                 @if($showAnimations) style="animation-delay: 0.4s;" @endif>
                <h3 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-graduation-cap text-green-500 mr-3"></i>
                    Our Educational Heritage
                </h3>
                
                <div class="space-y-6 text-gray-700 leading-relaxed">
                    <p class="text-lg">
                        Education in Nwa Sub-Division has a remarkable history that spans over eight decades, beginning with the establishment of the first missionary school in 1940 by Presbyterian missionaries. What started as a small classroom under a mango tree has evolved into a comprehensive educational ecosystem serving thousands of students across our three clans.
                    </p>
                    
                    <p class="text-lg">
                        The 1960s marked a significant turning point when the government of Cameroon introduced formal educational policies that saw the establishment of Government Primary Schools in each major village. By 1975, Nwa Sub-Division had its first secondary school, Government High School Nwa, which became the foundation for advanced learning in the region.
                    </p>
                    
                    <p class="text-lg">
                        The introduction of technical education in the 1980s revolutionized skill development in our community. The Government Technical College (GTC) Nwa, established in 1983, became the first technical institution to offer CAP, Probatoire, and Baccalauréat programs, directly addressing the need for skilled technicians and artisans in the region.
                    </p>
                    
                    <p class="text-lg">
                        Today, our educational landscape includes over 25 institutions ranging from nursery schools to technical colleges, with a combined enrollment of more than 8,000 students. Our graduates have gone on to become doctors, engineers, teachers, and skilled professionals both within Cameroon and internationally.
                    </p>
                </div>
            </div>

            <!-- Images Grid -->
            <div class="{{ $showAnimations ? 'opacity-0 animate-slide-in-right' : '' }}" 
                 @if($showAnimations) style="animation-delay: 0.6s;" @endif>
                <div class="grid grid-cols-2 gap-4 h-full">
                    <!-- Large featured image -->
                    <div class="col-span-2 relative group">
                        <img src="/images/school.jpg" 
                             alt="Historical school building" 
                             class="w-full h-64 object-cover rounded-2xl shadow-lg group-hover:shadow-2xl transition-all duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent rounded-2xl"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h4 class="text-lg font-semibold">Government High School Nwa</h4>
                        </div>
                    </div>
                    
                    <!-- Two smaller images -->
                    <div class="relative group">
                        <img src="https://cdn.pixabay.com/photo/2015/07/17/22/43/student-849825_1280.jpg" 
                             alt="Students in class" 
                             class="w-full h-48 object-cover rounded-xl shadow-lg group-hover:shadow-xl transition-all duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent rounded-xl"></div>
                        <div class="absolute bottom-2 left-2 text-white text-sm font-medium">
                            Modern Classroom
                        </div>
                    </div>
                    
                    <div class="relative group">
                        <img src="https://cdn.pixabay.com/photo/2020/07/08/04/12/work-5382501_1280.jpg" 
                             alt="Technical workshop" 
                             class="w-full h-48 object-cover rounded-xl shadow-lg group-hover:shadow-xl transition-all duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent rounded-xl"></div>
                        <div class="absolute bottom-2 left-2 text-white text-sm font-medium">
                            Technical Workshop
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>