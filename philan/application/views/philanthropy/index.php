		<div id="content">
			<h2><img src="img/logo_hand.png" alt="" /></h2>
			<nav>
				<ul>
					<?php echo $this->load->view('include/phila/menu'); ?>
				</ul>
			</nav>
			<article>
				<section id="alert">
					<h3>เตือนภัยฉุกเฉิน</h3>
					ขณะนี้ไม่มีเตือนภัยฉุกเฉิน
				</section>
				<section id="two" class="clearfix">
					<div id="indicator" class="green">
						สถานการณ์ปรกติ
					</div>
					<div id="twitter">
						<h3>ศูนย์เตือนภัยพิบัติฯ</h3>
						<div class="twitter-viewport">
							<div class="twitter-wrapper">
								<?php
								if($tweets){
									foreach($tweets as $tweet){
										?>
										<p>
											<strong><img src="img/iconCommandCenter.png" alt="" /> <?php echo $tweet['from']; ?></strong>
											<?php echo $tweet['text']; ?>
											<em><?php echo $tweet['created']; ?></em>
										</p>
										
										<!--<em><span>12</span> ตุลาคม</em>-->
										<?php
									}
								}
								?>
							</div>
						</div>
						<a href="javascript:void(0);" class="twitNav goLeft"><img src="img/btnPrev_black.png" alt="" /></a>
						<a href="javascript:void(0);" class="twitNav goRight"><img src="img/btnNext_black.png" alt="" /></a>
					</div>
					<div id="rawangpai">
						<a href="http://www.ndwc.go.th/web/index.php?option=com_content&view=article&id=3889:2012-10-30-02-17-22&catid=93:2011-08-04-03-09-51&Itemid=275" target="_blank"><img src="img/thumbSquare.jpg" alt="" />
						<em><span>30</span> ตุลาคม 55</em>
						<strong>ไทยตอนบนมีฝนอากาศเย็น</strong>
						<p> พยากรณ์อากาศสำหรับประเทศไทย วันนี้ 30 ต.ค.บริเวณความกดอากาศสูงกำลังค่อนข้างแรงจากประเทศจีนจะแผ่ลงมาปกคลุมประเทศไทยตอนบนในช่วงวันที่ 30 ต.ค.-1 พ.ย. ...</p></a>
					</div>
				</section> <!-- #two -->
				<section id="news" class="clearfix">
					<div>
						<a href="<?php echo site_url('content/view'); ?>" target="_blank"> <img src="img/thumbNews2.jpg" alt="กองทุนฮอนด้าเคียงข้างไทย ผนึกกำลังเขับเคลื่อนภารกิจ" />
						<h4>กองทุนฮอนด้าเคียงข้างไทย<br>ผนึกกำลังเขับเคลื่อนภารกิจ</h4>
						<p>กรุงเทพฯ วันที่ 26 ตุลาคม 2555 – กองทุนฮอนด้าเคียงข้างไทย โดยกลุ่มบริษัทฮอนด้าในประเทศไทย ประกาศความร่วมมือกับ...</p></a>
					</div>
					<div>
						<a href="http://www.youtube.com/watch?v=y8dBjxFG0zM&feature=plcp" target="_blank"><img src="img/thumbNews1.jpg" alt="VDO - กองทุนฮอนด้าเคียงข้างไทย" />
						<h4>VDO - กองทุนฮอนด้าเคียงข้างไทย</h4>
						<p>กองทุนฮอนด้าเคียงข้างไทย โดยกลุ่มบริษัทฮอนด้าในประเทศไทย ประกาศความร่วมมือกับกรมป้องกันและบรรเทาสาธารณภัย กระทรวงมหาดไทย สถาบันการแพทย์ฉุกเฉินแห่งชาติ ...</p></a>
					</div>
					<!--<a href="javascript:void(0);" class="btnReadmore"><img src="img/btnReadmore.png" alt="" /></a>-->
				</section> <!-- #news -->
			</article>
		</div> <!-- #content -->