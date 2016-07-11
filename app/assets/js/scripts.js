/*!
 * fastshell
 * Fiercely quick and opinionated front-ends
 * https://HosseinKarami.github.io/fastshell
 * @author Hossein Karami
 * @version 1.0.5
 * Copyright 2016. MIT licensed.
 */
'use strict';
// DOM Ready
// Use this to avoid " $ is not defined "
jQuery(document).ready(function($) {

	// Add active class to nav on current page
	$(function(){
	    var url = window.location.pathname, 
	        urlRegExp = new RegExp(url === '/' ? window.location.origin + '/?$' : url.replace(/\/$/,''));
	        // now grab every link from the navigation
	        $('.nav-links li a').each(function(){
	            // and test its normalized href against the url pathname regexp
	            if(urlRegExp.test(this.href.replace(/\/$/,''))){
	                $(this).addClass('active');
	            }
	        });
	});

	// Smooth scroll to anchors
	$(function() {
	  $('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 700);
	        return false;
	      }
	    }
	  });
	});

	//Add padding to Product Design section when anchor clicked
	$('#productDesignLink').on('click', function() {
		$('section.product-design').css('padding-top', '90px');
	});

	$('#productDesigner').on('click', function() {
		$('#productDesignerLink').css('padding-top', '90px');
	});


// End DOM Ready
});


// All content loaded (inc images, css etc)
window.onload = function() {



	
// End Window Ready
};
