/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

function about() {
	document.getElementById("about").className = "padded";
	document.getElementById("services").className = "hide";
	document.getElementById("map").className = "hide";
	document.getElementById("data").className = "hide";
}

function services() {
	document.getElementById("menu").classList.toggle("hide");
}

function diseases() {
	document.getElementById("diseases").classList.toggle("hide");
}

function visualisations() {
	document.getElementById("about").className = "hide";
	document.getElementById("services").className = "hide";
	document.getElementById("map").className = "";
	document.getElementById("data").className = "hide";
}

function data() {
	document.getElementById("about").className = "hide";
	document.getElementById("services").className = "hide";
	document.getElementById("map").className = "hide";
	document.getElementById("data").className = "padded";
}

function info(argument) {
	document.getElementById("about").className = "hide";
	document.getElementById("services").className = "padded";
	document.getElementById("map").className = "hide";
	document.getElementById("data").className = "hide";
	document.getElementById(argument).classList.toggle("hide");
}