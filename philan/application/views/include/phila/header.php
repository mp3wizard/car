<!DOCTYPE HTML>
<html class="<?php echo ($this->uri->segment(2)=='')?'index':$this->uri->segment(2); ?>">
<head>
	<meta charset="utf-8">
	<title>PHILANTHROPY มนุษยธรรม</title>
	<base href="<?php echo base_url().'public/core/philan/'; ?>" />
	<link rel="stylesheet" href="css/bootstrap.css" media="all" />
	<link rel="stylesheet" href="css/bootstrap-responsive.css" media="all" />
	<link rel="stylesheet" href="css/style.css" media="all" />
	<link rel="stylesheet" href="css/style2.css" media="all" />
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<!--[if (gte IE 6)&(lte IE 8)]>
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6/html5shiv.min.js"></script>
	  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
	<![endif]-->
	<script type="text/javascript">
	$(document).ready(function(){
		var totaltwit = $('.twitter-wrapper p').length;
		var totalwidth = totaltwit*235;
		var state = false;
		$('.twitter-wrapper').css('width', totalwidth+'px');
		
		/* Nav click - Start */
		$('.twitNav.goRight').click(function(){
			if(state==true){
				return true;
			}
			state = true;
			var pos = $('.twitter-wrapper').css('margin-left');
			pos = pos.split('px');
			curpos = pos[0];
			if(curpos>-(parseInt(totalwidth)-235)){
				$('.twitter-wrapper').animate({
					'margin-left' : '-=235px'
				}, 1000, function(){
					state = false;
				});
			}else{
				state = false;
			}
		});
		
		$('.twitNav.goLeft').click(function(){
			if(state==true){
				return true;
			}
			state = true;
			var pos = $('.twitter-wrapper').css('margin-left');
			pos = pos.split('px');
			curpos = pos[0];
			if(curpos<0){
				$('.twitter-wrapper').animate({
					'margin-left' : '+=235px'
				}, 1000, function(){
					state = false;
				});
			}else{
				state = false;
			}
		});
		/* Nav click - End */
	});
	</script>
	
	<script type="text/javascript" src="js/plugins/CSSPlugin.min.js"></script>
	<script type="text/javascript" src="js/easing/EasePack.min.js"></script>
	<script type="text/javascript" src="js/TimelineLite.min.js"></script>
	<script type="text/javascript" src="js/TweenLite.min.js"></script>
	
	<!-- Google Analytics - Start -->
	<script type="text/javascript">
 
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-36032910-1']);
		_gaq.push(['_trackPageview']);
		
		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
		
	</script>
	<!-- Google Analytics - End -->
</head>
<body>
	<div id="container">