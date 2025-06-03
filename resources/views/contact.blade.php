{{-- Page Title Sections --}}
@section('title', 'Contact Us')
@section('pageTitle', 'Get in Touch')
@section('description', 'Contact Nwa Sub-Division Heritage for inquiries about our culture, community, and visiting opportunities.')

<x-guest-layout>
    <x-frontend.banner description="Connect with Nwa Sub-Division Heritage (MASU)" background="/images/contact.jpg" />

    <!-- Contact Section -->
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="text-green-500 font-medium">Get in Touch</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-2 mb-4">Contact Us</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Have questions about visiting Nwa Sub-Division? Want to learn more about our heritage and culture? Reach out to us!
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Contact Form -->
                <div class="lg:col-span-2 bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-2xl font-bold mb-6">Send a Message</h3>
                    
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                            <ul class="list-disc list-inside">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="#" id="contactForm">
                        @csrf
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="name">
                                    Full Name <span class="text-red-500">*</span>
                                </label>
                                <input 
                                    type="text" 
                                    id="name" 
                                    name="name"
                                    value="{{ old('name') }}"
                                    required
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50 transition @error('name') border-red-500 @enderror" 
                                    placeholder="Your name"
                                >
                                @error('name')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="email">
                                    Email Address <span class="text-red-500">*</span>
                                </label>
                                <input 
                                    type="email" 
                                    id="email" 
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50 transition @error('email') border-red-500 @enderror" 
                                    placeholder="Your email"
                                >
                                @error('email')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label class="block text-gray-700 font-medium mb-2" for="subject">
                                Subject <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="subject" 
                                name="subject"
                                value="{{ old('subject') }}"
                                required
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50 transition @error('subject') border-red-500 @enderror" 
                                placeholder="Message subject"
                            >
                            @error('subject')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="mb-6">
                            <label class="block text-gray-700 font-medium mb-2" for="message">
                                Message <span class="text-red-500">*</span>
                            </label>
                            <textarea 
                                id="message" 
                                name="message"
                                rows="5" 
                                required
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50 transition @error('message') border-red-500 @enderror" 
                                placeholder="Your message"
                            >{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- reCAPTCHA -->
                        <div class="mb-6">
                            <div class="g-recaptcha" 
                                 data-sitekey="6Lf86FMrAAAAAJAWYOpm-uE-4Op0xCJDCGq67bWc"
                                 data-callback="onRecaptchaComplete"
                                 data-expired-callback="onRecaptchaExpired">
                            </div>
                            
                            <!-- reCAPTCHA Error Message -->
                            <div id="recaptcha-error" class="hidden mt-2 p-3 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                                <div class="flex items-center">
                                    <i class="fas fa-exclamation-circle mr-2"></i>
                                    <span>Please complete the reCAPTCHA verification to continue.</span>
                                </div>
                            </div>
                            
                            @error('g-recaptcha-response')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <button 
                            type="submit" 
                            class="bg-green-500 hover:bg-green-600 text-white px-8 py-3 rounded-lg transition font-medium disabled:opacity-50 disabled:cursor-not-allowed"
                            id="submitBtn"
                        >
                            <i class="fas fa-paper-plane mr-2"></i> 
                            <span id="submitText">Send Message</span>
                        </button>
                    </form>
                </div>
                
                <!-- Contact Information -->
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-2xl font-bold mb-6">Contact Information</h3>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-green-100 p-3 rounded-lg mr-4 flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-green-500"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Address</h4>
                                <p class="text-gray-600">Nwa Sub-Division, Donga-Mantung Division, North West Region, Cameroon</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-green-100 p-3 rounded-lg mr-4 flex-shrink-0">
                                <i class="fas fa-phone text-green-500"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Phone</h4>
                                <p class="text-gray-600">
                                    <a href="tel:+237XXXXXXXXX" class="hover:text-green-500 transition">+237 XXX XXX XXX</a>
                                </p>
                                <p class="text-gray-600">
                                    <a href="tel:+237XXXXXXXXX" class="hover:text-green-500 transition">+237 XXX XXX XXX</a>
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-green-100 p-3 rounded-lg mr-4 flex-shrink-0">
                                <i class="fas fa-envelope text-green-500"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Email</h4>
                                <p class="text-gray-600">
                                    <a href="mailto:info@nwaheritage.com" class="hover:text-green-500 transition">info@nwaheritage.com</a>
                                </p>
                                <p class="text-gray-600">
                                    <a href="mailto:contact@nwaheritage.com" class="hover:text-green-500 transition">contact@nwaheritage.com</a>
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-green-100 p-3 rounded-lg mr-4 flex-shrink-0">
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
                            <a href="#" class="bg-green-100 hover:bg-green-200 text-green-500 p-3 rounded-lg transition" aria-label="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="bg-green-100 hover:bg-green-200 text-green-500 p-3 rounded-lg transition" aria-label="Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="bg-green-100 hover:bg-green-200 text-green-500 p-3 rounded-lg transition" aria-label="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="bg-green-100 hover:bg-green-200 text-green-500 p-3 rounded-lg transition" aria-label="YouTube">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        let recaptchaCompleted = false;
        
        // Callback function when reCAPTCHA is completed
        function onRecaptchaComplete(token) {
            recaptchaCompleted = true;
            updateSubmitButton();
            hideRecaptchaError();
        }
        
        // Callback function when reCAPTCHA expires
        function onRecaptchaExpired() {
            recaptchaCompleted = false;
            updateSubmitButton();
        }
        
        function updateSubmitButton() {
            const submitBtn = document.getElementById('submitBtn');
            const form = document.getElementById('contactForm');
            const isFormValid = form.checkValidity();
            
            if (recaptchaCompleted && isFormValid) {
                submitBtn.disabled = false;
                submitBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                submitBtn.classList.add('hover:bg-green-600');
            } else {
                submitBtn.disabled = true;
                submitBtn.classList.add('opacity-50', 'cursor-not-allowed');
                submitBtn.classList.remove('hover:bg-green-600');
            }
        }
        
        function showRecaptchaError() {
            const errorDiv = document.getElementById('recaptcha-error');
            errorDiv.classList.remove('hidden');
            errorDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
        
        function hideRecaptchaError() {
            const errorDiv = document.getElementById('recaptcha-error');
            errorDiv.classList.add('hidden');
        }
        
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('contactForm');
            const submitBtn = document.getElementById('submitBtn');
            const submitText = document.getElementById('submitText');
            const inputs = form.querySelectorAll('input[required], textarea[required]');
            
            // Initially disable submit button
            updateSubmitButton();
            
            // Add event listeners to form inputs
            inputs.forEach(input => {
                input.addEventListener('input', updateSubmitButton);
                input.addEventListener('blur', updateSubmitButton);
            });
            
            // Form submission handler
            form.addEventListener('submit', function(e) {
                hideRecaptchaError();
                
                // Check if reCAPTCHA is completed
                if (!recaptchaCompleted) {
                    e.preventDefault();
                    showRecaptchaError();
                    return;
                }
                
                // Update button state for submission
                submitBtn.disabled = true;
                submitText.textContent = 'Sending...';
                submitBtn.classList.add('opacity-50', 'cursor-not-allowed');
            });
        });
    </script>
</x-guest-layout>