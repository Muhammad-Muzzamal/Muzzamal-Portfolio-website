<style>
    .hero-section {
        min-height: 100vh;
        position: relative;
        display: flex;
        align-items: center;
        background: #ffffff;
        overflow: hidden;
        padding: 2rem 0;
    }

    /* Blue gradient light effects - Mobile optimized */
    .blue-light-1 {
        position: absolute;
        top: -150px;
        right: -80px;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(0, 131, 165, 0.12) 0%, rgba(5, 51, 63, 0.06) 40%, transparent 70%);
        filter: blur(60px);
        animation: pulseLight1 8s ease-in-out infinite;
        z-index: 1;
    }

    .blue-light-2 {
        position: absolute;
        bottom: -100px;
        left: -80px;
        width: 350px;
        height: 350px;
        background: radial-gradient(circle, rgba(0, 131, 165, 0.08) 0%, rgba(5, 51, 63, 0.04) 40%, transparent 70%);
        filter: blur(50px);
        animation: pulseLight2 10s ease-in-out infinite;
        z-index: 1;
    }

    @keyframes pulseLight1 {
        0%, 100% {
            opacity: 0.5;
            transform: scale(1) rotate(0deg);
        }
        50% {
            opacity: 0.7;
            transform: scale(1.05) rotate(3deg);
        }
    }

    @keyframes pulseLight2 {
        0%, 100% {
            opacity: 0.3;
            transform: scale(1) rotate(0deg);
        }
        50% {
            opacity: 0.5;
            transform: scale(1.03) rotate(-3deg);
        }
    }

    /* Hero content container - Mobile first */
    .hero-container {
        position: relative;
        z-index: 10;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
        display: flex;
        flex-direction: column;
        gap: 3rem;
        align-items: center;
        justify-content: center;
    }

    /* Text content styling - Mobile optimized */
    .hero-text {
        padding: 1rem 0;
        text-align: center;
        order: 2;
        width: 100%;
    }

    .intro-text {
        font-size: 1.1rem;
        color: #0083a5;
        margin-bottom: 0.8rem;
        opacity: 0;
        animation: fadeInUp 1s ease 0.3s forwards;
        font-weight: 500;
    }

    .main-heading {
        font-size: clamp(2rem, 8vw, 3.2rem);
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 1rem;
        opacity: 0;
        animation: fadeInUp 1s ease 0.5s forwards;
        color: #05333f;
    }

    .name-highlight {
        color: #0083a5;
        position: relative;
        display: inline-block;
    }

    .name-highlight::after {
        content: '';
        position: absolute;
        width: 0;
        height: 3px;
        bottom: -6px;
        left: 50%;
        transform: translateX(-50%);
        background: #0083a5;
        border-radius: 2px;
        animation: expandWidth 1.5s ease 1s forwards;
    }

    @keyframes expandWidth {
        to {
            width: 80%;
        }
    }

    .sub-heading {
        font-size: clamp(1.2rem, 5vw, 1.8rem);
        font-weight: 600;
        color: #05333f;
        margin-bottom: 1.2rem;
        opacity: 0;
        animation: fadeInUp 1s ease 0.7s forwards;
    }

    .description {
        font-size: 1rem;
        line-height: 1.6;
        color: #4a5568;
        max-width: 500px;
        margin: 0 auto 2rem auto;
        opacity: 0;
        animation: fadeInUp 1s ease 0.9s forwards;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* CTA Buttons - Mobile optimized */
    .cta-buttons {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        margin-bottom: 2rem;
        opacity: 0;
        animation: fadeInUp 1s ease 1.1s forwards;
        width: 100%;
        max-width: 300px;
        margin-left: auto;
        margin-right: auto;
    }

    .btn {
        padding: 0.875rem 1.5rem;
        border-radius: 8px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        position: relative;
        overflow: hidden;
        font-size: 1rem;
        width: 100%;
    }

    .btn-primary {
        background: #0083a5;
        color: white;
        box-shadow: 0 4px 14px 0 rgba(0, 131, 165, 0.3);
    }

    .btn-primary:hover {
        background: #006d8a;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(0, 131, 165, 0.4);
    }

    .btn-secondary {
        background: transparent;
        color: #0083a5;
        border: 2px solid #0083a5;
    }

    .btn-secondary:hover {
        background: rgba(0, 131, 165, 0.1);
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(0, 131, 165, 0.2);
    }

    /* Image section - Mobile optimized */
    .hero-image {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0;
        animation: fadeInUp 1s ease 0.7s forwards;
        order: 1;
        width: 100%;
        max-width: 320px;
        margin: 0 auto;
    }

    .image-container {
        position: relative;
        width: 100%;
        height: 280px;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 15px 40px rgba(0, 131, 165, 0.12);
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .profile-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 0;
    }

    .floating-shape {
        position: absolute;
        border-radius: 50%;
        background: rgba(0, 131, 165, 0.08);
        animation: float 15s infinite linear;
        z-index: 2;
    }

    .floating-shape:nth-child(1) {
        width: 40px;
        height: 40px;
        top: 10%;
        left: 5%;
        animation-duration: 20s;
    }

    .floating-shape:nth-child(2) {
        width: 30px;
        height: 30px;
        bottom: 15%;
        right: 8%;
        animation-duration: 25s;
        animation-delay: 2s;
    }

    .floating-shape:nth-child(3) {
        width: 50px;
        height: 50px;
        bottom: 25%;
        left: 8%;
        animation-duration: 30s;
        animation-delay: 5s;
    }

    @keyframes float {
        0% {
            transform: translate(0, 0) rotate(0deg);
        }
        25% {
            transform: translate(10px, 15px) rotate(90deg);
        }
        50% {
            transform: translate(0, 30px) rotate(180deg);
        }
        75% {
            transform: translate(-10px, 15px) rotate(270deg);
        }
        100% {
            transform: translate(0, 0) rotate(360deg);
        }
    }

    /* Scroll indicator */
    .scroll-indicator {
        position: absolute;
        bottom: 1.5rem;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        flex-direction: column;
        align-items: center;
        color: #0083a5;
        font-size: 0.8rem;
        opacity: 0;
        animation: fadeIn 1s ease 1.5s forwards;
        z-index: 10;
    }

    .scroll-arrow {
        margin-top: 0.3rem;
        animation: bounceArrow 2s infinite;
    }

    @keyframes bounceArrow {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(3px);
        }
    }

    /* Tablet Styles */
    @media (min-width: 768px) {
        .hero-container {
            flex-direction: row;
            gap: 4rem;
            padding: 0 2rem;
        }

        .hero-text {
            text-align: left;
            order: 1;
            flex: 1;
        }

        .hero-image {
            order: 2;
            flex: 1;
            max-width: 400px;
        }

        .image-container {
            height: 350px;
        }

        .cta-buttons {
            flex-direction: row;
            max-width: 100%;
            justify-content: flex-start;
        }

        .btn {
            width: auto;
            padding: 0.875rem 2rem;
        }

        .name-highlight::after {
            left: 0;
            transform: none;
        }

        @keyframes expandWidth {
            to {
                width: 100%;
            }
        }

        .blue-light-1 {
            top: -200px;
            right: -100px;
            width: 500px;
            height: 500px;
        }

        .blue-light-2 {
            bottom: -150px;
            left: -100px;
            width: 450px;
            height: 450px;
        }
    }

    /* Desktop Styles */
    @media (min-width: 1024px) {
        .hero-container {
            gap: 5rem;
        }

        .hero-text {
            padding: 2rem 0;
        }

        .main-heading {
            font-size: clamp(2.5rem, 5vw, 3.8rem);
        }

        .sub-heading {
            font-size: clamp(1.5rem, 3vw, 2rem);
        }

        .description {
            font-size: 1.125rem;
            margin-bottom: 2.5rem;
        }

        .image-container {
            height: 450px;
            max-width: 450px;
        }

        .cta-buttons {
            margin-bottom: 3rem;
        }

        .blue-light-1 {
            width: 600px;
            height: 600px;
        }

        .blue-light-2 {
            width: 500px;
            height: 500px;
        }
    }

    /* Large Desktop */
    @media (min-width: 1280px) {
        .hero-container {
            max-width: 1400px;
        }

        .image-container {
            height: 500px;
            max-width: 500px;
        }
    }

    /* Fix for very small screens */
    @media (max-width: 360px) {
        .hero-container {
            padding: 0 1rem;
        }

        .image-container {
            height: 250px;
        }

        .main-heading {
            font-size: 1.8rem;
        }

        .sub-heading {
            font-size: 1.1rem;
        }

        .description {
            font-size: 0.95rem;
        }
    }
</style>

<section class="hero-section">
    <!-- Blue Light Effects -->
    <div class="blue-light-1"></div>
    <div class="blue-light-2"></div>

    <!-- Floating Shapes -->
    <div class="floating-shape"></div>
    <div class="floating-shape"></div>
    <div class="floating-shape"></div>

    <!-- Hero Content -->
    <div class="hero-container">
        <!-- Text Content -->
        <div class="hero-text">
            <p class="intro-text">Hello, I'm</p>
            <h1 class="main-heading">
                <span class="name-highlight">John Doe</span>
            </h1>
            <h2 class="sub-heading">Full Stack Web Developer</h2>
            <p class="description">
                I create beautiful, functional websites and applications that deliver exceptional user experiences.
                With expertise in modern web technologies, I bring ideas to life through clean code and innovative
                solutions.
            </p>

            <div class="cta-buttons">
                <a href="#projects" class="btn btn-primary">
                    <i class="fas fa-rocket"></i>
                    View My Work
                </a>
                <a href="#contact" class="btn btn-secondary">
                    <i class="fas fa-envelope"></i>
                    Get In Touch
                </a>
            </div>
        </div>

        <!-- Image Content -->
        <div class="hero-image">
            <div class="image-container">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLRu-ozNMIuE6a1Jsg0qjVq1-eZuVf-P8OhA&s"
                     alt="John Doe" class="profile-image">
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="scroll-indicator">
        <span>Scroll to explore</span>
        <div class="scroll-arrow">
            <i class="fas fa-chevron-down"></i>
        </div>
    </div>
</section>

<script>
    // Mobile-optimized interactive animations
    document.addEventListener('DOMContentLoaded', function () {
        // Add ripple effect to buttons
        const buttons = document.querySelectorAll('.btn');
        buttons.forEach(button => {
            button.addEventListener('click', function (e) {
                const rect = this.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

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

        // Optimized parallax effect for mobile
        let ticking = false;
        window.addEventListener('scroll', function () {
            if (!ticking) {
                requestAnimationFrame(function () {
                    const scrolled = window.pageYOffset;
                    const floatingShapes = document.querySelectorAll('.floating-shape');

                    floatingShapes.forEach((shape, index) => {
                        const rate = scrolled * -0.2 * (index + 1) * 0.01;
                        shape.style.transform = `translateY(${rate}px)`;
                    });

                    ticking = false;
                });
                ticking = true;
            }
        });

        // Touch-friendly hover effects
        if ('ontouchstart' in window) {
            document.querySelectorAll('.btn').forEach(btn => {
                btn.addEventListener('touchstart', function () {
                    this.style.transform = 'translateY(-2px)';
                });

                btn.addEventListener('touchend', function () {
                    this.style.transform = 'translateY(0)';
                });
            });
        }
    });
</script>
