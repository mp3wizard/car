var totalwidth = '';
var totalheight = '';
$(document).ready(function(){
	
	totalwidth = $(window).width();
	totalheight = $(window).height();
	
	/* Set total width - Start */
	$('#viewport').css('width', totalwidth+'px');
	$('#wrapper').css('width', parseInt(totalwidth*4)+'px');
	/* Set total width - End */
	
	/* Set total height - Start */
	//var totalheight = $(window).height();
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
				location.replace(cur_url+'#environment');
				$('.topNav .environment').addClass('current');
				
		}
		$('.'+cur_url[1]).addClass('current');
	/* Set section position - End */
	
	/* Scrolling command - Start */
		var curScrollPos = 0;
		
		/* Set position for active parallax - Start */
		var $parallax = $('.parallax');
		var total = $parallax.length;
		for(var i=0; i<total; i++){
			var pos = $parallax.eq(i).position().top;
			$parallax.eq(i).css('top', pos);
			$parallax.eq(i).attr('data-position', pos);
		}
		/* Set position for active parallax - End */
		
		$('#viewport').scroll(function(){
			curScrollPos = $(this).scrollTop()
			curHash = document.URL.split('#');
			$('.amount').html(curScrollPos); // Show scroll amount
			
			/* Go for Parallax - Start */
			var $self = $parallax;
			var $total = $self.length;
			for(var iself=0; iself<$total; iself++){
				var parallaxSpeed = $($self).eq(iself).attr('rel');
				var dataPos = $($self).eq(iself).attr('data-position');
				//var newPos = dataPos-(((curScrollPos-dataPos)*-parallaxSpeed));
				var newPos = dataPos-(curScrollPos*-(parallaxSpeed));
				$self.eq(iself).css('top', newPos);
			}
			
			/* Go for Parallax - End */
			
		});
	/* Scrolling command - End */
	
	/* In case window is resize - Start */
	$(window).resize(function(){
		
		/* Set total width - Start */
		totalwidth = $(window).width();
		$('#viewport').css('width', totalwidth+'px');
		$('#wrapper').css('width', parseInt(totalwidth*4)+'px');
		/* Set total width - End */
		
		/* Set total height - Start */
		oldheight = totalheight;
		totalheight = $(window).height();
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
		
		/* Set position for active parallax - Start */
		$('#section-index .parallax').each(function(i){
			heightChange = totalheight-oldheight;
			if($(this).attr('data-position')==0){
				dataPos = $(this).css('top');
				dataPos = dataPos.split('px');
				dataPos = dataPos[0];
			}else{
				dataPos = $(this).attr('data-position');
			}
			pos = parseInt(dataPos)+parseInt(heightChange);
			$(this).attr('data-position', pos);
			$(this).css('top', pos+'px');
		});
		/* Set position for active parallax - End */
	});
	/* In case window is resize - End */
	
	/* .tab's Button Control - Start */
	$('.blog .tab').find('a').click(function(){
		var toClass = $(this).attr('class').split(' ');
		$(this).parents('.content').css('z-index',2);
		$('.'+toClass[0]).css('z-index',3);
	});
	/* .tab's Button Control - End */
	
	/* Top Navigation - Start */
	$('.topNav li a,').click(function(e){
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
	
	$('.bottomNav > a').click(function(e){
		e.preventDefault();
		var scrolltoid = '#section-news';
		var new_position = $(scrolltoid).offset().top;
		
		$('#viewport').animate({
			scrollTop:new_position
		}, 1000);
	});
	$('.btn-toIndex').click(function(e){
		e.preventDefault();
		var scrolltoid = '#section-index';
		var new_position = $(scrolltoid).offset().top;
		
		$('#viewport').animate({
			scrollTop:new_position
		}, 1000);
	});
	
	$('.bottomNav > .calendar').click(function(e){
		e.preventDefault();
		$('.tab .activity').trigger('click');
	});
	$('.bottomNav > .news').click(function(e){
		e.preventDefault();
		$('.tab .news').trigger('click');
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
		//var totalwidth = $(window).width();
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
		//var totalwidth = $(window).width();
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
	//var totalwidth = $(window).width();
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
	var pos = totalwidth*section[1];
	thepos = pos;
	
	var state = false;
	if(state==true){
		return true;
	}
	state = true;
	$('#page-wrapper').animate({
		"margin-left" : '-'+thepos+'px'
	},1000, function(){
		state = false;
	});
}