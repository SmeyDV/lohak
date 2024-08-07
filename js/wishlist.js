// Get wishlist from localStorage
const getWishlist = () => JSON.parse(localStorage.getItem('wishlist')) || [];

// Save wishlist to localStorage
const saveWishlist = (wishlist) => localStorage.setItem('wishlist', JSON.stringify(wishlist));

// Add product to wishlist
const addToWishlist = (productId) => {
  const wishlist = getWishlist();
  const product = products.find((p) => p.id === productId);
  if (!wishlist.some((item) => item.id === productId)) {
    wishlist.push(product);
    saveWishlist(wishlist);
    updateWishlistCount();
  }
};

// Update wishlist count in navbar
const updateWishlistCount = () => {
  const wishlist = getWishlist();
  document.getElementById('wishlist-count').textContent = wishlist.length;
};

// Display wishlist items
const displayWishlist = () => {
  const wishlist = getWishlist();
  const wishlistContainer = document.getElementById('wishlist-items');
  wishlistContainer.innerHTML = '';

  if (wishlist.length === 0) {
    wishlistContainer.innerHTML = '<p>No items in your wishlist</p>';
    return;
  }

  const productsHTML = wishlist.map((product) => `
    <div class="col-md-4 d-flex justify-content-center">
      <div class="card pt-2 pb-2" id="card-width">
        <img class="product-image" alt="${product.title}" src="${product.image}" width="100%" height="150px">
        <div class="card-body">
          <hr>
          <h5 class="card-title product-description">${product.price.toFixed(2)}</h5>
          <h6 class="card-subtitle mb-2 text-muted product-title">${product.title}</h6>
          <h6 class="card-subtitle mb-2 text-muted">${product.description}</h6>
          
          <a title="Remove from wishlist" href="#" class="btn btn-outline-danger card-link remove-from-wishlist" data-product-id="${product.id}"> <i class="fa-solid fa-heart-broken"></i></a>
        </div>
      </div>
    </div>
  `).join('');

  wishlistContainer.innerHTML = productsHTML;
  addEventListeners();
};

// Remove product from wishlist
const removeFromWishlist = (productId) => {
  console.log(`Removing product with ID: ${productId}`); // Debugging statement
  let wishlist = getWishlist();
  wishlist = wishlist.filter((item) => item.id !== productId);
  saveWishlist(wishlist);
  displayWishlist();
  updateWishlistCount();
};

// Add event listeners to buttons
const addEventListeners = () => {
  document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', (e) => {
      e.preventDefault();
      const productId = parseInt(e.currentTarget.getAttribute('data-product-id'), 10);
      addToCart(productId); // Ensure you have a function to handle adding to cart
    });
  });

  document.querySelectorAll('.remove-from-wishlist').forEach(button => {
    button.addEventListener('click', (e) => {
      e.preventDefault();
      const productId = parseInt(e.currentTarget.getAttribute('data-product-id'), 10);
      console.log(`Remove button clicked for product ID: ${productId}`); // Debugging statement
      removeFromWishlist(productId);
    });
  });
};

// Initialize wishlist page
if (document.getElementById('wishlist-items')) {
  displayWishlist();
}

// Update wishlist count on page load
updateWishlistCount();
