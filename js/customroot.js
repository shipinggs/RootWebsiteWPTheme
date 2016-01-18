
jQuery(document).ready(function($) {
    // Code that uses jQuery's $ can follow here.

		var mainbottom = $('#navbaranchor').offset().top + $('#navbaranchor').height();
		
		// on scroll, 
		$(window).on('scroll',function(){

		    // we round here to reduce a little workload
		    var stop = Math.round($(window).scrollTop());

		    if (stop > mainbottom) {
		        $('.navbar').addClass('past-anchor');
		        $('.fifthrowexistingclubscontent').addClass('past-anchor');		        
		    } else {
		        $('.navbar').removeClass('past-anchor');
		        $('.fifthrowexistingclubscontent').removeClass('past-anchor');
		    }

		});

});
