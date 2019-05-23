(function(jQuery) {
    'use strict';
    jQuery(document).ready(function() {
		
		 /* ============== SLIDE SHOW ============= */
		if(jQuery('.slideshow').length > 0) {
			jQuery('.slideshow').owlCarousel({
				autoplay:true,
				autoplayTimeout:5000,
				autoplayHoverPause:true,
				items:1,
				animateOut: 'fadeOut',
				animateIn: 'fadeIn',
				smartSpeed:1000,
				pagination : false,
				navigation : true,
				navigationText : ['', ''],
			});
		}
		// Home Page Testimonials Carousel
		if( jQuery("#testimonial-slider").length){
			jQuery("#testimonial-slider").owlCarousel({
				items:1,
				itemsDesktop:[1000,1],
				itemsDesktopSmall:[980,1],
				itemsTablet:[767,1],
				pagination:false,
				navigation:true,
				navigationText:["",""],
				slideSpeed:1000,
				autoPlay:true
			});
		}
		
		if( jQuery(".postGallery").length){
			jQuery(".postGallery").owlCarousel({
				singleItem            : true,
				responsive            : true,
				autoHeight            : false,
				mouseDrag             : false,
				touchDrag             : false,
				responsiveRefreshRate : 0,
				transitionStyle       : 'fadeUp',
				pagination        : false,
				navigation        : true,
				navigationText    : [
						'<i class="fa fa-angle-left"></i>',
						'<i class="fa fa-angle-right"></i>'
					]
			});
		}
		
		if(jQuery('.ed-carousel').length) {
			jQuery('.ed-carousel').owlCarousel({
				items:4,
				autoPlay :3000,
				pagination : false,
				navigation : false,
				navigationText : ['', ''],
			});
		}
		
		
	    /* ============== masonry Grid ============= */
			if( jQuery(".masonry_grid").length){
				jQuery('.masonry_grid').masonry({
				  // set itemSelector so .grid-sizer is not used in layout
				  itemSelector: '.grid-item',
				  // use element for option
				  columnWidth: '.grid-sizer',
				  percentPosition: true
				});
			}
		
            /* ============== MOBILE MENU ============== */
            jQuery('.mobile-menu-toggle').on('click', function(){
                jQuery('.mobile-menu').toggle();
				jQuery(this).find('i').toggleClass('fa-bars').toggleClass('fa-close');
            });
            jQuery(window).on('resize', function(){
                if(window.matchMedia('screen and (min-width : 1200px)').matches&&jQuery('.mobile-menu').css('display')==='block'){
                    jQuery('.mobile-menu').toggle();
                }
            });
            
            /* ============== DROP ANIMATION ============== */
            jQuery('.drop-toggle').on('click', function(e){
                e.preventDefault();
                jQuery(this).siblings('.drop-menu').slideToggle();
                jQuery(this).find('i').toggleClass('fa-angle-down fa-angle-up');
            });
            
            /* ============== MAIN MENU SEARCH ============== */
            jQuery('.main-menu-search').on('click', function(){
                if(jQuery('#search-container').css('display')=='none'){
                    jQuery('.main-menu').find('#menu-main').fadeToggle( function(){
                        jQuery('#search-container').fadeToggle();
                        jQuery('#search-container').css('display', 'table');
                        jQuery('#search-container').find('input').focus();
                    });
                }
                else{
                    jQuery('#search-container').fadeToggle(function(){
                        jQuery('.main-menu').find('#menu-main').fadeToggle();
                    });
                }
                
            });
            
           
            
         /* ============== SMOTH SLIDE ============== */
                jQuery('.smooth-scroll').on('click', function(event){
                    event.preventDefault();
                    var id = jQuery(this).attr('href');
                    var position = parseInt(jQuery(document).find(id).offset().top);
                    jQuery('html, body').animate({scrollTop: position});
                });
                /* ============== SCROLL TOP ============== */
                jQuery(window).on('scroll', function(){
                    if(jQuery(this).scrollTop()>jQuery(this).height()/2)jQuery('.scroll-top').css('opacity', 0.7);
                    else jQuery('.scroll-top').css('opacity',0);
                });
                jQuery('.scroll-top').on('click', function(event){
                    event.preventDefault();
                    jQuery('html, body').animate({scrollTop: 0});
                });
          
            
        
		/* ============== Quantity buttons ============== */
		
			jQuery( 'div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)' ).addClass( 'buttons_added' ).append( '<input type="button" value="+" class="plus" />' ).prepend( '<input type="button" value="-" class="minus" />' );
		
			// Target quantity inputs on product pages
			jQuery( 'input.qty:not(.product-quantity input.qty)' ).each( function() {
				var min = parseFloat( jQuery( this ).attr( 'min' ) );
		
				if ( min && min > 0 && parseFloat( jQuery( this ).val() ) < min ) {
					jQuery( this ).val( min );
				}
			});
		
			jQuery( document ).on( 'click', '.plus, .minus', function() {
		
				// Get values
				var $qty        = jQuery( this ).closest( '.quantity' ).find( '.qty' ),
					currentVal  = parseFloat( $qty.val() ),
					max         = parseFloat( $qty.attr( 'max' ) ),
					min         = parseFloat( $qty.attr( 'min' ) ),
					step        = $qty.attr( 'step' );
		
				// Format values
				if ( ! currentVal || currentVal === '' || currentVal === 'NaN' ) currentVal = 0;
				if ( max === '' || max === 'NaN' ) max = '';
				if ( min === '' || min === 'NaN' ) min = 0;
				if ( step === 'any' || step === '' || step === undefined || parseFloat( step ) === 'NaN' ) step = 1;
		
				// Change the value
				if ( jQuery( this ).is( '.plus' ) ) {
		
					if ( max && ( max == currentVal || currentVal > max ) ) {
						$qty.val( max );
					} else {
						$qty.val( currentVal + parseFloat( step ) );
					}
		
				} else {
		
					if ( min && ( min == currentVal || currentVal < min ) ) {
						$qty.val( min );
					} else if ( currentVal > 0 ) {
						$qty.val( currentVal - parseFloat( step ) );
					}
		
				}
		
				// Trigger change event
				$qty.trigger( 'change' );
			});
		
		 if(jQuery('.masterTooltip').length){		
		 jQuery('.masterTooltip').hover(function(){
			
					// Hover over code
					var title = jQuery(this).attr('title');
					 
					if(title != ""){
					jQuery(this).data('tipText', title).removeAttr('title');
					jQuery('<span class="ed-tooltip"></span>')
					.text(title)
					.appendTo(jQuery(this).parents('.ed-carousel-wrp'))
					.fadeIn('slow');
					}
					
					
			}, function() {
					// Hover out code
				   jQuery(this).attr('title', jQuery(this).data('tipText'));
				   jQuery('.ed-tooltip').remove();
			}).mousemove(function(e) {
					var mousex = e.pageX -50; //Get X coordinates
					var mousey = 10; //Get Y coordinates
					jQuery('.ed-tooltip')
					.css({ top: mousey, left: mousex });
					
				
			});
		 }
		 
				 /*-----------------------------------------------------------------
			 * Magnific
			 *-----------------------------------------------------------------*/
			if( jQuery('.image-popup').length ){
				jQuery('.image-popup').magnificPopup({
					closeBtnInside : true,
					type           : 'image',
					mainClass      : 'mfp-with-zoom'
				});
			}
			if( jQuery('.iframe-popup').length ){
				jQuery('.iframe-popup').magnificPopup({
					type      : 'iframe',
					mainClass : 'mfp-with-zoom'
				});
			}
	});
})(jQuery);