$(document).ready(function(){
	"use strict";

	var window_width = $(window).width(),
	window_height = window.innerHeight,
	header_height = $(".nav-header").height(),
	header_height_static = $(".site-header.static").outerHeight(),
	fitscreen = window_height - header_height;
	$(".fullscreen").css("height", window_height)
	$(".fitscreen").css("height", fitscreen);

 

	// -------  Mobile Menu ----- //
	$(".menu-bar").on('click', function(e){
     e.preventDefault();
     $("nav").toggleClass('hide');
     $("span", this).toggleClass("lnr-menu lnr-cross");
     $(".main-menu").addClass('mobile-menu');
    });

    $(".left-side").on('click', function(e){
	 e.preventDefault();
	 $(".left-side").toggleClass('collapse');
	 $(".sidebar-nav").toggleClass('collapse');
	 $(".exit_button").toggleClass('collapse');
    });	

	
    document.getElementById('button').addEventListener('click', function() {
        document.querySelector('.bg-modal').style.display = 'flex';
    });

    document.getElementById('close').addEventListener('click', function() {
        document.querySelector('.bg-modal').style.display = 'none';
    });


});


