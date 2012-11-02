		<header>
			<h1><a href="http://www.honda.co.th" target="_blank">Honda</a></h1>
			<h2>The Power of Dreams</h2>
			<nav>
				<ul>
					<li><a href="http://www.hondacsrthailand.com/index.php#environment" target="_blank">Environment สิ่งแวดล้อม</a></li>
					<li><a href="http://www.hondacsrthailand.com/index.php#safety" target="_blank">Safety ความปลอดภัยบนถนน</a></li>
					<li><a href="http://www.hondacsrthailand.com/index.php#education" target="_blank">Education การศึกษา</a></li>
					<li><a href="http://www.hondacsrthailand.com/index.php#philanthropy" target="_blank" class="active">Philanthropy มนุษยธรรม</a></li>
				</ul>
			</nav>
			<?php
			if($this->uri->segment(1)=='content' and $this->uri->segment(2)=='view'){
				
			}else{
				?>
				<div class="headerText">
					<img src="img/bgHeaderText.png" alt="ติดตามรายการสถานการณ์ภัยธรรมชาติ ทั่วประเทศ ได้ที่นี่" />
				</div>
				
				<div id="cloud1">
					<img id="cloud1_img" src="img/cloud.png" alt="เมฆ1" />
				</div>
				<div id="cloud2">
					<img id="cloud2_img" src="img/cloud.png" alt="เมฆ2" />
				</div>
				<script type="text/javascript" src="js/cloud.js"></script>
				<!--
				<div class="hand">
					<img src="img/hand.png" alt="มือ" />
				</div>
				-->
				<?php
			}
			?>
		</header>