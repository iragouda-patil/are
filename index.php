<?php
// index.php with triple logo animation preloader
?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARE-O | UI/UX Designer & Web Developer</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Unbounded:wght@600;700;800&family=Inter:wght@400;500;600&family=Space+Mono&display=swap" rel="stylesheet">
    <style>
        /* Root Variables with Theme Support */
        :root {
            /* Dark theme colors (default) */
            --color-primary: #ff4000;
            --color-primary-light: #ed3300;
            --color-primary-dark: #ff4e26;
            --color-bg: #121212;
            --color-text: #FFFFFF;
            --color-border: rgba(255, 255, 255, 0.1);
            --grid-color: rgba(255, 255, 255, 0.03);
        }

        /* Light theme colors */
        [data-theme="light"] {
            --color-bg: #F9F9F9;
            --color-text: #121212;
            --color-border: rgba(0, 0, 0, 0.1);
            --grid-color: rgba(0, 0, 0, 0.03);
        }

        /* Minimalist preloader styles */
        .preloader-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            overflow: hidden;
            background-color: var(--color-bg);
            display: flex;
            justify-content: center;
            align-items: center;
            transition: opacity 1s ease-out, background-color 0.3s ease;
        }
        
        .preloader-exit {
            opacity: 0;
        }
        
        /* Grid background for preloader */
        .preloader-grid {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(var(--grid-color) 1px, transparent 1px),
                              linear-gradient(90deg, var(--grid-color) 1px, transparent 1px);
            background-size: 30px 30px;
            transition: background-image 0.3s ease;
            z-index: -1;
        }
        
        /* Logo container wrapper */
        .logos-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 100px;
            position: relative;
            z-index: 10;
        }
        
        /* Main logo container */
        .logo-container {
            width: 300px;
            height: 300px;
        }
        
        /* Left logo container */
        .left-logo-container {
            width: 129px;
            height: 141px;
        }
        
        /* Right logo container */
        .right-logo-container {
            width: 117px;
            height: 141px;
        }
        
        /* SVG logo styling with drawing and filling animation */
        .logo-svg {
            width: 100%;
            height: 100%;
        }
        
        /* Path drawing animation */
        .logo-path {
            fill: none;
            stroke: var(--color-primary);
            stroke-width: 4;
            stroke-dasharray: 2000;
            stroke-dashoffset: 2000;
            animation: drawPath 4s forwards ease-in-out;
        }
        
        /* Left logo path drawing animation */
        .left-logo-path {
            fill: none;
            stroke: var(--color-primary);
            stroke-width: 8;
            stroke-dasharray: 8000;
            stroke-dashoffset: 8000;
            animation: drawLeftPath 4s forwards ease-in-out;
        }
        
        /* Right logo path drawing animation */
        .right-logo-path {
            fill: none;
            stroke: var(--color-primary);
            stroke-width: 8;
            stroke-dasharray: 7000;
            stroke-dashoffset: 7000;
            animation: drawRightPath 4s forwards ease-in-out;
        }
        
        /* Logo fill effect */
        .logo-fill {
            fill: var(--color-primary);
            opacity: 0;
            animation: fillPath 3s forwards ease-in-out;
            animation-delay: 4s; /* Start after path drawing is complete */
        }
        
        /* Left logo fill effect */
        .left-logo-fill {
            fill: var(--color-primary);
            opacity: 0;
            animation: fillPath 3s forwards ease-in-out;
            animation-delay: 4s; /* Start after path drawing is complete */
        }
        
        /* Right logo fill effect */
        .right-logo-fill {
            fill: var(--color-primary);
            opacity: 0;
            animation: fillPath 3s forwards ease-in-out;
            animation-delay: 4s; /* Start after path drawing is complete */
        }
        
        /* Animations */
        @keyframes drawPath {
            to {
                stroke-dashoffset: 0;
            }
        }
        
        @keyframes drawLeftPath {
            to {
                stroke-dashoffset: 0;
            }
        }
        
        @keyframes drawRightPath {
            to {
                stroke-dashoffset: 0;
            }
        }
        
        @keyframes fillPath {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
    <style>
/* Hide all hero content initially */
.hero-content-side {
    opacity: 0 !important;
    visibility: hidden !important;
}

/* This class will be applied once preloader is gone */
body.hero-ready .hero-content-side {
    opacity: 1 !important;
    visibility: visible !important;
}
</style>

</head>
<body>
    <!-- Minimalist Preloader -->
    <div class="preloader-container" id="preloader">
        <!-- Grid background -->
        <div class="preloader-grid"></div>
        
        <!-- Logos container wrapper -->
        <div class="logos-container">
            <!-- Left logo container -->
            <div class="left-logo-container">
                <!-- SVG with drawing and filling animation -->
                <svg class="logo-svg" version="1.1" viewBox="0 0 2064 2256" width="129" height="141" xmlns="http://www.w3.org/2000/svg">
                    <!-- Fill layer (initially invisible) -->
                    <g class="left-logo-fill">
                        <path transform="translate(850,21)" d="m0 0 424 1 4 4 7 19 13 37 13 36 17 48 17 47 17 48 11 30 15 42 14 39 15 42 19 53 17 47 19 53 15 41 9 26 20 55 13 37 20 55 11 31 9 25 15 41 8 23 25 70 15 41 9 26 13 36 16 44 14 39 15 42 11 30 15 43 20 55 15 42 17 47 18 50 45 126 14 38 9 26 20 55 11 31 11 30 17 48 14 38 7 21 19 53 17 47 11 31 22 60 11 33 13 35 8 20 9 26 5 12 4 8 2 2v50h-442l-5-12-18-53-12-36-15-46-24-72-32-97-12-36-12-37-134-402-14-41-12-37-103-309-14-41-13-40-8-24-14-43-24-76-69-207-16-51-15-60-7-41-2-3-2-1-4 18-19 74-9 32-16 50-17 54-10 31-26 78-12 38-24 72-13 38-24 72-18 55-15 47-12 36-13 40-13 41-14 44-12 36-12 34-9 20-13 25-12 16-7 10 29-1h272l23 2 23 5 21 7 21 10 19 11 17 12 10 9 12 11 20 20 7 8 9 10 14 19 13 21 14 25 10 19 9 19 15 33 13 31 13 33 3 7v3l-8 2h-658l-3 3-10 28-28 86-122 366-2 5h-433l12-37 15-42 18-51 20-55 10-28 10-29 14-38 14-40 13-35 15-42 16-45 19-53 13-37 16-43 19-53 13-37 11-30 18-51 11-30 13-36 16-44 7-20 10-28 18-51 10-26 10-29 12-34 20-55 10-28 12-34 17-46 17-48 30-84 12-34 7-19 15-41 16-45 14-39 17-48 20-55 11-30 10-29 13-36 8-21 8-24 10-27 6-17 12-32 7-20 16-46 13-35 10-29 11-31 17-46 17-48 11-31 13-36 15-44 8-23 4-6 3-3z"/>
                    </g>
                    
                    <!-- Outline layer (for drawing animation) -->
                    <g class="left-logo-path">
                        <path transform="translate(850,21)" d="m0 0 424 1 4 4 7 19 13 37 13 36 17 48 17 47 17 48 11 30 15 42 14 39 15 42 19 53 17 47 19 53 15 41 9 26 20 55 13 37 20 55 11 31 9 25 15 41 8 23 25 70 15 41 9 26 13 36 16 44 14 39 15 42 11 30 15 43 20 55 15 42 17 47 18 50 45 126 14 38 9 26 20 55 11 31 11 30 17 48 14 38 7 21 19 53 17 47 11 31 22 60 11 33 13 35 8 20 9 26 5 12 4 8 2 2v50h-442l-5-12-18-53-12-36-15-46-24-72-32-97-12-36-12-37-134-402-14-41-12-37-103-309-14-41-13-40-8-24-14-43-24-76-69-207-16-51-15-60-7-41-2-3-2-1-4 18-19 74-9 32-16 50-17 54-10 31-26 78-12 38-24 72-13 38-24 72-18 55-15 47-12 36-13 40-13 41-14 44-12 36-12 34-9 20-13 25-12 16-7 10 29-1h272l23 2 23 5 21 7 21 10 19 11 17 12 10 9 12 11 20 20 7 8 9 10 14 19 13 21 14 25 10 19 9 19 15 33 13 31 13 33 3 7v3l-8 2h-658l-3 3-10 28-28 86-122 366-2 5h-433l12-37 15-42 18-51 20-55 10-28 10-29 14-38 14-40 13-35 15-42 16-45 19-53 13-37 16-43 19-53 13-37 11-30 18-51 11-30 13-36 16-44 7-20 10-28 18-51 10-26 10-29 12-34 20-55 10-28 12-34 17-46 17-48 30-84 12-34 7-19 15-41 16-45 14-39 17-48 20-55 11-30 10-29 13-36 8-21 8-24 10-27 6-17 12-32 7-20 16-46 13-35 10-29 11-31 17-46 17-48 11-31 13-36 15-44 8-23 4-6 3-3z"/>
                    </g>
                </svg>
            </div>
            
            <!-- Main logo container (center) -->
            <div class="logo-container">
                <!-- SVG with drawing and filling animation -->
                <svg class="logo-svg" version="1.1" viewBox="0 0 2000 2000" xmlns="http://www.w3.org/2000/svg">
                    <!-- Fill layer (initially invisible) -->
                    <g class="logo-fill">
                        <path transform="translate(1552,304)" d="m0 0h34l5 6 1 7-11 13-7 9-12 15-13 19-12 18-5 9-10 15-8 9-12 6-3 1-38-1-31-1h-272l-11 1-14 3 2 5 10 8 8 9 10 8 21 21 11 14 11 15 10 18 10 21 6 19 9 36 3 19 1 16v25l-2 21-5 27-8 35-8 25-11 26-11 21-12 19-11 15-10 13-11 13-16 16-15 14-14 11-15 11-10 7-19 12-16 10-20 10-12 7-19 8-20 8-16 6-24 8-18 9-11 4-7 4-4 2v2l17 9 12 4 24 4 13 2 18 5 29 11 16 5 20 8 20 10 23 13 23 14 11 8 17 14 23 23 7 8 11 13 10 14 14 24 12 26 9 25 4 20 7 50 4 39 3 31 3 24 5 23 8 22 11 24 8 15 14 23 11 14 9 10 7 8 11 11v2h2l14 14 8 7 13 11 15 10 16 10 17 10 13 8 18 8 2 2-1 4-14 3h-24l-50-5-55-8-39-7-31-8-36-12-16-7-19-9-18-10-10-7-15-11-11-9-33-33-11-15-13-20-10-18-12-24-12-35-8-29-11-54-5-31-5-30-7-38-6-22-11-36-9-22-6-14-9-19-7-11-13-18-13-15-7-8-15-15-14-10-15-10-12-6-20-7-6-5 1-4 10-5 20-8 12-4 27-11 14-7 5-5 19-14 14-12 18-18 11-14 9-13 6-10 5-12 8-17 5-15 8-30 3-13 3-21 4-23v-67l-4-21-4-33-4-20-7-25-8-22-16-35-12-20-10-14-11-14-6-8-18-20-20-20-13-10-12-10-15-8-13-3-8-1h-292l-41 1-2 1h-39l-13-3-3-3 1-7 5-12 11-13 14-19 12-16 10-15 12-19 7-8 14-8 3-1h208l129 1h614l47-2z"/>
                        <path transform="translate(523,1387)" d="m0 0h9l18 2 16 5 19 9 14 10 13 12 11 15 8 16 5 12 3 12 1 7v30l-4 18-6 15-8 15-8 11-7 8-11 9-10 7-19 9-16 5-16 2h-20l-16-2-17-6-21-11-11-9-9-8-10-13-9-16-7-18-3-14-1-9v-14l2-16 4-15 7-16 10-17 11-12 10-9 10-7 15-8 18-6 11-2z"/>
                        <path transform="translate(1133,433)" d="m0 0"/>
                    </g>
                    
                    <!-- Outline layer (for drawing animation) -->
                    <g class="logo-path">
                        <path transform="translate(1552,304)" d="m0 0h34l5 6 1 7-11 13-7 9-12 15-13 19-12 18-5 9-10 15-8 9-12 6-3 1-38-1-31-1h-272l-11 1-14 3 2 5 10 8 8 9 10 8 21 21 11 14 11 15 10 18 10 21 6 19 9 36 3 19 1 16v25l-2 21-5 27-8 35-8 25-11 26-11 21-12 19-11 15-10 13-11 13-16 16-15 14-14 11-15 11-10 7-19 12-16 10-20 10-12 7-19 8-20 8-16 6-24 8-18 9-11 4-7 4-4 2v2l17 9 12 4 24 4 13 2 18 5 29 11 16 5 20 8 20 10 23 13 23 14 11 8 17 14 23 23 7 8 11 13 10 14 14 24 12 26 9 25 4 20 7 50 4 39 3 31 3 24 5 23 8 22 11 24 8 15 14 23 11 14 9 10 7 8 11 11v2h2l14 14 8 7 13 11 15 10 16 10 17 10 13 8 18 8 2 2-1 4-14 3h-24l-50-5-55-8-39-7-31-8-36-12-16-7-19-9-18-10-10-7-15-11-11-9-33-33-11-15-13-20-10-18-12-24-12-35-8-29-11-54-5-31-5-30-7-38-6-22-11-36-9-22-6-14-9-19-7-11-13-18-13-15-7-8-15-15-14-10-15-10-12-6-20-7-6-5 1-4 10-5 20-8 12-4 27-11 14-7 5-5 19-14 14-12 18-18 11-14 9-13 6-10 5-12 8-17 5-15 8-30 3-13 3-21 4-23v-67l-4-21-4-33-4-20-7-25-8-22-16-35-12-20-10-14-11-14-6-8-18-20-20-20-13-10-12-10-15-8-13-3-8-1h-292l-41 1-2 1h-39l-13-3-3-3 1-7 5-12 11-13 14-19 12-16 10-15 12-19 7-8 14-8 3-1h208l129 1h614l47-2z"/>
                        <path transform="translate(523,1387)" d="m0 0h9l18 2 16 5 19 9 14 10 13 12 11 15 8 16 5 12 3 12 1 7v30l-4 18-6 15-8 15-8 11-7 8-11 9-10 7-19 9-16 5-16 2h-20l-16-2-17-6-21-11-11-9-9-8-10-13-9-16-7-18-3-14-1-9v-14l2-16 4-15 7-16 10-17 11-12 10-9 10-7 15-8 18-6 11-2z"/>
                        <path transform="translate(1133,433)" d="m0 0"/>
                    </g>
                </svg>
            </div>
            
            <!-- Right logo container -->
            <div class="right-logo-container">
                <!-- SVG with drawing and filling animation -->
                <svg class="logo-svg" version="1.1" viewBox="0 0 1872 2992" width="117" height="187" xmlns="http://www.w3.org/2000/svg">
                    <!-- Fill layer (initially invisible) -->
                    <g class="right-logo-fill">
                        <path transform="translate(189,29)" d="m0 0h1396l215 1 5 1 1 4v411l-2 3-5 1-29 1h-230l-933 1-1 2134h1267v406h-1853l-1-20v-2920l1-18 3-3 26-1z"/>
                        <path transform="translate(1175,1237)" d="m0 0h76l405 1 8 1 2 4v405l-4 2-20 1h-876l-7-2 1-7 5-11 16-41 15-39 12-29 13-28 8-16 12-23 11-19 9-14 12-17 6-8 14-19 13-15 9-9 7-8 13-13 5-6 8-7 10-9 17-13 33-22 27-14 25-9 25-7 27-5 18-2 15-1z"/>
                        <path transform="translate(604,465)" d="m0 0h3l-1 2108-2-2-1-18-1-42v-2026l1-18z"/>
                        <path transform="translate(1802,31)" d="m0 0h3l1 4v411l-2-4-1-26-1-107z"/>
                    </g>
                    
                    <!-- Outline layer (for drawing animation) -->
                    <g class="right-logo-path">
                        <path transform="translate(189,29)" d="m0 0h1396l215 1 5 1 1 4v411l-2 3-5 1-29 1h-230l-933 1-1 2134h1267v406h-1853l-1-20v-2920l1-18 3-3 26-1z"/>
                        <path transform="translate(1175,1237)" d="m0 0h76l405 1 8 1 2 4v405l-4 2-20 1h-876l-7-2 1-7 5-11 16-41 15-39 12-29 13-28 8-16 12-23 11-19 9-14 12-17 6-8 14-19 13-15 9-9 7-8 13-13 5-6 8-7 10-9 17-13 33-22 27-14 25-9 25-7 27-5 18-2 15-1z"/>
                        <path transform="translate(604,465)" d="m0 0h3l-1 2108-2-2-1-18-1-42v-2026l1-18z"/>
                        <path transform="translate(1802,31)" d="m0 0h3l1 4v411l-2-4-1-26-1-107z"/>
                    </g>
                </svg>
            </div>
        </div>
    </div>

 <script>
    // Preloader and hero animation coordination
    document.addEventListener('DOMContentLoaded', function() {
        const htmlElement = document.documentElement;
        const savedTheme = localStorage.getItem('theme') || 'dark';
        
        // Set the theme on HTML element
        htmlElement.setAttribute('data-theme', savedTheme);
        
        // Simple preloader with timed exit
        const preloader = document.getElementById('preloader');
        
        // Add a class to body to prevent hero animations from starting
        document.body.classList.add('loading');
        
        // Set a timeout to remove the preloader after animations complete
        setTimeout(function() {
            preloader.classList.add('preloader-exit');
            
            // Remove preloader from DOM after transition completes
            setTimeout(function() {
                preloader.style.display = 'none';
                
                // IMPORTANT: Add a short delay before starting hero animations
                setTimeout(function() {
                    // Add hero-ready class to trigger animations
                    document.body.classList.add('hero-ready');
                    document.body.classList.remove('loading');
                    
                    // Fire particles start with delay
                    setTimeout(function() {
                        const event = new CustomEvent('startFireParticles');
                        window.dispatchEvent(event);
                    }, 1500);
                }, 100);
            }, 1000);
        }, 7500); // Wait for logo animation to finish (7.5 seconds)
    });
</script>



    <?php include 'header.php'; ?>
    <?php include 'hero.php'; ?>
    <?php include 'work.php'; ?>
    <?php include 'journey.php'; ?>
    <?php include 'gallery.php'; ?>
    <?php include 'footer.php'; ?>
    
</body>
</html>
