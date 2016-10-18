// Script to manage the mobile menu


window.onload = function() {
	var navToggle = document.querySelector(".main-nav .menu-button");
	var nav = document.querySelector( ".main-nav nav ul");
	var button = document.querySelector(".main-nav .menu-button a");

	console.log(navToggle);

	if ( navToggle ) {
		navToggle.addEventListener( "click", function(e) {
			if (nav.className == "open" ) {
				nav.className = "";
				button.className = "";
			} else {
				nav.className = "open";
				button.className = "open";
			}
			e.preventDefault();
		}, false );
	}
};


