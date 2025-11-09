<script>

document.addEventListener('DOMContentLoaded', function() {
    // Get current path
    const path = window.location.pathname.split('/').pop();
    
    // Remove active class from all menu items
    document.querySelectorAll('.sidebar-list a').forEach(link => {
        link.classList.remove('active');
    });
    
    // Add active class to current menu item
    const currentLink = document.querySelector(`.sidebar-list a[href*="${path}"]`);
    if (currentLink) {
        currentLink.classList.add('active');
    }
});
</script>

<?php /**PATH /home/dell/repos/laravel_project/themeforest-GdkAJN7n-seox-seo-digital-marketing-agency-laravel-12-template/SEOX-LARAVEL_v1.0/SEOX/resources/views/service/sidebar.blade.php ENDPATH**/ ?>