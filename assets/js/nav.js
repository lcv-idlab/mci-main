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



	// sensible art workshop

	var navToggleS = document.querySelector(".senseable-main-nav .senseable-menu-button");
	var linkToggleS = document.querySelectorAll(".senseable-main-nav nav ul .link-button");
	var navS = document.querySelector( ".senseable-main-nav nav ul");
	var buttonS = document.querySelector(".senseable-main-nav .senseable-menu-button a");

	//console.log(navToggle);

	if ( navToggleS ) {
		navToggleS.addEventListener( "click", function(e) {
			if (navS.className == "open" ) {
				navS.className = "";
				buttonS.className = "";
			} else {
				navS.className = "open";
				buttonS.className = "open";
			}
			e.preventDefault();
		}, false );
	}
	/*
	if ( linkToggleS ) {
		linkToggleS.forEach(function(elem) {
			elem.addEventListener("click", function(e) {
				if (navS.className == "open" ) {
					navS.className = "";
					buttonS.className = "";
				} else {
					navS.className = "open";
					buttonS.className = "open";
				}
				e.preventDefault();
			}, false );
		});
	}
	*/
};