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
	
	<script>
	    $(function(){
	       $('.curtains').curtain({
	           scrollSpeed: 1000,
	           controls: '.bottomNav',
	           curtainLinks: '.curtain-links'
	       });
	    });
	</script>
</div>