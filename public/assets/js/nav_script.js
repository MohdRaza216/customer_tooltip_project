document.addEventListener('DOMContentLoaded', function () {
  let sidebar = document.querySelector(".sidebar");
  let btn = document.querySelector(".hamburger");
  let rightSidebarToggle = document.getElementById("rightSliderToggle");
  let blockChain = document.getElementById("blockChain");
  let subMenu2 = document.querySelector(".sub-menu-2");
  let blockArrow = document.querySelector(".block-arrow");
  let closeBtn = document.querySelector(".close-btn");
  let scrollbox = document.querySelector(".scrollbox");
  let sidebarRight = document.getElementById("sidebarRight");

  if (sidebar && btn && rightSidebarToggle && blockChain && subMenu2 && blockArrow && closeBtn && scrollbox && sidebarRight) {

    btn.onclick = function () {
      sidebar.classList.toggle("active");
      scrollbox.classList.toggle("scroll-hide");
      sidebarRight.classList.toggle("active");
    };

    blockChain.onclick = function () {
      subMenu2.classList.toggle("show");
      blockArrow.classList.toggle("rotate");
    };

    rightSidebarToggle.onclick = function () {
      sidebarRight.classList.toggle("active");
      sidebar.classList.toggle("active");
      scrollbox.classList.toggle("scroll-hide");
    };

    closeBtn.onclick = function () {
      sidebar.classList.remove("active");
      scrollbox.classList.remove("scroll-hide");
      sidebarRight.classList.remove("active");
    };

  }
});
