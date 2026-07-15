function addToCart(id, title, price) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Prevent duplicate items
    if (cart.some(item => item.id === id)) {
        alert("⚠️ This episode is already in your cart!");
        return;
    }

    cart.push({ 
        id: id, 
        title: title, 
        price: parseFloat(price) 
    });

    localStorage.setItem('cart', JSON.stringify(cart));
    
    // Nice feedback
    const msg = document.createElement('div');
    msg.style.cssText = 'position:fixed; top:100px; left:50%; transform:translateX(-50%); background:#28a745; color:white; padding:15px 25px; border-radius:50px; box-shadow:0 5px 15px rgba(0,0,0,0.3); z-index:10000;';
    msg.textContent = `✅ ${title} added to cart!`;
    document.body.appendChild(msg);
    
    setTimeout(() => msg.remove(), 2500);
    
    // Update cart count in navbar
    updateCartCount();
}
