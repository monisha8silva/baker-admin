(function($) {

	"use strict";

	var fullHeight = function() {
		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	var carousel = function() {
		$('.home-slider').owlCarousel({
	    loop: true,
	    autoplay: false,
		autoHeight: false,
	    margin:0,
	    animateOut: 'fadeOut',
	    animateIn: 'fadeIn',
	    nav:true,
	    dots: true,
	    autoplayHoverPause: false,
	    items: 1,
	    navText : ["<span class='ion-ios-arrow-back'></span>","<span class='ion-ios-arrow-forward'></span>"],
	    responsive:{
	      0:{
	        items:1
	      },
	      600:{
	        items:1
	      },
	      1000:{
	        items:1
	      }
	    }
		});

	};
	carousel();

})(jQuery);


$(document).ready(function() {
    $('#btn').click(function() {
        $('#btn').toggleClass("cart_clk");

    });
    $("#btn").one("click", function() {
        $('.cart .fa').attr('data-before', '1');
    });

    var prnum = $('.num').text();
    $('.inc').click(function() {
        if (prnum > 0) {
            prnum++;
            $('.num').text(prnum);
            $('.cart .fa').attr('data-before', prnum);
        }

    });
    $('.dec').click(function() {
        if (prnum > 1) {
            prnum--;
            $('.num').text(prnum);
            $('.cart .fa').attr('data-before', prnum);
        }

    });

});

var images = ["public/images/Full cakes/cake/VANILLA  CUP CAKE.jpg", "public/images/Full cakes/cake/VANILLA  CUP CAKE.jpg", "public/images/Full cakes/cake/VANILLA  CUP CAKE.jpg", "public/images/Full cakes/cake/VANILLA  CUP CAKE.jpg"];
    $(function () {
        var i = 0;
        $("#dvImage").css("background-image", "url(images/" + images[i] + ")");
        setInterval(function () {
            i++;
            if (i == images.length) {
                i = 0;
            }
            $("#dvImage").fadeOut("slow", function () {
                $(this).css("background-image", "url(images/" + images[i] + ")");
                $(this).fadeIn("slow");
            });
        }, 5000);
    });

	$('.btn-minus').click(function(){            
		$(this).parent().siblings('input').val(parseInt($(this).parent().siblings('input').val()) - 1)
	  })
	  $('.btn-plus').click(function(){            
		$(this).parent().siblings('input').val(parseInt($(this).parent().siblings('input').val()) + 1)
	  })
		  

	//   <------------------------img-------------------- >

	var counter = 1;
	serInterval (function(){
       document.getElementById('radio' + counter).checked = true;
	   counter++;
	   if(counter > 4){
		   counter = 1;
	   }



	},5000);