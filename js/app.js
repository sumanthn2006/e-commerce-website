// //Add to Cart
// function addToCart(id) {

//   let cart =
//     JSON.parse(localStorage.getItem("cart")) || [];

//   cart.push(id);

//   localStorage.setItem(
//     "cart",
//     JSON.stringify(cart)
//   );

//   alert("Added to cart");
// }

// //Remove from Cart
// function removeFromCart(id) {
//   let cart = JSON.parse(localStorage.getItem("cart")) || [];
//   cart = cart.filter((item) => item !== id);
//   localStorage.setItem("cart", JSON.stringify(cart));
//   alert("Removed from cart");
// }
// //Display Cart
// let cart =
//   JSON.parse(localStorage.getItem("cart"));

// console.log(cart);
function changeText(){

   document.getElementById("title")
           .innerText = "Welcome Sumanth";

}