<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Muzzamal</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .cursor-dot {
            position: fixed;
            width: 10px;
            height: 10px;
            background-color: blue;
            border-radius: 50%;
            pointer-events: none;
            transform: translate(-50%, -50%);
            z-index: 1000;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
        }

        .cursor-circle {
            position: fixed;
            width: 20px;
            height: 20px;
            border: 2px solid blue;
            border-radius: 50%;
            pointer-events: none;
            transform: translate(-50%, -50%);
            transition: all 0.1s ease-out;
            z-index: 999;
        }
    </style>
</head>
<body class="">
<div class="cursor-dot"></div>
<div class="cursor-circle"></div>
@include('partials.navbar')
<main class="min-h-screen pt-16">
    @include('sections.hero')
    @include('sections.about')
    @include('sections.services')
    @include('sections.portfolio')
    @include('sections.blog')
    @include('sections.contact')
</main>
@include('partials.footer')

<script>
    const cursorDot = document.querySelector('.cursor-dot');
    const cursorCircle = document.querySelector('.cursor-circle');
    const buttons = document.querySelectorAll('button');

    let mouseX = 0, mouseY = 0;
    let circleX = 0, circleY = 0;


    document.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;

        // Dot follows instantly
        cursorDot.style.left = mouseX + 'px';
        cursorDot.style.top = mouseY + 'px';
    });

    function animateCircle() {
        // Calculate distance between circle and cursor
        const dx = mouseX - circleX;
        const dy = mouseY - circleY;

        // Move the circle a fraction of the distance (creates delay)
        circleX += dx * 0.1;
        circleY += dy * 0.1;

        // Update circle position
        cursorCircle.style.left = circleX + 'px';
        cursorCircle.style.top = circleY + 'px';

        requestAnimationFrame(animateCircle);
    }

    // Start animation
    animateCircle();

    // Add click effect
    document.addEventListener('mousedown', () => {
        cursorDot.style.width = '8px';
        cursorDot.style.height = '8px';
        cursorCircle.style.borderWidth = '3px';
    });

    document.addEventListener('mouseup', () => {
        cursorDot.style.width = '5px';
        cursorDot.style.height = '5px';
        cursorCircle.style.borderWidth = '2px';
    });
</script>
</body>
</html>
