// JavaScript Document
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
	document.getElementById("title").style.top = "-20px";
	document.getElementById("title").style.transition = ".1s";
	document.getElementById("navbar").style.transition = ".2s";
	document.getElementById("top-button").style.transition = ".2s";
	document.getElementById("top-button").style.display = "none";

  } else {
    document.getElementById("navbar").style.top = "-150px";
	document.getElementById("title").style.top = "-150px";
	document.getElementById("top-button").style.display = "unset";

  }
  prevScrollpos = currentScrollPos;
}
//
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}