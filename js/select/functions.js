/*ovdje se nalaze funcije za javascript/jquery*/

$(document).ready(function() {
	
    $('.nav-toggle').click(function(){
        $(this).next('ul').slideToggle();
        $(this).toggleClass("collapsed" , 0);
    });
	$('.slider').bxSlider({
		mode: 'fade',
		auto: true,
		pause: 6000,
		pager: 'true'
	});
        var max = -1;
        $(".news-title").each(function(){
            var h = $(this).height(); 
            max = h > max ? h : max;
        });
    $(".news-title").css("height", max + 20);

    $("#team_sezon").selectbox();
	if($(window).width() <=1040)
    {
    	$('.drop').click(function(){
        	$(this).next().slideToggle();
        	$(this).toggleClass("collapsed" , 0);
    	});
    }else{
    	$('.drop').click(function(){
    	if( $(this).hasClass('collapsed') == false){
    		var id = $(this).attr('id');
    		$('.sub-container').slideUp();
    		$('.drop').removeClass("collapsed" , 0);
    		$('#' + id + '-container').slideToggle();
    		$(this).addClass("collapsed" , 0);
    	}else{
    		$(this).removeClass("collapsed" , 0);
    		$('.sub-container').slideUp();
    	}
    	});

    }
	if($(window).width() <=800)
    {
       $('#slider1').bxSlider({
        mode: 'horizontal',
        auto: false,
        controls: true,
        pause: 4000,
        captions: false,
        speed: 1000,
        pager: false
      });
    }

	$('.gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
			
		}
	});

});


$(window).resize(function(){
  if($(window).width() >=1040)
  {
    $('.main-nav').removeAttr("style");
  };

});