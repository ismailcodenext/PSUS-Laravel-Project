// Navbar START.........................

$(document).ready(function () {
  function setupMenuBehavior() {
    if (window.innerWidth <= 1200) {
      // Mobile view

      // Mobile click behavior for sub-menus
      $(".sub-btn")
        .off("click")
        .on("click", function (e) {
          e.preventDefault(); // Prevent default link behavior

          let currentSubMenu = $(this).next(".sub-menu");

          // Close all other sub-menus first, then toggle the current one
          $(".sub-menu")
            .not(currentSubMenu)
            .slideUp()
            .parent()
            .removeClass("active");

          // Toggle the current sub-menu
          currentSubMenu
            .stop(true, true)
            .slideToggle(300)
            .parent()
            .toggleClass("active");
        });

      // Mobile click behavior for more-menus (ensure it works only on click, not hover)
      $(".more-btn")
        .off("mouseenter mouseleave") // Remove any hover events
        .on("click", function (e) {
          e.preventDefault(); // Prevent default link behavior

          let currentMoreMenu = $(this).next(".more-menu");

          // Close all other more-menus
          $(".more-menu")
            .not(currentMoreMenu)
            .slideUp()
            .parent()
            .removeClass("active");

          // Toggle the current more-menu
          currentMoreMenu
            .stop(true, true)
            .slideToggle(300)
            .parent()
            .toggleClass("active");
        });

      // Hover events should not be active on mobile
      $(".menu-item").off("mouseenter mouseleave");
    } else {
      // Desktop view
      // Desktop hover behavior for sub-menus
      $(".menu-item").hover(
        function () {
          // On hover, show sub-menu
          $(this).find(".sub-menu").stop(true, true).slideDown(300);
        },
        function () {
          // On hover out, hide sub-menu
          $(this).find(".sub-menu").stop(true, true).slideUp(300);
        }
      );

      // Desktop hover behavior for more-menus
      $(".more-btn").hover(
        function () {
          // On hover, show more-menu
          $(this).next(".more-menu").stop(true, true).slideDown(300);
        },
        function () {
          // Do not hide the more-menu on hover out anymore
          // We don't want the more-menu to disappear on hover out
        }
      );

      // Mobile behavior should not be active on desktop
      $(".sub-btn").off("click");
      $(".more-btn").off("click");
    }
  }

  // Initialize menu behavior on document ready
  setupMenuBehavior();

  // Re-apply menu behavior on window resize
  $(window).resize(function () {
    setupMenuBehavior();
  });

  // Toggle active class for mobile menu (burger menu)
  var menu = document.querySelector(".menu");
  var menuBtn = document.querySelector(".menu-btn");
  var closeBtn = document.querySelector(".close-btn");

  menuBtn.addEventListener("click", () => {
    menu.classList.add("active");

    // Close all sub-menus when sidebar is opened
    $(".sub-menu").slideUp().parent().removeClass("active");
  });

  closeBtn.addEventListener("click", () => {
    menu.classList.remove("active");

    // Close all sub-menus when sidebar is closed
    $(".sub-menu").slideUp().parent().removeClass("active");
  });

  // Close menu and sub-menus when clicking outside the menu
  document.addEventListener("click", (event) => {
    if (!menu.contains(event.target) && !menuBtn.contains(event.target)) {
      menu.classList.remove("active");

      // Close all sub-menus
      $(".sub-menu").slideUp().parent().removeClass("active");
    }
  });
});

// Navbar End.........................

// Back to top button Start....................
var btn = $("#back_to_top");

$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    btn.addClass("show");
  } else {
    btn.removeClass("show");
  }
});

btn.on("click", function (e) {
  e.preventDefault();
  $("html, body").animate({ scrollTop: 0 }, "300");
});
// Back to top button End.........
