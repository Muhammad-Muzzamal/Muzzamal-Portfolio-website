<style>


    .about-section {
        padding: 6rem 0;
        background: #ffffff;
        position: relative;
        overflow: hidden;
    }

    /* Background Elements */
    .about-bg-element {
        position: absolute;
        border-radius: 50%;
        background: rgba(0, 131, 165, 0.05);
        animation: float 20s infinite linear;
        z-index: 1;
    }

    .about-bg-element:nth-child(1) {
        width: 120px;
        height: 120px;
        top: 10%;
        left: 5%;
        animation-duration: 25s;
    }

    .about-bg-element:nth-child(2) {
        width: 80px;
        height: 80px;
        bottom: 15%;
        right: 8%;
        animation-duration: 30s;
        animation-delay: 5s;
    }

    @keyframes float {
        0% {
            transform: translate(0, 0) rotate(0deg);
        }
        25% {
            transform: translate(20px, 25px) rotate(90deg);
        }
        50% {
            transform: translate(0, 50px) rotate(180deg);
        }
        75% {
            transform: translate(-20px, 25px) rotate(270deg);
        }
        100% {
            transform: translate(0, 0) rotate(360deg);
        }
    }

    /* Container */
    .about-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
        position: relative;
        z-index: 10;
    }

    /* Section Header */
    .section-header {
        text-align: center;
        margin-bottom: 4rem;
        opacity: 0;
        animation: fadeInUp 1s ease 0.3s forwards;
    }

    .section-subtitle {
        font-size: 1.1rem;
        color: #0083a5;
        font-weight: 600;
        margin-bottom: 0.5rem;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .section-title {
        font-size: clamp(2rem, 5vw, 3rem);
        font-weight: 800;
        color: #05333f;
        line-height: 1.2;
    }

    .section-title-highlight {
        color: #0083a5;
        position: relative;
    }

    .section-title-highlight::after {
        content: '';
        position: absolute;
        width: 0;
        height: 3px;
        bottom: -5px;
        left: 0;
        background: #0083a5;
        animation: expandWidth 1.5s ease 0.8s forwards;
    }

    /* Content Grid */
    .about-content {
        display: grid;
        grid-template-columns: 1fr;
        gap: 4rem;
        align-items: center;
    }

    /* Image Section */
    .about-image {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0;
        animation: fadeInLeft 1s ease 0.5s forwards;
    }

    .image-container {
        position: relative;
        width: 100%;
        max-width: 400px;
        height: 400px;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 25px 60px rgba(0, 131, 165, 0.15);
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    }

    .profile-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .image-container:hover .profile-image {
        transform: scale(1.05);
    }

    .image-overlay {
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
        transition: opacity 0.3s ease;
    }

    .image-container:hover .image-overlay {
        opacity: 1;
    }

    .overlay-content {
        text-align: center;
        color: white;
        padding: 2rem;
    }

    .overlay-icon {
        font-size: 2.5rem;
        margin-bottom: 1rem;
    }

    .overlay-text {
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .experience-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        background: #0083a5;
        color: white;
        padding: 0.8rem 1.5rem;
        border-radius: 50px;
        font-weight: 700;
        font-size: 1.1rem;
        box-shadow: 0 10px 30px rgba(0, 131, 165, 0.3);
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
            box-shadow: 0 10px 30px rgba(0, 131, 165, 0.3);
        }
        50% {
            transform: scale(1.05);
            box-shadow: 0 15px 40px rgba(0, 131, 165, 0.4);
        }
    }

    /* Text Content */
    .about-text {
        opacity: 0;
        animation: fadeInRight 1s ease 0.7s forwards;
    }

    .about-description {
        font-size: 1.125rem;
        line-height: 1.7;
        color: #4a5568;
        margin-bottom: 2rem;
    }

    .highlight-text {
        color: #0083a5;
        font-weight: 600;
    }

    /* Skills Section */
    .skills-section {
        margin: 2.5rem 0;
    }

    .skills-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #05333f;
        margin-bottom: 1.5rem;
        position: relative;
        display: inline-block;
    }

    .skills-title::after {
        content: '';
        position: absolute;
        width: 40px;
        height: 3px;
        background: #0083a5;
        bottom: -8px;
        left: 0;
        border-radius: 2px;
    }

    .skills-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    .skill-item {
        background: #f8fafc;
        padding: 1.5rem;
        border-radius: 12px;
        text-align: center;
        transition: all 0.3s ease;
        border: 1px solid #e2e8f0;
        opacity: 0;
        animation: fadeInUp 0.6s ease forwards;
    }

    .skill-item:nth-child(1) {
        animation-delay: 0.9s;
    }

    .skill-item:nth-child(2) {
        animation-delay: 1s;
    }

    .skill-item:nth-child(3) {
        animation-delay: 1.1s;
    }

    .skill-item:nth-child(4) {
        animation-delay: 1.2s;
    }

    .skill-item:nth-child(5) {
        animation-delay: 1.3s;
    }

    .skill-item:nth-child(6) {
        animation-delay: 1.4s;
    }

    .skill-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 131, 165, 0.1);
        border-color: #0083a5;
    }

    .skill-icon {
        font-size: 2rem;
        color: #0083a5;
        margin-bottom: 0.8rem;
    }

    .skill-name {
        font-weight: 600;
        color: #05333f;
        margin-bottom: 0.5rem;
    }

    .skill-level {
        font-size: 0.875rem;
        color: #718096;
    }

    /* CTA Button */
    .about-cta {
        margin-top: 2rem;
        opacity: 0;
        animation: fadeInUp 1s ease 1.5s forwards;
    }

    .cta-button {
        display: inline-flex;
        align-items: center;
        gap: 0.8rem;
        background: #0083a5;
        color: white;
        padding: 1rem 2.5rem;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 131, 165, 0.3);
    }

    .cta-button:hover {
        background: #006d8a;
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0, 131, 165, 0.4);
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

    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes expandWidth {
        to {
            width: 100%;
        }
    }

    /* Responsive Design */
    @media (min-width: 768px) {
        .about-content {
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
        }

        .image-container {
            height: 450px;
        }

        .skills-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (min-width: 1024px) {
        .about-section {
            padding: 8rem 0;
        }

        .image-container {
            height: 500px;
            max-width: 450px;
        }

        .skills-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 480px) {
        .about-section {
            padding: 4rem 0;
        }

        .image-container {
            height: 320px;
        }

        .experience-badge {
            padding: 0.6rem 1.2rem;
            font-size: 1rem;
        }

        .skills-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<section class="about-section" id="about">
    <!-- Background Elements -->
    <div class="about-bg-element"></div>
    <div class="about-bg-element"></div>

    <div class="about-container">
        <!-- Section Header -->
        <div class="section-header">
            <p class="section-subtitle">Get To Know More</p>
            <h2 class="section-title">About <span class="section-title-highlight">Me</span></h2>
        </div>

        <!-- Content Grid -->
        <div class="about-content">
            <!-- Image Section -->
            <div class="about-image">
                <div class="image-container">
                    <img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLRu-ozNMIuE6a1Jsg0qjVq1-eZuVf-P8OhA&s"
                        alt="John Doe" class="profile-image">
                    <div class="image-overlay">
                        <div class="overlay-content">
                            <i class="fas fa-code overlay-icon"></i>
                            <div class="overlay-text">Full Stack Developer</div>
                            <p>Passionate about creating digital solutions</p>
                        </div>
                    </div>
                    <div class="experience-badge">
                        3+ Years Experience
                    </div>
                </div>
            </div>

            <!-- Text Content -->
            <div class="about-text">
                <div class="about-description">
                    <p>Hello! I'm <span class="highlight-text">John Doe</span>, a passionate full-stack developer with
                        over 3 years of experience creating digital solutions that make a difference.</p>

                    <p style="margin-top: 1rem;">I specialize in building responsive, user-friendly web applications
                        using modern technologies like <span class="highlight-text">JavaScript</span>, <span
                            class="highlight-text">React</span>, <span class="highlight-text">Node.js</span>, and <span
                            class="highlight-text">Laravel</span>. My journey in web development started with curiosity
                        and has evolved into a career dedicated to crafting exceptional digital experiences.</p>

                    <p style="margin-top: 1rem;">When I'm not coding, you can find me exploring new technologies,
                        contributing to open-source projects, or sharing knowledge with the developer community.</p>
                </div>

                <!-- Skills Section -->


                <!-- CTA Button -->
                <div class="about-cta">
                    <a href="#contact" class="cta-button">
                        <i class="fas fa-paper-plane"></i>
                        Let's Work Together
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Interactive animations for About section
    document.addEventListener('DOMContentLoaded', function () {
        // Skill items animation on scroll
        const skillItems = document.querySelectorAll('.skill-item');
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                }
            });
        }, observerOptions);

        skillItems.forEach(item => {
            observer.observe(item);
        });

        // Image hover effect enhancement
        const imageContainer = document.querySelector('.image-container');
        const experienceBadge = document.querySelector('.experience-badge');

        imageContainer.addEventListener('mouseenter', function () {
            experienceBadge.style.animationPlayState = 'paused';
            experienceBadge.style.transform = 'scale(1.1)';
        });

        imageContainer.addEventListener('mouseleave', function () {
            experienceBadge.style.animationPlayState = 'running';
            experienceBadge.style.transform = 'scale(1)';
        });

        // Parallax effect for background elements
        window.addEventListener('scroll', function () {
            const scrolled = window.pageYOffset;
            const bgElements = document.querySelectorAll('.about-bg-element');

            bgElements.forEach((element, index) => {
                const rate = scrolled * -0.3 * (index + 1) * 0.01;
                element.style.transform = `translateY(${rate}px) rotate(${rate * 2}deg)`;
            });
        });

        // Add click effect to CTA button
        const ctaButton = document.querySelector('.cta-button');
        ctaButton.addEventListener('click', function (e) {
            const x = e.clientX - e.target.getBoundingClientRect().left;
            const y = e.clientY - e.target.getBoundingClientRect().top;

            const ripple = document.createElement('span');
            ripple.style.left = `${x}px`;
            ripple.style.top = `${y}px`;
            ripple.classList.add('ripple-effect');

            this.appendChild(ripple);

            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });
</script>
