document.addEventListener("DOMContentLoaded", function () {
  let btn = document.querySelector("#belanja");

  function scrollToProducts() {
    let productsSection = document.querySelector(".product-section");
    if (productsSection) {
      productsSection.scrollIntoView({ behavior: "smooth" });
    }
  }

  if (btn) {
    btn.addEventListener("click", scrollToProducts);
  }
});

document.addEventListener("DOMContentLoaded", function () {
  let menuItems = document.querySelectorAll(".main-menu a");

  function handleMenuClick(event) {
    menuItems.forEach(function (item) {
      item.classList.remove("active");
    });

    event.target.classList.add("active");
  }

  menuItems.forEach(function (item) {
    item.addEventListener("click", handleMenuClick);
  });
});
