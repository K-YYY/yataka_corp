document.addEventListener('DOMContentLoaded', function() {
  // これが基本の形
  const swiper = new Swiper('.swiper', {
    loop: true,
    effect: 'fade',
    autoplay: { delay: 3000 },
  });
});
