
<style>
    .contact-section {
        padding: 4rem 0;
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        position: relative;
        overflow: hidden;
    }

    /* Animated Background Elements */
    .contact-bg-element {
        position: absolute;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(0, 131, 165, 0.06) 0%, transparent 70%);
        animation: float 25s infinite linear;
        z-index: 1;
    }

    .contact-bg-element:nth-child(1) {
        width: 120px;
        height: 120px;
        top: 10%;
        right: 5%;
        animation-duration: 30s;
    }

    .contact-bg-element:nth-child(2) {
        width: 80px;
        height: 80px;
        bottom: 15%;
        left: 8%;
        animation-duration: 35s;
        animation-delay: 5s;
    }

    @keyframes float {
        0% {
            transform: translate(0, 0) rotate(0deg) scale(1);
        }
        25% {
            transform: translate(20px, 25px) rotate(90deg) scale(1.05);
        }
        50% {
            transform: translate(0, 50px) rotate(180deg) scale(1);
        }
        75% {
            transform: translate(-20px, 25px) rotate(270deg) scale(0.95);
        }
        100% {
            transform: translate(0, 0) rotate(360deg) scale(1);
        }
    }

    /* Container */
    .contact-container {
        max-width: 1000px;
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
        font-size: 0.95rem;
        color: #0083a5;
        font-weight: 600;
        margin-bottom: 0.5rem;
        text-transform: uppercase;
        letter-spacing: 1.5px;
    }

    .section-title {
        font-size: clamp(1.8rem, 4vw, 2.8rem);
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

    /* Contact Grid - More Compact */
    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 3rem;
        align-items: start;
    }

    /* Contact Info - More Compact */
    .contact-info {
        opacity: 0;
        animation: fadeInLeft 1s ease 0.5s forwards;
    }

    .info-title {
        font-size: 1.4rem;
        font-weight: 700;
        color: #05333f;
        margin-bottom: 1rem;
    }

    .info-description {
        color: #64748b;
        line-height: 1.6;
        margin-bottom: 2rem;
        font-size: 0.95rem;
    }

    /* Contact Methods - More Compact */
    .contact-methods {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        margin-bottom: 2rem;
    }

    .contact-method {
        display: flex;
        align-items: center;
        gap: 0.8rem;
        padding: 1rem;
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        border: 1px solid transparent;
    }

    .contact-method:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0, 131, 165, 0.12);
        border-color: rgba(0, 131, 165, 0.15);
    }

    .method-icon {
        width: 45px;
        height: 45px;
        background: linear-gradient(135deg, #0083a5 0%, #05333f 100%);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        flex-shrink: 0;
    }

    .contact-method:hover .method-icon {
        transform: scale(1.05);
    }

    .method-content {
        flex: 1;
    }

    .method-title {
        font-weight: 600;
        color: #05333f;
        margin-bottom: 0.2rem;
        font-size: 0.9rem;
    }

    .method-value {
        color: #64748b;
        font-size: 0.85rem;
    }

    .method-link {
        color: #0083a5;
        text-decoration: none;
        transition: color 0.3s ease;
        font-size: 0.85rem;
    }

    .method-link:hover {
        color: #05333f;
    }

    /* Social Links - More Compact */
    .social-links {
        margin-top: 1.5rem;
    }

    .social-title {
        font-weight: 600;
        color: #05333f;
        margin-bottom: 0.8rem;
        font-size: 0.9rem;
    }

    .social-icons {
        display: flex;
        gap: 0.8rem;
    }

    .social-icon {
        width: 40px;
        height: 40px;
        background: white;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #05333f;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
        font-size: 0.9rem;
    }

    .social-icon:hover {
        background: #0083a5;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(0, 131, 165, 0.25);
    }

    /* Contact Form - More Compact */
    .contact-form {
        background: white;
        padding: 2rem;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
        opacity: 0;
        animation: fadeInRight 1s ease 0.7s forwards;
    }

    .form-title {
        font-size: 1.3rem;
        font-weight: 700;
        color: #05333f;
        margin-bottom: 1.2rem;
        text-align: center;
    }

    .form-group {
        margin-bottom: 1.2rem;
    }

    .form-label {
        display: block;
        margin-bottom: 0.4rem;
        color: #05333f;
        font-weight: 500;
        font-size: 0.9rem;
    }

    .form-input, .form-textarea {
        width: 100%;
        padding: 0.8rem 1rem;
        border: 1.5px solid #e2e8f0;
        border-radius: 8px;
        font-size: 0.9rem;
        transition: all 0.3s ease;
        background: #f8fafc;
        font-family: inherit;
    }

    .form-input:focus, .form-textarea:focus {
        outline: none;
        border-color: #0083a5;
        background: white;
        box-shadow: 0 0 0 3px rgba(0, 131, 165, 0.08);
    }

    .form-textarea {
        resize: vertical;
        min-height: 100px;
    }

    /* Submit Button - More Compact */
    .submit-btn {
        width: 100%;
        background: linear-gradient(135deg, #0083a5 0%, #05333f 100%);
        color: white;
        border: none;
        padding: 0.9rem 1.5rem;
        border-radius: 10px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.6rem;
    }

    .submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 131, 165, 0.3);
    }

    .btn-icon {
        transition: transform 0.3s ease;
        font-size: 0.9rem;
    }

    .submit-btn:hover .btn-icon {
        transform: translateX(3px);
    }

    /* Form Status */
    .form-status {
        margin-top: 1rem;
        padding: 0.8rem;
        border-radius: 8px;
        text-align: center;
        font-weight: 500;
        font-size: 0.85rem;
        display: none;
    }

    .form-status.success {
        background: #d1fae5;
        color: #065f46;
        border: 1px solid #a7f3d0;
        display: block;
    }

    .form-status.error {
        background: #fee2e2;
        color: #991b1b;
        border: 1px solid #fecaca;
        display: block;
    }

    /* Animations */
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

    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .contact-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .contact-section {
            padding: 3rem 0;
        }

        .contact-form {
            padding: 1.5rem;
        }
    }

    @media (max-width: 480px) {
        .contact-container {
            padding: 0 1rem;
        }

        .contact-method {
            padding: 0.8rem;
        }

        .method-icon {
            width: 40px;
            height: 40px;
            font-size: 1rem;
        }
    }
</style>

<section class="contact-section" id="contact">
    <!-- Background Elements -->
    <div class="contact-bg-element"></div>
    <div class="contact-bg-element"></div>

    <div class="contact-container">
        <!-- Section Header -->
        <div class="section-header">
            <p class="section-subtitle">Get In Touch</p>
            <h2 class="section-title">Contact Me</h2>
            <p class="section-description">
                Ready to start your project? Let's talk and make something amazing together.
            </p>
        </div>

        <!-- Contact Grid -->
        <div class="contact-grid">
            <!-- Contact Info -->
            <div class="contact-info">
                <h3 class="info-title">Let's Connect</h3>
                <p class="info-description">
                    I'm available for freelance work and interesting projects.
                    Get in touch and let's discuss how we can work together.
                </p>

                <!-- Contact Methods -->
                <div class="contact-methods">
                    <!-- Email -->
                    <div class="contact-method">
                        <div class="method-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="method-content">
                            <div class="method-title">Email</div>
                            <div class="method-value">
                                <a href="mailto:hello@portfolio.com" class="method-link">hello@portfolio.com</a>
                            </div>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="contact-method">
                        <div class="method-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="method-content">
                            <div class="method-title">Phone</div>
                            <div class="method-value">
                                <a href="tel:+11234567890" class="method-link">+1 (123) 456-7890</a>
                            </div>
                        </div>
                    </div>

                    <!-- Location -->
                    <div class="contact-method">
                        <div class="method-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="method-content">
                            <div class="method-title">Location</div>
                            <div class="method-value">New York, NY</div>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="social-links">
                    <div class="social-title">Follow Me</div>
                    <div class="social-icons">
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">
                <h3 class="form-title">Send a Message</h3>
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" id="name" name="name" class="form-input" placeholder="Enter your name" required>
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" name="email" class="form-input" placeholder="Enter your email" required>
                    </div>

                    <div class="form-group">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" id="subject" name="subject" class="form-input" placeholder="Project discussion" required>
                    </div>

                    <div class="form-group">
                        <label for="message" class="form-label">Message</label>
                        <textarea id="message" name="message" class="form-textarea" placeholder="Tell me about your project..." required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">
                        Send Message
                        <i class="fas fa-paper-plane btn-icon"></i>
                    </button>

                    <div class="form-status" id="formStatus"></div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    // Contact Form Functionality
    document.addEventListener('DOMContentLoaded', function() {
        const contactForm = document.getElementById('contactForm');
        const formStatus = document.getElementById('formStatus');

        // Form submission
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form data
            const formData = new FormData(contactForm);
            const name = formData.get('name');
            const email = formData.get('email');
            const subject = formData.get('subject');
            const message = formData.get('message');

            // Simple validation
            if (!name || !email || !subject || !message) {
                showFormStatus('Please fill in all fields.', 'error');
                return;
            }

            if (!isValidEmail(email)) {
                showFormStatus('Please enter a valid email address.', 'error');
                return;
            }

            // Simulate form submission
            const submitBtn = contactForm.querySelector('.submit-btn');
            const originalText = submitBtn.innerHTML;

            // Show loading state
            submitBtn.innerHTML = 'Sending... <i class="fas fa-spinner fa-spin"></i>';
            submitBtn.disabled = true;

            // Simulate API call
            setTimeout(() => {
                // Show success message
                showFormStatus('Thank you! Your message has been sent successfully.', 'success');

                // Reset form
                contactForm.reset();

                // Reset button
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 1500);
        });

        // Email validation
        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        // Show form status
        function showFormStatus(message, type) {
            formStatus.textContent = message;
            formStatus.className = 'form-status ' + type;

            // Hide status after 4 seconds
            setTimeout(() => {
                formStatus.style.display = 'none';
            }, 4000);
        }

        // Input animations
        const formInputs = document.querySelectorAll('.form-input, .form-textarea');

        formInputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.style.transform = 'translateY(-1px)';
            });

            input.addEventListener('blur', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Contact method hover effects
        const contactMethods = document.querySelectorAll('.contact-method');

        contactMethods.forEach(method => {
            method.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-3px)';
            });

            method.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Social icon animations
        const socialIcons = document.querySelectorAll('.social-icon');

        socialIcons.forEach(icon => {
            icon.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px) scale(1.05)';
            });

            icon.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
    });
</script>
