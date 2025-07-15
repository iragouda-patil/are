<section id="trending-topics" class="trending-topics-section">
    <div class="tt-section-grid-overlay"></div>
    
    <div class="tt-section-header">
        <h2 class="tt-section-title">Trending Topics</h2>
        <p class="tt-section-subtitle">Explore our latest design resources and templates</p>
    </div>
    
    <div class="tt-horizontal-scroll-container">
        <div class="tt-cards-wrapper">
            <!-- Card 1 -->
            <div class="tt-scroll-card">
                <div class="tt-card-image-container">
                    <img src="https://images.ui8.net/uploads/website-and-business-management-web-app-ui-kit-8_1746883919795.png" alt="UI Kit Components" class="tt-card-image">
                </div>
                <div class="tt-card-content">
                    <h3 class="tt-card-title">UI Kit Components</h3>
                    <p class="tt-card-description">Modern interface elements for your next project</p>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="tt-scroll-card">
                <div class="tt-card-image-container">
                    <img src="https://devforum-uploads.s3.dualstack.us-east-2.amazonaws.com/uploads/optimized/5X/0/b/8/4/0b845a0bd8f0257a6b443c214284ec5358be6967_2_500x500.png" alt="Icon Collection" class="tt-card-image">
                </div>
                <div class="tt-card-content">
                    <h3 class="tt-card-title">Icon Collection</h3>
                    <p class="tt-card-description">Versatile icons for web and mobile applications</p>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="tt-scroll-card">
                <div class="tt-card-image-container">
                    <img src="https://cdn.dribbble.com/userupload/42243771/file/original-04b6b7c57701bc3f0ec236283712d32f.jpg?resize=400x300" alt="Texture Pack" class="tt-card-image">
                </div>
                <div class="tt-card-content">
                    <h3 class="tt-card-title">Texture Pack</h3>
                    <p class="tt-card-description">High-resolution textures for graphic design</p>
                </div>
            </div>
            
            <!-- Card 4 -->
            <div class="tt-scroll-card">
                <div class="tt-card-image-container">
                    <img src="https://cdn.dribbble.com/userupload/9124670/file/original-2a02f9a0c2f232737f12468d7842e862.png?resize=1504x1302&vertical=center" alt="Code Snippets" class="tt-card-image">
                </div>
                <div class="tt-card-content">
                    <h3 class="tt-card-title">Code Snippets</h3>
                    <p class="tt-card-description">Ready-to-use code for common web features</p>
                </div>
            </div>
            
            <!-- Card 5 -->
            <div class="tt-scroll-card">
                <div class="tt-card-image-container">
                    <img src="https://marketplace.canva.com/EAE8bzsn4wY/1/0/800w/canva-blue-and-purple-groovy-modern-with-3d-shape-for-linktree-background-YFlH2X7LREI.jpg" alt="3D Models" class="tt-card-image">
                </div>
                <div class="tt-card-content">
                    <h3 class="tt-card-title">3D Models</h3>
                    <p class="tt-card-description">Low-poly models for web and game development</p>
                </div>
            </div>
            
            <!-- Card 6 -->
            <div class="tt-scroll-card">
                <div class="tt-card-image-container">
                    <img src="https://i0.wp.com/graphicforfree.com/wp-content/uploads/2023/11/Sanshiro-font_kereatype-studio-3.jpg?fit=1200%2C800&ssl=1" alt="Font Collection" class="tt-card-image">
                </div>
                <div class="tt-card-content">
                    <h3 class="tt-card-title">Font Collection</h3>
                    <p class="tt-card-description">Unique typefaces for distinctive branding</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Import Roboto font for subtitle */
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap');

/* Trending Topics Section - Prefixed with tt- to avoid conflicts */
.trending-topics-section {
    position: relative;
    width: 100%;
    height: 100vh;
    min-height: 700px;
    background-color: #000000 !important; /* Always black regardless of theme */
    overflow: hidden;
    padding: 80px 0 40px;
    z-index: 1;
    
    box-sizing: border-box; /* Ensure padding is included in height */
}

/* Grid overlay for section */
.tt-section-grid-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(rgba(50, 50, 50, 0.3) 1px, transparent 2px),
                      linear-gradient(90deg, rgba(50, 50, 50, 0.3) 1px, transparent 2px);
    background-size: 30px 30px;
    z-index: 1;
    pointer-events: none;
}

/* Section header */
.tt-section-header {
    position: relative;
    z-index: 2;
    padding: 0 60px;
    margin-bottom: 60px;
}

.tt-section-title {
    font-family: 'Oswald', sans-serif;
    font-weight: 700;
    font-size: 48px;
    color: #ffffff;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 10px;
}

.tt-section-subtitle {
    font-family: 'Roboto', sans-serif; /* Changed from Jaro to Roboto */
    font-weight: 300;
    font-size: 18px;
    color: rgba(255, 255, 255, 0.7);
    max-width: 600px;
}

/* Horizontal scroll container */
.tt-horizontal-scroll-container {
    position: relative;
    width: 100%;
    height: calc(100% - 200px);
    z-index: 2;
    overflow-x: auto;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch; /* Smooth scrolling on iOS */
}

/* Hide horizontal scrollbar */
.tt-horizontal-scroll-container::-webkit-scrollbar {
    display: none;
}

.tt-horizontal-scroll-container {
    scrollbar-width: none; /* Firefox */
    -ms-overflow-style: none; /* IE and Edge */
}

.tt-cards-wrapper {
    display: flex;
    gap: 30px;
    padding: 0 60px;
    height: 100%;
    min-width: max-content;
    flex-wrap: nowrap; /* Prevent wrapping */
}

/* Card styles */
.tt-scroll-card {
    position: relative;
    flex: 0 0 350px; /* Fixed width, no growing or shrinking */
    height: 500px; /* Fixed height */
    max-height: 90%; /* Ensure it fits in container */
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 8px;
    overflow: hidden;
    transition: transform 0.3s ease, border-color 0.3s ease;
    background-color: rgba(0, 0, 0, 0.5);
    box-sizing: border-box; /* Include border in size calculation */
    display: flex;
    flex-direction: column;
}

.tt-scroll-card:hover {
    transform: translateY(-10px);
    border-color: rgba(255, 122, 0, 0.6);
}

.tt-card-image-container {
    width: 100%;
    height: 70%;
    overflow: hidden;
    flex-shrink: 0;
}

.tt-card-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.tt-scroll-card:hover .tt-card-image {
    transform: scale(1.05);
}

.tt-card-content {
    padding: 20px;
    height: 30%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    flex-shrink: 0;
    box-sizing: border-box;
}

.tt-card-title {
    font-family: 'Oswald', sans-serif;
    font-weight: 600;
    font-size: 22px;
    color: #ffffff;
    margin-bottom: 5px;
    margin-top: 0;
}

.tt-card-description {
    font-family: 'Roboto', sans-serif; /* Changed from Jaro to Roboto */
    font-weight: 300;
    font-size: 14px;
    color: rgba(255, 255, 255, 0.7);
    line-height: 1.4;
    margin: 0;
}

/* Responsive styles */
@media (max-width: 1200px) {
    .tt-scroll-card {
        flex: 0 0 300px;
        height: 450px;
    }
}

@media (max-width: 992px) {
    .tt-section-title {
        font-size: 40px;
    }
    
    .tt-scroll-card {
        flex: 0 0 280px;
        height: 420px;
    }
    
    .tt-card-title {
        font-size: 20px;
    }
}

@media (max-width: 768px) {
    .trending-topics-section {
        padding: 60px 0 30px;
    }
    
    .tt-section-header {
        padding: 0 30px;
        margin-bottom: 40px;
    }
    
    .tt-section-title {
        font-size: 36px;
    }
    
    .tt-cards-wrapper {
        padding: 0 30px;
    }
    
    .tt-scroll-card {
        flex: 0 0 260px;
        height: 380px;
    }
}

@media (max-width: 576px) {
    .tt-section-title {
        font-size: 30px;
    }
    
    .tt-section-subtitle {
        font-size: 16px;
    }
    
    .tt-scroll-card {
        flex: 0 0 240px;
        height: 350px;
    }
    
    .tt-card-title {
        font-size: 18px;
    }
    
    .tt-card-description {
        font-size: 12px;
    }
}

/* Override any other styles that might affect our section */
.trending-topics-section * {
    box-sizing: border-box;
}

/* Force card content to stay within bounds */
.tt-card-content > * {
    max-width: 100%;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Variables
    const ttSection = document.querySelector('.trending-topics-section');
    const ttScrollContainer = document.querySelector('.tt-horizontal-scroll-container');
    const ttCards = document.querySelectorAll('.tt-scroll-card');
    
    // Check if elements exist
    if (!ttSection || !ttScrollContainer || ttCards.length === 0) {
        console.error('Trending Topics: Required elements not found');
        return;
    }
    
    // Add card reveal animations
    function ttAnimateCardsIn() {
        ttCards.forEach((card, index) => {
            // Start with cards translated down and invisible
            card.style.opacity = '0';
            card.style.transform = 'translateY(50px)';
            
            // Animate cards in with staggered delay
            setTimeout(() => {
                card.style.transition = 'opacity 0.8s ease, transform 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275)';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 100 + (index * 100)); // Stagger by 100ms
        });
    }
    
    // Simple function to check if element is in viewport
    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.bottom >= 0
        );
    }
    
    // Scroll state tracking
    let isScrollingHorizontally = false;
    let lastScrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
    // Direct wheel event handler for the section
    ttSection.addEventListener('wheel', function(e) {
        // Only process if we're in the viewport
        if (!isElementInViewport(ttSection)) return;
        
        // Get scroll positions
        const scrollLeft = ttScrollContainer.scrollLeft;
        const maxScrollLeft = ttScrollContainer.scrollWidth - ttScrollContainer.clientWidth;
        
        // If scrolling down (positive deltaY) and not at max scroll
        if (e.deltaY > 0 && scrollLeft < maxScrollLeft) {
            e.preventDefault();
            ttScrollContainer.scrollLeft += e.deltaY;
            isScrollingHorizontally = true;
            return;
        }
        
        // If scrolling up (negative deltaY) and not at beginning
        if (e.deltaY < 0 && scrollLeft > 0) {
            e.preventDefault();
            ttScrollContainer.scrollLeft += e.deltaY;
            isScrollingHorizontally = true;
            return;
        }
        
        // Otherwise, allow normal scrolling
        isScrollingHorizontally = false;
    }, { passive: false });
    
    // Card hover effects with parallax
    ttCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            const cardImage = this.querySelector('.tt-card-image');
            if (!cardImage) return;
            
            // Add event listener for mouse movement
            const mouseMoveHandler = function(e) {
                // Get mouse position relative to card
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                // Calculate movement percentages
                const xPercent = (x / rect.width - 0.5) * 10;
                const yPercent = (y / rect.height - 0.5) * 10;
                
                // Apply subtle parallax effect to image
                cardImage.style.transform = `scale(1.05) translate(${xPercent}px, ${yPercent}px)`;
            };
            
            card.addEventListener('mousemove', mouseMoveHandler);
            
            // Store the handler for removal
            card._ttMouseMoveHandler = mouseMoveHandler;
        });
        
        // Reset on mouse leave
        card.addEventListener('mouseleave', function() {
            const cardImage = this.querySelector('.tt-card-image');
            if (!cardImage) return;
            
            cardImage.style.transform = 'scale(1)';
            
            // Remove mousemove event listener
            if (this._ttMouseMoveHandler) {
                this.removeEventListener('mousemove', this._ttMouseMoveHandler);
                this._ttMouseMoveHandler = null;
            }
        });
    });
    
    // Trigger card animations when section comes into view
    const ttRevealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                ttAnimateCardsIn();
                ttRevealObserver.disconnect(); // Only animate once
            }
        });
    }, { threshold: 0.1 });
    
    // Observe the section
    ttRevealObserver.observe(ttSection);
    
    // Add keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (isElementInViewport(ttSection)) {
            if (e.key === 'ArrowLeft') {
                ttScrollContainer.scrollBy({ left: -100, behavior: 'smooth' });
            } else if (e.key === 'ArrowRight') {
                ttScrollContainer.scrollBy({ left: 100, behavior: 'smooth' });
            }
        }
    });
    
    // Touch events for mobile
    let touchStartX = 0;
    let touchStartY = 0;
    
    ttSection.addEventListener('touchstart', function(e) {
        touchStartX = e.touches[0].clientX;
        touchStartY = e.touches[0].clientY;
    }, { passive: true });
    
    ttSection.addEventListener('touchmove', function(e) {
        if (!isElementInViewport(ttSection)) return;
        
        const touchX = e.touches[0].clientX;
        const touchY = e.touches[0].clientY;
        
        const diffX = touchStartX - touchX;
        const diffY = touchStartY - touchY;
        
        // If horizontal swipe is greater than vertical
        if (Math.abs(diffX) > Math.abs(diffY)) {
            e.preventDefault();
            ttScrollContainer.scrollLeft += diffX;
            
            // Update start position
            touchStartX = touchX;
        }
    }, { passive: false });
    
    // Reset scroll position when entering section from above
    window.addEventListener('scroll', function() {
        const currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const scrollingDown = currentScrollTop > lastScrollTop;
        
        // If we're scrolling down and the section is coming into view
        if (scrollingDown && isElementInViewport(ttSection)) {
            const rect = ttSection.getBoundingClientRect();
            
            // If the section is just entering the viewport
            if (rect.top < window.innerHeight && rect.top > 0) {
                // Reset horizontal scroll position
                ttScrollContainer.scrollLeft = 0;
            }
        }
        
        lastScrollTop = currentScrollTop;
    }, { passive: true });
    
    // Fix for some browsers - force recalculation of scroll width
    function updateScrollContainer() {
        // Force layout recalculation
        ttScrollContainer.style.display = 'none';
        void ttScrollContainer.offsetHeight; // Trigger reflow
        ttScrollContainer.style.display = '';
    }
    
    // Run on load and resize
    window.addEventListener('load', updateScrollContainer);
    window.addEventListener('resize', updateScrollContainer);
    
    // Force update after a delay
    setTimeout(updateScrollContainer, 500);
});
</script>
