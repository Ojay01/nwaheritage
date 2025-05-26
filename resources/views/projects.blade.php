<x-guest-layout>
    <x-frontend.banner title="MaSu Projects"
        description="Discover our community-driven initiatives that empower, educate, and strengthen the bonds within our heritage."
        background="/images/projects.jpg" />

    <!-- Projects Section -->
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
                <span
                    class="text-green-600 font-semibold text-lg uppercase tracking-wider bg-green-100 px-6 py-3 rounded-full inline-block">
                    Community Projects
                </span>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mt-8 mb-6 text-gray-800">
                    Building Our <span class="text-green-600">Future</span>
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto text-lg md:text-xl leading-relaxed">
                    Through collaborative projects, we create lasting impact in our communities,
                    preserve our heritage, and provide opportunities for growth and development.
                </p>
            </div>

            <div class="overflow-x-auto">
                <div class="flex whitespace-nowrap gap-4 mb-2 px-2">
                    <button
                        class="category-btn active bg-green-600 text-white px-6 py-3 rounded-full font-semibold transition-all duration-300 hover:bg-green-700"
                        data-category="all">
                        All Projects
                    </button>
                    <button
                        class="category-btn bg-white text-gray-700 px-6 py-3 rounded-full font-semibold border-2 border-gray-200 transition-all duration-300 hover:border-green-600 hover:text-green-600"
                        data-category="active">
                        Active
                    </button>
                    <button
                        class="category-btn bg-white text-gray-700 px-6 py-3 rounded-full font-semibold border-2 border-gray-200 transition-all duration-300 hover:border-green-600 hover:text-green-600"
                        data-category="upcoming">
                        Upcoming
                    </button>
                    <button
                        class="category-btn bg-white text-gray-700 px-6 py-3 rounded-full font-semibold border-2 border-gray-200 transition-all duration-300 hover:border-green-600 hover:text-green-600"
                        data-category="completed">
                        Completed
                    </button>
                    <button
                        class="category-btn bg-white text-gray-700 px-6 py-3 rounded-full font-semibold border-2 border-gray-200 transition-all duration-300 hover:border-green-600 hover:text-green-600"
                        data-category="education">
                        Education
                    </button>
                    <button
                        class="category-btn bg-white text-gray-700 px-6 py-3 rounded-full font-semibold border-2 border-gray-200 transition-all duration-300 hover:border-green-600 hover:text-green-600"
                        data-category="infrastructure">
                        Infrastructure
                    </button>
                </div>
            </div>

            <!-- Projects Grid Container -->
            <div class="max-w-6xl mx-auto">
                <!-- Empty State -->
                <div id="emptyState" class="text-center py-20">
                    <div class="bg-white rounded-3xl shadow-lg p-6 md:p-12 max-w-2xl mx-auto">
                        <div class="mb-8">
                            <i class="fas fa-project-diagram text-6xl text-gray-300 mb-6"></i>
                            <h3 class="text-3xl font-bold text-gray-800 mb-4">No Projects Available</h3>
                            <p class="text-gray-600 text-lg leading-relaxed">
                                We're currently developing meaningful projects that will benefit our community.
                                Stay connected for updates on educational initiatives, infrastructure development,
                                and cultural preservation programs.
                            </p>
                        </div>

                        <div class="space-y-4">
                            <p class="text-gray-500 font-medium">Interested in contributing to our future projects?</p>
                            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                <form class="flex">
                                    <input type="email" placeholder="Your email address"
                                        class="px-4 py-3 rounded-l-lg outline-gray-600 w-full md:w-64 focus:outline-green-600">
                                    <button type="submit"
                                        class="bg-slate-800 hover:bg-slate-900 text-white px-6 py-3 rounded-r-lg transition font-medium">
                                        Subscribe
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Projects will be dynamically loaded here -->
                <div id="projectsGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 hidden">
                    <!-- Project cards will be inserted here -->
                </div>
            </div>

            <!-- Load More Button (hidden initially) -->
            <div class="text-center mt-12 hidden" id="loadMoreContainer">
                <button id="loadMoreBtn"
                    class="bg-gradient-to-r from-green-600 to-green-700 text-white px-8 py-4 rounded-xl font-semibold hover:from-green-700 hover:to-green-800 transform hover:scale-105 transition-all duration-300 shadow-lg">
                    <i class="fas fa-plus mr-2"></i>
                    Load More Projects
                </button>
            </div>
        </div>
    </section>




    <x-frontend.newsletter />


</x-guest-layout>