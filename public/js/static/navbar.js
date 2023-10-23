/* Nav Fly Out */
/* from https://www.codingnepalweb.com/navigation-bar-html-css-javascript/ */

const nav = document.querySelector(".nav"),
  navOpenBtn = document.querySelector(".navOpenBtn"),
  navCloseBtn = document.querySelector(".navCloseBtn"),
  modal = document.querySelector(".overlay-modal");


navOpenBtn.addEventListener("click", () => {
  nav.classList.add("openNav");

});
navCloseBtn.addEventListener("click", () => {
  nav.classList.remove("openNav");
  /* update click outside close */
  modal.style.display = "none";
});

navOpenBtn.onclick = function() {
  modal.style.display = "block";
}


window.addEventListener("click", function(event) {
  if (event.target == modal) {
    nav.classList.remove("openNav");
    modal.style.display = "none";
  }

});


/* Sticky */
/* https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_sticky_header */
window.onscroll = function() {myFunction()};

var header = document.getElementById("nav");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}


// /* Active Menu */
// /* https://www.youtube.com/watch?v=JkuiKeNS2mg&t=117s */
// const activePage = window.location.pathname;
// const navLinks = document.querySelectorAll('nav a').forEach(link => {
//   if(link.href.includes(`${activePage}`)){
//     link.classList.add('curent-item');
//   }
// })