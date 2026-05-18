jQuery(document).ready(function () {
  var espresso_shop_swiper_testimonials = new Swiper(".testimonial-swiper-slider.mySwiper", {
    slidesPerView: 3,
      spaceBetween: 5,
      speed: 1000,
      autoplay: {
        delay: 3000,
        disableOnPoppinsaction: false,
      },
      navigation: {
        nextEl: ".testimonial-swiper-button-next",
        prevEl: ".testimonial-swiper-button-prev",
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        767: {
          slidesPerView: 2,
        },
        1023: {
          slidesPerView: 3,
        }
    },
  });
});

jQuery(document).ready(function ($) {
  var espresso_shop_owl = $(".static-product-grid.owl-carousel");
  espresso_shop_owl.owlCarousel({
    loop: true,
    items: 3.8,
    margin: 30,
    nav: false,
    dots: false,
    rtl: false,
    autoplay: true,
    responsive: {
      0: { items: 1 },
      600: { items: 2 },
      1200: { items: 3 }
    }
  });
  $(".service-next").click(function () {
    espresso_shop_owl.trigger("next.owl.carousel");
  });
  $(".service-prev").click(function () {
    espresso_shop_owl.trigger("prev.owl.carousel");
  });
});

// products tabs
document.addEventListener("DOMContentLoaded", () => {
  const espresso_shop_tabTitles = [...document.querySelectorAll(".tab-title")];
  const espresso_shop_tabContents = [...document.querySelectorAll(".tab-content")];

  if (!espresso_shop_tabTitles.length) return;

  // Default: activate first tab
  espresso_shop_tabTitles.forEach((tab, index) => {
    tab.classList.toggle("active", index === 0);
    tab.setAttribute("tabindex", "0"); // make focusable by keyboard
  });
  espresso_shop_tabContents.forEach((content, index) => {
    content.classList.toggle("active", index === 0);
  });

  // Mouse click handling (FIXED)
  document.addEventListener("click", (e) => {
    const espresso_shop_clickedTab = e.target.closest(".tab-title");
    if (espresso_shop_clickedTab) {
      const espresso_shop_clickedIndex = espresso_shop_tabTitles.indexOf(espresso_shop_clickedTab);
      if (espresso_shop_clickedIndex !== -1) {
        espresso_shop_setActive(espresso_shop_clickedIndex);
      }
    }
  });

  // Keyboard navigation
  document.addEventListener("keydown", (e) => {
    const espresso_shop_activeIndex = espresso_shop_tabTitles.findIndex(tab => tab.classList.contains("active"));
    let espresso_shop_newIndex = espresso_shop_activeIndex;

    if (e.key === "ArrowRight") {
      espresso_shop_newIndex = (espresso_shop_activeIndex + 1) % espresso_shop_tabTitles.length;
      espresso_shop_tabTitles[espresso_shop_newIndex].focus();
      espresso_shop_setActive(espresso_shop_newIndex);
    } else if (e.key === "ArrowLeft") {
      espresso_shop_newIndex = (espresso_shop_activeIndex - 1 + espresso_shop_tabTitles.length) % espresso_shop_tabTitles.length;
      espresso_shop_tabTitles[espresso_shop_newIndex].focus();
      espresso_shop_setActive(espresso_shop_newIndex);
    } else if (e.key === "Enter" || e.key === " ") {
      const focusedIndex = espresso_shop_tabTitles.indexOf(document.activeElement);
      if (focusedIndex !== -1) espresso_shop_setActive(focusedIndex);
    }
  });

  function espresso_shop_setActive(index) {
    espresso_shop_tabTitles.forEach((tab, i) => tab.classList.toggle("active", i === index));
    espresso_shop_tabContents.forEach((content, i) => content.classList.toggle("active", i === index));
  }
});