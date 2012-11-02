		<div id="content">
			<h2><img src="img/logo_hand.png" alt="" /></h2>
			<nav>
				<ul>
					<?php echo $this->load->view('include/phila/menu'); ?>
				</ul>
			</nav>
			<article>
				<form id="contact" name="contact" method="post" enctype="multipart/form-data" action="<?php echo site_url('portal/contact'); ?>">
					<table>
						<tbody>
							<tr>
								<td>ชื่อ</td>
								<td><input type="text" name="contact_name" id="contact_name" value="<?php echo set_value('contact_name'); ?>" /> <div class="message error"><?php echo form_error('contact_name'); ?></div></td>
							</tr>
							<tr>
								<td>เรื่อง</td>
								<td><input type="text" name="contact_title" id="contact_title" value="<?php echo set_value('contact_title'); ?>" /> <div class="message"><?php echo form_error('contact_title'); ?></div></td>
							</tr>
							<tr>
								<td>ข้อความ</td>
								<td><textarea name="contact_message" id="contact_message" cols="30" rows="10"><?php echo set_value('contact_message'); ?></textarea> <div class="message"><?php echo form_error('contact_message'); ?></div></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>
									<input type="reset" value="ยกเลิก" id="btnReset" />
									<input type="submit" value="ส่ง" id="btnSubmit" />
								</td>
							</tr>
						</tbody>
					</table>
				</form>
			</article>
		</div> <!-- #content -->