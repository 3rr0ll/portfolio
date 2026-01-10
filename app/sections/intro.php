<div id="intro-screen" 
     class="fixed inset-0 z-[100] flex items-center justify-center bg-white dark:bg-gray-900 transition-opacity duration-500"
     style="display: flex; opacity: 1;">
    <div class="text-center transform transition-all duration-300">
        <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-gray-900 dark:text-white tracking-wide">
            <span class="inline-block animate-pulse">CHRISTIAN ERROL PURINO</span>
        </h1>
    </div>
</div>

<script>
(function() {
    const introScreen = document.getElementById('intro-screen');
    if (!introScreen) return;
    
    // Prevent scrolling
    document.body.style.overflow = 'hidden';
    
    // Hide intro after 3 seconds
    setTimeout(() => {
        introScreen.style.opacity = '0';
        introScreen.style.transition = 'opacity 0.5s ease-in';
        
        // Remove from DOM after fade out
        setTimeout(() => {
            introScreen.style.display = 'none';
            document.body.style.overflow = '';
        }, 500);
    }, 3000);
})();
</script>





