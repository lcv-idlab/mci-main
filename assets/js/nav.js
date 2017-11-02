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


	// resources experience audio players
	// play only one at the time

 	var audios = document.getElementsByTagName('audio');	

 	/*
	document.addEventListener('play', function(e){
	    for(var i = 0, len = audios.length; i < len;i++){
	        if(audios[i] != e.target){
	            audios[i].pause();
	            audios[i].currentTime = 0;
	        }
	    }
	}, true);
	*/


	for(var i = 0, len = audios.length; i < len;i++){

		// volume change and muted (both triggered by 'volumechange')
		audios[i].addEventListener('volumechange', function(e) {

			if(this.muted) {
				for(var i = 0, len = audios.length; i < len;i++) {
			            audios[i].muted = this.muted;
			    }
			}
			else {
				for(var i = 0, len = audios.length; i < len;i++) {
						audios[i].muted = false;
			            audios[i].volume = this.volume;
			    }
			}
		}, true);

		// playback control
		audios[i].addEventListener('play', function(e) {
			for(var i = 0, len = audios.length; i < len;i++){
		        if(audios[i] != e.target){
		            audios[i].pause();
		            audios[i].currentTime = 0;
		        }
		    }
		}, true);

	}



};