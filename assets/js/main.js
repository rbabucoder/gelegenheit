jQuery(document).ready(function ($) {
  const menuIcon = $(".hamburger-menu");
  const navMenu = $(".header__nav-wrapper");
  const closeMenu = $(".close-menu");
  const navItem = $(".header__nav-item");

  navItem.on("click", function (e) {
    e.stopPropagation(); // Optional: Prevents the click event from bubbling up to parent elements
    console.log($(this));
    $(this).find(".sub-menu").toggleClass("dropdown-menu");
    $(this).toggleClass("active");
  });
  

  menuIcon.on("click", function (e) {
    navMenu.toggleClass("active");
  });

  closeMenu.on("click", function (e) {
    navMenu.removeClass("active");
  });
});



jQuery(document).ready(function ($) {
  $(".testimonial-slider").slick({
    infinite: true,
    autoplay: true,
    speed: 100,
    dots: true,
    arrows: false,
  });
});