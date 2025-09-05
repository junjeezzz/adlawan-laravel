let cart = JSON.parse(localStorage.getItem('bakehub_cart') || '[]');

function showNotification(message, type = 'success') {
  const notif = document.getElementById('orderNotification');
  if (!notif) return;
  notif.textContent = message;
  notif.className = '';
  notif.classList.add(type === 'success' ? 'success' : 'error');
  notif.style.display = 'block';
  setTimeout(() => { notif.style.display = 'none'; }, 4000);
}

function updateCartCount() {
  const countEl = document.getElementById('cartCount');
  if (countEl) countEl.textContent = cart.reduce((sum, item) => sum + item.qty, 0);
}

function saveCart() {
  localStorage.setItem('bakehub_cart', JSON.stringify(cart));
  updateCartCount();
}

function renderCartModal() {
  const body = document.getElementById('cartModalBody');
  if (!cart.length) {
    body.innerHTML = '<p class="text-center text-muted">Your cart is empty.</p>';
    return;
  }

  let total = 0;
  let html = `<table class="table"><thead><tr>
    <th>Item</th><th>Qty</th><th>Price</th><th>Subtotal</th><th></th>
  </tr></thead><tbody>`;
  cart.forEach((item, i) => {
    const subtotal = item.qty * item.price;
    total += subtotal;
    html += `<tr>
      <td>${item.name}</td>
      <td>
        <input type="number" min="1" value="${item.qty}" class="cart-qty-update" data-idx="${i}" style="width:50px;">
      </td>
      <td>₱${item.price.toFixed(2)}</td>
      <td>₱${subtotal.toFixed(2)}</td>
      <td><button class="btn btn-sm btn-danger remove-cart-item" data-idx="${i}">&times;</button></td>
    </tr>`;
  });
  html += `</tbody></table>
    <div class="d-flex justify-content-between align-items-center mb-3">
      <div>
        <label for="paymentMethod" class="me-2 fw-bold">Payment:</label>
        <select id="paymentMethod" class="form-select form-select-sm d-inline-block" style="width:auto;">
          <option value="Cash">Cash</option>
          <option value="GCash">GCash</option>
        </select>
      </div>
      <div class="fw-bold fs-5">Total: ₱${total.toFixed(2)}</div>
    </div>
    <h5>Customer Information</h5>
    <div class="mb-2"><input type="text" id="custName" class="form-control" placeholder="Full Name" required></div>
    <div class="mb-2"><input type="text" id="custAddress" class="form-control" placeholder="Address" required></div>
    <div class="mb-2"><input type="tel" id="custPhone" class="form-control" placeholder="Phone Number" required></div>
    <div class="mb-2"><textarea id="custNote" class="form-control" placeholder="Order Note (optional)"></textarea></div>
    <button id="checkoutBtn" class="btn btn-success w-100 mt-2">Checkout</button>
  `;
  body.innerHTML = html;
  attachCheckoutHandler();
}

function addToCart(name, price, qty) {
  const found = cart.find(item => item.name === name && item.price === price);
  if (found) found.qty += qty;
  else cart.push({name, price, qty});
  saveCart();
}

function attachCheckoutHandler() {
  const checkoutBtn = document.getElementById('checkoutBtn');
  if (checkoutBtn) {
    checkoutBtn.onclick = function() {
      if (!cart.length) return;
      const name = document.getElementById('custName').value.trim();
      const address = document.getElementById('custAddress').value.trim();
      const phone = document.getElementById('custPhone').value.trim();
      const note = document.getElementById('custNote').value.trim();
      const payment = document.getElementById('paymentMethod').value;
      if (!name || !address || !phone) {
        showNotification('Please fill all required fields.', 'error');
        return;
      }
      let orders = JSON.parse(localStorage.getItem('bakehub_orders') || '[]');
      orders.push({
        createdAt: new Date().toLocaleString(),
        name, address, phone, note,
        items: cart.map(x => ({...x})),
        total: cart.reduce((sum, i) => sum + i.qty * i.price, 0),
        payment,
        status: 'pending'
      });
      localStorage.setItem('bakehub_orders', JSON.stringify(orders));
      // This notifies admin.js in another tab
      localStorage.setItem('bakehub_orders_notify', Date.now().toString());
      cart = [];
      saveCart();
      renderCartModal();
      showNotification('Order received! Your order is being processed.', 'success');
      setTimeout(() => {
        const modal = bootstrap.Modal.getInstance(document.getElementById('cartModal'));
        if (modal) modal.hide();
      }, 300);
    }
  }
}

document.addEventListener('DOMContentLoaded', function() {
  updateCartCount();
  document.querySelectorAll('.add-to-cart-btn').forEach(btn => {
    btn.addEventListener('click', function() {
      const name = this.dataset.name;
      const price = parseFloat(this.dataset.price);
      const qtyInput = this.parentElement.querySelector('.cart-qty-input');
      const qty = parseInt(qtyInput.value) || 1;
      addToCart(name, price, qty);
      showNotification('Added to cart!', 'success');
    });
  });

  // Cart nav btn
  const cartBtn = document.getElementById('cartNavBtn');
  if (cartBtn) cartBtn.addEventListener('click', function(e) {
    e.preventDefault();
    renderCartModal();
    new bootstrap.Modal(document.getElementById('cartModal')).show();
  });

  // Cart modal events (event delegation)
  document.getElementById('cartModal').addEventListener('input', function(e) {
    if (e.target.classList.contains('cart-qty-update')) {
      const idx = +e.target.dataset.idx;
      const qty = Math.max(1, parseInt(e.target.value) || 1);
      cart[idx].qty = qty;
      saveCart();
      renderCartModal();
    }
  });

  document.getElementById('cartModal').addEventListener('click', function(e) {
    if (e.target.classList.contains('remove-cart-item')) {
      const idx = +e.target.dataset.idx;
      cart.splice(idx, 1);
      saveCart();
      renderCartModal();
    }
  });
});