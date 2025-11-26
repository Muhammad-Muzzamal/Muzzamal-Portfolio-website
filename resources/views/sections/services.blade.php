<style>
    .services-section {
        padding: 5rem 0;
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        position: relative;
        overflow: hidden;
    }

    /* Animated Background Elements */
    .service-bg-element {
        position: absolute;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(0, 131, 165, 0.1) 0%, transparent 70%);
        animation: float 25s infinite linear;
        z-index: 1;
    }

    .service-bg-element:nth-child(1) {
        width: 150px;
        height: 150px;
        top: 10%;
        left: 5%;
        animation-duration: 30s;
    }

    .service-bg-element:nth-child(2) {
        width: 120px;
        height: 120px;
        bottom: 15%;
        right: 8%;
        animation-duration: 35s;
        animation-delay: 5s;
    }

    .service-bg-element:nth-child(3) {
        width: 80px;
        height: 80px;
        top: 50%;
        left: 10%;
        animation-duration: 40s;
        animation-delay: 10s;
    }

    @keyframes float {
        0% {
            transform: translate(0, 0) rotate(0deg) scale(1);
        }
        25% {
            transform: translate(30px, 40px) rotate(90deg) scale(1.1);
        }
        50% {
            transform: translate(0, 80px) rotate(180deg) scale(1);
        }
        75% {
            transform: translate(-30px, 40px) rotate(270deg) scale(0.9);
        }
        100% {
            transform: translate(0, 0) rotate(360deg) scale(1);
        }
    }

    /* Container */
    .services-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
        position: relative;
        z-index: 10;
    }

    /* Section Header */
    .section-header {
        text-align: center;
        margin-bottom: 3rem;
        opacity: 0;
        animation: fadeInUp 1s ease 0.3s forwards;
    }

    .section-subtitle {
        font-size: 1rem;
        color: #0083a5;
        font-weight: 600;
        margin-bottom: 0.5rem;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .section-title {
        font-size: clamp(1.8rem, 4vw, 2.8rem);
        font-weight: 800;
        color: #ffffff;
        line-height: 1.2;
        margin-bottom: 1rem;
    }

    .section-description {
        font-size: 1rem;
        color: #94a3b8;
        max-width: 500px;
        margin: 0 auto;
        line-height: 1.6;
    }

    /* Services Grid - More compact */
    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 1.5rem;
        margin-top: 2rem;
    }

    /* Service Card - Smaller and more compact */
    .service-card {
        background: rgba(30, 41, 59, 0.6);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 16px;
        padding: 1.8rem;
        position: relative;
        overflow: hidden;
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        opacity: 0;
        transform: translateY(50px) rotateX(15deg);
        animation: cardEntrance 1s ease forwards;
        min-height: 320px;
        display: flex;
        flex-direction: column;
    }

    .service-card:nth-child(1) {
        animation-delay: 0.4s;
    }

    .service-card:nth-child(2) {
        animation-delay: 0.6s;
    }

    .service-card:nth-child(3) {
        animation-delay: 0.8s;
    }

    .service-card:nth-child(4) {
        animation-delay: 1s;
    }

    .service-card:nth-child(5) {
        animation-delay: 1.2s;
    }

    .service-card:nth-child(6) {
        animation-delay: 1.4s;
    }

    @keyframes cardEntrance {
        to {
            opacity: 1;
            transform: translateY(0) rotateX(0);
        }
    }

    .service-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(0, 131, 165, 0.2), transparent);
        transition: left 0.7s ease;
    }

    .service-card:hover::before {
        left: 100%;
    }

    .service-card:hover {
        transform: translateY(-8px) scale(1.02);
        border-color: rgba(0, 131, 165, 0.3);
        box-shadow: 0 15px 30px rgba(0, 131, 165, 0.1),
        0 0 0 1px rgba(0, 131, 165, 0.1),
        inset 0 0 0 1px rgba(255, 255, 255, 0.05);
    }

    /* Card Icon - Smaller */
    .card-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #0083a5 0%, #05333f 100%);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.2rem;
        position: relative;
        transition: all 0.5s ease;
    }

    .service-card:hover .card-icon {
        transform: scale(1.1) rotate(5deg);
        box-shadow: 0 10px 20px rgba(0, 131, 165, 0.4);
    }

    .card-icon i {
        font-size: 1.5rem;
        color: white;
        transition: all 0.5s ease;
    }

    .service-card:hover .card-icon i {
        transform: scale(1.2);
    }

    /* Card Content - More compact */
    .card-title {
        font-size: 1.3rem;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 0.8rem;
        position: relative;
    }

    .card-title::after {
        content: '';
        position: absolute;
        bottom: -6px;
        left: 0;
        width: 30px;
        height: 2px;
        background: #0083a5;
        border-radius: 2px;
        transition: width 0.5s ease;
    }

    .service-card:hover .card-title::after {
        width: 60px;
    }

    .card-description {
        color: #94a3b8;
        line-height: 1.5;
        margin-bottom: 1.2rem;
        font-size: 0.9rem;
        flex-grow: 1;
    }

    /* Features List - More compact - FIXED */
    .features-list {
        list-style: none;
        margin-bottom: 1.5rem;
    }

    .feature-item {
        display: flex;
        align-items: center;
        gap: 0.6rem;
        margin-bottom: 0.5rem;
        color: #cbd5e1;
        font-size: 0.85rem;
        transition: all 0.3s ease;
        /* REMOVED: opacity: 0; transform: translateX(-20px); */
        opacity: 1; /* ADDED: Make features visible by default */
        transform: translateX(0); /* ADDED: Remove initial translation */
    }

    /* REMOVED: .service-card:hover .feature-item animations */
    /* Features will now be visible by default */

    .feature-icon {
        color: #0083a5;
        font-size: 0.7rem;
        transition: all 0.3s ease;
    }

    .service-card:hover .feature-icon {
        transform: scale(1.2);
    }

    /* Card Button - Smaller */
    .card-button {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        color: #0083a5;
        text-decoration: none;
        font-weight: 600;
        padding: 0.6rem 1.2rem;
        border: 2px solid rgba(0, 131, 165, 0.3);
        border-radius: 8px;
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
        font-size: 0.9rem;
        margin-top: auto;
    }

    .card-button::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(0, 131, 165, 0.2), transparent);
        transition: left 0.6s ease;
    }

    .card-button:hover::before {
        left: 100%;
    }

    .card-button:hover {
        background: rgba(0, 131, 165, 0.1);
        border-color: #0083a5;
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(0, 131, 165, 0.2);
    }

    .button-icon {
        transition: transform 0.3s ease;
    }

    .card-button:hover .button-icon {
        transform: translateX(3px);
    }

    /* Floating Particles */
    .particle {
        position: absolute;
        background: rgba(0, 131, 165, 0.3);
        border-radius: 50%;
        pointer-events: none;
        z-index: 2;
    }

    /* Glow Effect */
    .card-glow {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 16px;
        background: radial-gradient(circle at center, rgba(0, 131, 165, 0.1) 0%, transparent 70%);
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .service-card:hover .card-glow {
        opacity: 1;
    }

    /* Animations */
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

    /* Responsive Design */
    @media (max-width: 768px) {
        .services-grid {
            grid-template-columns: 1fr;
            gap: 1.2rem;
        }

        .service-card {
            padding: 1.5rem;
            min-height: 280px;
        }

        .services-section {
            padding: 3rem 0;
        }
    }

    @media (max-width: 480px) {
        .services-container {
            padding: 0 1rem;
        }

        .service-card {
            padding: 1.2rem;
            min-height: 260px;
        }

        .card-icon {
            width: 50px;
            height: 50px;
        }

        .card-icon i {
            font-size: 1.3rem;
        }

        .card-title {
            font-size: 1.2rem;
        }
    }
</style>
<section class="services-section" id="services">
    <!-- Background Elements -->
    <div class="service-bg-element"></div>
    <div class="service-bg-element"></div>
    <div class="service-bg-element"></div>

    <div class="services-container">
        <!-- Section Header -->
        <div class="section-header">
            <p class="section-subtitle">What I Offer</p>
            <h2 class="section-title">My Services</h2>
            <p class="section-description">
                Comprehensive web development services to bring your digital ideas to life with excellence.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="services-grid">
            <!-- Service Card 1 -->
            <div class="service-card">
                <div class="card-glow"></div>
                <div class="card-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3 class="card-title">Frontend Development</h3>
                <p class="card-description">
                    Creating responsive, interactive user interfaces with modern frameworks and best practices.
                </p>
                <ul class="features-list">
                    <li class="feature-item">
                        <i class="fas fa-check feature-icon"></i>
                        Responsive Design
                    </li>
                    <li class="feature-item">
                        <i class="fas fa-check feature-icon"></i>
                        React/Vue.js
                    </li>
                    <li class="feature-item">
                        <i class="fas fa-check feature-icon"></i>
                        UI/UX Implementation
                    </li>
                </ul>
                <a href="#" class="card-button">
                    Learn More
                    <i class="fas fa-arrow-right button-icon"></i>
                </a>
            </div>

            <!-- Service Card 2 -->
            <div class="service-card">
                <div class="card-glow"></div>
                <div class="card-icon">
                    <i class="fas fa-server"></i>
                </div>
                <h3 class="card-title">Backend Development</h3>
                <p class="card-description">
                    Building robust server-side applications, APIs, and databases to power your applications.
                </p>
                <ul class="features-list">
                    <li class="feature-item">
                        <i class="fas fa-check feature-icon"></i>
                        API Development
                    </li>
                    <li class="feature-item">
                        <i class="fas fa-check feature-icon"></i>
                        Database Design
                    </li>
                    <li class="feature-item">
                        <i class="fas fa-check feature-icon"></i>
                        Server Architecture
                    </li>
                </ul>
                <a href="#" class="card-button">
                    Learn More
                    <i class="fas fa-arrow-right button-icon"></i>
                </a>
            </div>

            <!-- Service Card 3 -->
            <div class="service-card">
                <div class="card-glow"></div>
                <div class="card-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3 class="card-title">Full Stack Solutions</h3>
                <p class="card-description">
                    End-to-end development from concept to deployment and maintenance.
                </p>
                <ul class="features-list">
                    <li class="feature-item">
                        <i class="fas fa-check feature-icon"></i>
                        Project Planning
                    </li>
                    <li class="feature-item">
                        <i class="fas fa-check feature-icon"></i>
                        Full Development
                    </li>
                    <li class="feature-item">
                        <i class="fas fa-check feature-icon"></i>
                        Deployment & DevOps
                    </li>
                </ul>
                <a href="#" class="card-button">
                    Learn More
                    <i class="fas fa-arrow-right button-icon"></i>
                </a>
            </div>

            <!-- Service Card 4 -->
            <div class="service-card">
                <div class="card-glow"></div>
                <div class="card-icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <h3 class="card-title">E-commerce Solutions</h3>
                <p class="card-description">
                    Scalable e-commerce platforms with secure payment integration.
                </p>
                <ul class="features-list">
                    <li class="feature-item">
                        <i class="fas fa-check feature-icon"></i>
                        Online Store
                    </li>
                    <li class="feature-item">
                        <i class="fas fa-check feature-icon"></i>
                        Payment Integration
                    </li>
                    <li class="feature-item">
                        <i class="fas fa-check feature-icon"></i>
                        Inventory Management
                    </li>
                </ul>
                <a href="#" class="card-button">
                    Learn More
                    <i class="fas fa-arrow-right button-icon"></i>
                </a>
            </div>

            <!-- Service Card 5 -->
            <div class="service-card">
                <div class="card-glow"></div>
                <div class="card-icon">
                    <i class="fas fa-tools"></i>
                </div>
                <h3 class="card-title">Maintenance & Support</h3>
                <p class="card-description">
                    Ongoing maintenance and technical support for smooth operations.
                </p>
                <ul class="features-list">
                    <li class="feature-item">
                        <i class="fas fa-check feature-icon"></i>
                        Regular Updates
                    </li>
                    <li class="feature-item">
                        <i class="fas fa-check feature-icon"></i>
                        Bug Fixing
                    </li>
                    <li class="feature-item">
                        <i class="fas fa-check feature-icon"></i>
                        Performance Monitoring
                    </li>
                </ul>
                <a href="#" class="card-button">
                    Learn More
                    <i class="fas fa-arrow-right button-icon"></i>
                </a>
            </div>

            <!-- Service Card 6 -->
            <div class="service-card">
                <div class="card-glow"></div>
                <div class="card-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3 class="card-title">Consulting</h3>
                <p class="card-description">
                    Technical consulting for informed digital strategy decisions.
                </p>
                <ul class="features-list">
                    <li class="feature-item">
                        <i class="fas fa-check feature-icon"></i>
                        Technical Advice
                    </li>
                    <li class="feature-item">
                        <i class="fas fa-check feature-icon"></i>
                        Architecture Planning
                    </li>
                    <li class="feature-item">
                        <i class="fas fa-check feature-icon"></i>
                        Code Review
                    </li>
                </ul>
                <a href="#" class="card-button">
                    Learn More
                    <i class="fas fa-arrow-right button-icon"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    // Complex animations for service cards
    document.addEventListener('DOMContentLoaded', function () {
        const serviceCards = document.querySelectorAll('.service-card');

        // Mouse move parallax effect
        serviceCards.forEach(card => {
            card.addEventListener('mousemove', function (e) {
                const cardRect = this.getBoundingClientRect();
                const x = e.clientX - cardRect.left;
                const y = e.clientY - cardRect.top;

                const centerX = cardRect.width / 2;
                const centerY = cardRect.height / 2;

                const angleY = (x - centerX) / 25;
                const angleX = (centerY - y) / 25;

                this.style.transform = `perspective(1000px) rotateX(${angleX}deg) rotateY(${angleY}deg) translateY(-8px) scale(1.02)`;

                // Dynamic glow effect
                const glow = this.querySelector('.card-glow');
                glow.style.background = `radial-gradient(circle at ${x}px ${y}px, rgba(0, 131, 165, 0.15) 0%, transparent 70%)`;
            });

            card.addEventListener('mouseleave', function () {
                this.style.transform = 'translateY(-8px) scale(1.02)';
                const glow = this.querySelector('.card-glow');
                glow.style.background = 'radial-gradient(circle at center, rgba(0, 131, 165, 0.1) 0%, transparent 70%)';
            });
        });

        // Create floating particles
        function createParticles() {
            const particlesContainer = document.querySelector('.services-section');
            const particleCount = 12;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';

                // Random properties
                const size = Math.random() * 3 + 1;
                const posX = Math.random() * 100;
                const posY = Math.random() * 100;
                const duration = Math.random() * 20 + 10;
                const delay = Math.random() * 5;

                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.left = `${posX}%`;
                particle.style.top = `${posY}%`;
                particle.style.animation = `float ${duration}s infinite linear ${delay}s`;
                particle.style.opacity = Math.random() * 0.3 + 0.1;

                particlesContainer.appendChild(particle);
            }
        }

        createParticles();

        // Intersection Observer for staggered animations
        const cardObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                }
            });
        }, {threshold: 0.1});

        serviceCards.forEach(card => {
            cardObserver.observe(card);
        });

        // Click effect for buttons
        const cardButtons = document.querySelectorAll('.card-button');
        cardButtons.forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();

                // Ripple effect
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;

                ripple.style.width = ripple.style.height = `${size}px`;
                ripple.style.left = `${x}px`;
                ripple.style.top = `${y}px`;
                ripple.style.background = 'rgba(0, 131, 165, 0.3)';
                ripple.style.borderRadius = '50%';
                ripple.style.position = 'absolute';
                ripple.style.animation = 'ripple 0.6s ease-out';

                this.appendChild(ripple);

                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });

        // Add ripple animation
        const style = document.createElement('style');
        style.textContent = `
                @keyframes ripple {
                    from {
                        transform: scale(0);
                        opacity: 1;
                    }
                    to {
                        transform: scale(4);
                        opacity: 0;
                    }
                }
            `;
        document.head.appendChild(style);
    });
</script>
