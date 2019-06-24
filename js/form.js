var button = document.querySelector("a.button");
var modal = document.querySelector(".modal");
button.onclick = function() {
	modal.style.display = "flex";
	return false;
}
var span = document.querySelector(".close");
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
	if (event.target == modal){
		modal.style.display = "none";
	}
}