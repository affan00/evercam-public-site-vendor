jQuery.noConflict();
(function ($) {
    // Initialisations ..
    jQuery(window).load(function() {      
      // add a class so we know JavaScript is supported
      jQuery('html').addClass("js");
      jQuery('html').removeClass("no-js");
    });
    
    jQuery(document).ready(function () {
        if ((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/Android/i)) || (navigator.userAgent.match(/Windows Phone/i)) || (navigator.userAgent.match(/Blackberry/i))) {
            jQuery("body").addClass("mobile");
            var isMobile = true;
        };
        if ( (navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPad/i)) ) {
            jQuery("body").addClass("ios");
            var isIos = true;
        };
        jQuery(function () {
        	if( jQuery(window).width() > 770) {
	            jQuery('header nav ul').superfish({
	                autoArrows: false,
	                dropShadows: false
	            });
            }
        });
        
        
        
        //
        //  FitVids
        //
        jQuery(".main, .sidebar").fitVids();
        
        //
        // Shortcodes (tabs and accordions)
        //
            	
    	// Tabs
    	jQuery(function () {
    		jQuery(".mt-tabs").each( function () {
	    	    var tabContainers = jQuery('.tab-inner > div', this);
	    	   
	    	    jQuery(' ul a',this).click(function (e) {
	    		   e.preventDefault();
	    	        tabContainers.hide().filter(this.hash).show();
	    	        
	    	        jQuery(' ul li',this).removeClass('tab-active');
	    	        jQuery(this).parent().addClass('tab-active');
	    	        
	    	        return false;
	    	    }).filter(':first').click();
    	    });
    	});	
    	
    	// Toggles
    	jQuery(".toggle").each( function () {
    		if(jQuery(this).attr('data-id') == 'closed') {
    			jQuery(this).accordion({ header: '.toggle-title', collapsible: true, active: false, heightStyle: "content"  });
    		} else {
    			jQuery(this).accordion({ header: '.toggle-title', collapsible: true});
    		}
    	});
    	
        //
        // Responsive Images
        //
        curWidth = jQuery(window).width();
        if (curWidth > 570) {
        	jQuery('img.featured-image').each(function (index) {
        		var newSrc = jQuery(this).attr("data-fullsrc");
        	    jQuery(this).attr("src" , newSrc);
        		jQuery(this).show();
        	});
        }
        jQuery(".js img.featured-image").show();
       
        // set features
         if (jQuery('html').hasClass("oldie")) {
         
          // nth child support
         jQuery('.content.archive-content article').first().addClass("block_1");
         
         var counter = 1;
             jQuery(".content.archive-content article").each(function(index){ 
                 if(counter%5==0) {
                     jQuery(this).addClass("block_1");
                 	 
                 }
                 if( (counter%6==0) || (counter == 2) ) {
                     jQuery(this).addClass("block_2");
                 }
                 if( (counter%7==0) || (counter == 3) ) {
                     jQuery(this).addClass("block_3");
                 }
                 if( (counter%8==0) || (counter == 4) ) {
                     jQuery(this).addClass("block_4");
                 }
                 counter++;
             });
         
        }
        // polyfill placeholder text
        if ( (jQuery('html').hasClass("oldie")) || (jQuery('html').hasClass("ie9")) ) {
        
        	
        	
        			
            jQuery('[placeholder]').focus(function () {
                var input = jQuery(this);
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                    input.removeClass('placeholder');
                }
            }).blur(function () {
                var input = jQuery(this);
                if (input.val() == '' || input.val() == input.attr('placeholder')) {
                    input.addClass('placeholder');
                    input.val(input.attr('placeholder'));
                }
            }).blur().parents('form').submit(function () {
                jQuery(this).find('[placeholder]').each(function () {
                    var input = $(this);
                    if (input.val() == input.attr('placeholder')) {
                        input.val('');
                    }
                })
            });
        }
        //strip image size from content and flexsliders
        jQuery('img.wp-post-image, .main img, img.size-full, .flexslider img, .sidebar img').each(function () {
            jQuery(this).removeAttr('width')
            jQuery(this).removeAttr('height');
        });
        
        //remove style from captions
        jQuery('.wp-caption').each(function () {
            jQuery(this).css('width','')
        });
       
    });
    // .. Initialisations
})(jQuery);