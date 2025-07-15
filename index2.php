<?php include 'header.php'; ?>

<section id="home" class="hero-wrapper">
    <div class="copy-protection-overlay"></div>

    <div class="hero-bg">
        <div class="hero-grid"></div>
    </div>
    
    <div class="hero-inner">
        <div class="hero-content-side">
            <div class="hero-title-container">
                <div class="hero-small-title animate-element" data-animation="fade-slide-down">
                    <span>WELCOME TO</span>
                </div>
                
                <div class="hero-main-title animate-element" data-animation="fade-scale">
                    <h1>ARE-0</h1>
                </div>
            </div>
        </div>
        
        <div class="hero-visual-side">
            <canvas id="logo3D"></canvas>
        </div>
    </div>
</section>

<section id="design-assets" class="design-assets-wrapper">
    <div class="design-assets-inner">
        <div class="mixed-typography">
            <span class="text-segment animate-text" data-animation="fade-slide-up">GET FREE DESIGN ASSETS,</span>
            <div class="glass-box animate-box" id="box-1" data-animation="fade-rotate">
                <div class="image-slideshow" id="slideshow-1"></div>
                <div class="grain-overlay"></div>
            </div>
            <span class="text-segment animate-text" data-animation="fade-slide-right">CODES,</span>
            <div class="glass-box animate-box" id="box-2" data-animation="fade-flip">
                <div class="image-slideshow" id="slideshow-2"></div>
                <div class="grain-overlay"></div>
            </div>
            <span class="text-segment animate-text" data-animation="fade-slide-left">UI ELEMENTS,</span>
            <div class="glass-box animate-box" id="box-3" data-animation="fade-bounce">
                <div class="image-slideshow" id="slideshow-3"></div>
                <div class="grain-overlay"></div>
            </div>
            <span class="text-segment animate-text" data-animation="fade-zoom-in">TEXTURES</span>
            <div class="glass-box animate-box" id="box-4" data-animation="fade-swing">
                <div class="image-slideshow" id="slideshow-4"></div>
                <div class="grain-overlay"></div>
            </div>
            <span class="text-segment animate-text" data-animation="fade-zoom-out">AND ICONS.</span>
            <div class="glass-box animate-box" id="box-5" data-animation="fade-drop">
                <div class="image-slideshow" id="slideshow-5"></div>
                <div class="grain-overlay"></div>
            </div>
            <div class="explore-button animate-explore" data-animation="reveal-clip">
                <span>EXPLORE NOW</span>
                <svg class="explore-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" stroke="currentColor" stroke-width="2" d="M5,12 L19,12 M13,6 L19,12 L13,18"></path>
                </svg>
                <div class="explore-liquid"></div>
            </div>
        </div>
    </div>
</section>

<style>
/* Import Jaro font from Google Fonts */
@import url('https://fonts.googleapis.com/css2?family=Jaro:opsz@6..72&display=swap');
/* Import Oswald font from Google Fonts */
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap');

/* Copy protection overlay */
.copy-protection-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 10;
    user-select: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    pointer-events: none;
}

/* Make sure all interactive elements remain clickable */
.hero-content-side {
    position: relative;
    z-index: 11;
    width: 60%;
    padding-right: 40px;
    transition: opacity 0.8s ease;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    padding-top: 30px;
}

.hero-cta-primary, 
.hero-cta-secondary {
    pointer-events: auto;
}

/* Hero section styles with modifications */
.hero-wrapper {
    position: relative;
    min-height: 100vh;
    width: 100%;
    overflow: hidden;
    background-color: var(--color-bg);
    padding-top: 100px;
    padding-bottom: 0;
    display: flex;
    align-items: flex-start;
    transition: background-color 0.3s ease;
}

.hero-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
}

.hero-grid {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(var(--grid-color) 1px, transparent 2px),
                      linear-gradient(90deg, var(--grid-color) 1px, transparent 2px);
    background-size: 30px 30px;
    transition: background-image 0.3s ease;
}

/* Add these background elements for theme consistency */
.hero-gradient-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle at top right, rgba(255, 122, 0, 0.15) 0%, rgba(18, 18, 18, 0) 70%);
    transition: background 0.3s ease;
}

[data-theme="light"] .hero-gradient-overlay {
    background: radial-gradient(circle at top right, rgba(255, 122, 0, 0.1) 0%, rgba(249, 249, 249, 0) 70%);
}

.hero-shape-1 {
    position: absolute;
    width: 300px;
    height: 300px;
    border-radius: 50%;
    background: rgba(255, 122, 0, 0.1);
    filter: blur(80px);
    top: -100px;
    right: -100px;
}

.hero-shape-2 {
    position: absolute;
    width: 200px;
    height: 200px;
    border-radius: 50%;
    background: rgba(154, 154, 154, 0.1);
    filter: blur(60px);
    bottom: 100px;
    left: 10%;
}

.hero-shape-3 {
    position: absolute;
    width: 250px;
    height: 250px;
    border-radius: 50%;
    background: rgba(255, 158, 64, 0.08);
    filter: blur(70px);
    bottom: -100px;
    right: 20%;
}

.hero-inner {
    position: relative;
    z-index: 2;
    width: 100%;
    max-width: 1460px;
    margin: 0 auto;
    padding: 0 30px;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}

/* Title container */
.hero-title-container {
    margin-bottom: 40px;
}

/* Small title (WELCOME TO) */
.hero-small-title {
    margin-bottom: 0;
}

.hero-small-title span {
    font-family: 'Jaro', sans-serif;
    font-size: 155px;
    font-weight: 100;
    color: var(--color-text);
    text-transform: uppercase;
    letter-spacing: 2px;
    line-height: 0.5;
    display: block;
}

/* Main title (ARE-O) */
.hero-main-title {
    margin-top: 0;
}

.hero-main-title h1 {
    font-family: 'Jaro', sans-serif;
    font-size: 350px;
    font-weight: 100;
    line-height: 0.8;
    letter-spacing: -5px;
    margin: 0;
    /* Gradient from red to orange */
    background: linear-gradient(90deg, rgb(255, 30, 0), rgb(250, 71, 0));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    display: inline-block;
}

/* Visual side with 3D model */
.hero-visual-side {
    width: 40%;
    position: relative;
    height: calc(100vh - 120px);
    display: flex;
    align-items: flex-start;
    justify-content: center;
    padding-top: 5px;
}

#logo3D {
    width: 100%;
    height: 90%;
    max-height: 500px;
}

/* Design Assets Section */
.design-assets-wrapper {
    position: relative;
    width: 100%;
    padding: 0;
    margin-top: -200px;
    overflow: visible;
    z-index: 2;
    padding-bottom: 20px; /* Add padding to bottom to prevent grid gap */
}

.design-assets-inner {
    position: relative;
    width: 100%;
    max-width: 1440px;
    margin: 0 auto;
    padding: 0 30px;
}

.mixed-typography {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 15px;
    margin-bottom: 60px;
}

.mixed-typography .text-segment {
    font-family: 'Oswald', sans-serif;
    font-weight: 700;
    font-size: 42px;
    color: var(--color-text);
    text-transform: uppercase;
    letter-spacing: 1px;
    text-shadow: 0 2px 4px rgba(0,0,0,0.2);
    line-height: 1;
    transition: color 0.3s ease, text-shadow 0.3s ease;
}

/* Dark mode specific text styling */
[data-theme="dark"] .mixed-typography .text-segment {
    color: #ffffff;
    text-shadow: 0 2px 4px rgba(0,0,0,0.3);
}

/* Light mode specific text styling */
[data-theme="light"] .mixed-typography .text-segment {
    color: #000000ff;
    text-shadow: 0 1px 2px rgba(0,0,0,0.1);
}

.mixed-typography .glass-box {
    position: relative;
    width: 140px;
    height: 70px;
    border-radius: 8px;
    transition: background 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

/* Dark mode glass box */
[data-theme="dark"] .mixed-typography .glass-box {
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
}

/* Light mode glass box - darker border as requested */
[data-theme="light"] .mixed-typography .glass-box {
    background: rgba(255, 255, 255, 0.25);
    border: 1px solid rgba(0, 0, 0, 0.2);
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.05);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
}

/* Hover effects */
.mixed-typography .glass-box:hover {
    transform: translateY(-5px);
    cursor: pointer;
}

[data-theme="dark"] .mixed-typography .glass-box:hover {
    box-shadow: 0 12px 32px rgba(0, 0, 0, 0.3);
    background: rgba(255, 255, 255, 0.15);
}

[data-theme="light"] .mixed-typography .glass-box:hover {
    box-shadow: 0 12px 32px rgba(0, 0, 0, 0.1);
    background: rgba(255, 255, 255, 0.4);
    border-color: rgba(0, 0, 0, 0.3);
}

/* Image slideshow container */
.image-slideshow {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1;
}

.image-slideshow img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0;
    transition: opacity 1s ease;
}

.image-slideshow img.active {
    opacity: 1;
}


/* NEW Explore button with liquid hover effect */
.mixed-typography .explore-button {
    position: relative;
    height: 70px;
    flex-grow: 1;
    border-radius: 8px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    margin-left: 15px;
    z-index: 1;
}

/* Dark mode explore button */
[data-theme="dark"] .mixed-typography .explore-button {
    background: linear-gradient(90deg, rgb(255, 30, 0), rgb(250, 71, 0));
    box-shadow: 0 8px 32px rgba(255, 60, 0, 0.3);
}

/* Light mode explore button */
[data-theme="light"] .mixed-typography .explore-button {
    background: linear-gradient(90deg, rgb(255, 30, 0), rgb(250, 71, 0));
    box-shadow: 0 8px 32px rgba(255, 60, 0, 0.2);
}

.mixed-typography .explore-button span {
    font-family: 'Oswald', sans-serif;
    font-weight: 700;
    font-size: 24px;
    color: white;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-shadow: 0 2px 4px rgba(0,0,0,0.2);
    position: relative;
    z-index: 2;
    transition: transform 0.3s ease;
}

/* New SVG arrow icon */
.explore-button .explore-arrow {
    margin-left: 10px;
    stroke: white;
    position: relative;
    z-index: 2;
    transition: transform 0.3s ease, opacity 0.3s ease;
    opacity: 0;
    transform: translateX(-10px);
}

/* Liquid effect overlay */
.explore-liquid {
    position: absolute;
    top: 0;
    left: -100%;
    width: 200%;
    height: 100%;
    background: linear-gradient(90deg, 
        rgba(255, 255, 255, 0) 0%, 
        rgba(255, 0, 0, 1) 50%, 
        rgba(255, 255, 255, 0) 100%
    );
    transition: transform 0.6s cubic-bezier(0.65, 0, 0.35, 1);
    transform: skewX(-30deg) translateX(0%);
    z-index: 1;
}

/* New hover effect for explore button */
.mixed-typography .explore-button:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 32px rgba(255, 60, 0, 0.4);
}

.mixed-typography .explore-button:hover .explore-liquid {
    transform: skewX(-30deg) translateX(75%);
}

.mixed-typography .explore-button:hover span {
    transform: translateX(-10px);
}

.mixed-typography .explore-button:hover .explore-arrow {
    transform: translateX(0);
    opacity: 1;
}

/* Fix for grid gap - extend background */
body {
    position: relative;
    background-color: var(--color-bg);
    min-height: 100vh;
    margin: 0;
    padding: 0;
}

body::before {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    background-image: linear-gradient(var(--grid-color) 1px, transparent 2px),
                      linear-gradient(90deg, var(--grid-color) 1px, transparent 2px);
    background-size: 30px 30px;
    pointer-events: none;
}

/* ANIMATION CLASSES FOR ALL ELEMENTS */
/* Base animations for all elements */
.animate-element, .animate-text, .animate-box, .animate-explore {
    opacity: 0;
    will-change: transform, opacity;
}

/* Fade Slide Down Animation */
[data-animation="fade-slide-down"] {
    transform: translateY(-50px);
}

/* Fade Scale Animation */
[data-animation="fade-scale"] {
    transform: scale(0.8);
}

/* Fade Slide Up Animation */
[data-animation="fade-slide-up"] {
    transform: translateY(50px);
}

/* Fade Slide Right Animation */
[data-animation="fade-slide-right"] {
    transform: translateX(-50px);
}

/* Fade Slide Left Animation */
[data-animation="fade-slide-left"] {
    transform: translateX(50px);
}

/* Fade Zoom In Animation */
[data-animation="fade-zoom-in"] {
    transform: scale(0.5);
}

/* Fade Zoom Out Animation */
[data-animation="fade-zoom-out"] {
    transform: scale(1.5);
}

/* Fade Rotate Animation */
[data-animation="fade-rotate"] {
    transform: rotate(-15deg) scale(0.8);
}

/* Fade Flip Animation */
[data-animation="fade-flip"] {
    transform: rotateY(90deg);
}

/* Fade Bounce Animation */
[data-animation="fade-bounce"] {
    transform: translateY(50px);
}

/* Fade Swing Animation */
[data-animation="fade-swing"] {
    transform: rotate(15deg) scale(0.8);
}

/* Fade Drop Animation */
[data-animation="fade-drop"] {
    transform: translateY(-30px) rotate(-5deg);
}

/* Reveal Clip Animation for Explore Button */
[data-animation="reveal-clip"] {
    clip-path: inset(0 100% 0 0);
    transform: translateX(50px);
}

/* Media queries */
@media (max-width: 1200px) {
    .hero-small-title span {
        font-size: 60px;
    }
    
    .hero-main-title h1 {
        font-size: 150px;
    }
    
    .design-assets-wrapper {
        margin-top: -150px;
    }
    
    .mixed-typography .text-segment {
        font-size: 36px;
    }
    
    .mixed-typography .explore-button span {
        font-size: 22px;
    }
}

@media (max-width: 992px) {
    .hero-inner {
        flex-direction: column;
    }
    
    .hero-content-side,
    .hero-visual-side {
        width: 100%;
    }
    
    .hero-content-side {
        margin-bottom: 40px;
        padding-right: 0;
        text-align: center;
    }
    
    .hero-visual-side {
        height: 50vh;
    }
    
    .hero-small-title span {
        font-size: 50px;
    }
    
    .hero-main-title h1 {
        font-size: 120px;
    }
    
    .hero-cta-group {
        justify-content: center;
    }
    
    .design-assets-wrapper {
        margin-top: -100px;
    }
    
    .mixed-typography {
        gap: 12px;
    }
    
    .mixed-typography .text-segment {
        font-size: 32px;
    }
    
    .mixed-typography .glass-box {
        width: 120px;
        height: 60px;
    }
    
    .mixed-typography .explore-button {
        height: 60px;
        margin-left: 12px;
    }
    
    .mixed-typography .explore-button span {
        font-size: 20px;
    }
}

@media (max-width: 768px) {
    .hero-wrapper {
        padding-top: 120px;
    }
    
    .hero-small-title span {
        font-size: 40px;
    }
    
    .hero-main-title h1 {
        font-size: 90px;
    }
    
    .design-assets-wrapper {
        margin-top: -50px;
    }
    
    .mixed-typography .text-segment {
        font-size: 28px;
    }
    
    .mixed-typography .glass-box {
        width: 100px;
        height: 50px;
    }
    
    .mixed-typography .explore-button {
        height: 50px;
        margin-left: 10px;
    }
    
    .mixed-typography .explore-button span {
        font-size: 18px;
    }
}

@media (max-width: 576px) {
    .hero-small-title span {
        font-size: 30px;
    }
    
    .hero-main-title h1 {
        font-size: 70px;
    }
    
    .hero-cta-group {
        flex-direction: column;
        gap: 10px;
    }
    
    .hero-cta-primary,
    .hero-cta-secondary {
        width: 100%;
        justify-content: center;
    }
    
    .design-assets-wrapper {
        margin-top: -30px;
    }
    
    .mixed-typography {
        gap: 10px;
    }
    
    .mixed-typography .text-segment {
        font-size: 22px;
    }
    
    .mixed-typography .glass-box {
        width: 90px;
        height: 45px;
    }
    
    .mixed-typography .explore-button {
        height: 45px;
        margin-left: 10px;
    }
    
    .mixed-typography .explore-button span {
        font-size: 16px;
    }
}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/OBJLoader.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/MTLLoader.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/controls/OrbitControls.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Enhanced animation system with staggered entrance
    function setupAnimations() {
        // Get all elements with animations
        const animatedElements = document.querySelectorAll('[data-animation]');
        
        // Apply animations with staggered delays
        animatedElements.forEach((element, index) => {
            const animationType = element.getAttribute('data-animation');
            
            // Set initial state based on animation type
            switch(animationType) {
                case 'fade-slide-down':
                    element.style.transform = 'translateY(-50px)';
                    break;
                case 'fade-scale':
                    element.style.transform = 'scale(0.8)';
                    break;
                case 'fade-slide-up':
                    element.style.transform = 'translateY(50px)';
                    break;
                case 'fade-slide-right':
                    element.style.transform = 'translateX(-50px)';
                    break;
                case 'fade-slide-left':
                    element.style.transform = 'translateX(50px)';
                    break;
                case 'fade-zoom-in':
                    element.style.transform = 'scale(0.5)';
                    break;
                case 'fade-zoom-out':
                    element.style.transform = 'scale(1.5)';
                    break;
                case 'fade-rotate':
                    element.style.transform = 'rotate(-15deg) scale(0.8)';
                    break;
                case 'fade-flip':
                    element.style.transform = 'rotateY(90deg)';
                    break;
                case 'fade-bounce':
                    element.style.transform = 'translateY(50px)';
                    break;
                case 'fade-swing':
                    element.style.transform = 'rotate(15deg) scale(0.8)';
                    break;
                case 'fade-drop':
                    element.style.transform = 'translateY(-30px) rotate(-5deg)';
                    break;
                case 'reveal-clip':
                    element.style.clipPath = 'inset(0 100% 0 0)';
                    element.style.transform = 'translateX(50px)';
                    break;
            }
            
            // Apply animation after staggered delay
            setTimeout(() => {
                // Set transition properties
                element.style.transition = `opacity 0.8s ease ${index * 0.1}s, transform 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) ${index * 0.1}s`;
                if (animationType === 'reveal-clip') {
                    element.style.transition = `opacity 0.8s ease ${index * 0.1}s, transform 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) ${index * 0.1}s, clip-path 0.8s cubic-bezier(0.77, 0, 0.175, 1) \${index * 0.1}s`;
                    element.style.clipPath = 'inset(0 0 0 0)';
                }
                
                // Reset transform and show element
                element.style.opacity = '1';
                element.style.transform = 'translate(0, 0) scale(1) rotate(0)';
                
                // Add bounce effect for bounce animation
                if (animationType === 'fade-bounce') {
                    setTimeout(() => {
                        element.style.transition = 'transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275)';
                        element.style.transform = 'translateY(-15px)';
                        setTimeout(() => {
                            element.style.transform = 'translateY(0)';
                        }, 150);
                    }, 800 + (index * 100));
                }
            }, 100);
        });
    }

       // Check for saved theme preference
    const savedTheme = localStorage.getItem('theme') || 'dark';
    document.documentElement.setAttribute('data-theme', savedTheme);
    
    // Function to set up theme toggle
    function setupThemeToggle() {
        const themeSwitch = document.getElementById('theme-switch');
        if (!themeSwitch) {
            // If button isn't available yet, try again in 100ms
            setTimeout(setupThemeToggle, 100);
            return;
        }
        
        // Remove existing event listeners to avoid conflicts
        const newThemeSwitch = themeSwitch.cloneNode(true);
        themeSwitch.parentNode.replaceChild(newThemeSwitch, themeSwitch);
        
        // Add event listener to the new button
        newThemeSwitch.addEventListener('click', function() {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            
            // Update the theme
            document.documentElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            
            // Update Three.js lighting based on new theme
            updateThreeJSLighting(newTheme);
        });
    }
    
    // Call setup function after a short delay to ensure DOM is ready
    setTimeout(setupThemeToggle, 200);
    
    // Listen for theme changes from header.php
    const observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            if (mutation.attributeName === 'data-theme') {
                // Update any theme-specific elements if needed
                updateThreeJSLighting(document.documentElement.getAttribute('data-theme'));
            }
        });
    });
    
    // Start observing theme changes
    observer.observe(document.documentElement, {
        attributes: true,
        attributeFilter: ['data-theme']
    });
    
    // Three.js implementation for 3D logo with textures
    const setupThreeJS = () => {
        const scene = new THREE.Scene();
        const canvas = document.getElementById('logo3D');
        const renderer = new THREE.WebGLRenderer({
            canvas: canvas,
            antialias: true,
            alpha: true
        });
        
        renderer.setSize(canvas.clientWidth, canvas.clientHeight);
        renderer.setClearColor(0x000000, 0);
        
        // Camera setup
        const camera = new THREE.PerspectiveCamera(
            60, 
            canvas.clientWidth / canvas.clientHeight, 
            0.1, 
            1000
        );
        camera.position.z = 5;
        
        // Controls for better interaction
        const controls = new THREE.OrbitControls(camera, canvas);
        controls.enableZoom = false;
        controls.enablePan = false;
        controls.autoRotate = true;
        controls.autoRotateSpeed = 3;
        controls.enableDamping = true;
        controls.dampingFactor = 0.05;
        
        // Lighting setup
        const ambientLight = new THREE.AmbientLight(0xffffff, 0.5);
        scene.add(ambientLight);
        
        const directionalLight = new THREE.DirectionalLight(0xffffff, 1);
        directionalLight.position.set(2, 2, 5);
        scene.add(directionalLight);
        
        // Red spotlight
        const spotLight1 = new THREE.SpotLight(0xff2d20, 2, 50, Math.PI / 4, 0.5);
        spotLight1.position.set(-5, 5, 5);
        scene.add(spotLight1);
        
        // Orange spotlight
        const spotLight2 = new THREE.SpotLight(0xff6b00, 2, 50, Math.PI / 4, 0.5);
        spotLight2.position.set(5, -5, 5);
        scene.add(spotLight2);
        
        // Store lights for theme updates
        window.threeJSLights = {
            ambient: ambientLight,
            directional: directionalLight,
            spotLight1: spotLight1,
            spotLight2: spotLight2
        };
        
        // Load texture first
        const textureLoader = new THREE.TextureLoader();
        const texture = textureLoader.load('3dmodel/pbr/pack/textureBasicPack/redd.jpg', function(texture) {
            // Set texture properties
            texture.encoding = THREE.sRGBEncoding;
            texture.flipY = false; // Depending on your model, you might need to flip the texture
            
            // Create material with the loaded texture
            const material = new THREE.MeshStandardMaterial({
                map: texture,
                roughness: 0.3,
                metalness: 0.7,
                emissive: 0xff2d20,
                emissiveIntensity: 0.2
            });
            
            // Load the OBJ model
            const objLoader = new THREE.OBJLoader();
            
            objLoader.load(
                '3dmodel/pbr/pack/obj/base.obj', // Path to your obj file
                function(object) {
                    // Scale and position the model
                    object.scale.set(1.9, 1.9, 1.9);
                    object.position.set(0, -1.4, 0);
                    
                    // Apply material to all meshes
                    object.traverse(function(child) {
                        if (child instanceof THREE.Mesh) {
                            child.material = material;
                            
                            // Add subtle animation to material
                            child.userData.initialEmissiveIntensity = child.material.emissiveIntensity;
                        }
                    });
                    
                    scene.add(object);
                    window.logoObject = object;
                    
                    // Add initial animation for 3D model
                    object.rotation.y = -Math.PI / 2; // Start rotated
                    object.scale.set(0.1, 0.1, 0.1); // Start small
                    
                    // Animate to normal position
                    animateModel(object);
                },
                function(xhr) {
                    // Loading progress
                    if (xhr.lengthComputable) {
                        const percentComplete = xhr.loaded / xhr.total * 100;
                        console.log((xhr.loaded / xhr.total * 100) + '% loaded');
                    }
                },
                function(error) {
                    console.error('Error loading the 3D model:', error);
                    
                    // Fallback: Create a simple 3D shape as placeholder
                    const geometry = new THREE.TorusKnotGeometry(1.5, 0.5, 64, 16);
                    const mesh = new THREE.Mesh(geometry, material);
                    mesh.position.set(0, -0.5, 0);
                    scene.add(mesh);
                    window.logoObject = mesh;
                    
                    // Animate fallback object
                    mesh.scale.set(0.1, 0.1, 0.1); // Start small
                    animateModel(mesh);
                }
            );
        });
        
        // Animation loop
        function animate() {
            requestAnimationFrame(animate);
            
            controls.update();
            
            // Pulse effect for materials
            if (window.logoObject) {
                window.logoObject.traverse(function(child) {
                    if (child instanceof THREE.Mesh && child.material) {
                        const initialIntensity = child.userData.initialEmissiveIntensity || 0.2;
                        child.material.emissiveIntensity = initialIntensity + Math.sin(Date.now() * 0.001) * 0.1;
                    }
                });
            }
            
            renderer.render(scene, camera);
        }
        
        animate();
        
        // Handle window resize
        function handleResize() {
            const width = canvas.clientWidth;
            const height = canvas.clientHeight;
            
            if (width === 0 || height === 0) return;
            
            camera.aspect = width / height;
            camera.updateProjectionMatrix();
            renderer.setSize(width, height, false);
        }
        
        window.addEventListener('resize', handleResize);
        
        // Initial resize
        setTimeout(handleResize, 100);
    };
    
    // Custom animation for 3D model using JS animation
    function animateModel(model) {
        // Start animation
        let startTime = Date.now();
        let duration = 1500; // 1.5 seconds
        
        function updateAnimation() {
            let elapsed = Date.now() - startTime;
            let progress = Math.min(elapsed / duration, 1);
            
            // Easing function (cubic ease out)
            let eased = 1 - Math.pow(1 - progress, 3);
            
            // Update scale and rotation
            model.scale.set(
                0.1 + (1.8 * eased), // From 0.1 to 1.9
                0.1 + (1.8 * eased),
                0.1 + (1.8 * eased)
            );
            
            model.rotation.y = (-Math.PI / 2) + (Math.PI / 2 * eased); // Rotate to front
            
            // Continue animation if not complete
            if (progress < 1) {
                requestAnimationFrame(updateAnimation);
            }
        }
        
        // Start animation
        updateAnimation();
    }
    
    // Function to update Three.js lighting based on theme
    function updateThreeJSLighting(theme) {
        if (!window.threeJSLights) return;
        
        if (theme === 'light') {
            // Adjust lighting for light theme
            window.threeJSLights.ambient.intensity = 0.7;
            window.threeJSLights.directional.intensity = 0.8;
            window.threeJSLights.spotLight1.intensity = 1.5;
            window.threeJSLights.spotLight2.intensity = 1.5;
        } else {
            // Adjust lighting for dark theme
            window.threeJSLights.ambient.intensity = 0.5;
            window.threeJSLights.directional.intensity = 1;
            window.threeJSLights.spotLight1.intensity = 2;
            window.threeJSLights.spotLight2.intensity = 2;
        }
    }
    
    // Initialize 3D model
    setupThreeJS();
    
    // Initial lighting update
    setTimeout(() => {
        updateThreeJSLighting(document.documentElement.getAttribute('data-theme'));
    }, 500);
    
    // Image slideshow configuration
    // Replace these image arrays with your actual image paths
    const slideshowImages = {
        'slideshow-1': [
            'images/icons/1.png',
            'images/icons/11.png',
            'images/icons/111.png'
        ],
        'slideshow-2': [
            'images/icons/2.png',
            'images/icons/22.png',
            'images/icons/222.png'
        ],
        'slideshow-3': [
            'images/icons/3.png',
            'images/icons/33.png',
            'images/icons/333.png'
        ],
        'slideshow-4': [
            'images/icons/4.png',
            'images/icons/44.png',
            'images/icons/444.png'
        ],
        'slideshow-5': [
            'images/icons/5.png',
            'images/icons/55.png',
            'images/icons/555.png'
        ]
    };
    
    // Setup image slideshows
    function setupImageSlideshows() {
        Object.keys(slideshowImages).forEach(slideshowId => {
            const slideshowContainer = document.getElementById(slideshowId);
            if (!slideshowContainer) return;
            
            // Clear any existing content
            slideshowContainer.innerHTML = '';
            
            // Add images to the slideshow
            slideshowImages[slideshowId].forEach((imagePath, index) => {
                const img = document.createElement('img');
                img.src = imagePath;
                img.alt = `Image ${index + 1}`;
                img.className = index === 0 ? 'active' : '';
                slideshowContainer.appendChild(img);
            });
        });
    }
    
    // Call setup function
    setupImageSlideshows();
    
    // Function to rotate images for a specific container
    function rotateSlideForContainer(slideshowId) {
        const slideshowContainer = document.getElementById(slideshowId);
        if (!slideshowContainer) return;
        
        const images = slideshowContainer.querySelectorAll('img');
        if (images.length <= 1) return;
        
        // Find current active image
        let activeIndex = -1;
        images.forEach((img, index) => {
            if (img.classList.contains('active')) {
                activeIndex = index;
            }
        });
        
        // Calculate next image index
        const nextIndex = (activeIndex + 1) % images.length;
        
        // Remove active class from current image
        if (activeIndex >= 0) {
            images[activeIndex].classList.remove('active');
        }
        
        // Add active class to next image
        images[nextIndex].classList.add('active');
    }
    
    // Start slideshow rotations at different intervals for each box
    let slideIntervals = {};
    
    function startSlideshows() {
        // Clear any existing intervals
        Object.values(slideIntervals).forEach(interval => clearInterval(interval));
        
        // Set new intervals with staggered timing
        slideIntervals['slideshow-1'] = setInterval(function() {
            rotateSlideForContainer('slideshow-1');
        }, 3000); // 3 seconds
        
        slideIntervals['slideshow-2'] = setInterval(function() {
            rotateSlideForContainer('slideshow-2');
        }, 3500); // 3.5 seconds
        
        slideIntervals['slideshow-3'] = setInterval(function() {
            rotateSlideForContainer('slideshow-3');
        }, 4000); // 4 seconds
        
        slideIntervals['slideshow-4'] = setInterval(function() {
            rotateSlideForContainer('slideshow-4');
        }, 4500); // 4.5 seconds
        
        slideIntervals['slideshow-5'] = setInterval(function() {
            rotateSlideForContainer('slideshow-5');
        }, 5000); // 5 seconds
    }
    
    // Start the slideshows after a short delay
    setTimeout(startSlideshows, 1000);
    
    // Add click handlers to pause/resume slideshows
    const glassBoxes = document.querySelectorAll('.glass-box');
    glassBoxes.forEach(box => {
        box.addEventListener('click', function() {
            const slideshowId = this.querySelector('.image-slideshow').id;
            
            // If interval exists (running), pause it
            if (slideIntervals[slideshowId]) {
                clearInterval(slideIntervals[slideshowId]);
                slideIntervals[slideshowId] = null;
                
                // Resume after 3 seconds of inactivity
                setTimeout(() => {
                    if (!slideIntervals[slideshowId]) {
                        slideIntervals[slideshowId] = setInterval(function() {
                            rotateSlideForContainer(slideshowId);
                        }, 3000 + Math.random() * 2000); // Random interval between 3-5 seconds
                    }
                }, 3000);
            }
        });
    });
    
    // Function to handle preloading of images
    function preloadImages() {
        // Flatten all image paths into a single array
        const allImagePaths = Object.values(slideshowImages).flat();
        
        // Preload each image
        allImagePaths.forEach(path => {
            const img = new Image();
            img.src = path;
        });
    }
    
    // Call preload function
    preloadImages();
    
    // Enhance grain overlay with animation for more dynamic effect
    function enhanceGrainOverlay() {
        const grainOverlays = document.querySelectorAll('.grain-overlay');
        
        grainOverlays.forEach(overlay => {
            // Add slight animation to grain
            setInterval(() => {
                const randomOpacity = 0.35 + Math.random() * 0.1; // Random between 0.35-0.45
                overlay.style.opacity = randomOpacity;
                
                // Slight position shift
                const xPos = -1 + Math.random() * 2; // Random between -1 and 1
                const yPos = -1 + Math.random() * 2; // Random between -1 and 1
                overlay.style.transform = `translate(${xPos}px, ${yPos}px)`;
            }, 200); // Update every 200ms for subtle animation
        });
    }
    
    // Call grain enhancement
    enhanceGrainOverlay();
    
    // Add click handler for explore button
    const exploreButton = document.querySelector('.explore-button');
    if (exploreButton) {
        exploreButton.addEventListener('click', function() {
            // Navigate to explore page or show more content
            window.location.href = 'explore.php'; // Change this to your desired destination
        });
    }
    
    // Initialize animations
    setupAnimations();
});
</script>
<?php include 'brands.php'; ?>
<?php include 'tt.php'; ?>



