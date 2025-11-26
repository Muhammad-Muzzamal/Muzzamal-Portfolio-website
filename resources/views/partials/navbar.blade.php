<style>
    /* Custom styles for the mobile menu overlay */
    .mobile-menu-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(8px);
        z-index: 40;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
    }

    .mobile-menu-overlay.active {
        opacity: 1;
        visibility: visible;
    }

    .mobile-menu {
        position: fixed;
        top: 0;
        right: -100%;
        width: 85%;
        max-width: 320px;
        height: 100%;
        background: white;
        z-index: 50;
        transition: right 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: -5px 0 25px rgba(0, 0, 0, 0.15);
        overflow-y: auto;
    }

    .mobile-menu.active {
        right: 0;
    }

    /* Custom color scheme */
    .text-primary {
        color: #0083a5;
    }

    .bg-primary {
        background-color: #0083a5;
    }

    .text-secondary {
        color: #05333f;
    }

    .bg-secondary {
        background-color: #05333f;
    }

    /* Hover effects */
    .nav-link {
        position: relative;
        transition: all 0.3s;
        font-weight: 500;
    }

    .nav-link:hover {
        color: #0083a5;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -5px;
        left: 0;
        background-color: #0083a5;
        transition: width 0.3s;
    }

    .nav-link:hover::after {
        width: 100%;
    }

    /* Active link styling */
    .nav-link.active {
        color: #0083a5;
    }

    .nav-link.active::after {
        width: 100%;
    }

    /* Navbar scroll effect */
    .navbar-scrolled {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    /* Button styles */
    .btn-primary {
        background: #0083a5;
        color: white;
        padding: 0.5rem 1.5rem;
        border-radius: 0.375rem;
        transition: all 0.3s;
        font-weight: 500;
    }

    .btn-primary:hover {
        background: #006d8a;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 131, 165, 0.3);
    }

    /* Logo animation */
    .logo {
        transition: transform 0.3s;
    }

    .logo:hover {
        transform: scale(1.05);
    }

    /* Menu icon animation */
    .menu-icon {
        transition: transform 0.3s;
    }

    .menu-icon.active {
        transform: rotate(90deg);
    }

    /* Mobile menu item animation */
    .mobile-menu-item {
        opacity: 0;
        transform: translateX(20px);
        transition: all 0.3s;
    }

    .mobile-menu.active .mobile-menu-item {
        opacity: 1;
        transform: translateX(0);
    }

    /* Staggered animation for menu items */
    .mobile-menu.active .mobile-menu-item:nth-child(1) {
        transition-delay: 0.1s;
    }

    .mobile-menu.active .mobile-menu-item:nth-child(2) {
        transition-delay: 0.15s;
    }

    .mobile-menu.active .mobile-menu-item:nth-child(3) {
        transition-delay: 0.2s;
    }

    .mobile-menu.active .mobile-menu-item:nth-child(4) {
        transition-delay: 0.25s;
    }

    .mobile-menu.active .mobile-menu-item:nth-child(5) {
        transition-delay: 0.3s;
    }

    .mobile-menu.active .mobile-menu-item:nth-child(6) {
        transition-delay: 0.35s;
    }

    /* Social icons animation */
    .social-icon {
        transition: all 0.3s;
    }

    .social-icon:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    /* Search bar */
    .search-bar {
        transition: all 0.3s;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
    }

    .search-bar.active {
        max-width: 250px;
        opacity: 1;
        margin-right: 1rem;
    }

    /* Theme toggle */
    .theme-toggle {
        position: relative;
        width: 50px;
        height: 26px;
        background: #e2e8f0;
        border-radius: 13px;
        cursor: pointer;
        transition: all 0.3s;
    }

    .theme-toggle.active {
        background: #05333f;
    }

    .theme-toggle::after {
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        background: white;
        border-radius: 50%;
        top: 3px;
        left: 3px;
        transition: all 0.3s;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .theme-toggle.active::after {
        left: 27px;
    }
</style>

<!-- Navigation Bar -->
<nav id="navbar" class="fixed w-screen bg-white shadow-md z-50 transition-all duration-300">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <!-- Logo -->
        <a href="#" class="logo text-2xl font-bold text-primary flex items-center">
            Muzzamal Dev
        </a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center space-x-6">
            <a href="#home" class="nav-link">Home</a>
            <a href="#services" class="nav-link">Services</a>
            <a href="#portfolio" class="nav-link">Portfolio</a>
            <a href="#blog" class="nav-link">Blog</a>
            <a href="#contact" class="nav-link">Contact</a>

            <!-- Search Button -->
            <button id="search-button" class="text-gray-600 hover:text-primary transition-colors">
                <i class="fas fa-search"></i>
            </button>

            <!-- Search Bar -->
            <div id="search-bar" class="search-bar">
                <input type="text" placeholder="Search..."
                    class="w-full px-3 py-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
            </div>

            <!-- Theme Toggle -->
            {{-- <div id="theme-toggle" class="theme-toggle ml-2">--}}
            {{-- <i class="fas fa-sun absolute left-1 top-1 text-yellow-500 text-xs"></i>--}}
            {{-- <i class="fas fa-moon absolute right-1 top-1 text-gray-300 text-xs"></i>--}}
            {{-- </div>--}}

            <!-- CTA Button -->
            <a href="#contact" class="btn-primary ml-2">
                Hire Me
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="flex items-center space-x-4 md:hidden">
            <button id="search-button-mobile" class="text-primary">
                <i class="fas fa-search"></i>
            </button>
            <button id="mobile-menu-button" class="text-primary focus:outline-none menu-icon">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Search Bar -->
    <div id="mobile-search-bar" class="md:hidden bg-white px-4 py-2 border-t border-gray-200 hidden">
        <input type="text" placeholder="Search..."
            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
    </div>
</nav>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu-overlay" class="mobile-menu-overlay"></div>

<!-- Mobile Menu -->
<div id="mobile-menu" class="mobile-menu">
    <div class="p-6 h-full flex flex-col">
        <!-- Close Button -->
        <div class="flex justify-between items-center mb-8">
            <a href="#" class="text-xl font-bold text-primary flex items-center">
                <i class="fas fa-code mr-2"></i>
                Portfolio
            </a>
            <button id="close-menu-button" class="text-primary focus:outline-none">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>

        <!-- Mobile Menu Links -->
        <div class="flex flex-col space-y-2 flex-grow">
            <a href="#home"
                class="mobile-menu-item nav-link text-lg py-3 px-4 rounded-lg hover:bg-gray-100 transition-colors flex items-center">
                <i class="fas fa-home mr-3 text-primary"></i>
                Home
            </a>
            <a href="#services"
                class="mobile-menu-item nav-link text-lg py-3 px-4 rounded-lg hover:bg-gray-100 transition-colors flex items-center">
                <i class="fas fa-cogs mr-3 text-primary"></i>
                Services
            </a>
            <a href="#portfolio"
                class="mobile-menu-item nav-link text-lg py-3 px-4 rounded-lg hover:bg-gray-100 transition-colors flex items-center">
                <i class="fas fa-briefcase mr-3 text-primary"></i>
                Portfolio
            </a>
            <a href="#blog"
                class="mobile-menu-item nav-link text-lg py-3 px-4 rounded-lg hover:bg-gray-100 transition-colors flex items-center">
                <i class="fas fa-blog mr-3 text-primary"></i>
                Blog
            </a>
            <a href="#contact"
                class="mobile-menu-item nav-link text-lg py-3 px-4 rounded-lg hover:bg-gray-100 transition-colors flex items-center">
                <i class="fas fa-envelope mr-3 text-primary"></i>
                Contact
            </a>

            <!-- Mobile Theme Toggle -->
            {{-- <div class="mobile-menu-item flex items-center justify-between py-3 px-4">--}}
            {{-- <span class="text-lg">Dark Mode</span>--}}
            {{-- <div id="mobile-theme-toggle" class="theme-toggle">--}}
            {{-- <i class="fas fa-sun absolute left-1 top-1 text-yellow-500 text-xs"></i>--}}
            {{-- <i class="fas fa-moon absolute right-1 top-1 text-gray-300 text-xs"></i>--}}
            {{-- </div>--}}
            {{-- </div>--}}
        </div>

        <!-- Additional Info for Mobile Menu -->
        <div class="mt-8 pt-6 border-t border-gray-200">
            <p class="text-secondary mb-4 font-medium">Get in touch:</p>
            <div class="flex space-x-3">
                <a href="#"
                    class="social-icon w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#"
                    class="social-icon w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="#"
                    class="social-icon w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white">
                    <i class="fab fa-github"></i>
                </a>
                <a href="#"
                    class="social-icon w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white">
                    <i class="fab fa-dribbble"></i>
                </a>
            </div>

            <!-- CTA Button in Mobile Menu -->
            <a href="#contact" class="btn-primary w-full mt-6 text-center block">
                Hire Me
            </a>
        </div>
    </div>
</div>


<script>
    // Mobile menu functionality
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const closeMenuButton = document.getElementById('close-menu-button');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    const mobileMenu = document.getElementById('mobile-menu');
    const navbar = document.getElementById('navbar');
    const searchButton = document.getElementById('search-button');
    const searchButtonMobile = document.getElementById('search-button-mobile');
    const searchBar = document.getElementById('search-bar');
    const mobileSearchBar = document.getElementById('mobile-search-bar');
    const themeToggle = document.getElementById('theme-toggle');
    const mobileThemeToggle = document.getElementById('mobile-theme-toggle');
    const menuIcon = document.querySelector('.menu-icon');

    // Open mobile menu
    mobileMenuButton.addEventListener('click', function() {
        mobileMenu.classList.add('active');
        mobileMenuOverlay.classList.add('active');
        menuIcon.classList.add('active');
        document.body.style.overflow = 'hidden';
    });

    // Close mobile menu with close button
    closeMenuButton.addEventListener('click', function() {
        mobileMenu.classList.remove('active');
        mobileMenuOverlay.classList.remove('active');
        menuIcon.classList.remove('active');
        document.body.style.overflow = '';
    });

    // Close mobile menu when clicking on overlay
    mobileMenuOverlay.addEventListener('click', function() {
        mobileMenu.classList.remove('active');
        mobileMenuOverlay.classList.remove('active');
        menuIcon.classList.remove('active');
        document.body.style.overflow = '';
    });

    // Close mobile menu when clicking on a menu link
    const mobileMenuLinks = document.querySelectorAll('#mobile-menu a');
    mobileMenuLinks.forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.remove('active');
            mobileMenuOverlay.classList.remove('active');
            menuIcon.classList.remove('active');
            document.body.style.overflow = '';
        });
    });

    // Close mobile menu with Escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            mobileMenu.classList.remove('active');
            mobileMenuOverlay.classList.remove('active');
            menuIcon.classList.remove('active');
            document.body.style.overflow = '';
        }
    });

    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('navbar-scrolled');
        } else {
            navbar.classList.remove('navbar-scrolled');
        }
    });

    // Search functionality
    searchButton.addEventListener('click', function() {
        searchBar.classList.toggle('active');
    });

    searchButtonMobile.addEventListener('click', function() {
        mobileSearchBar.classList.toggle('hidden');
    });

    // Theme toggle functionality
    themeToggle.addEventListener('click', function() {
        this.classList.toggle('active');
        document.body.classList.toggle('dark-mode');
        // In a real implementation, you would toggle between light and dark themes
    });

    mobileThemeToggle.addEventListener('click', function() {
        this.classList.toggle('active');
        document.body.classList.toggle('dark-mode');
        // In a real implementation, you would toggle between light and dark themes
    });

    // Active link highlighting
    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            navLinks.forEach(l => l.classList.remove('active'));
            this.classList.add('active');
        });
    });
</script>