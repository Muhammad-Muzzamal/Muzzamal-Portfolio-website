<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Portfolio')</title>

    <!-- Tailwind CSS -->
    @vite("resources/css/app.css")

    <!-- Custom Styles -->
    <style>
        :root {
            --color-primary: #6366f1;
            --color-secondary: #10b981;
            --color-accent: #f59e0b;
            --color-background: #0f172a;
            --color-text: #f8fafc;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .gradient-bg {
            background: radial-gradient(circle at center, var(--color-primary) 0%, transparent 50%),
            radial-gradient(circle at top right, var(--color-secondary) 0%, transparent 50%),
            radial-gradient(circle at bottom left, var(--color-accent) 0%, transparent 50%);
            background-blend-mode: screen;
        }

        .navbar-blur {
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }


    </style>
</head>
<body class="bg-[var(--color-background)] text-[var(--color-text)] font-sans">
<!-- Navigation -->
<nav id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300">
    <div class="container mx-auto px-6 py-4">
        <div
            class="flex justify-between items-center navbar-blur bg-white/10 rounded-2xl px-6 py-3 border border-white/20">
            <!-- Logo -->
            <a href="" class="text-2xl font-bold text-white">Portfolio</a>

            <!-- Navigation Links -->
            <div class="hidden md:flex space-x-8">
                <a href="#home" class="nav-link hover:text-[var(--color-accent)] transition-colors">Home</a>
                <a href="#about" class="nav-link hover:text-[var(--color-accent)] transition-colors">About</a>
                <a href="#projects" class="nav-link hover:text-[var(--color-accent)] transition-colors">Projects</a>
                <a href="#services" class="nav-link hover:text-[var(--color-accent)] transition-colors">Services</a>
                <a href="#blog" class="nav-link hover:text-[var(--color-accent)] transition-colors">Blog</a>
                <a href="#contact" class="nav-link hover:text-[var(--color-accent)] transition-colors">Contact</a>
            </div>

            <!-- Mobile menu button -->
            <button id="mobile-menu-button" class="md:hidden text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden navbar-blur bg-white/10 mt-2 rounded-2xl mx-6 border border-white/20">
        <div class="px-6 py-4 space-y-4">
            <a href="#home" class="block nav-link hover:text-[var(--color-accent)] transition-colors">Home</a>
            <a href="#about" class="block nav-link hover:text-[var(--color-accent)] transition-colors">About</a>
            <a href="#projects" class="block nav-link hover:text-[var(--color-accent)] transition-colors">Projects</a>
            <a href="#services" class="block nav-link hover:text-[var(--color-accent)] transition-colors">Services</a>
            <a href="#blog" class="block nav-link hover:text-[var(--color-accent)] transition-colors">Blog</a>
            <a href="#contact" class="block nav-link hover:text-[var(--color-accent)] transition-colors">Contact</a>
        </div>
    </div>
</nav>

<!-- Main Content -->
<main>
    @yield('content')
</main>

<!-- Footer -->
<footer class="bg-gray-900 py-12">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="mb-6 md:mb-0">
                <h3 class="text-2xl font-bold">Portfolio</h3>
                <p class="text-gray-400 mt-2">Building amazing digital experiences</p>
            </div>
            <div class="flex space-x-6">
                <a href="#" class="text-gray-400 hover:text-white transition-colors">LinkedIn</a>
                <a href="#" class="text-gray-400 hover:text-white transition-colors">GitHub</a>
                <a href="#" class="text-gray-400 hover:text-white transition-colors">Twitter</a>
            </div>
        </div>
        <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
            <p>&copy; 2024 My Portfolio. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- JavaScript -->
<script>
    // Navbar scroll effect
    window.addEventListener('scroll', function () {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('bg-white/5', 'shadow-lg');
        } else {
            navbar.classList.remove('bg-white/5', 'shadow-lg');
        }
    });

    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function () {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });

                // Close mobile menu if open
                document.getElementById('mobile-menu').classList.add('hidden');
            }
        });
    });
</script>
</body>
</html>
