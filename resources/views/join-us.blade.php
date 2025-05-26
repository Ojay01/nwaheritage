<x-guest-layout>
    <x-frontend.banner 
        title="Join MaSu Today" 
        description="Become a member of the Menchum Association of Students Union and connect with your heritage, culture, and fellow students." 
        background="/images/joinus.jpg" 
    />

    <!-- Membership Application Form Section -->
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
                    Membership Application
                </span>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mt-8 mb-6 text-gray-800">
                    Join Our <span class="text-green-600">Community</span>
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto text-lg md:text-xl leading-relaxed">
                    Fill out the form below to become a proud member of MaSu. Connect with your roots, 
                    build lasting relationships, and contribute to our vibrant community.
                </p>
            </div>

            <!-- Application Form -->
            <div class="max-w-4xl mx-auto">
                <form id="membershipForm" class="bg-white rounded-3xl shadow-2xl p-8 md:p-12 space-y-8" enctype="multipart/form-data">
                    @csrf
                    
                    <!-- Personal Information Section -->
                    <div class="border-b border-gray-200 pb-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                            <i class="fas fa-user text-green-600 mr-3"></i>
                            Personal Information
                        </h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Full Name -->
                            <div class="md:col-span-2">
                                <label for="fullName" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Full Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="fullName" name="full_name" required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300"
                                       placeholder="Enter your full name">
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Email Address <span class="text-red-500">*</span>
                                </label>
                                <input type="email" id="email" name="email" required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300"
                                       placeholder="your.email@example.com">
                            </div>

                            <!-- Phone Number -->
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Phone Number <span class="text-red-500">*</span>
                                </label>
                                <input type="tel" id="phone" name="phone" required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300"
                                       placeholder="+237 XXX XXX XXX">
                            </div>

                            <!-- Date of Birth -->
                            <div>
                                <label for="dateOfBirth" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Date of Birth <span class="text-red-500">*</span>
                                </label>
                                <input type="date" id="dateOfBirth" name="date_of_birth" required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300">
                            </div>

                            <!-- Sex -->
                            <div>
                                <label for="sex" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Sex <span class="text-red-500">*</span>
                                </label>
                                <select id="sex" name="sex" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300">
                                    <option value="">Select your sex</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>

                            <!-- Occupation -->
                            <div class="md:col-span-2">
                                <label for="occupation" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Occupation <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="occupation" name="occupation" required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300"
                                       placeholder="Student, Professional, etc.">
                            </div>

                            <!-- Current Residence -->
                            <div class="md:col-span-2">
                                <label for="currentResidence" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Current Residence <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="currentResidence" name="current_residence" required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300"
                                       placeholder="City, Country where you currently live">
                            </div>
                        </div>
                    </div>

                    <!-- Cultural Heritage Section -->
                    <div class="border-b border-gray-200 pb-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                            <i class="fas fa-mountain text-green-600 mr-3"></i>
                            Cultural Heritage
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Clan Selection -->
                            <div>
                                <label for="clan" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Clan <span class="text-red-500">*</span>
                                </label>
                                <select id="clan" name="clan" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300">
                                    <option value="">Select your clan</option>
                                    <option value="Yamba" data-color="yellow">Yamba</option>
                                    <option value="Mbaw" data-color="green">Mbaw</option>
                                    <option value="Mfumte" data-color="blue">Mfumte</option>
                                </select>
                            </div>

                            <!-- Village Selection -->
                            <div>
                                <label for="village" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Village <span class="text-red-500">*</span>
                                </label>
                                <select id="village" name="village" required disabled
                                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300 disabled:bg-gray-100">
                                    <option value="">First select your clan</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Document Uploads Section -->
                    <div class="border-b border-gray-200 pb-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                            <i class="fas fa-upload text-green-600 mr-3"></i>
                            Document Uploads
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Profile Photo -->
                            <div class="md:col-span-2">
                                <label for="photo" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Profile Photo <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <input type="file" id="photo" name="photo" accept="image/*" required
                                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300">
                                    <p class="text-xs text-gray-500 mt-1">Upload a clear photo of yourself (JPG, PNG, max 5MB)</p>
                                </div>
                            </div>

                            <!-- ID Card Front -->
                            <div>
                                <label for="idCardFront" class="block text-sm font-semibold text-gray-700 mb-2">
                                    ID Card (Front) <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <input type="file" id="idCardFront" name="id_card_front" accept="image/*" required
                                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300">
                                    <p class="text-xs text-gray-500 mt-1">Front side of your ID card</p>
                                </div>
                            </div>

                            <!-- ID Card Back -->
                            <div>
                                <label for="idCardBack" class="block text-sm font-semibold text-gray-700 mb-2">
                                    ID Card (Back) <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <input type="file" id="idCardBack" name="id_card_back" accept="image/*" required
                                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300">
                                    <p class="text-xs text-gray-500 mt-1">Back side of your ID card</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Application Note Section -->
                    <div class="pb-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                            <i class="fas fa-comment-alt text-green-600 mr-3"></i>
                            Application Note
                        </h3>

                        <div>
                            <label for="applicationNote" class="block text-sm font-semibold text-gray-700 mb-2">
                                Reason for Application <span class="text-red-500">*</span>
                            </label>
                            <textarea id="applicationNote" name="application_note" rows="5" required
                                      class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300 resize-none"
                                      placeholder="Please explain why you want to join MaSu and how you plan to contribute to our community..."></textarea>
                            <p class="text-xs text-gray-500 mt-1">Minimum 50 characters required</p>
                        </div>
                    </div>

                    <!-- Terms and Submit -->
                    <div class="pt-6">
                        <div class="flex items-start mb-6">
                            <input type="checkbox" id="terms" name="terms" required
                                   class="mt-1 h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                            <label for="terms" class="ml-3 text-sm text-gray-700">
                                I agree to the <a href="{{route('terms.show')}}" class="text-green-600 hover:text-green-700 font-semibold">Terms and Conditions</a> 
                                and <a href="{{route('policy.show')}}" class="text-green-600 hover:text-green-700 font-semibold">Privacy Policy</a> of MaSu.
                                <span class="text-red-500">*</span>
                            </label>
                        </div>

                        <button type="submit" id="submitBtn"
                                class="w-full bg-gradient-to-r from-green-600 to-green-700 text-white py-4 px-8 rounded-xl font-bold text-lg hover:from-green-700 hover:to-green-800 transform hover:scale-105 transition-all duration-300 shadow-lg disabled:opacity-50 disabled:cursor-not-allowed">
                            <i class="fas fa-paper-plane mr-3"></i>
                            Submit Application
                        </button>

                        <p class="text-center text-sm text-gray-500 mt-4">
                            Your application will be reviewed within 5-7 business days. You'll receive an email confirmation once processed.
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <x-frontend.newsletter />

    <!-- Vanilla JavaScript for Form Functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Clan and Village Data
            const clanVillageData = {
                'Yamba': {
                    color: 'yellow',
                    villages: ['NTIM', 'NTONG', 'KWAK', 'FA\'AM', 'NGUNG', 'SIH', 'BOM', 'GOM', 'MFE', 'NWA', 'MBEM', 'NKOT', 'ROM', 'YANG', 'BANG']
                },
                'Mbaw': {
                    color: 'green',
                    villages: ['NGURI', 'NTEM', 'NWANTI', 'NGU', 'MBIRIKPA', 'NKING', 'NKWAT', 'NGOM-SABONGARI', 'NYURONG', 'NGOMKOW', 'JATOR-NGWEMBE', 'NGAMFE-KURT', 'LIH']
                },
                'Mfumte': {
                    color: 'blue',
                    villages: ['ADERE', 'BITUI', 'NCHIA', 'LUS', 'KOM', 'MBALLA', 'JUI', 'KOFFA', 'MANANG', 'MBAH', 'MBAT', 'MBEPJI', 'SA\'AM']
                }
            };

            // Elements
            const clanSelect = document.getElementById('clan');
            const villageSelect = document.getElementById('village');
            const form = document.getElementById('membershipForm');
            const submitBtn = document.getElementById('submitBtn');

            // Handle clan selection change
            clanSelect.addEventListener('change', function() {
                const selectedClan = this.value;
                villageSelect.innerHTML = '<option value="">Select your village</option>';
                
                if (selectedClan && clanVillageData[selectedClan]) {
                    villageSelect.disabled = false;
                    const villages = clanVillageData[selectedClan].villages;
                    
                    villages.forEach(village => {
                        const option = document.createElement('option');
                        option.value = village;
                        option.textContent = village;
                        villageSelect.appendChild(option);
                    });
                } else {
                    villageSelect.disabled = true;
                    villageSelect.innerHTML = '<option value="">First select your clan</option>';
                }
            });

            // File upload validation
            function validateFileSize(input, maxSizeMB = 5) {
                const file = input.files[0];
                if (file && file.size > maxSizeMB * 1024 * 1024) {
                    alert(`File size must be less than ${maxSizeMB}MB`);
                    input.value = '';
                    return false;
                }
                return true;
            }

            // Add file size validation to file inputs
            document.getElementById('photo').addEventListener('change', function() {
                validateFileSize(this, 5);
            });

            document.getElementById('idCardFront').addEventListener('change', function() {
                validateFileSize(this, 5);
            });

            document.getElementById('idCardBack').addEventListener('change', function() {
                validateFileSize(this, 5);
            });

            // Form submission
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Basic validation
                const applicationNote = document.getElementById('applicationNote').value;
                if (applicationNote.length < 50) {
                    alert('Application note must be at least 50 characters long.');
                    return;
                }

                // Show loading state
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-3"></i>Submitting...';

                // Simulate form submission (replace with actual submission logic)
                setTimeout(() => {
                    alert('Application submitted successfully! You will receive a confirmation email shortly.');
                    form.reset();
                    villageSelect.disabled = true;
                    villageSelect.innerHTML = '<option value="">First select your clan</option>';
                    
                    // Reset button
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = '<i class="fas fa-paper-plane mr-3"></i>Submit Application';
                }, 2000);
            });

            // Phone number formatting (basic)
            document.getElementById('phone').addEventListener('input', function() {
                let value = this.value.replace(/\D/g, '');
                if (value.startsWith('237')) {
                    value = '+' + value;
                } else if (!value.startsWith('+237') && value.length > 0) {
                    value = '+237' + value;
                }
                this.value = value;
            });
        });
    </script>
</x-guest-layout>