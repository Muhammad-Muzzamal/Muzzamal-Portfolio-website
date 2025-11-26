
<style>
    .blog-section {
        padding: 6rem 0;
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        position: relative;
        overflow: hidden;
    }

    /* Animated Background Elements */
    .blog-bg-element {
        position: absolute;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(0, 131, 165, 0.08) 0%, transparent 70%);
        animation: float 25s infinite linear;
        z-index: 1;
    }

    .blog-bg-element:nth-child(1) {
        width: 180px;
        height: 180px;
        top: 10%;
        right: 5%;
        animation-duration: 30s;
    }

    .blog-bg-element:nth-child(2) {
        width: 120px;
        height: 120px;
        bottom: 15%;
        left: 8%;
        animation-duration: 35s;
        animation-delay: 5s;
    }

    .blog-bg-element:nth-child(3) {
        width: 100px;
        height: 100px;
        top: 60%;
        right: 15%;
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
    .blog-container {
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
        font-size: clamp(2rem, 5vw, 3.5rem);
        font-weight: 800;
        color: #05333f;
        line-height: 1.2;
        margin-bottom: 1rem;
    }

    .section-description {
        font-size: 1.125rem;
        color: #64748b;
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.6;
    }

    /* Blog Carousel */
    .blog-carousel {
        position: relative;
        margin: 3rem 0;
        overflow: hidden;
        border-radius: 20px;
    }

    .carousel-track {
        display: flex;
        transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        gap: 2rem;
    }

    .carousel-slide {
        min-width: 100%;
        display: flex;
        gap: 2rem;
        padding: 1rem;
    }

    /* Blog Cards */
    .blog-card {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        opacity: 0;
        transform: translateY(50px);
        animation: blogCardEntrance 1s ease forwards;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .blog-card:nth-child(1) { animation-delay: 0.4s; }
    .blog-card:nth-child(2) { animation-delay: 0.6s; }
    .blog-card:nth-child(3) { animation-delay: 0.8s; }

    @keyframes blogCardEntrance {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .blog-card:hover {
        transform: translateY(-10px);
        box-shadow:
            0 25px 50px rgba(0, 131, 165, 0.15),
            0 0 0 1px rgba(0, 131, 165, 0.1);
    }

    /* Blog Image */
    .blog-image {
        position: relative;
        height: 200px;
        overflow: hidden;
    }

    .blog-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: all 0.6s ease;
    }

    .blog-card:hover .blog-img {
        transform: scale(1.1);
    }

    .blog-category {
        position: absolute;
        top: 1rem;
        left: 1rem;
        background: #0083a5;
        color: white;
        padding: 0.4rem 1rem;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 600;
        z-index: 2;
    }

    /* Blog Content */
    .blog-content {
        padding: 1.5rem;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .blog-date {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #64748b;
        font-size: 0.85rem;
        margin-bottom: 0.8rem;
    }

    .blog-date i {
        color: #0083a5;
    }

    .blog-title {
        font-size: 1.3rem;
        font-weight: 700;
        color: #05333f;
        margin-bottom: 1rem;
        line-height: 1.4;
        transition: color 0.3s ease;
    }

    .blog-card:hover .blog-title {
        color: #0083a5;
    }

    .blog-excerpt {
        color: #64748b;
        line-height: 1.6;
        margin-bottom: 1.5rem;
        font-size: 0.95rem;
        flex-grow: 1;
    }

    /* Blog Meta */
    .blog-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: auto;
    }

    .blog-author {
        display: flex;
        align-items: center;
        gap: 0.8rem;
    }

    .author-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
    }

    .author-info {
        display: flex;
        flex-direction: column;
    }

    .author-name {
        font-weight: 600;
        color: #05333f;
        font-size: 0.9rem;
    }

    .read-time {
        color: #64748b;
        font-size: 0.8rem;
    }

    .read-more {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        color: #0083a5;
        text-decoration: none;
        font-weight: 600;
        padding: 0.6rem 1.2rem;
        border: 2px solid #e2e8f0;
        border-radius: 8px;
        transition: all 0.4s ease;
        font-size: 0.9rem;
    }

    .read-more:hover {
        background: rgba(0, 131, 165, 0.1);
        border-color: #0083a5;
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(0, 131, 165, 0.2);
    }

    .read-more i {
        transition: transform 0.3s ease;
    }

    .read-more:hover i {
        transform: translateX(3px);
    }

    /* Carousel Controls */
    .carousel-controls {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 1rem;
        margin-top: 2rem;
        opacity: 0;
        animation: fadeInUp 1s ease 1s forwards;
    }

    .carousel-btn {
        width: 50px;
        height: 50px;
        background: white;
        border: 2px solid #e2e8f0;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.4s ease;
        color: #05333f;
        font-size: 1.2rem;
    }

    .carousel-btn:hover {
        background: #0083a5;
        border-color: #0083a5;
        color: white;
        transform: scale(1.1);
        box-shadow: 0 8px 20px rgba(0, 131, 165, 0.3);
    }

    .carousel-dots {
        display: flex;
        gap: 0.5rem;
    }

    .carousel-dot {
        width: 12px;
        height: 12px;
        background: #cbd5e1;
        border-radius: 50%;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .carousel-dot.active {
        background: #0083a5;
        transform: scale(1.2);
    }

    /* Featured Posts */
    .featured-posts {
        margin-top: 5rem;
    }

    .featured-header {
        text-align: center;
        margin-bottom: 3rem;
        opacity: 0;
        animation: fadeInUp 1s ease 1.2s forwards;
    }

    .featured-title {
        font-size: 2rem;
        font-weight: 700;
        color: #05333f;
        margin-bottom: 1rem;
    }

    .featured-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 2rem;
        opacity: 0;
        animation: fadeInUp 1s ease 1.4s forwards;
    }

    .featured-card {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: all 0.6s ease;
        display: flex;
        flex-direction: column;
    }

    .featured-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0, 131, 165, 0.15);
    }

    .featured-image {
        height: 180px;
        overflow: hidden;
    }

    .featured-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .featured-card:hover .featured-img {
        transform: scale(1.1);
    }

    .featured-content {
        padding: 1.5rem;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .featured-category {
        display: inline-block;
        background: rgba(0, 131, 165, 0.1);
        color: #0083a5;
        padding: 0.3rem 0.8rem;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 600;
        margin-bottom: 0.8rem;
    }

    .featured-card-title {
        font-size: 1.2rem;
        font-weight: 700;
        color: #05333f;
        margin-bottom: 0.8rem;
        line-height: 1.4;
    }

    .featured-excerpt {
        color: #64748b;
        line-height: 1.6;
        margin-bottom: 1.2rem;
        font-size: 0.9rem;
        flex-grow: 1;
    }

    /* View All Button */
    .view-all {
        text-align: center;
        margin-top: 4rem;
        opacity: 0;
        animation: fadeInUp 1s ease 1.6s forwards;
    }

    .view-all-btn {
        display: inline-flex;
        align-items: center;
        gap: 0.8rem;
        background: #0083a5;
        color: white;
        padding: 1rem 2.5rem;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.4s ease;
        box-shadow: 0 8px 25px rgba(0, 131, 165, 0.3);
        position: relative;
        overflow: hidden;
    }

    .view-all-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.6s ease;
    }

    .view-all-btn:hover::before {
        left: 100%;
    }

    .view-all-btn:hover {
        background: #006d8a;
        transform: translateY(-3px);
        box-shadow: 0 12px 30px rgba(0, 131, 165, 0.4);
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
        .blog-section {
            padding: 4rem 0;
        }

        .carousel-slide {
            flex-direction: column;
        }

        .featured-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .blog-card, .featured-card {
            margin: 0 0.5rem;
        }
    }

    @media (max-width: 480px) {
        .blog-container {
            padding: 0 1rem;
        }

        .blog-image, .featured-image {
            height: 160px;
        }

        .blog-content, .featured-content {
            padding: 1.2rem;
        }
    }
</style>

<section class="blog-section" id="blog">
    <!-- Background Elements -->
    <div class="blog-bg-element"></div>
    <div class="blog-bg-element"></div>
    <div class="blog-bg-element"></div>

    <div class="blog-container">
        <!-- Section Header -->
        <div class="section-header">
            <p class="section-subtitle">Latest Articles</p>
            <h2 class="section-title">From My Blog</h2>
            <p class="section-description">
                Explore my latest thoughts on web development, design trends, and technology insights.
            </p>
        </div>

        <!-- Blog Carousel -->
        <div class="blog-carousel">
            <div class="carousel-track">
                <!-- Slide 1 -->
                <div class="carousel-slide">
                    <!-- Blog Card 1 -->
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                 alt="React Best Practices" class="blog-img">
                            <span class="blog-category">React</span>
                        </div>
                        <div class="blog-content">
                            <div class="blog-date">
                                <i class="far fa-calendar"></i>
                                March 15, 2024
                            </div>
                            <h3 class="blog-title">React Best Practices for 2024</h3>
                            <p class="blog-excerpt">
                                Discover the latest React patterns, performance optimization techniques, and best practices for building scalable applications in 2024.
                            </p>
                            <div class="blog-meta">
                                <div class="blog-author">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                         alt="Author" class="author-avatar">
                                    <div class="author-info">
                                        <span class="author-name">John Doe</span>
                                        <span class="read-time">8 min read</span>
                                    </div>
                                </div>
                                <a href="#" class="read-more">
                                    Read More
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Card 2 -->
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                 alt="CSS Architecture" class="blog-img">
                            <span class="blog-category">CSS</span>
                        </div>
                        <div class="blog-content">
                            <div class="blog-date">
                                <i class="far fa-calendar"></i>
                                March 12, 2024
                            </div>
                            <h3 class="blog-title">Modern CSS Architecture Patterns</h3>
                            <p class="blog-excerpt">
                                Learn how to structure your CSS for maintainability and scalability using modern methodologies like BEM, ITCSS, and CSS-in-JS.
                            </p>
                            <div class="blog-meta">
                                <div class="blog-author">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                         alt="Author" class="author-avatar">
                                    <div class="author-info">
                                        <span class="author-name">John Doe</span>
                                        <span class="read-time">6 min read</span>
                                    </div>
                                </div>
                                <a href="#" class="read-more">
                                    Read More
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Card 3 -->
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                 alt="Web Performance" class="blog-img">
                            <span class="blog-category">Performance</span>
                        </div>
                        <div class="blog-content">
                            <div class="blog-date">
                                <i class="far fa-calendar"></i>
                                March 8, 2024
                            </div>
                            <h3 class="blog-title">Web Performance Optimization Guide</h3>
                            <p class="blog-excerpt">
                                Comprehensive guide to optimizing web performance with practical techniques, tools, and real-world examples for faster loading websites.
                            </p>
                            <div class="blog-meta">
                                <div class="blog-author">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                         alt="Author" class="author-avatar">
                                    <div class="author-info">
                                        <span class="author-name">John Doe</span>
                                        <span class="read-time">10 min read</span>
                                    </div>
                                </div>
                                <a href="#" class="read-more">
                                    Read More
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-slide">
                    <!-- Blog Card 4 -->
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                 alt="TypeScript" class="blog-img">
                            <span class="blog-category">TypeScript</span>
                        </div>
                        <div class="blog-content">
                            <div class="blog-date">
                                <i class="far fa-calendar"></i>
                                March 5, 2024
                            </div>
                            <h3 class="blog-title">Mastering TypeScript in 2024</h3>
                            <p class="blog-excerpt">
                                Advanced TypeScript patterns, type safety techniques, and how to leverage TypeScript for better developer experience and code quality.
                            </p>
                            <div class="blog-meta">
                                <div class="blog-author">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                         alt="Author" class="author-avatar">
                                    <div class="author-info">
                                        <span class="author-name">John Doe</span>
                                        <span class="read-time">7 min read</span>
                                    </div>
                                </div>
                                <a href="#" class="read-more">
                                    Read More
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Card 5 -->
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                 alt="UI/UX Design" class="blog-img">
                            <span class="blog-category">Design</span>
                        </div>
                        <div class="blog-content">
                            <div class="blog-date">
                                <i class="far fa-calendar"></i>
                                March 2, 2024
                            </div>
                            <h3 class="blog-title">UI/UX Design Trends 2024</h3>
                            <p class="blog-excerpt">
                                Explore the latest UI/UX design trends, including dark mode, micro-interactions, 3D elements, and accessibility-focused design patterns.
                            </p>
                            <div class="blog-meta">
                                <div class="blog-author">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                         alt="Author" class="author-avatar">
                                    <div class="author-info">
                                        <span class="author-name">John Doe</span>
                                        <span class="read-time">9 min read</span>
                                    </div>
                                </div>
                                <a href="#" class="read-more">
                                    Read More
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Card 6 -->
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                 alt="Career Growth" class="blog-img">
                            <span class="blog-category">Career</span>
                        </div>
                        <div class="blog-content">
                            <div class="blog-date">
                                <i class="far fa-calendar"></i>
                                February 28, 2024
                            </div>
                            <h3 class="blog-title">Building a Successful Developer Career</h3>
                            <p class="blog-excerpt">
                                Practical advice for advancing your developer career, including skill development, networking, and navigating the job market in 2024.
                            </p>
                            <div class="blog-meta">
                                <div class="blog-author">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                         alt="Author" class="author-avatar">
                                    <div class="author-info">
                                        <span class="author-name">John Doe</span>
                                        <span class="read-time">11 min read</span>
                                    </div>
                                </div>
                                <a href="#" class="read-more">
                                    Read More
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Controls -->
        <div class="carousel-controls">
            <button class="carousel-btn prev-btn">
                <i class="fas fa-chevron-left"></i>
            </button>
            <div class="carousel-dots">
                <div class="carousel-dot active" data-slide="0"></div>
                <div class="carousel-dot" data-slide="1"></div>
            </div>
            <button class="carousel-btn next-btn">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>

        <!-- Featured Posts -->
        <div class="featured-posts">
            <div class="featured-header">
                <h3 class="featured-title">Featured Articles</h3>
                <p class="section-description">Handpicked articles with deep insights and practical knowledge</p>
            </div>

            <div class="featured-grid">
                <!-- Featured Card 1 -->
                <div class="featured-card">
                    <div class="featured-image">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                             alt="Featured Post" class="featured-img">
                    </div>
                    <div class="featured-content">
                        <span class="featured-category">Advanced</span>
                        <h4 class="featured-card-title">The Complete Guide to Web Security</h4>
                        <p class="featured-excerpt">
                            Comprehensive guide covering modern web security practices, common vulnerabilities, and how to protect your applications from threats.
                        </p>
                        <a href="#" class="read-more">
                            Read Article
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Featured Card 2 -->
                <div class="featured-card">
                    <div class="featured-image">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                             alt="Featured Post" class="featured-img">
                    </div>
                    <div class="featured-content">
                        <span class="featured-category">Tutorial</span>
                        <h4 class="featured-card-title">Building Scalable APIs with Node.js</h4>
                        <p class="featured-excerpt">
                            Step-by-step tutorial on building robust, scalable RESTful APIs using Node.js, Express, and modern development practices.
                        </p>
                        <a href="#" class="read-more">
                            Read Article
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- View All Button -->
        <div class="view-all">
            <a href="#" class="view-all-btn">
                View All Blog Posts
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<script>
    // Blog Carousel Functionality
    document.addEventListener('DOMContentLoaded', function() {
        const track = document.querySelector('.carousel-track');
        const slides = document.querySelectorAll('.carousel-slide');
        const dots = document.querySelectorAll('.carousel-dot');
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');

        let currentSlide = 0;
        const slideCount = slides.length;

        // Update carousel position
        function updateCarousel() {
            track.style.transform = `translateX(-${currentSlide * 100}%)`;

            // Update dots
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentSlide);
            });
        }

        // Next slide
        function nextSlide() {
            currentSlide = (currentSlide + 1) % slideCount;
            updateCarousel();
        }

        // Previous slide
        function prevSlide() {
            currentSlide = (currentSlide - 1 + slideCount) % slideCount;
            updateCarousel();
        }

        // Event listeners
        nextBtn.addEventListener('click', nextSlide);
        prevBtn.addEventListener('click', prevSlide);

        // Dot navigation
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentSlide = index;
                updateCarousel();
            });
        });

        // Auto-advance carousel
        let autoSlide = setInterval(nextSlide, 5000);

        // Pause auto-advance on hover
        const carousel = document.querySelector('.blog-carousel');
        carousel.addEventListener('mouseenter', () => {
            clearInterval(autoSlide);
        });

        carousel.addEventListener('mouseleave', () => {
            autoSlide = setInterval(nextSlide, 5000);
        });

        // Blog card hover effects
        const blogCards = document.querySelectorAll('.blog-card, .featured-card');

        blogCards.forEach(card => {
            card.addEventListener('mousemove', function(e) {
                const cardRect = this.getBoundingClientRect();
                const x = e.clientX - cardRect.left;
                const y = e.clientY - cardRect.top;

                const centerX = cardRect.width / 2;
                const centerY = cardRect.height / 2;

                const angleY = (x - centerX) / 25;
                const angleX = (centerY - y) / 25;

                this.style.transform = `perspective(1000px) rotateX(${angleX}deg) rotateY(${angleY}deg) translateY(-10px)`;
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(-10px)';
            });
        });

        // Click effect for buttons
        const readMoreButtons = document.querySelectorAll('.read-more, .view-all-btn');
        readMoreButtons.forEach(button => {
            button.addEventListener('click', function(e) {
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
