		<div id="content">
			<h2><img src="img/logo_hand.png" alt="" /></h2>
			<nav>
				<ul>
					<li><a href="javascript:void(0);" class="active">หน้าหลัก</a></li>
					<li><a href="javascript:void(0);">เกี่ยวกับเรา</a></li>
					<li><a href="javascript:void(0);">ภาพกิจกรรม</a></li>
					<li><a href="javascript:void(0);">หน่วยงานที่เกี่ยวข้อง</a></li>
					<li><a href="javascript:void(0);">สาระน่ารู้</a></li>
					<li><a href="javascript:void(0);">ติดต่อเรา</a></li>
				</ul>
			</nav>
			<article>
				<section id="alert">
					<h3>เตือนภัยฉุกเฉิน</h3>
					ระวังไฟป่าลุกลามบริเวณใกล้เคียงป่าพรุทะเลน้อย พัทลุง...
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
						<img src="img/thumbSquare.jpg" alt="" />
						<em><span>12</span> ตุลาคม 55</em>
						<strong>พายุชายฝั่งตะวันออก รุนแรงระดับ 2 เรือเล็กงดออกจากฝั่ง</strong>
						<p>ระหว่าง 2-3 วันนี้ ชาวประมง ควรงดเดินเรือ เนื่องจากผลของพายุเกมีกำรังแรง...</p>
					</div>
				</section> <!-- #two -->
				<section id="news" class="clearfix">
					<div>
						<a href="http://www.redcross.or.th/news/information/15853" target="_blank"><img src="img/thumbNews1.jpg" alt="ฮอนด้า มอบแก๊สกระป๋องและเสื้อชูชีพช่วยผู้ประสบภัย" />
						<h4>ฮอนด้า มอบแก๊สกระป๋อง<br>และเสื้อชูชีพช่วยผู้ประสบภัย</h4>
						<p>คุณอรุณศรี ทองวีระประเสริฐ ผู้จัดการทั่วไป สายงานการบัญชีและการเงิน บริษัท เอเชียนฮอนด้า มอเตอร์ จำกัด และ...</p></a>
					</div>
					<div>
						<a href="https://www.facebook.com/photo.php?fbid=215775551827269&set=a.129790923759066.26663.129758590428966&type=1&theater" target="_blank"> <img src="img/thumbNews2.jpg" alt="ร่วมสร้างสรรค์สังคมไทย" />
						<h4>ทอดกฐินสามัคคี <br>ช่วยเหลือผู้ป่วยโรคเอดส์</h4>
						<p>เมื่อวันที่ 6 พ.ย.2554 – มูลนิธิฮอนด้าประเทศไทย นำโดยคุณประกิจ ชุณหชา กรรมการบริหาร บริษัท ไทยฮอนด้า แมนูแฟคเจอริ่ง จำกัด พร้อมด้วย...</p></a>
					</div>
					<a href="javascript:void(0);" class="btnReadmore"><img src="img/btnReadmore.png" alt="" /></a>
				</section> <!-- #news -->
			</article>
		</div> <!-- #content -->