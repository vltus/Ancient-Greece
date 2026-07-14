function addToCart(id, title, price) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.push({ id: id, title: title, price: price });
    localStorage.setItem('cart', JSON.stringify(cart));

    alert(title + " added to cart! ✅");
    console.log("Cart updated:", cart);   // for debugging
}