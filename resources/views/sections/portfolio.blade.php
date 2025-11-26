<style>


    .portfolio-section {
        padding: 5rem 0;
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        position: relative;
        overflow: hidden;
    }

    /* Animated Background Elements */
    .portfolio-bg-element {
        position: absolute;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(0, 131, 165, 0.08) 0%, transparent 70%);
        animation: float 30s infinite linear;
        z-index: 1;
    }

    .portfolio-bg-element:nth-child(1) {
        width: 150px;
        height: 150px;
        top: 10%;
        right: 5%;
        animation-duration: 35s;
    }

    .portfolio-bg-element:nth-child(2) {
        width: 120px;
        height: 120px;
        bottom: 15%;
        left: 8%;
        animation-duration: 40s;
        animation-delay: 5s;
    }

    .portfolio-bg-element:nth-child(3) {
        width: 80px;
        height: 80px;
        top: 60%;
        right: 15%;
        animation-duration: 45s;
        animation-delay: 10s;
    }

    @keyframes float {
        0% {
            transform: translate(0, 0) rotate(0deg) scale(1);
        }
        25% {
            transform: translate(40px, 50px) rotate(90deg) scale(1.1);
        }
        50% {
            transform: translate(0, 100px) rotate(180deg) scale(1);
        }
        75% {
            transform: translate(-40px, 50px) rotate(270deg) scale(0.9);
        }
        100% {
            transform: translate(0, 0) rotate(360deg) scale(1);
        }
    }

    /* Container */
    .portfolio-container {
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
        font-size: clamp(1.8rem, 4vw, 3rem);
        font-weight: 800;
        color: #05333f;
        line-height: 1.2;
        margin-bottom: 1rem;
    }

    .section-description {
        font-size: 1rem;
        color: #64748b;
        max-width: 500px;
        margin: 0 auto;
        line-height: 1.6;
    }

    /* Filter Buttons */
    .filter-buttons {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 0.8rem;
        margin-bottom: 2.5rem;
        opacity: 0;
        animation: fadeInUp 1s ease 0.5s forwards;
    }

    .filter-btn {
        padding: 0.6rem 1.2rem;
        background: transparent;
        border: 2px solid #e2e8f0;
        border-radius: 50px;
        color: #64748b;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
        font-size: 0.9rem;
    }

    .filter-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(0, 131, 165, 0.1), transparent);
        transition: left 0.6s ease;
    }

    .filter-btn:hover::before {
        left: 100%;
    }

    .filter-btn:hover, .filter-btn.active {
        background: #0083a5;
        color: white;
        border-color: #0083a5;
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(0, 131, 165, 0.3);
    }

    /* Portfolio Grid - More compact */
    .portfolio-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1.5rem;
        margin-top: 2rem;
    }

    /* Portfolio Item - Smaller and more compact */
    .portfolio-item {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.06);
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        opacity: 0;
        transform: translateY(50px) scale(0.9);
        animation: portfolioItemEntrance 1s ease forwards;
        position: relative;
        min-height: 380px;
        display: flex;
        flex-direction: column;
    }

    .portfolio-item:nth-child(1) {
        animation-delay: 0.4s;
    }

    .portfolio-item:nth-child(2) {
        animation-delay: 0.6s;
    }

    .portfolio-item:nth-child(3) {
        animation-delay: 0.8s;
    }

    .portfolio-item:nth-child(4) {
        animation-delay: 1s;
    }

    .portfolio-item:nth-child(5) {
        animation-delay: 1.2s;
    }

    .portfolio-item:nth-child(6) {
        animation-delay: 1.4s;
    }

    @keyframes portfolioItemEntrance {
        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    .portfolio-item:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 20px 40px rgba(0, 131, 165, 0.12),
        0 0 0 1px rgba(0, 131, 165, 0.08);
    }

    /* Image Container - Smaller */
    .portfolio-image {
        position: relative;
        height: 180px;
        overflow: hidden;
    }

    .portfolio-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: all 0.6s ease;
    }

    .portfolio-item:hover .portfolio-img {
        transform: scale(1.1);
    }

    .portfolio-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(0, 131, 165, 0.9) 0%, rgba(5, 51, 63, 0.8) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: all 0.4s ease;
    }

    .portfolio-item:hover .portfolio-overlay {
        opacity: 1;
    }

    .overlay-content {
        text-align: center;
        color: white;
        transform: translateY(20px);
        transition: transform 0.4s ease;
    }

    .portfolio-item:hover .overlay-content {
        transform: translateY(0);
    }

    .overlay-icons {
        display: flex;
        gap: 0.8rem;
        margin-bottom: 0.8rem;
        justify-content: center;
    }

    .overlay-icon {
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-decoration: none;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
        font-size: 0.9rem;
    }

    .overlay-icon:hover {
        background: white;
        color: #0083a5;
        transform: scale(1.1);
    }

    /* Content - More compact */
    .portfolio-content {
        padding: 1.2rem;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .portfolio-category {
        display: inline-block;
        background: rgba(0, 131, 165, 0.1);
        color: #0083a5;
        padding: 0.3rem 0.8rem;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 600;
        margin-bottom: 0.8rem;
    }

    .portfolio-title {
        font-size: 1.2rem;
        font-weight: 700;
        color: #05333f;
        margin-bottom: 0.6rem;
        line-height: 1.3;
    }

    .portfolio-description {
        color: #64748b;
        line-height: 1.5;
        margin-bottom: 1rem;
        font-size: 0.9rem;
        flex-grow: 1;
    }

    .portfolio-tech {
        display: flex;
        flex-wrap: wrap;
        gap: 0.4rem;
        margin-bottom: 1.2rem;
    }

    .tech-tag {
        background: #f1f5f9;
        color: #475569;
        padding: 0.25rem 0.6rem;
        border-radius: 15px;
        font-size: 0.75rem;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .tech-tag:hover {
        background: #0083a5;
        color: white;
        transform: translateY(-2px);
    }

    .portfolio-link {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        color: #0083a5;
        text-decoration: none;
        font-weight: 600;
        padding: 0.5rem 1rem;
        border: 2px solid #e2e8f0;
        border-radius: 8px;
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
        font-size: 0.85rem;
        margin-top: auto;
    }

    .portfolio-link::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(0, 131, 165, 0.1), transparent);
        transition: left 0.6s ease;
    }

    .portfolio-link:hover::before {
        left: 100%;
    }

    .portfolio-link:hover {
        background: rgba(0, 131, 165, 0.1);
        border-color: #0083a5;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 131, 165, 0.2);
    }

    .link-icon {
        transition: transform 0.3s ease;
        font-size: 0.8rem;
    }

    .portfolio-link:hover .link-icon {
        transform: translateX(3px);
    }

    /* Floating Particles */
    .particle {
        position: absolute;
        background: rgba(0, 131, 165, 0.1);
        border-radius: 50%;
        pointer-events: none;
        z-index: 2;
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

    /* View More Button */
    .view-more {
        text-align: center;
        margin-top: 3rem;
        opacity: 0;
        animation: fadeInUp 1s ease 1.6s forwards;
    }

    .view-more-btn {
        display: inline-flex;
        align-items: center;
        gap: 0.6rem;
        background: #0083a5;
        color: white;
        padding: 0.8rem 2rem;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.4s ease;
        box-shadow: 0 6px 20px rgba(0, 131, 165, 0.3);
        position: relative;
        overflow: hidden;
        font-size: 0.95rem;
    }

    .view-more-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.6s ease;
    }

    .view-more-btn:hover::before {
        left: 100%;
    }

    .view-more-btn:hover {
        background: #006d8a;
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(0, 131, 165, 0.4);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .portfolio-grid {
            grid-template-columns: 1fr;
            gap: 1.2rem;
        }

        .portfolio-section {
            padding: 3rem 0;
        }

        .filter-buttons {
            gap: 0.5rem;
        }

        .filter-btn {
            padding: 0.5rem 1rem;
            font-size: 0.85rem;
        }

        .portfolio-item {
            min-height: 350px;
        }
    }

    @media (max-width: 480px) {
        .portfolio-container {
            padding: 0 1rem;
        }

        .portfolio-item {
            margin: 0 0.5rem;
            min-height: 320px;
        }

        .portfolio-image {
            height: 160px;
        }

        .portfolio-content {
            padding: 1rem;
        }
    }
</style>
<section class="portfolio-section" id="portfolio">
    <!-- Background Elements -->
    <div class="portfolio-bg-element"></div>
    <div class="portfolio-bg-element"></div>
    <div class="portfolio-bg-element"></div>

    <div class="portfolio-container">
        <!-- Section Header -->
        <div class="section-header">
            <p class="section-subtitle">My Recent Work</p>
            <h2 class="section-title">Featured Projects</h2>
            <p class="section-description">
                Explore my latest projects showcasing web development, design, and problem-solving skills.
            </p>
        </div>

        <!-- Filter Buttons -->
        <div class="filter-buttons">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="web">Web</button>
            <button class="filter-btn" data-filter="mobile">Mobile</button>
            <button class="filter-btn" data-filter="ecommerce">E-commerce</button>
            <button class="filter-btn" data-filter="design">UI/UX</button>
        </div>

        <!-- Portfolio Grid -->
        <div class="portfolio-grid">
            <!-- Project 1 -->
            <div class="portfolio-item" data-category="web">
                <div class="portfolio-image">
                    <img
                        src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80"
                        alt="E-commerce Platform" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <div class="overlay-icons">
                                <a href="#" class="overlay-icon">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="overlay-icon">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                            <h4 style="font-size: 0.9rem;">View Details</h4>
                        </div>
                    </div>
                </div>
                <div class="portfolio-content">
                    <span class="portfolio-category">Web Development</span>
                    <h3 class="portfolio-title">E-commerce Platform</h3>
                    <p class="portfolio-description">
                        Full-featured online store with payment integration and admin dashboard.
                    </p>
                    <div class="portfolio-tech">
                        <span class="tech-tag">React</span>
                        <span class="tech-tag">Node.js</span>
                        <span class="tech-tag">MongoDB</span>
                    </div>
                    <a href="#" class="portfolio-link">
                        View Project
                        <i class="fas fa-arrow-right link-icon"></i>
                    </a>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="portfolio-item" data-category="mobile">
                <div class="portfolio-image">
                    <img
                        src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80"
                        alt="Task Management App" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <div class="overlay-icons">
                                <a href="#" class="overlay-icon">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="overlay-icon">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                            <h4 style="font-size: 0.9rem;">View Details</h4>
                        </div>
                    </div>
                </div>
                <div class="portfolio-content">
                    <span class="portfolio-category">Mobile App</span>
                    <h3 class="portfolio-title">Task Management App</h3>
                    <p class="portfolio-description">
                        Collaborative task management with real-time updates and team features.
                    </p>
                    <div class="portfolio-tech">
                        <span class="tech-tag">React Native</span>
                        <span class="tech-tag">Firebase</span>
                        <span class="tech-tag">Redux</span>
                    </div>
                    <a href="#" class="portfolio-link">
                        View Project
                        <i class="fas fa-arrow-right link-icon"></i>
                    </a>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="portfolio-item" data-category="ecommerce">
                <div class="portfolio-image">
                    <img
                        src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80"
                        alt="Analytics Dashboard" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <div class="overlay-icons">
                                <a href="#" class="overlay-icon">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="overlay-icon">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                            <h4 style="font-size: 0.9rem;">View Details</h4>
                        </div>
                    </div>
                </div>
                <div class="portfolio-content">
                    <span class="portfolio-category">E-commerce</span>
                    <h3 class="portfolio-title">Analytics Dashboard</h3>
                    <p class="portfolio-description">
                        Comprehensive analytics platform with data visualization and reporting.
                    </p>
                    <div class="portfolio-tech">
                        <span class="tech-tag">Vue.js</span>
                        <span class="tech-tag">Python</span>
                        <span class="tech-tag">PostgreSQL</span>
                    </div>
                    <a href="#" class="portfolio-link">
                        View Project
                        <i class="fas fa-arrow-right link-icon"></i>
                    </a>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="portfolio-item" data-category="design">
                <div class="portfolio-image">
                    <img
                        src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80"
                        alt="UI/UX Design" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <div class="overlay-icons">
                                <a href="#" class="overlay-icon">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="overlay-icon">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                            <h4 style="font-size: 0.9rem;">View Details</h4>
                        </div>
                    </div>
                </div>
                <div class="portfolio-content">
                    <span class="portfolio-category">UI/UX Design</span>
                    <h3 class="portfolio-title">Banking App Redesign</h3>
                    <p class="portfolio-description">
                        Complete redesign focusing on user experience and modern design principles.
                    </p>
                    <div class="portfolio-tech">
                        <span class="tech-tag">Figma</span>
                        <span class="tech-tag">Adobe XD</span>
                        <span class="tech-tag">Prototyping</span>
                    </div>
                    <a href="#" class="portfolio-link">
                        View Project
                        <i class="fas fa-arrow-right link-icon"></i>
                    </a>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="portfolio-item" data-category="web">
                <div class="portfolio-image">
                    <img
                        src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80"
                        alt="Social Media Platform" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <div class="overlay-icons">
                                <a href="#" class="overlay-icon">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="overlay-icon">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                            <h4 style="font-size: 0.9rem;">View Details</h4>
                        </div>
                    </div>
                </div>
                <div class="portfolio-content">
                    <span class="portfolio-category">Web Development</span>
                    <h3 class="portfolio-title">Social Media Platform</h3>
                    <p class="portfolio-description">
                        Modern social platform with real-time messaging and community features.
                    </p>
                    <div class="portfolio-tech">
                        <span class="tech-tag">React</span>
                        <span class="tech-tag">Socket.io</span>
                        <span class="tech-tag">MongoDB</span>
                    </div>
                    <a href="#" class="portfolio-link">
                        View Project
                        <i class="fas fa-arrow-right link-icon"></i>
                    </a>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="portfolio-item" data-category="mobile">
                <div class="portfolio-image">
                    <img
                        src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80"
                        alt="Fitness App" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <div class="overlay-icons">
                                <a href="#" class="overlay-icon">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="overlay-icon">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                            <h4 style="font-size: 0.9rem;">View Details</h4>
                        </div>
                    </div>
                </div>
                <div class="portfolio-content">
                    <span class="portfolio-category">Mobile App</span>
                    <h3 class="portfolio-title">Fitness Tracking App</h3>
                    <p class="portfolio-description">
                        Comprehensive fitness app with workout plans and progress tracking.
                    </p>
                    <div class="portfolio-tech">
                        <span class="tech-tag">Flutter</span>
                        <span class="tech-tag">Firebase</span>
                        <span class="tech-tag">HealthKit</span>
                    </div>
                    <a href="#" class="portfolio-link">
                        View Project
                        <i class="fas fa-arrow-right link-icon"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- View More Button -->
        <div class="view-more">
            <a href="#" class="view-more-btn">
                View All Projects
                <i class="fas fa-arrow-down"></i>
            </a>
        </div>
    </div>
</section>

<script>
    // Complex animations for portfolio section
    document.addEventListener('DOMContentLoaded', function () {
        const portfolioItems = document.querySelectorAll('.portfolio-item');
        const filterButtons = document.querySelectorAll('.filter-btn');

        // Filter functionality
        filterButtons.forEach(button => {
            button.addEventListener('click', function () {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');

                const filterValue = this.getAttribute('data-filter');

                portfolioItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.style.display = 'block';
                        // Add entrance animation
                        item.style.animation = 'portfolioItemEntrance 0.8s ease forwards';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        // Mouse move parallax effect
        portfolioItems.forEach(item => {
            item.addEventListener('mousemove', function (e) {
                const cardRect = this.getBoundingClientRect();
                const x = e.clientX - cardRect.left;
                const y = e.clientY - cardRect.top;

                const centerX = cardRect.width / 2;
                const centerY = cardRect.height / 2;

                const angleY = (x - centerX) / 30;
                const angleX = (centerY - y) / 30;

                this.style.transform = `perspective(1000px) rotateX(${angleX}deg) rotateY(${angleY}deg) translateY(-8px) scale(1.02)`;

                // Dynamic overlay effect
                const overlay = this.querySelector('.portfolio-overlay');
                overlay.style.background = `linear-gradient(135deg,
                        rgba(0, 131, 165, 0.9) 0%,
                        rgba(5, 51, 63, 0.8) ${x / cardRect.width * 100}%,
                        rgba(0, 131, 165, 0.7) 100%)`;
            });

            item.addEventListener('mouseleave', function () {
                this.style.transform = 'translateY(-8px) scale(1.02)';
                const overlay = this.querySelector('.portfolio-overlay');
                overlay.style.background = 'linear-gradient(135deg, rgba(0, 131, 165, 0.9) 0%, rgba(5, 51, 63, 0.8) 100%)';
            });
        });

        // Create floating particles
        function createParticles() {
            const particlesContainer = document.querySelector('.portfolio-section');
            const particleCount = 15;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';

                // Random properties
                const size = Math.random() * 3 + 1;
                const posX = Math.random() * 100;
                const posY = Math.random() * 100;
                const duration = Math.random() * 25 + 15;
                const delay = Math.random() * 5;

                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.left = `${posX}%`;
                particle.style.top = `${posY}%`;
                particle.style.animation = `float ${duration}s infinite linear ${delay}s`;
                particle.style.opacity = Math.random() * 0.2 + 0.1;

                particlesContainer.appendChild(particle);
            }
        }

        createParticles();

        // Intersection Observer for staggered animations
        const itemObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                }
            });
        }, {threshold: 0.1});

        portfolioItems.forEach(item => {
            itemObserver.observe(item);
        });

        // Click effect for buttons
        const portfolioLinks = document.querySelectorAll('.portfolio-link, .view-more-btn');
        portfolioLinks.forEach(link => {
            link.addEventListener('click', function (e) {
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
