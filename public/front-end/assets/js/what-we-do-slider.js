const teamSwiper = new Swiper(".team_slider_wrapper", {
  loop: true,
  grabCursor: true,
  spaceBetween: 50,

  // Custom Pagination
  pagination: {
    el: ".pagination-dots",
    clickable: true,
    dynamicBullets: true,
    renderBullet: function (index, className) {
      return `<span class="${className}"></span>`;
    },
  },

  // Navigation
  navigation: {
    nextEl: ".custom-button-next",
    prevEl: ".custom-button-prev",
  },

  // Autoplay
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },

  // Responsive Breakpoints
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});
