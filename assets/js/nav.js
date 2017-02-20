// Script to manage the mobile menu


window.onload = function() {
	var navToggle = document.querySelector(".main-nav .menu-button");
	var nav = document.querySelector( ".main-nav nav ul");
	var button = document.querySelector(".main-nav .menu-button a");

	//console.log(navToggle);

	if ( navToggle ) {
		navToggle.addEventListener( "click", function(e) {
			if (nav.className == "open" ) {
				button.className = "";
				nav.className = "";
			} else {
				button.className = "open";
				nav.className = "open";
			}
			e.preventDefault();
		}, false );
	}



	// sensible art workshop

	var navToggleS = document.querySelector(".senseable-main-nav .senseable-menu-button");
	var linkToggleS = document.querySelectorAll(".senseable-main-nav nav ul .link-button");
	var navS = document.querySelector( ".senseable-main-nav nav ul");
	var buttonS = document.querySelector(".senseable-main-nav .senseable-menu-button a");

	// open/close the menu trough the "menu" button
	if ( navToggleS ) {
		navToggleS.addEventListener( "click", function(e) {
			if (navS.className == "open" ) {
				buttonS.className = "";
				navS.className = "";
			} else {
				buttonS.className = "open";
				navS.className = "open";
			}
			e.preventDefault();
		}, false );
	}

	// close the menu when a link is clicked
	if( linkToggleS ) {
		Array.from(linkToggleS).forEach( function(item, index, array) {
			item.addEventListener( "click", function() {
				buttonS.className = "";
				navS.className = "";
			});
		});
	}

};