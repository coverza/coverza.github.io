// Menu!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
var menu = document.querySelector("select");
function showOption(el){
	window.location.href = el.options[el.selectedIndex].value;
}

var topMenu = document.querySelector("nav");
var menuSourceBottom = topMenu.getBoundingClientRect().bottom + window.pageYOffset;
window.addEventListener("scroll", fixed);
function fixed(){
	if (topMenu.classList.contains("fixed") && window.pageYOffset < menuSourceBottom) {
        topMenu.classList.remove("fixed");
      } else if (window.pageYOffset > menuSourceBottom) {
        topMenu.classList.add("fixed");
      }
}
