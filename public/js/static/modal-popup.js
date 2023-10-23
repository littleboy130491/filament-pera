/* Modal Popup */
/* https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_modal */


const modalCat = document.getElementById("overlayModalCat"),
btnCat = document.querySelectorAll(".btnModal"),
spanCat = document.getElementsByClassName("close-catalog")[0];


btnCat.forEach(btnCat => {
btnCat.onclick = function(e) {
  e.preventDefault();
  modalCat.style.display = "block";
}
});


spanCat.onclick = function() {
  modalCat.style.display = "none";
}


window.addEventListener("click", function(event) {
  if (event.target == modalCat) {
    modalCat.style.display = "none";
  }
});
