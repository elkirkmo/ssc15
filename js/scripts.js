jQuery(document).ready(function(){	
	jQuery(function(){
  var mySwiper = $('.swiper-container').swiper({
    //Your options here:
    mode:'horizontal',
    loop: true
    //etc..
  });
});
	
	 jQuery(".hamburger-menu a").click(function() {
    	//set the width of primary content container -> content should not scale while animating
		var contentWidth = jQuery('#page').width();
		var contentHeight = jQuery(window).height();		
        jQuery('#page').css('min-height', contentHeight);

        jQuery('#mobile_navigation').css({'opacity': 1, 'height' : contentHeight });

        //set the width of primary content container -> content should not scale while animating
        var contentWidth = jQuery('#page').width();

        //set the content with the width that it has originally
        jQuery('#page').css('width', contentWidth);

        //display a layer to disable clicking and scrolling on the content while menu is shown
        jQuery('#contentLayer').css({'display': 'block',});

        //disable all scrolling on mobile devices while menu is shown
        jQuery('#page').bind('touchmove', function (e) {
            e.preventDefault()
        });

        //set margin for the whole container with a jquery UI animation
        jQuery("#page").animate({"marginLeft": ["50%", 'easeOutExpo']}, {
            duration: 700
        });


    });
 
   
 //close the menu
    jQuery("#contentLayer").click(function() {
        
    //enable all scrolling on mobile devices when menu is closed
    jQuery('#page').unbind('touchmove');
 
    //set margin for the whole container back to original state with a jquery UI animation
    jQuery("#page").animate({"marginLeft": ["0", 'easeOutExpo']}, {
        duration: 700,
        complete: function() {
              jQuery('#page').css('width', '100%');
			  jQuery('#contentLayer').css('display', 'none');
 
        }

    });
});

//My Account Toggle buttons
    jQuery(".my-account h2").on("click", function() {
	    jQuery(".my-account h2, .my-account-section").toggleClass("active");
		
    });

});