<x-guest-layout>

  <x-frontend.banner description="Connect with Nwa Sub-Division Heritage (MASU)" background="/images/contact.jpg" />

    <!-- Contact Section -->
    <section  class="py-20 bg-gray-100">
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

</x-guest-layout>