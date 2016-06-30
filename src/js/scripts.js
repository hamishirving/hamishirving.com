// DOM Ready
$( document ).ready(function() {

	console.log('Dom loaded');

	// Add active class to nav on current page
	$(function(){
	    var url = window.location.pathname, 
	        urlRegExp = new RegExp(url == '/' ? window.location.origin + '/?$' : url.replace(/\/$/,''));
	        // now grab every link from the navigation
	        $('.nav-links li a').each(function(){
	            // and test its normalized href against the url pathname regexp
	            if(urlRegExp.test(this.href.replace(/\/$/,''))){
	                $(this).addClass('active');
	            }
	        });
	});


// End DOM Ready
});


// All content loaded (inc images, css etc)
window.onload = function() {



	
// End Window Ready
}
