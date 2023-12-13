addEventListener("DOMContentLoaded", () => {
  const closePopupBtn = document.getElementById("popup-btn-close");
  const openPopupBtn = document.getElementById("popup-btn");
  const popup = document.getElementById("product-popup");
  const productTitle = document.querySelector(".product_title");
  const productTitleInput = document.querySelector("form #product-title");

  if (productTitle && productTitleInput) {
    const titleText = productTitle.innerText;

    productTitleInput.value = titleText;
  }

  if (openPopupBtn) {
    function openPopup() {
      popup.classList.add("active");
    }

    openPopupBtn.addEventListener("click", openPopup);
  }

  if (closePopupBtn) {
    function closePopup() {
      popup.classList.remove("active");
    }

    closePopupBtn.addEventListener("click", closePopup);
  }
});
