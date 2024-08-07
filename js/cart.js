const displayCartItems = () => {
  const cart = JSON.parse(localStorage.getItem("cart")) || [];
  const cartItemsContainer = document.getElementById("cart-items");
  const emptyCartMessage = document.getElementById("empty-cart-message");
  const checkoutButtonContainer = document.querySelector(".checkout-button-container");

  cartItemsContainer.innerHTML = "";

  let totalPrice = 0;

  if (cart.length === 0) {
    emptyCartMessage.style.display = 'block';
    checkoutButtonContainer.style.display = 'none';
  } else {
    emptyCartMessage.style.display = 'none';
    checkoutButtonContainer.style.display = 'flex';  // Or any other display style you want to use

    cart.forEach((item, index) => {
      const itemHTML = `
        <div class="cart-item card mb-3">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="${item.image}" class="img-fluid rounded-start" alt="${item.title}">
            </div>
            <div class="col-md-8">
              <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                  <h5 class="card-title">${item.title}</h5>
                  <p class="card-text">${item.description}</p>
                  <p class="card-text"><small class="text-muted">$${item.price.toFixed(2)}</small></p>
                </div>
                <i class="fas fa-trash remove-btn" onclick="removeFromCart(${index})"></i>
              </div>
            </div>
          </div>
        </div>
      `;
      cartItemsContainer.innerHTML += itemHTML;
      totalPrice += item.price;
    });
  }

  document.getElementById("total-price").textContent = totalPrice.toFixed(2);
};

const removeFromCart = (index) => {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  cart.splice(index, 1);
  localStorage.setItem("cart", JSON.stringify(cart));
  displayCartItems();
  updateCartCount();
};

const updateCartCount = () => {
  const cart = JSON.parse(localStorage.getItem("cart")) || [];
  document.getElementById("cart-count").textContent = cart.length;
};

document.addEventListener("DOMContentLoaded", () => {
  displayCartItems();
  updateCartCount();
});
