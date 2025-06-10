// فعال کردن منوی موبایل
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const navLinks = document.querySelector('.nav-links');
    
    if(mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', function() {
            navLinks.classList.toggle('active');
        });
    }
    
    // مدیریت پخش رسانه
    const mediaElements = document.querySelectorAll('video, audio');
    mediaElements.forEach(media => {
        media.addEventListener('play', function() {
            // ارسال اطلاعات پخش به سرور
        });
    });
});