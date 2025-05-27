<x-guest-layout>
    <x-frontend.banner 
        title="Join MaSu Today" 
        description="Become a member of the Mantung students union and connect with your heritage, culture, and fellow students." 
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
                    Fill out the form below to become a proud member of MASU. Connect with your roots, 
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
                                    Email Address <span class="text-red-500">*</span>                                </label>
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
                                <div class="relative border-2 border-dashed border-gray-300 rounded-xl p-6 text-center hover:border-green-500 transition-all duration-300"
                                     id="photoDropZone">
                                    <input type="file" id="photo" name="photo" accept="image/*" required
                                           class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                                    <p class="text-gray-500">Drag and drop your profile photo here or click to select (JPG, PNG, max 5MB)</p>
                                    <div id="photoPreview" class="mt-4 hidden">
                                        <img src="" alt="Profile Photo Preview" class="max-w-full h-auto rounded-lg shadow-md">
                                        <button type="button" class="mt-2 text-red-500 hover:text-red-700 font-semibold" onclick="clearFile('photo', 'photoPreview')">
                                            Remove
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- ID Card Front -->
                            <div>
                                <label for="idCardFront" class="block text-sm font-semibold text-gray-700 mb-2">
                                    ID Card (Front) <span class="text-red-500">*</span>
                                </label>
                                <div class="relative border-2 border-dashed border-gray-300 rounded-xl p-6 text-center hover:border-green-500 transition-all duration-300"
                                     id="idCardFrontDropZone">
                                    <input type="file" id="idCardFront" name="id_card_front" accept="image/*" required
                                           class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                                    <p class="text-gray-500">Drag and drop ID card front here or click to select (JPG, PNG, max 5MB)</p>
                                    <div id="idCardFrontPreview" class="mt-4 hidden">
                                        <img src="" alt="ID Card Front Preview" class="max-w-full h-auto rounded-lg shadow-md">
                                        <button type="button" class="mt-2 text-red-500 hover:text-red-700 font-semibold" onclick="clearFile('idCardFront', 'idCardFrontPreview')">
                                            Remove
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- ID Card Back -->
                            <div>
                                <label for="idCardBack" class="block text-sm font-semibold text-gray-700 mb-2">
                                    ID Card (Back) <span class="text-red-500">*</span>
                                </label>
                                <div class="relative border-2 border-dashed border-gray-300 rounded-xl p-6 text-center hover:border-green-500 transition-all duration-300"
                                     id="idCardBackDropZone">
                                    <input type="file" id="idCardBack" name="id_card_back" accept="image/*" required
                                           class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                                    <p class="text-gray-500">Drag and drop ID card back here or click to select (JPG, PNG, max 5MB)</p>
                                    <div id="idCardBackPreview" class="mt-4 hidden">
                                        <img src="" alt="ID Card Back Preview" class="max-w-full h-auto rounded-lg shadow-md">
                                        <button type="button" class="mt-2 text-red-500 hover:text-red-700 font-semibold" onclick="clearFile('idCardBack', 'idCardBackPreview')">
                                            Remove
                                        </button>
                                    </div>
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

    <!-- Cropping Modal -->
    <div id="cropModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-xl p-6 w-full max-w-2xl">
            <h3 class="text-xl font-bold text-gray-800 mb-4">Crop Your Image</h3>
            <div id="cropContainer" class="mb-4">
                <img id="cropImage" src="" alt="Image to crop" class="max-w-full h-auto">
            </div>
            <div class="flex justify-end space-x-4">
                <button id="skipCropBtn" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-xl hover:bg-gray-300">Skip Cropping</button>
                <button id="cropBtn" class="px-4 py-2 bg-green-600 text-white rounded-xl hover:bg-green-700">Crop & Save</button>
            </div>
        </div>
    </div>

    <x-frontend.newsletter />

    <!-- Cropper.js CDN -->
    <link href="https://cdn.jsdelivr.net/npm/cropperjs@1.5.12/dist/cropper.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/cropperjs@1.5.12/dist/cropper.min.js"></script>

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
            const cropModal = document.getElementById('cropModal');
            const cropImage = document.getElementById('cropImage');
            const cropBtn = document.getElementById('cropBtn');
            const skipCropBtn = document.getElementById('skipCropBtn');
            let cropper = null;
            let currentInputId = null;
            let currentPreviewId = null;
            let originalFile = null;

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
            function validateFileSize(file, maxSizeMB = 5) {
                if (file && file.size > maxSizeMB * 1024 * 1024) {
                    alert(`File size must be less than ${maxSizeMB}MB`);
                    return false;
                }
                return true;
            }

            // Show crop modal
            function showCropModal(file, inputId, previewId) {
                if (!validateFileSize(file)) {
                    document.getElementById(inputId).value = '';
                    return;
                }
                originalFile = file;
                currentInputId = inputId;
                currentPreviewId = previewId;
                const reader = new FileReader();
                reader.onload = function(e) {
                    cropImage.src = e.target.result;
                    cropModal.classList.remove('hidden');
                    if (cropper) {
                        cropper.destroy();
                    }
                    cropper = new Cropper(cropImage, {
                        aspectRatio: inputId === 'photo' ? 1 : NaN, // Square for profile photo, freeform for ID cards
                        viewMode: 1,
                        autoCropArea: 0.8,
                        responsive: true
                    });
                };
                reader.readAsDataURL(file);
            }

            // Update preview and file input
            function updatePreviewAndFile(inputId, previewId, file) {
                const previewContainer = document.getElementById(previewId);
                const previewImg = previewContainer.querySelector('img');
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                    previewContainer.classList.remove('hidden');
                };
                reader.readAsDataURL(file);

                // Update file input with new file
                const input = document.getElementById(inputId);
                const dataTransfer = new DataTransfer();
                dataTransfer.items.add(file);
                input.files = dataTransfer.files;
            }

            // Clear file and preview
            function clearFile(inputId, previewId) {
                const input = document.getElementById(inputId);
                const previewContainer = document.getElementById(previewId);
                input.value = '';
                previewContainer.classList.add('hidden');
                if (cropModal.classList.contains('hidden')) return;
                cropModal.classList.add('hidden');
                if (cropper) {
                    cropper.destroy();
                    cropper = null;
                }
            }

            // Setup drag-and-drop and cropping for each file input
            const fileInputs = [
                { inputId: 'photo', dropZoneId: 'photoDropZone', previewId: 'photoPreview' },
                { inputId: 'idCardFront', dropZoneId: 'idCardFrontDropZone', previewId: 'idCardFrontPreview' },
                { inputId: 'idCardBack', dropZoneId: 'idCardBackDropZone', previewId: 'idCardBackPreview' }
            ];

            fileInputs.forEach(({ inputId, dropZoneId, previewId }) => {
                const input = document.getElementById(inputId);
                const dropZone = document.getElementById(dropZoneId);

                // Handle file input change
                input.addEventListener('change', function() {
                    if (this.files[0]) {
                        showCropModal(this.files[0], inputId, previewId);
                    }
                });

                // Drag and drop events
                dropZone.addEventListener('dragover', function(e) {
                    e.preventDefault();
                    dropZone.classList.add('border-green-500');
                });

                dropZone.addEventListener('dragleave', function() {
                    dropZone.classList.remove('border-green-500');
                });

                dropZone.addEventListener('drop', function(e) {
                    e.preventDefault();
                    dropZone.classList.remove('border-green-500');
                    if (e.dataTransfer.files[0]) {
                        showCropModal(e.dataTransfer.files[0], inputId, previewId);
                    }
                });
            });

            // Crop button handler
            cropBtn.addEventListener('click', function() {
                if (cropper) {
                    cropper.getCroppedCanvas({ maxWidth: 1024, maxHeight: 1024 }).toBlob(function(blob) {
                        const file = new File([blob], originalFile.name, { type: originalFile.type });
                        updatePreviewAndFile(currentInputId, currentPreviewId, file);
                        cropModal.classList.add('hidden');
                        cropper.destroy();
                        cropper = null;
                    }, originalFile.type);
                }
            });

            // Skip cropping button handler
            skipCropBtn.addEventListener('click', function() {
                updatePreviewAndFile(currentInputId, currentPreviewId, originalFile);
                cropModal.classList.add('hidden');
                if (cropper) {
                    cropper.destroy();
                    cropper = null;
                }
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
                    fileInputs.forEach(({ previewId }) => {
                        document.getElementById(previewId).classList.add('hidden');
                    });
                    if (cropper) {
                        cropper.destroy();
                        cropper = null;
                    }
                    cropModal.classList.add('hidden');
                    
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