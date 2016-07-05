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

	// Add padding to Home:Proudct Design section if anchor clicked
	$('#productDesignLink').on('click', function() {
		$('.product-design').css('padding-top', '90px');
	});

	$('#productDesignerLink').on('click', function() {
		$('#productDesigner').css('padding-top', '90px');
	});

// End DOM Ready
});


// All content loaded (inc images, css etc)
window.onload = function() {



	
// End Window Ready
};
