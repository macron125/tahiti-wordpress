let $ = jQuery;

$(document).ready(function () {
  $(".slider").slick({
    dots: false,
    infinite: true,
    speed: 500,
    autoplay: true,
    arrows: false,
    draggable: false,
    adaptiveHeight: true,
  });
});

(async () => {
  let menuBtn = document.getElementById("menuBtn");
  let overlay = document.getElementById("nav-open-overlay");

  menuBtn.addEventListener("click", closeNav);
  overlay.addEventListener("click", closeNav);

  function closeNav() {
    document.body.classList.toggle("nav-visible");
  }
})();
