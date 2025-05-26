<nav id="navbar" class="fixed w-full z-50 transition-all duration-500 bg-transparent">
    <div class="container mx-auto px-4 py-3 flex items-center justify-between">
        <!-- Logo and Dynamic Title -->
        <a href="/" class="flex items-center space-x-3">
            <div class="p-2">
                <img src="/masulogo.png" alt="Nwa Heritage Logo" class="w-12 h-12">
            </div>
            <div class="flex flex-col">
                <span class="text-xl font-bold text-white transition-all duration-300">MASU</span>
                <span class="text-xs text-green-300 font-medium">Unity, Culture and Development</span>
            </div>
        </a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center space-x-6">
            <a href="/"
                class="text-white hover:text-green-300 transition duration-300 px-3 py-2 rounded-md hover:bg-white hover:bg-opacity-10">Home</a>
            <a href="#clans"
                class="text-white hover:text-green-300 transition duration-300 px-3 py-2 rounded-md hover:bg-white hover:bg-opacity-10">Clans</a>
            <a href="#history"
                class="text-white hover:text-green-300 transition duration-300 px-3 py-2 rounded-md hover:bg-white hover:bg-opacity-10">History</a>
            <a href="#tourism"
                class="text-white hover:text-green-300 transition duration-300 px-3 py-2 rounded-md hover:bg-white hover:bg-opacity-10">Tourism</a>

            <a href="/elites"
                class="text-white hover:text-green-300 transition duration-300 px-3 py-2 rounded-md hover:bg-white hover:bg-opacity-10">Elites</a>
            <a href="{{route('about')}}"
                class="text-white hover:text-green-300 transition duration-300 px-3 py-2 rounded-md hover:bg-white hover:bg-opacity-10">About</a>
            <a href="{{route('joinUs')}}"
                class="text-white hover:text-green-300 transition duration-300 px-3 py-2 rounded-md hover:bg-white hover:bg-opacity-10">Join
                Us</a>

            <a href="{{route('contact')}}"
                class="text-white hover:text-green-300 transition duration-300 px-3 py-2 rounded-md hover:bg-white hover:bg-opacity-10">Contact</a>

            <!-- Our Community Button -->
            <a href="/community"
                class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition duration-300 flex items-center space-x-2 shadow-lg hover:shadow-xl">
                <i class="fas fa-heart"></i>
                <span>Our Community</span>
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="menu-btn" class="md:hidden text-white hover:text-green-300 transition duration-300 p-2">
            <i class="fas fa-bars text-2xl" id="menu-icon"></i>
        </button>
    </div>
</nav>

<!-- Mobile Sidebar Overlay -->
<div id="sidebar-overlay"
    class="fixed inset-0 bg-black bg-opacity-50 z-40 md:hidden opacity-0 invisible transition-all duration-300"></div>

<!-- Mobile Sidebar -->
<div id="mobile-sidebar"
    class="fixed top-0 right-0 h-full w-80 max-w-full bg-slate-900 bg-opacity-95 backdrop-blur-sm z-50 md:hidden transform translate-x-full transition-transform duration-300 shadow-2xl">
    <div class="flex flex-col h-full">
        <!-- Sidebar Header -->
        <div class="flex items-center justify-between p-6 border-b border-green-800 border-opacity-30">
            <div class="flex items-center space-x-3">
                <img src="/masulogo.png" alt="MASU Logo" class="w-10 h-10">
                <div class="flex flex-col">
                    <span class="text-lg font-bold text-white">MASU</span>
                    <span class="text-xs text-green-300">Unity, Culture and Development</span>
                </div>
            </div>
            <button id="close-sidebar" class="text-white hover:text-green-300 transition duration-300 p-2">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>

        <!-- Sidebar Content -->
        <div class="flex-1 overflow-y-auto p-6">
            <div class="space-y-4">
                <a href="/"
                    class="flex items-center space-x-3 text-white hover:text-green-300 transition duration-300 py-3 px-4 rounded-lg hover:bg-white hover:bg-opacity-10">
                    <i class="fas fa-home w-5"></i>
                    <span>Home</span>
                </a>

                <a href="#clans"
                    class="flex items-center space-x-3 text-white hover:text-green-300 transition duration-300 py-3 px-4 rounded-lg hover:bg-white hover:bg-opacity-10">
                    <i class="fas fa-flag w-5"></i>
                    <span>Clans</span>
                </a>

                <a href="#history"
                    class="flex items-center space-x-3 text-white hover:text-green-300 transition duration-300 py-3 px-4 rounded-lg hover:bg-white hover:bg-opacity-10">
                    <i class="fas fa-book w-5"></i>
                    <span>History</span>
                </a>

                <a href="#tourism"
                    class="flex items-center space-x-3 text-white hover:text-green-300 transition duration-300 py-3 px-4 rounded-lg hover:bg-white hover:bg-opacity-10">
                    <i class="fas fa-map-marker-alt w-5"></i>
                    <span>Tourism</span>
                </a>

                <a href="/elites"
                    class="flex items-center space-x-3 text-white hover:text-green-300 transition duration-300 py-3 px-4 rounded-lg hover:bg-white hover:bg-opacity-10">
                    <i class="fas fa-crown w-5"></i>
                    <span>Elites</span>
                </a>

                <a href="{{route('about')}}"
                    class="flex items-center space-x-3 text-white hover:text-green-300 transition duration-300 py-3 px-4 rounded-lg hover:bg-white hover:bg-opacity-10">
                    <i class="fas fa-info-circle w-5"></i>
                    <span>About</span>
                </a>

                <a href="{{route('joinUs')}}"
                    class="flex items-center space-x-3 text-white hover:text-green-300 transition duration-300 py-3 px-4 rounded-lg hover:bg-white hover:bg-opacity-10">
                    <i class="fas fa-user-plus w-5"></i>
                    <span>Join Us</span>
                </a>

                <a href="{{route('contact')}}"
                    class="flex items-center space-x-3 text-white hover:text-green-300 transition duration-300 py-3 px-4 rounded-lg hover:bg-white hover:bg-opacity-10">
                    <i class="fas fa-envelope w-5"></i>
                    <span>Contact</span>
                </a>
            </div>
        </div>

        <!-- Sidebar Footer -->
        <div class="p-6 border-t border-green-800 border-opacity-30">
            <a href="/community"
                class="w-full flex items-center justify-center space-x-2 bg-green-600 hover:bg-green-700 text-white py-3 px-4 rounded-lg transition duration-300 shadow-lg">
                <i class="fas fa-heart"></i>
                <span>Our Community</span>
            </a>
        </div>
    </div>
</div>

<script>

    // Navbar background transition on scroll
    const navbar = document.getElementById('navbar');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.remove('bg-transparent');
            navbar.classList.add('bg-slate-900', 'bg-opacity-95', 'backdrop-blur-sm', 'shadow-lg');
        } else {
            navbar.classList.add('bg-transparent');
            navbar.classList.remove('bg-slate-900', 'bg-opacity-95', 'backdrop-blur-sm', 'shadow-lg');
        }
    });

    // Mobile sidebar functionality
    const menuBtn = document.getElementById('menu-btn');
    const closeSidebarBtn = document.getElementById('close-sidebar');
    const mobileSidebar = document.getElementById('mobile-sidebar');
    const sidebarOverlay = document.getElementById('sidebar-overlay');
    const menuIcon = document.getElementById('menu-icon');

    function openSidebar() {
        mobileSidebar.classList.remove('translate-x-full');
        sidebarOverlay.classList.remove('opacity-0', 'invisible');
        sidebarOverlay.classList.add('opacity-100', 'visible');
        menuIcon.classList.remove('fa-bars');
        menuIcon.classList.add('fa-times');
        document.body.style.overflow = 'hidden'; // Prevent background scroll
    }

    function closeSidebar() {
        mobileSidebar.classList.add('translate-x-full');
        sidebarOverlay.classList.add('opacity-0', 'invisible');
        sidebarOverlay.classList.remove('opacity-100', 'visible');
        menuIcon.classList.add('fa-bars');
        menuIcon.classList.remove('fa-times');
        document.body.style.overflow = ''; // Restore background scroll
    }

    menuBtn.addEventListener('click', openSidebar);
    closeSidebarBtn.addEventListener('click', closeSidebar);

    // Close sidebar when clicking overlay
    sidebarOverlay.addEventListener('click', closeSidebar);

    // Dynamic title update based on active section

    // Smooth scrolling with title updates
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                // Close sidebar if open
                closeSidebar();

                // Update URL hash
                history.pushState(null, null, targetId);
                // Scroll to target
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Close sidebar on window resize to desktop
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
            closeSidebar();
        }
    });
</script>