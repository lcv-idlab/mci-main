// Interactions

window.onload = function() {

    // script to manage the mobile menu
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


    // KIT mobile open/close button

    $(".single-kits-container").each(function() {
        $(this).attr('id', $(this).height());
        $(this).css({height: '0px'});
        $(this).addClass("closed");
    })
        
    // kit main buttons open
    $(".cat-button-open").click(function(e) {
        $(e.target).parent().next().toggleClass("closed");      // get the next item (the ".single-kits-container") and close/open it
        $(e.target).parent().next().hasClass("closed") ? $(e.target).parent().next().css({ height: ""}) : $(e.target).parent().next().css({ height: $(e.target).parent().next().attr('id')+'px'});
        $(e.target).toggleClass("open");
    })

    $(".cat-button-open span").click(function(e) {
        $(e.target).parent().parent().next().toggleClass("closed");     // get the next item (the ".single-kits-container") and close/open it
        $(e.target).parent().parent().next().hasClass("closed") ? $(e.target).parent().parent().next().css({ height: ""}) : $(e.target).parent().parent().next().css({ height: $(e.target).parent().parent().next().attr('id')+'px'});
        $(e.target).parent().toggleClass("open");
    })

};