$(document).ready(function(){
	
	/* Width calculation for navigation adjustment - Start */
	adjust_element('.navigation-wrapper');
	adjust_element('.bottomNav');
	adjust_element('.footer');
	adjust_element('.graphic');
	adjust_element('.news .content');
	adjust_element('.activity .content');
	/* Width calculation for navigation adjustment - End */
	
	/* Set total height - Start */
	var totalheight = $(window).height();
	$('.menu, .blog, .content-wrapper').css('height', totalheight+'px');
	/* Set total height - End */
	if (totalheight < 800) { 
			$('.menu').addClass('smallScreen');
		} else { 
			$('.menu').removeClass('smallScreen');
		}
	
	$(window).resize(function(){
		adjust_element('.navigation-wrapper');
		adjust_element('.bottomNav');
		adjust_element('.footer');
		adjust_element('.graphic');
		adjust_element('.news .content');
		adjust_element('.activity .content');
		
		var totalheight = $(window).height();
		$('.menu, .blog, .content-wrapper').css('height', totalheight+'px');
		
		if (totalheight < 800) { 
			$('.menu').addClass('smallScreen');
		} else { 
			$('.menu').removeClass('smallScreen');
		}
	});
	
	$('.bottomNav > a, .btn-toIndex, .tab a').click(function(e){
		e.preventDefault();
		var scrolltoid = $(this).attr('href');
		var new_position = $(scrolltoid).offset().top;
		$('body').scrollTo(new_position, 1000);
		/*$('body').animate({
			scrollTop:new_position
		}, 1000);*/
		
		
	});
	
	/* Top Navigation - Start */
	$('.topNav a').click(function(){
		event.preventDefault();
		$('.topNav li').removeClass('current');
		var anchor = $(this).attr('href');
		var curURL = document.URL;
		hash = curURL.split('#');
		if(hash[1]==''){
			location.replace(curURL+anchor);
		}else{
			location.replace(hash[0]+anchor);
		}
		$(this).parent('li').addClass('current');
		return false;
	});
	/* Top Navigation - End */

	/* Bottom Navigation - Start */
	
	$('.bottomNav > .news').hover(function(){
		$(this).parent('.bottomNav').find('.newslist').show();
		//$(this).addClass('active');
	}, function(){
		$(this).parent('.bottomNav').find('.newslist').hide();
	});
	$('.bottomNav .newslist').hover(function(){
		$(this).show();
		//$(this).parent('.bottomNav').find('.news').removeClass('active');
		$('.bottomNav > .news').addClass('active');
	}, function(){
		$(this).hide();
		$('.bottomNav > .news').removeClass('active');
	});
	/* Bottom Navigation - End */
	
	/*$('.index3').scrollParallax({
		'speed': -0.2
	});*/
	
	/*$("body").bind("mousewheel", function() {
		if ($.browser.webkit === true) {
			return false;
		}
	});*/

});

function adjust_element(elementClass){
	var totalwidth = $(window).width();
	var element_width = $(elementClass).width();
	var element_pos = (totalwidth-element_width)/2;
	$(elementClass).css('left', element_pos+'px');
}

var state = false;
function navNewslist(elementClass, direction){
	var total_li = $(elementClass+' ul li').length;
	var total_width = total_li*222;
	var curpos = $(elementClass+' ul').css('left');
	var curpos = curpos.split('px');
	var curpos = curpos[0];
	if(direction=='left'){
		if(state==true){
			return true;
		}
		state = true;
		if(curpos>-(parseInt(total_width)-(222))){
			$(elementClass+' ul').animate({
					"left" : '-=222'
			}, 1000, function(){
				state = false;
			});
		}else{
			state = false;
		}
	}else if(direction=='right'){
		if(state==true){
			return true;
		}
		state = true;
		if(curpos<0){
			$(elementClass+' ul').animate({
					"left" : '+=222'
			}, 1000, function(){
				state = false;
			});
		}else{
			state = false;
		}
	}
}

$(function(){
	/* Define content range in page - Start */
	$('.blog .content-range-1').scrollParallax({
		'speed': 0.2
	});
	$('.blog .content-range-2').scrollParallax({
		'speed': 0.5
	});
	/* Define content range in page - End */
});