let lastScrollTop = 0;
const header = document.getElementById("head-container");

window.addEventListener("scroll", function () {
  const scrollTop = window.scrollY || document.documentElement.scrollTop;

  if (scrollTop > lastScrollTop) {
    // Cuộn xuống
    header.style.top = "-120px";
  } else {
    // Cuộn lên
    header.style.top = "0";
  }
  lastScrollTop = scrollTop;
});
