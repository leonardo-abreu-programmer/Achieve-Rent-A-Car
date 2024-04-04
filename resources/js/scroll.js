var scrollToTopBtns = document.querySelectorAll(".scrollToTopBtn");

scrollToTopBtns.forEach(function(btn) {
  btn.addEventListener("click", function() {
    // Scroll to the top of the page smoothly
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  });
});