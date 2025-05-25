<!-- Footer -->
<footer class="bg-slate-900 text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- About -->
            <div>
                <a href="/" class="flex items-center ">
                    <div class="p-2">
                        <img src="/masulogo.png" alt="Nwa Heritage Logo" class="w-12 h-12">
                    </div>
                    <div class="flex flex-col">
                        <span id="navbar-title"
                            class="text-xl font-bold text-white transition-all duration-300">MASU</span>
                        <span class="text-xs text-green-300 font-medium">Unity, Culture and Development</span>
                    </div>
                </a>
                <p class="text-gray-400 mb-6">Preserving and promoting the rich cultural heritage of Yamba, Mbaw, and
                    Mfumte clans in Nwa Sub-Division, Cameroon.</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <!-- Quick Links & Clan Pages -->
            <div class="flex flex-wrap gap-8 lg:gap-12">
                <!-- Quick Links -->
                <div class="min-w-[150px]">
                    <h4 class="text-xl font-bold mb-6">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="#home" class="text-gray-400 hover:text-white transition">Projects</a></li>
                        <li><a href="#clans" class="text-gray-400 hover:text-white transition">Clans</a></li>
                        <li><a href="#history" class="text-gray-400 hover:text-white transition">Our Team</a></li>
                        <li><a href="#tourism" class="text-gray-400 hover:text-white transition">Events</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition">Education</a></li>
                    </ul>
                </div>

                <!-- Clan Pages -->
                <div class="min-w-[150px]">
                    <h4 class="text-xl font-bold mb-6">Clan Pages</h4>
                    <ul class="space-y-3">
                        <li><a href="/clans/yamba" class="text-gray-400 hover:text-white transition">Yamba Clan</a></li>
                        <li><a href="/clans/mbaw" class="text-gray-400 hover:text-white transition">Mbaw Clan</a></li>
                        <li><a href="/clans/mfumte" class="text-gray-400 hover:text-white transition">Mfumte Clan</a>
                        </li>
                        <li><a href="/festivals" class="text-gray-400 hover:text-white transition">Cultural
                                Festivals</a></li>
                        <li><a href="/governance" class="text-gray-400 hover:text-white transition">Traditional
                                Governance</a></li>
                    </ul>
                </div>
            </div>


            <!-- Contact Info -->
            <div>
                <h4 class="text-xl font-bold mb-6">Contact Info</h4>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt mt-1.5 mr-3 text-green-500"></i>
                        <span class="text-gray-400">Nwa Sub-Division, Donga-Mantung Division, North West Region,
                            Cameroon</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-phone mr-3 text-green-500"></i>
                        <span class="text-gray-400">+237 XXX XXX XXX</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-envelope mr-3 text-green-500"></i>
                        <span class="text-gray-400">info@masuonline.org</span>
                    </li>
                </ul>
            </div>
        </div>

        <hr class="border-gray-800 my-8">

        <div class="flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-400 mb-4 md:mb-0">&copy; <?php echo date('Y'); ?> MASU. All rights reserved.</p>
            <div class="flex space-x-6">
                <a href="{{route('policy.show')}}" class="text-gray-400 hover:text-white transition">Privacy Policy</a>
                <a href="{{route('terms.show')}}" class="text-gray-400 hover:text-white transition">Terms of Service</a>
                <a href="#" class="text-gray-400 hover:text-white transition">Sitemap</a>
            </div>
        </div>
    </div>
</footer>