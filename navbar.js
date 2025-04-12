document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const navContainer = document.querySelector('.nav-container');
    
    // Toggle mobile menu
    mobileMenuBtn.addEventListener('click', function() {
        this.classList.toggle('active');
        navContainer.classList.toggle('active');
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', function(e) {
        if (!mobileMenuBtn.contains(e.target) && 
            !navContainer.contains(e.target) && 
            navContainer.classList.contains('active')) {
            mobileMenuBtn.classList.remove('active');
            navContainer.classList.remove('active');
        }
    });

    // Close mobile menu when window is resized above mobile breakpoint
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768 && navContainer.classList.contains('active')) {
            mobileMenuBtn.classList.remove('active');
            navContainer.classList.remove('active');
        }
    });
});
