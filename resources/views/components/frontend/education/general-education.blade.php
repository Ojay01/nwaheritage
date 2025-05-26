@props([
    'showAnimations' => true
])

<!-- General Education Section -->
<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 {{ $showAnimations ? 'opacity-0 animate-fade-in-up' : '' }}" 
             @if($showAnimations) style="animation-delay: 0.2s;" @endif>
            <span class="text-green-500 font-medium text-sm uppercase tracking-wider bg-green-50 px-4 py-2 rounded-full inline-block">
                Academic Excellence
            </span>
            <h3 class="text-4xl md:text-5xl font-bold mt-6 mb-6 text-gray-800">General Education</h3>
            <p class="text-gray-600 max-w-3xl mx-auto text-lg leading-relaxed">
                Comprehensive academic programs following the Cameroonian educational curriculum, preparing students for higher education and professional careers through rigorous academic foundation.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
            <!-- GCE O-Level -->
            <div class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl overflow-hidden transform hover:-translate-y-3 hover:rotate-1 transition-all duration-500 {{ $showAnimations ? 'opacity-0 animate-slide-in-left' : '' }}" 
                 @if($showAnimations) style="animation-delay: 0.4s;" @endif>
                
                <!-- Image Section -->
                <div class="h-64 bg-gradient-to-br from-green-100 to-green-200 relative overflow-hidden">
                    <img src="https://cdn.pixabay.com/photo/2015/07/17/22/43/student-849825_1280.jpg" 
                         alt="O-Level Students" 
                         class="h-full w-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                    
                    <!-- Level Badge -->
                    <div class="absolute top-4 right-4 bg-gradient-to-r from-green-500 to-green-600 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                        Foundation Level
                    </div>
                    
                    <!-- Title Overlay -->
                    <div class="absolute bottom-4 left-4 text-white">
                        <h4 class="text-2xl font-bold mb-1">GCE O-Level</h4>
                        <p class="text-green-100 text-sm">Ordinary Level Certificate</p>
                    </div>
                </div>
                
                <!-- Content Section -->
                <div class="p-8 space-y-6">
                    <div>
                        <h5 class="text-lg font-semibold text-gray-800 mb-3">Program Overview</h5>
                        <p class="text-gray-600 leading-relaxed">
                            The GCE O-Level program provides comprehensive foundation education covering essential subjects including Mathematics, English Language, Sciences, and Humanities. This five-year program prepares students for advanced studies and forms the basis for all higher education pursuits.
                        </p>
                    </div>
                    
                    <!-- Schools Offering -->
                    <div>
                        <h5 class="text-lg font-semibold text-gray-800 mb-3">Available At</h5>
                        <ul class="text-gray-600 text-sm space-y-1">
                            <li>• Government High School Nwa</li>
                            <li>• Presbyterian Secondary School Mbaw</li>
                            <li>• Sacred Heart College Mfumte</li>
                            <li>• Community Secondary School Yamba</li>
                        </ul>
                    </div>
                    
                    <!-- Action Button -->
                    <a href="#" 
                       class="w-full bg-gradient-to-r from-green-500 to-green-600 text-white py-4 px-6 rounded-xl font-semibold hover:from-green-600 hover:to-green-700 transform hover:scale-105 transition-all duration-300 flex items-center justify-center group/btn">
                        <i class="fas fa-file-alt mr-3 group-hover/btn:rotate-12 transition-transform duration-300"></i>
                        See Past Questions
                        <i class="fas fa-arrow-right ml-3 group-hover/btn:translate-x-1 transition-transform duration-300"></i>
                    </a>
                </div>
            </div>

            <!-- GCE A-Level -->
            <div class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl overflow-hidden transform hover:-translate-y-3 hover:-rotate-1 transition-all duration-500 {{ $showAnimations ? 'opacity-0 animate-slide-in-right' : '' }}" 
                 @if($showAnimations) style="animation-delay: 0.6s;" @endif>
                
                <!-- Image Section -->
                <div class="h-64 bg-gradient-to-br from-blue-100 to-blue-200 relative overflow-hidden">
                    <img src="https://cdn.pixabay.com/photo/2017/05/13/12/40/fashion-2309519_1280.jpg" 
                         alt="A-Level Students" 
                         class="h-full w-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                    
                    <!-- Level Badge -->
                    <div class="absolute top-4 right-4 bg-gradient-to-r from-blue-500 to-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                        Advanced Level
                    </div>
                    
                    <!-- Title Overlay -->
                    <div class="absolute bottom-4 left-4 text-white">
                        <h4 class="text-2xl font-bold mb-1">GCE A-Level</h4>
                        <p class="text-blue-100 text-sm">Advanced Level Certificate</p>
                    </div>
                </div>
                
                <!-- Content Section -->
                <div class="p-8 space-y-6">
                    <div>
                        <h5 class="text-lg font-semibold text-gray-800 mb-3">Program Overview</h5>
                        <p class="text-gray-600 leading-relaxed">
                            The GCE A-Level program offers specialized advanced education with students focusing on specific subject combinations. This two-year program directly prepares students for university admission and professional career paths through intensive academic study.
                        </p>
                    </div>
                    
                    <!-- Schools Offering -->
                    <div>
                        <h5 class="text-lg font-semibold text-gray-800 mb-3">Available At</h5>
                        <ul class="text-gray-600 text-sm space-y-1">
                            <li>• Government High School Nwa</li>
                            <li>• Presbyterian Secondary School Mbaw</li>
                            <li>• Sacred Heart College Mfumte</li>
                        </ul>
                    </div>
                    
                    <!-- Action Button -->
                    <a href="#" 
                       class="w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white py-4 px-6 rounded-xl font-semibold hover:from-blue-600 hover:to-blue-700 transform hover:scale-105 transition-all duration-300 flex items-center justify-center group/btn">
                        <i class="fas fa-file-alt mr-3 group-hover/btn:rotate-12 transition-transform duration-300"></i>
                        See Past Questions
                        <i class="fas fa-arrow-right ml-3 group-hover/btn:translate-x-1 transition-transform duration-300"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>