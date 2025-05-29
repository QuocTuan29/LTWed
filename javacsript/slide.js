document.addEventListener("DOMContentLoaded", () => {
  const listImage = document.querySelector(".list-images");
  const imgs = document.querySelectorAll(".list-images img");
  const btnLeft = document.querySelector(".btn-left");
  const btnRight = document.querySelector(".btn-right");
  const total = imgs.length;

  let current = 0;
  let width = imgs[0].clientWidth;

  // Cập nhật chiều rộng khi resize
  window.addEventListener("resize", () => {
    width = imgs[0].clientWidth;
    updateSlide();
  });

  const updateSlide = () => {
    listImage.style.transform = `translateX(-${width * current}px)`;
  };

  const nextSlide = () => {
    current = (current + 1) % total;
    updateSlide();
  };

  const prevSlide = () => {
    current = (current - 1 + total) % total;
    updateSlide();
  };

  // Tự động chuyển slide mỗi 4 giây
  let slideInterval = setInterval(nextSlide, 4000);

  btnRight.addEventListener("click", () => {
    clearInterval(slideInterval);
    nextSlide();
    slideInterval = setInterval(nextSlide, 4000);
  });

  btnLeft.addEventListener("click", () => {
    clearInterval(slideInterval);
    prevSlide();
    slideInterval = setInterval(nextSlide, 4000);
  });
});
