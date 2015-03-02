jQuery(document).ready(function( $ ) {
	
//----------------------------


//----------------------------
jQuery(document).on( 'scroll', function(){
        if ($(window).scrollTop() == 0)  {
            $('.navbar-default').removeClass('nav-bkg');
        } else {
            $('.navbar-default').addClass('nav-bkg');
        }
 });

	
});

