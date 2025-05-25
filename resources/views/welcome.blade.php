<x-guest-layout>

        <x-frontend.hero   :primary-button="[
        'text' => 'Explore Clans',
        'url' => '#',
        'icon' => 'fas fa-compass'
    ]"
    :secondary-button="[
        'text' => 'Discover Sites',
        'url' => '#',
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
                        <a href="/tourism/kopdze-cave" class="text-green-500 hover:text-green-600 font-medium flex items-center">
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
                <a href="/tourism" class="bg-green-500 hover:bg-green-600 text-white px-8 py-3 rounded-lg transition font-medium inline-flex items-center">
                    <i class="fas fa-map-marked-alt mr-2"></i> View All Attractions
                </a>
            </div>
        </div>
    </section>



    <x-frontend.geography />

    <!-- Contact Section -->
  <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="text-green-500 font-medium">Get in Touch</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-2 mb-4">Contact Us</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Have questions about visiting Nwa Sub-Division? Want to learn more about our heritage and culture? Reach out to us!</p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Contact Form -->
                <div class="lg:col-span-2 bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-2xl font-bold mb-6">Send a Message</h3>
                    <form>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="name">Full Name</label>
                                <input type="text" id="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50 transition" placeholder="Your name">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="email">Email Address</label>
                                <input type="email" id="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50 transition" placeholder="Your email">
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label class="block text-gray-700 font-medium mb-2" for="subject">Subject</label>
                            <input type="text" id="subject" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50 transition" placeholder="Message subject">
                        </div>
                        
                        <div class="mb-6">
                            <label class="block text-gray-700 font-medium mb-2" for="message">Message</label>
                            <textarea id="message" rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50 transition" placeholder="Your message"></textarea>
                        </div>
                        
                        <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-8 py-3 rounded-lg transition font-medium">
                            <i class="fas fa-paper-plane mr-2"></i> Send Message
                        </button>
                    </form>
                </div>
                
                <!-- Contact Information -->
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-2xl font-bold mb-6">Contact Information</h3>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-green-100 p-3 rounded-lg mr-4">
                                <i class="fas fa-map-marker-alt text-green-500"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Address</h4>
                                <p class="text-gray-600">Nwa Sub-Division, Donga-Mantung Division, North West Region, Cameroon</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-green-100 p-3 rounded-lg mr-4">
                                <i class="fas fa-phone text-green-500"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Phone</h4>
                                <p class="text-gray-600">+237 XXX XXX XXX</p>
                                <p class="text-gray-600">+237 XXX XXX XXX</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-green-100 p-3 rounded-lg mr-4">
                                <i class="fas fa-envelope text-green-500"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Email</h4>
                                <p class="text-gray-600">info@nwaheritage.com</p>
                                <p class="text-gray-600">contact@nwaheritage.com</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-green-100 p-3 rounded-lg mr-4">
                                <i class="fas fa-clock text-green-500"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Office Hours</h4>
                                <p class="text-gray-600">Monday-Friday: 8AM - 5PM</p>
                                <p class="text-gray-600">Saturday: 9AM - 1PM</p>
                                <p class="text-gray-600">Sunday: Closed</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8">
                        <h4 class="font-bold mb-4">Follow Us</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="bg-green-100 hover:bg-green-200 text-green-500 p-3 rounded-lg transition">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="bg-green-100 hover:bg-green-200 text-green-500 p-3 rounded-lg transition">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="bg-green-100 hover:bg-green-200 text-green-500 p-3 rounded-lg transition">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="bg-green-100 hover:bg-green-200 text-green-500 p-3 rounded-lg transition">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-green-500">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="mb-6 md:mb-0">
                    <h3 class="text-2xl font-bold text-white mb-2">Subscribe to Our Newsletter</h3>
                    <p class="text-green-100">Stay updated with the latest news and events from Nwa Sub-Division.</p>
                </div>
                <div class="w-full md:w-auto">
                    <form class="flex">
                        <input type="email" placeholder="Your email address" class="px-4 py-3 rounded-l-lg w-full md:w-64 focus:outline-none">
                        <button type="submit" class="bg-slate-800 hover:bg-slate-900 text-white px-6 py-3 rounded-r-lg transition font-medium">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    


</x-guest-layout>