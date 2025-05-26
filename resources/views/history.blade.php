<x-guest-layout>
    <x-frontend.banner title="Our Heritage"
        description="Discover the rich history and cultural traditions of the MaSu clans - preserving our past while building our future."
        background="/images/history.jpg" />

    <!-- History Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 via-white to-green-50 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-20 left-20 w-32 h-32 bg-green-500 rounded-full blur-2xl animate-pulse"></div>
            <div class="absolute bottom-32 right-32 w-40 h-40 bg-green-400 rounded-full blur-2xl animate-bounce"></div>
            <div class="absolute top-1/2 left-1/3 w-24 h-24 bg-green-600 rounded-full blur-xl animate-ping"></div>
        </div>

        <div class="container mx-auto md:px-6 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <span
                    class="text-green-600 font-semibold text-lg uppercase tracking-wider bg-green-100 px-6 py-3 rounded-full inline-block">
                    Our Legacy
                </span>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mt-8 mb-6 text-gray-800">
                    Three Clans, <span class="text-green-600">One Heritage</span>
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto text-lg md:text-xl leading-relaxed">
                    The MaSu community is built upon the rich traditions and enduring spirit of three distinct clans,
                    each contributing to our collective identity and shared future in the Nwa Sub-Division.
                </p>
            </div>

            <!-- Clan Navigation -->
            <div class="flex flex-wrap justify-center gap-4 mb-16">
                <button onclick="scrollToSection('yamba')"
                    class="bg-gradient-to-r from-teal-600 to-green-700 text-white px-8 py-4 rounded-xl font-semibold hover:from-green-700 hover:to-green-800 transform hover:scale-105 transition-all duration-300 shadow-lg">
                    <i class="fas fa-crown mr-2"></i>Yamba Clan
                </button>
                <button onclick="scrollToSection('mbaw')"
                    class="bg-white text-gray-700 px-8 py-4 rounded-xl font-semibold border-2 border-gray-200 hover:border-green-600 hover:text-green-600 transform hover:scale-105 transition-all duration-300 shadow-lg">
                    <i class="fas fa-seedling mr-2"></i>Mbaw Clan
                </button>
                <button onclick="scrollToSection('mfumte')"
                    class="bg-white text-gray-700 px-8 py-4 rounded-xl font-semibold border-2 border-gray-200 hover:border-green-600 hover:text-green-600 transform hover:scale-105 transition-all duration-300 shadow-lg">
                    <i class="fas fa-mountain mr-2"></i>Mfumte Clan
                </button>
            </div>

            <!-- Yamba Clan Section -->
            <div id="yamba" class="mb-20">
                <div class="bg-white md:rounded-3xl shadow-2xl overflow-hidden mb-12">
                    <div class="bg-gradient-to-r from-teal-600 to-green-700 p-8 text-white">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-crown text-4xl mr-4"></i>
                            <div>
                                <h3 class="text-3xl md:text-4xl font-bold">The Yamba Clan</h3>
                                <p class="text-green-100 text-lg">Guardians of Tradition & Administrative Center</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                            <div class="text-center">
                                <div class="text-2xl font-bold">15</div>
                                <div class="text-green-100">Villages</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold">Multiple</div>
                                <div class="text-green-100">Tourist Sites</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold">Administrative</div>
                                <div class="text-green-100">Center</div>
                            </div>
                        </div>
                    </div>

                    <div class="p-8 md:p-12">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                            <div>
                                <h4 class="text-2xl font-bold text-gray-800 mb-6">Cultural Heritage & Governance</h4>
                                <p class="text-gray-600 leading-relaxed mb-6">
                                    The Yamba tribe stands as the cornerstone of the Nwa Sub-Division, comprising 15
                                    independent villages:
                                    NTIM, NTONG, KWAK, FA'AM, NGUNG, SIH, BOM, GOM, MFE, NWA, MBEM, NKOT, ROM, YANG, and
                                    BANG.
                                    Each village is governed by a Fon who serves as the custodian of culture and
                                    tradition.
                                </p>
                                <p class="text-gray-600 leading-relaxed mb-6">
                                    As the administrative center of the sub-division, the Yamba clan benefits from
                                    essential
                                    infrastructure including a district hospital in Nwa Central, a Baptist hospital in
                                    Mbem,
                                    a gendarmerie brigade, and the Divisional Office.
                                </p>
                                <div class="bg-green-50 p-6 rounded-xl">
                                    <h5 class="font-semibold text-green-800 mb-3">Notable Features:</h5>
                                    <ul class="text-green-700 space-y-2">
                                        <li><i class="fas fa-check-circle mr-2"></i>District & Baptist Hospitals</li>
                                        <li><i class="fas fa-check-circle mr-2"></i>Gendarmerie Brigade & Police</li>
                                        <li><i class="fas fa-check-circle mr-2"></i>Divisional Administrative Office
                                        </li>
                                        <li><i class="fas fa-check-circle mr-2"></i>Rich Artistic Community</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="space-y-6">
                                <!-- Image placeholder for Yamba -->
                                <div class="bg-gray-100 rounded-xl h-64 flex items-center justify-center">
                                    <div class="text-center text-gray-500">
                                        <i class="fas fa-image text-4xl mb-2"></i>
                                        <p>Yamba Traditional Palace</p>
                                    </div>
                                </div>

                                <div class="bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-xl">
                                    <h5 class="font-semibold text-green-800 mb-4">Tourist Attractions</h5>
                                    <div class="grid grid-cols-2 gap-3 text-sm text-green-700">
                                        <div><i class="fas fa-map-marker-alt mr-1"></i>Kopdze Cave of Nwa</div>
                                        <div><i class="fas fa-map-marker-alt mr-1"></i>Makop of Mfe</div>
                                        <div><i class="fas fa-map-marker-alt mr-1"></i>Mapong Dam of Nwa</div>
                                        <div><i class="fas fa-map-marker-alt mr-1"></i>Nzebuck Dam of Mbem</div>
                                        <div><i class="fas fa-map-marker-alt mr-1"></i>Majang Hill of Mbem</div>
                                        <div><i class="fas fa-map-marker-alt mr-1"></i>River Mantung</div>
                                        <div><i class="fas fa-map-marker-alt mr-1"></i>Kopjwue Hill (ROM)</div>
                                        <div><i class="fas fa-map-marker-alt mr-1"></i>Rom Rock</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mbaw Clan Section -->
            <div id="mbaw" class="mb-20">
                <div class="bg-white md:rounded-3xl shadow-2xl overflow-hidden mb-12">
                    <div class="bg-gradient-to-r from-amber-600 to-orange-600 p-8 text-white">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-seedling text-4xl mr-4"></i>
                            <div>
                                <h3 class="text-3xl md:text-4xl font-bold">The Mbaw Clan</h3>
                                <p class="text-amber-100 text-lg">Agricultural Powerhouse & Economic Hub</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                            <div class="text-center">
                                <div class="text-2xl font-bold">14</div>
                                <div class="text-amber-100">Villages</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold">Fertile</div>
                                <div class="text-amber-100">Mbaw Plain</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold">Sabongari</div>
                                <div class="text-amber-100">Economic Center</div>
                            </div>
                        </div>
                    </div>

                    <div class="p-8 md:p-12">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                            <div class="space-y-6">
                                <!-- Image placeholder for Mbaw -->
                                <div class="bg-gray-100 rounded-xl h-64 flex items-center justify-center">
                                    <div class="text-center text-gray-500">
                                        <i class="fas fa-image text-4xl mb-2"></i>
                                        <p>Mbaw Plain Agricultural Fields</p>
                                    </div>
                                </div>

                                <div class="bg-gradient-to-br from-amber-50 to-orange-100 p-6 rounded-xl">
                                    <h5 class="font-semibold text-amber-800 mb-4">Sabongari Market Hub</h5>
                                    <div class="space-y-2 text-sm text-amber-700">
                                        <div><i class="fas fa-store mr-2"></i>Border Market</div>
                                        <div><i class="fas fa-store mr-2"></i>Council Market</div>
                                        <div><i class="fas fa-store mr-2"></i>Cattle Market</div>
                                        <div><i class="fas fa-school mr-2"></i>Islamic Secondary School</div>
                                        <div><i class="fas fa-hospital mr-2"></i>Catholic Mission Hospital</div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h4 class="text-2xl font-bold text-gray-800 mb-6">Migration & Settlement</h4>
                                <p class="text-gray-600 leading-relaxed mb-6">
                                    The Mbaw clan, the second largest group in the Nwa Sub-Division, traces its origins
                                    to
                                    migrations from the Tikar ethnic group. The migration was driven by succession
                                    disputes
                                    and the search for fertile land, leading them to the fertile Mbaw Plain.
                                </p>

                                <h5 class="text-xl font-semibold text-gray-800 mb-4">The 14 Villages</h5>
                                <p class="text-gray-600 leading-relaxed mb-6">
                                    NGURI, NTEM, NWANTI, NGU, MBIRIKPA, NKING, NKWAT, NGOM-SABONGARI, NYURONG, NGOMKOW,
                                    JATOR-NGWEMBE, NGAMFE-KURT, and LIH - each governed by a Fon who preserves cultural
                                    heritage and maintains social order.
                                </p>

                                <div class="bg-orange-50 p-6 rounded-xl">
                                    <h5 class="font-semibold text-orange-800 mb-3">Agricultural Excellence:</h5>
                                    <ul class="text-orange-700 space-y-2">
                                        <li><i class="fas fa-check-circle mr-2"></i>Rice, Corn & Palm Cultivation</li>
                                        <li><i class="fas fa-check-circle mr-2"></i>Commercial & Household Production
                                        </li>
                                        <li><i class="fas fa-check-circle mr-2"></i>Cross-border Trade with Nigeria</li>
                                        <li><i class="fas fa-check-circle mr-2"></i>Strategic Economic Location</li>
                                    </ul>
                                </div>

                                <div class="mt-6 bg-red-50 p-6 rounded-xl border-l-4 border-red-400">
                                    <h5 class="font-semibold text-red-800 mb-2">Current Challenge:</h5>
                                    <p class="text-red-700 text-sm">
                                        The clan faces ongoing farmer-grazer conflicts that have evolved from minor
                                        disputes
                                        to serious confrontations, requiring sustainable solutions and community
                                        dialogue.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mfumte Clan Section -->
            <div id="mfumte" class="mb-20">
                <div class="bg-white md:rounded-3xl shadow-2xl overflow-hidden mb-12">
                    <div class="bg-gradient-to-r from-purple-600 to-indigo-600 p-8 text-white">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-mountain text-4xl mr-4"></i>
                            <div>
                                <h3 class="text-3xl md:text-4xl font-bold">The Mfumte Clan</h3>
                                <p class="text-purple-100 text-lg">Border Gateway & Cultural Resilience</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                            <div class="text-center">
                                <div class="text-2xl font-bold">13</div>
                                <div class="text-purple-100">Villages</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold">Border</div>
                                <div class="text-purple-100">With Nigeria</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold">Lus</div>
                                <div class="text-purple-100">Headquarters</div>
                            </div>
                        </div>
                    </div>

                    <div class="p-8 md:p-12">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                            <div>
                                <h4 class="text-2xl font-bold text-gray-800 mb-6">Hospitality & Determination</h4>
                                <p class="text-gray-600 leading-relaxed mb-6">
                                    Though comprising the smallest number of villages with just 13, the Mfumte clan is
                                    renowned for its hospitality, determination for growth, and commitment to
                                    development.
                                    Strategically located on the Cameroon-Nigeria border, it serves as the gateway to
                                    Nigeria.
                                </p>

                                <h5 class="text-xl font-semibold text-gray-800 mb-4">The 13 Villages</h5>
                                <p class="text-gray-600 leading-relaxed mb-6">
                                    ADERE, BITUI, NCHIA, LUS, KOM, MBALLA, JUI, KOFFA, MANANG, MBAH, MBAT, MBEPJI, SA'AM
                                    -
                                    each governed by a Fon who maintains customs and traditions. The mother development
                                    association, MFUCUDA, coordinates community initiatives.
                                </p>

                                <div class="bg-purple-50 p-6 rounded-xl">
                                    <h5 class="font-semibold text-purple-800 mb-3">Strategic Advantages:</h5>
                                    <ul class="text-purple-700 space-y-2">
                                        <li><i class="fas fa-check-circle mr-2"></i>Cross-border Trade Opportunities
                                        </li>
                                        <li><i class="fas fa-check-circle mr-2"></i>Cultural Exchange Hub</li>
                                        <li><i class="fas fa-check-circle mr-2"></i>Military Base Security</li>
                                        <li><i class="fas fa-check-circle mr-2"></i>Natural Tourist Attractions</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="space-y-6">
                                <!-- Image placeholder for Mfumte -->
                                <div class="bg-gray-100 rounded-xl h-64 flex items-center justify-center">
                                    <div class="text-center text-gray-500">
                                        <i class="fas fa-image text-4xl mb-2"></i>
                                        <p>Mfumte Hilly Terrain & Caves</p>
                                    </div>
                                </div>

                                <div class="bg-gradient-to-br from-purple-50 to-indigo-100 p-6 rounded-xl">
                                    <h5 class="font-semibold text-purple-800 mb-4">Notable Personalities</h5>
                                    <div class="text-purple-700">
                                        <div class="flex items-center mb-2">
                                            <i class="fas fa-user-graduate mr-2"></i>
                                            <span class="font-medium">Dr. Ngomfe Luma David</span>
                                        </div>
                                        <p class="text-sm">Prominent elite exemplifying Mfumte potential</p>
                                    </div>
                                </div>

                                <div class="bg-indigo-50 p-6 rounded-xl">
                                    <h5 class="font-semibold text-indigo-800 mb-3">Educational Infrastructure:</h5>
                                    <div class="text-indigo-700">
                                        <div><i class="fas fa-school mr-2"></i>Secondary School in Lus</div>
                                        <div class="text-sm mt-1">Developing future community leaders</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Unity Section -->
            <div class="bg-gradient-to-r from-teal-600 to-green-700 md:rounded-3xl p-8 md:p-12 text-white text-center">
                <div class="max-w-4xl mx-auto">
                    <h3 class="text-3xl md:text-4xl font-bold mb-6">United in Diversity</h3>
                    <p class="text-green-100 text-lg md:text-xl leading-relaxed mb-8">
                        The MaSu community draws strength from the unique contributions of each clan - the
                        administrative
                        excellence of Yamba, the agricultural prosperity of Mbaw, and the resilient spirit of Mfumte.
                        Together, we preserve our heritage while building a brighter future for generations to come.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                        <div class="text-center">
                            <div
                                class="bg-white bg-opacity-20 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-users text-2xl"></i>
                            </div>
                            <h4 class="font-semibold text-xl mb-2">42 Villages</h4>
                            <p class="text-green-100">United Communities</p>
                        </div>
                        <div class="text-center">
                            <div
                                class="bg-white bg-opacity-20 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-heart text-2xl"></i>
                            </div>
                            <h4 class="font-semibold text-xl mb-2">One Heritage</h4>
                            <p class="text-green-100">Shared Values</p>
                        </div>
                        <div class="text-center">
                            <div
                                class="bg-white bg-opacity-20 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-star text-2xl"></i>
                            </div>
                            <h4 class="font-semibold text-xl mb-2">Bright Future</h4>
                            <p class="text-green-100">Together Forward</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-frontend.newsletter />

    <script>
        function scrollToSection(sectionId) {
            const element = document.getElementById(sectionId);
            if (element) {
                element.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }

        // Add smooth scrolling animation observer
        const observeElements = document.querySelectorAll('[id^="yamba"], [id^="mbaw"], [id^="mfumte"]');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        observeElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
    </script>

    <style>
        .container {
            scroll-behavior: smooth;
        }

        /* Custom animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 0.6s ease forwards;
        }

        /* Responsive improvements */
        @media (max-width: 768px) {
            .grid-cols-2 {
                grid-template-columns: 1fr;
            }
        }
    </style>
</x-guest-layout>