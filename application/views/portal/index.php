	<!--<div style="width:200px; height:20px; position:absolute; top:20px; right:50px; z-index:400;">Scroll position : <span class="amount">0</span></div>-->
	<!-- Navigation - Start -->
	<a href="javascript:void(0);" class="page goLeft noinnertext">Left</a>
	<a href="javascript:void(0);" class="page goRight noinnertext">Right</a>
	<!-- Navigation - End -->

<div id="viewport">
		
	<div id="wrapper">
		<div id="page-wrapper">
			<?php echo $this->load->view('portal/innerpage/environment'); ?>
			<?php echo $this->load->view('portal/innerpage/safety'); ?>
			<?php echo $this->load->view('portal/innerpage/education'); ?>
			<?php echo $this->load->view('portal/innerpage/philanthropy'); ?>
		</div>
		
	</div>
	
	<script style="text/javascript">
		/*$(function(){
			if($.browser.webkit==true || $.browser.safari==true){
				$('.curtains').curtain({
					scrollSpeed: 1000,
					controls: '.bottomNav',
					curtainLinks: '.curtain-links'
				});
			}
		});*/
	</script>
</div>