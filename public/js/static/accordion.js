

/* Start FAQs */
/* from https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_accordion_symbol */

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

/* Auto Click Open Web */
/* from https://stackoverflow.com/questions/19426047/auto-click-a-link-by-class-name-using-javascript-or-jquery */
document.getElementsByClassName("accordion")[0].click();



  