$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 3000, // Increased the timeout to 5000ms (5 seconds)
    autoplayHoverPause: true,
    autoplaySpeed: 1000, // Increased the speed to 1000ms (1 second) for a slower transition
    center: true,
    navText: [
      "<i class='fa fa-angle-left'></i>",
      "<i class='fa fa-angle-right'></i>",
    ],
    responsive: {
      0: {
        items: 1,
      },
      776: {
        items: 2,
      },
      993: {
        items: 3,
      },
    },
  });
});
