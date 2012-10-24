$(document).ready(function(){
	
	/* Width calculation for navigation adjustment - Start */
	adjust_element('.graphic');
	/* Width calculation for navigation adjustment - End */
	
	/* Set total width - Start */
	var totalwidth = $(window).width();
	$('#viewport').css('width', totalwidth+'px');
	$('#wrapper').css('width', parseInt(totalwidth*4)+'px');
	/* Set total width - End */
	
	/* Set total height - Start */
	var totalheight = $(window).height();
	$('.menu, .blog, .content-wrapper').css('width', totalwidth+'px');
	$('.menu, .blog, .content-wrapper').css('height', totalheight+'px');
	/* Set total height - End */
	
	/* Set section position - Start */
		var url  = document.URL;
		var cur_url = url.split('#');
		$('.topNav li').removeClass('current');
		switch(cur_url[1]){
			case 'environment' :
				$('#page-wrapper').css('margin-left',0);
			break;
			case 'safety' :
				$('#page-wrapper').css('margin-left','-'+(totalwidth*1)+'px');
			break;
			case 'education' :
				$('#page-wrapper').css('margin-left','-'+(totalwidth*2)+'px');
			break;
			case 'philanthropy' :
				$('#page-wrapper').css('margin-left','-'+(totalwidth*3)+'px');
			break;
			default :
				$('#page-wrapper').css('margin-left',0);
		}
		$('.'+cur_url[1]).addClass('current');
	/* Set section position - End */
	
	/*
if (totalheight < 800) { 
			$('.menu').addClass('smallScreen');
		} else { 
			$('.menu').removeClass('smallScreen');
		}
*/
	
	$(window).resize(function(){
		adjust_element('.graphic');
		
		/* Set total width - Start */
		var totalwidth = $(window).width();
		$('#viewport').css('width', totalwidth+'px');
		$('#wrapper').css('width', parseInt(totalwidth*4)+'px');
		/* Set total width - End */
		
		/* Set total height - Start */
		var totalheight = $(window).height();
		$('.menu, .blog, .content-wrapper').css('width', totalwidth+'px');
		$('.menu, .blog, .content-wrapper').css('height', totalheight+'px');
		/* Set total height - End */
		
		/* Set section position - Start */
		var url  = document.URL;
		var cur_url = url.split('#');
		switch(cur_url[1]){
			case 'environment' :
				$('#page-wrapper').css('margin-left',0);
			break;
			case 'safety' :
				$('#page-wrapper').css('margin-left','-'+(totalwidth*1)+'px');
			break;
			case 'education' :
				$('#page-wrapper').css('margin-left','-'+(totalwidth*2)+'px');
			break;
			case 'philanthropy' :
				$('#page-wrapper').css('margin-left','-'+(totalwidth*3)+'px');
			break;
			default :
				$('#page-wrapper').css('margin-left',0);
		}
		/* Set section position - End */
		
		/*
if (totalheight < 800) { 
			$('.menu').addClass('smallScreen');
		} else { 
			$('.menu').removeClass('smallScreen');
		}
*/
	});
	
	/*$('.bottomNav > a, .btn-toIndex, .tab a').click(function(e){
		e.preventDefault();
		var scrolltoid = $(this).attr('href');
		var new_position = $(scrolltoid).offset().top;
		alert(new_position);
		$('body').scrollTo(new_position, 1000);
		/*$('body').animate({
			scrollTop:new_position
		}, 1000);*/
	//});
	
	/* Top Navigation - Start */
	$('.topNav li a').click(function(e){
		e.preventDefault();
		$('.topNav li').removeClass('current');
		var anchor = $(this).attr('href');
		var curURL = document.URL;
		var section = $(this).attr('rel');
		hash = curURL.split('#');
		if(hash[1]==''){
			location.replace(curURL+anchor);
		}else{
			location.replace(hash[0]+anchor);
		}
		$(this).parent('li').addClass('current');
		moveToPosition(section);
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
		$('.bottomNav .news').addClass('active');
	}, function(){
		$(this).hide();
		$('.bottomNav .news').removeClass('active');
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
	var state = false;
	$('.page.goRight').click(function(){
		if(state==true){
			return true;
		}
		state = true;
		var pos = $('#page-wrapper').css('margin-left');
		pos = pos.split('px');
		curpos = pos[0];
		var totalwidth = $(window).width();
		if(curpos>-(parseInt(totalwidth*4)-(totalwidth))){
			$('#page-wrapper').animate({
				"margin-left" : '-='+totalwidth+'px'
			},1000, function(){
				state = false;
				detectpos();
			});
		}else{
			state = false;
		}
	});
	
	$('.page.goLeft').click(function(){
		if(state==true){
			return true;
		}
		state = true;
		var pos = $('#page-wrapper').css('margin-left');
		pos = pos.split('px');
		curpos = pos[0];
		var totalwidth = $(window).width();
		if(curpos<0){
			$('#page-wrapper').animate({
				"margin-left" : '+='+totalwidth+'px'
			},1000, function(){
				detectpos();
				state = false;
			});
		}else{
			state = false;
		}
	});

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

function detectpos(){
	var totalwidth = $(window).width();
	var pos = $('#page-wrapper').css('margin-left');
	pos = pos.split('px');
	curpos = pos[0];
	var section = -curpos/totalwidth;
	var section = section+1;
	switch(section){
		case 1 : 
			topNav('.environment');
		break;
		case 2 : 
			topNav('.safety');
		break;
		case 3 :
			topNav('.education');
		break;
		case 4 :
			topNav('.philanthropy');
		break;
		default :
			topNav('.environment');
	}
}

function topNav(navClass){
	$('.topNav li').removeClass('current');
	var anchor = $(navClass+' a').attr('href');
	var curURL = document.URL;
	hash = curURL.split('#');
	if(hash[1]==''){
		location.replace(curURL+anchor);
	}else{
		location.replace(hash[0]+anchor);
	}
	$(navClass).addClass('current');
}

function moveToPosition(section){
	var section = section.split('-');
	
	var totalwidth = $(window).width();
	var pos = totalwidth*section[1];
	thepos = pos;
	$('#page-wrapper').animate({
		"margin-left" : '-'+thepos+'px'
	},1000);
	

}