jQuery(document).ready(function(){

	// Average reallocated..............

	jQuery('.average_reallocated li:first').addClass('active');
	var first_tab_content = jQuery('.average_reallocated li:first').data('content');
	jQuery('.csb-avargb h3').html(first_tab_content);

	jQuery('.average_reallocated li').on('click', function(){

		var content = jQuery(this).data('content');
		jQuery('.csb-avargb h3').html(content);
		jQuery('.avargb_tab').removeClass('active');
		jQuery(this).addClass('active'); 

	});

jQuery('.authority-slider').slick({
	  autoplay:true,
	  autoplaySpeed: 1000,
	  infinite: true,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  dots:true,
	  arrows:true,
});

jQuery('.cl-testimonial').slick({
	  autoplay:true,
	  autoplaySpeed: 1000,
	  infinite: true,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  dots:true,
	  arrows:true,
});

jQuery('.banner-slider').slick({
  autoplay:true,
  autoplaySpeed: 9000,
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots:true,
  arrows:false,
});

jQuery('.slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots:false,
  arrows:true,
  autoplay:true,
});
	
jQuery(document).on("scroll", function(){
	if
  (jQuery(document).scrollTop() > 50){
	  jQuery(".navbar-default").addClass("navbar-shrink");
	}
	else
	{
		jQuery(".navbar-default").removeClass("navbar-shrink");
	}
});

jQuery(function () {
	jQuery(".content").css("display", "none");
	jQuery(".js-accordion-title").addClass("open");
	jQuery(".js-accordion-title").click(function () {
		jQuery(".open").not(this).removeClass("open").next().slideUp(300);
		jQuery(this).toggleClass("open").next().slideToggle(300);
	});
});
	
	


jQuery("#custom_tabs li a").on('click',function() {

	var id = jQuery(this).attr("id");

    jQuery('html, body').animate({
        scrollTop: (jQuery(id).offset().top-200)
    }, 2000);
});

jQuery(".case_study_wrap a").on('click', function(e){

	e.preventDefault();
	var view_all_id = jQuery(this).attr("id");
	jQuery('html, body').animate({
        scrollTop: (jQuery(view_all_id).offset().top-200)
    }, 2000);
});


jQuery(document).on('click', ".button-container a", function(e){
	e.preventDefault();
	jQuery('html, body').animate({
      scrollTop: (jQuery('#home_retention_credit').offset().top-100)
  }, 2000);

});

	
jQuery(".retension_credit, #close_erc, .button-container a").click(function(){
  jQuery(".link-container").slideToggle();
})
// jQuery(window).scroll(function(){
//      var scroll = jQuery(window).scrollTop();

//     if (scroll >= 300){
// 		jQuery('.ret_cr_btn').css('opacity', '0');
//     }else{
// 	  jQuery('.ret_cr_btn').css('opacity', '1');
		
//     } 
// });
	

	



// var stickyTop1 = jQuery('.view-cos-seg').offset().top;
// jQuery(window).on( 'scroll', function(){
// 	// alert('hi');
// 	if (jQuery(window).scrollTop() >= stickyTop1) {
// 	    jQuery('.view-cos-seg').css({"position": "fixed", "top":"97px", "z-index":"99", "width":"100%", "padding":"30px 0"});
// 	} else {
// 	    jQuery('.view-cos-seg').css({"position": "relative", "top": "0px"});
// 	}
// });
	
	
	
// jQuery(window).scroll(function(){
//     var sticky = jQuery('.tax-button'),
//         scroll = jQuery(window).scrollTop();

//     if (scroll >= 130){
//         sticky.addClass('fixed');
//     }else{
//         sticky.removeClass('fixed');  
//     } 
// });


// jQuery(window).scroll(function(){
//     var sticky = jQuery('.view-cos-seg'),
//         scroll = jQuery(window).scrollTop();

//     if (scroll >= 130){
//         sticky.addClass('fixed');
//     }else{
//         sticky.removeClass('fixed');  
//     } 
// });
	
	
	
	
		
////////////Custom Tab JS START////////////////
// jQuery('#custom_tabs li a:not(:first)').addClass('inactive');

// jQuery('#custom_tabs li a:first').addClass('active');


// jQuery('.tab-container').hide();
// jQuery('.tab-container:first').show();
    
// jQuery('#custom_tabs li a').click(function(){

//     jQuery('#custom_tabs li a').removeClass('active');
//     var t = jQuery(this).attr('id');
//     if(jQuery(this).hasClass('inactive')){ //this is the start of our condition 
//         jQuery('#custom_tabs li a').addClass('inactive');           
//         jQuery(this).removeClass('inactive');
        
//         jQuery('.tab-container').hide();
//         jQuery('#'+ t + 'C').fadeIn('slow');


//         jQuery(this).addClass('active');
//     }
// });
////////////Custom Tab JS END////////////////
	
	
	jQuery('.home-tabs li:first').addClass('active');
	    var home_first_tab_content = jQuery('.home-tabs li:first').data('content');
	    jQuery('#cost-seg').html(home_first_tab_content);

	    jQuery('.home-tabs li').on('click', function(){
	        var content = jQuery(this).data('content');
	        jQuery('#cost-seg').html(content);
	        jQuery('.home-tabs li').removeClass('active');
	        jQuery(this).addClass('active'); 
	    });
	
	jQuery('.home-testimonial').slick({
	  autoplay:true,
	  autoplaySpeed: 1000,
	  infinite: true,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  dots:true,
	  arrows:true,
	});
	
	
	
	
	
	
	
	
	
	var stickyTop2 = jQuery('.tax-button, .view-cos-seg').offset().top;
jQuery(window).on( 'scroll', function(){
			// alert('hi');
	if (jQuery(window).scrollTop() >= stickyTop2) {
	    jQuery('.tax-button, .view-cos-seg').css({"position": "fixed", "top":"89px", "z-index":"99", "width":"100%", "padding":"30px 0"});
	} else {
	    jQuery('.tax-button, .view-cos-seg').css({"position": "relative", "top": "0px"});
	}
});
	

});




