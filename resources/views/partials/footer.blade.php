<style>
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

    /* Footer specific styles */
    .footer-gradient {
        background: linear-gradient(135deg, #05333f 0%, #0083a5 100%);
    }

    .footer-section {
        transition: all 0.3s ease;
    }

    .footer-link {
        position: relative;
        transition: all 0.3s ease;
    }

    .footer-link:hover {
        color: #0083a5;
        transform: translateX(5px);
    }

    .footer-link::before {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -2px;
        left: 0;
        background-color: #0083a5;
        transition: width 0.3s ease;
    }

    .footer-link:hover::before {
        width: 100%;
    }

    .social-icon {
        transition: all 0.3s ease;
    }

    .social-icon:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 131, 165, 0.3);
    }

    .newsletter-input {
        transition: all 0.3s ease;
    }

    .newsletter-input:focus {
        box-shadow: 0 0 0 3px rgba(0, 131, 165, 0.2);
    }

    .subscribe-btn {
        transition: all 0.3s ease;
        background: linear-gradient(135deg, #0083a5 0%, #05333f 100%);
    }

    .subscribe-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 131, 165, 0.4);
    }

    .back-to-top {
        transition: all 0.3s ease;
    }

    .back-to-top:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0, 131, 165, 0.4);
    }

    /* Animation for footer elements */
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

    .animate-footer {
        animation: fadeInUp 0.6s ease-out forwards;
    }

    /* Stagger animation delays */
    .footer-delay-1 {
        animation-delay: 0.1s;
    }

    .footer-delay-2 {
        animation-delay: 0.2s;
    }

    .footer-delay-3 {
        animation-delay: 0.3s;
    }

    .footer-delay-4 {
        animation-delay: 0.4s;
    }

    /* Mobile-specific styles */
    @media (max-width: 768px) {
        .footer-section {
            margin-bottom: 2rem;
        }

        .footer-section:last-child {
            margin-bottom: 0;
        }

        .newsletter-input {
            width: 100%;
            border-radius: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .subscribe-btn {
            width: 100%;
            border-radius: 0.5rem;
        }

        .flex.flex-col.md\:flex-row {
            text-align: center;
        }

        .payment-methods {
            justify-content: center;
            margin-bottom: 1rem;
        }

        .social-icons {
            justify-content: center;
        }

        .footer-links-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
    }

    /* Small mobile devices */
    @media (max-width: 480px) {
        .container {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .footer-gradient {
            padding-top: 2rem;
            padding-bottom: 1rem;
        }

        .footer-section h3 {
            font-size: 1.25rem;
        }

        .social-icon {
            width: 2.5rem;
            height: 2.5rem;
        }
    }
</style>

<!-- Professional Footer -->
<footer class="footer-gradient text-white pt-16 pb-8">
    <div class="container mx-auto px-4">
        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12 footer-links-grid">
            <!-- Company Info -->
            <div class="footer-section animate-footer footer-delay-1">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center mr-3 text-primary">
{{--                        <i class="fas fa-code text-primary text-xl"></i>--}}
                        MD
                    </div>
                    <span class="text-2xl font-bold">Muzzamal Dev</span>
                </div>
                <p class="text-gray-300 mb-6 leading-relaxed">
                    Full stack web developer creating digital experiences that make a difference.
                    Specializing in modern web technologies and innovative solutions.
                </p>
                <div class="flex space-x-4 social-icons">
                    <a href="#"
                       class="social-icon w-10 h-10 rounded-full bg-white bg-opacity-10 flex items-center justify-center text-white hover:bg-primary">
                        <i class="fab fa-twitter text-primary"></i>
                    </a>
                    <a href="#"
                       class="social-icon w-10 h-10 rounded-full bg-white bg-opacity-10 flex items-center justify-center text-white hover:bg-primary">
                        <i class="fab fa-linkedin-in text-primary"></i>
                    </a>
                    <a href="#"
                       class="social-icon w-10 h-10 rounded-full bg-white bg-opacity-10 flex items-center justify-center text-white hover:bg-primary">
                        <i class="fab fa-github text-primary"></i>
                    </a>
                    <a href="#"
                       class="social-icon w-10 h-10 rounded-full bg-white bg-opacity-10 flex items-center justify-center text-white hover:bg-primary">
                        <i class="fab fa-dribbble text-primary"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-section animate-footer footer-delay-2">
                <h3 class="text-xl font-bold mb-6 relative pb-2">
                    Quick Links
                    <span class="absolute bottom-0 left-0 w-12 h-1 bg-primary rounded-full"></span>
                </h3>
                <ul class="space-y-3">
                    <li>
                        <a href="#" class="footer-link flex items-center text-gray-300 hover:text-white">
                            <i class="fas fa-chevron-right text-primary text-xs mr-2"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#" class="footer-link flex items-center text-gray-300 hover:text-white">
                            <i class="fas fa-chevron-right text-primary text-xs mr-2"></i>
                            About Me
                        </a>
                    </li>
                    <li>
                        <a href="#" class="footer-link flex items-center text-gray-300 hover:text-white">
                            <i class="fas fa-chevron-right text-primary text-xs mr-2"></i>
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="#" class="footer-link flex items-center text-gray-300 hover:text-white">
                            <i class="fas fa-chevron-right text-primary text-xs mr-2"></i>
                            Portfolio
                        </a>
                    </li>
                    <li>
                        <a href="#" class="footer-link flex items-center text-gray-300 hover:text-white">
                            <i class="fas fa-chevron-right text-primary text-xs mr-2"></i>
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="#" class="footer-link flex items-center text-gray-300 hover:text-white">
                            <i class="fas fa-chevron-right text-primary text-xs mr-2"></i>
                            Contact
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Services -->
            <div class="footer-section animate-footer footer-delay-3">
                <h3 class="text-xl font-bold mb-6 relative pb-2">
                    Services
                    <span class="absolute bottom-0 left-0 w-12 h-1 bg-primary rounded-full"></span>
                </h3>
                <ul class="space-y-3">
                    <li>
                        <a href="#" class="footer-link flex items-center text-gray-300 hover:text-white">
                            <i class="fas fa-check text-primary text-xs mr-2"></i>
                            Web Development
                        </a>
                    </li>
                    <li>
                        <a href="#" class="footer-link flex items-center text-gray-300 hover:text-white">
                            <i class="fas fa-check text-primary text-xs mr-2"></i>
                            Mobile Apps
                        </a>
                    </li>
                    <li>
                        <a href="#" class="footer-link flex items-center text-gray-300 hover:text-white">
                            <i class="fas fa-check text-primary text-xs mr-2"></i>
                            UI/UX Design
                        </a>
                    </li>
                    <li>
                        <a href="#" class="footer-link flex items-center text-gray-300 hover:text-white">
                            <i class="fas fa-check text-primary text-xs mr-2"></i>
                            E-commerce Solutions
                        </a>
                    </li>
                    <li>
                        <a href="#" class="footer-link flex items-center text-gray-300 hover:text-white">
                            <i class="fas fa-check text-primary text-xs mr-2"></i>
                            API Development
                        </a>
                    </li>
                    <li>
                        <a href="#" class="footer-link flex items-center text-gray-300 hover:text-white">
                            <i class="fas fa-check text-primary text-xs mr-2"></i>
                            Consulting
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Newsletter & Contact -->
            <div class="footer-section animate-footer footer-delay-4">
                <h3 class="text-xl font-bold mb-6 relative pb-2">
                    Newsletter
                    <span class="absolute bottom-0 left-0 w-12 h-1 bg-primary rounded-full"></span>
                </h3>
                <p class="text-gray-300 mb-4">Subscribe to my newsletter for the latest updates and insights.</p>

                <div class="mb-6">
                    <form class="newsletter-form">
                        <div class="flex flex-col md:flex-row">
                            <input type="email" placeholder="Your email address"
                                   class="newsletter-input flex-grow px-4 py-3 md:rounded-l-lg rounded-lg md:rounded-r-none focus:outline-none text-gray-800">
                            <button
                                class="subscribe-btn px-6 py-3 md:rounded-r-lg rounded-lg md:rounded-l-none font-semibold text-white mt-2 md:mt-0">
                                <i class="fas fa-paper-plane mr-2"></i>
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>

                <div class="border-t border-gray-700 pt-6">
                    <h4 class="font-semibold mb-3">Contact Info</h4>
                    <div class="space-y-2">
                        <div class="flex items-center text-gray-300">
                            <i class="fas fa-envelope text-primary mr-3"></i>
                            <span>muzzamaldev@gmail.com</span>
                        </div>
                        <div class="flex items-center text-gray-300">
                            <i class="fas fa-phone text-primary mr-3"></i>
                            <span>+923038570966</span>
                        </div>
                        <div class="flex items-center text-gray-300">
                            <i class="fas fa-map-marker-alt text-primary mr-3"></i>
                            <span>Pakistan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="border-t border-gray-700 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <p class="text-gray-400 text-sm">
                        &copy; 2023 Portfolio. All rights reserved. |
                        <a href="#" class="text-primary hover:text-white transition-colors">Privacy Policy</a> |
                        <a href="#" class="text-primary hover:text-white transition-colors">Terms of Service</a>
                    </p>
                </div>

                <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-6">
                    <!-- Payment Methods -->
{{--                    <div class="flex items-center space-x-2 text-gray-400 payment-methods">--}}
{{--                        <span class="text-sm mr-2">We accept:</span>--}}
{{--                        <i class="fab fa-cc-visa text-lg"></i>--}}
{{--                        <i class="fab fa-cc-mastercard text-lg"></i>--}}
{{--                        <i class="fab fa-cc-paypal text-lg"></i>--}}
{{--                        <i class="fab fa-cc-apple-pay text-lg"></i>--}}
{{--                    </div>--}}

                    <!-- Back to Top Button -->
                    <button id="back-to-top"
                            class="back-to-top bg-primary w-10 h-10 rounded-full flex items-center justify-center text-white opacity-0 transition-opacity duration-300">
                        <i class="fas fa-chevron-up"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    // Back to top functionality
    const backToTopButton = document.getElementById('back-to-top');

    backToTopButton.addEventListener('click', function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Show/hide back to top button based on scroll position
    window.addEventListener('scroll', function () {
        if (window.scrollY > 500) {
            backToTopButton.classList.add('opacity-100');
            backToTopButton.classList.remove('opacity-0');
        } else {
            backToTopButton.classList.add('opacity-0');
            backToTopButton.classList.remove('opacity-100');
        }
    });

    // Newsletter form submission
    const newsletterForm = document.querySelector('.newsletter-form');
    const newsletterInput = document.querySelector('.newsletter-input');

    newsletterForm.addEventListener('submit', function (e) {
        e.preventDefault();
        if (newsletterInput.value) {
            // In a real implementation, you would send this to your backend
            alert(`Thank you for subscribing with: ${newsletterInput.value}`);
            newsletterInput.value = '';
        }
    });

    // Add animation to footer sections when they come into view
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-footer');
            }
        });
    }, observerOptions);

    // Observe footer sections
    document.querySelectorAll('.footer-section').forEach(section => {
        observer.observe(section);
    });
</script>
