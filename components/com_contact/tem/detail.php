<?php

?>
<section class="component">
	<section class="bread-crumb"> 
		<div class="container"> 
			<ul class="breadcrumb"> 
				<li class="home"><a href="/" title="Trang chủ"> <span>Trang chủ</span></a></li> 
				<li><strong>Liên hệ</strong></li> 
			</ul> 
		</div> 
	</section>
	<div class="container contact page-contacts">
		<div class="main-content">
			<h1 class="d-none">Liên hệ</h1>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<p class="p-bottom">Để được tư vấn / giải đáp thắc mắc / hợp tác kinh doanh, các bạn có thể chọn một trong những thông tin bên dưới để liên hệ với THIÊN THANH nhé.</p>
					<div class="contact-box"> 
						<p><strong>Địa chỉ: </strong><?php echo $res_config['address'];?></p> 
						<p><strong>Điện thoại: </strong><a href="tel:<?php echo $res_config['phone'];?>" title="<?php echo $res_config['phone'];?>"><?php echo $res_config['phone'];?></a></p> 
						<p><strong>Email: </strong><a href="mailto:<?php echo $res_config['email'];?>" title="<?php echo $res_config['email'];?>"><?php echo $res_config['email'];?></a></p> 
					</div>
				</div>
				<div class="col-lg-8 col-md-6 col-sm-12">
					<div class="leave-your-message">
						<form id="contact" method="post" action="">
							<fieldset class="form-group">
								<label>Họ và tên<span class="cred">*</span></label>
								<input placeholder="Nhập họ và tên" type="text" name="name" class="form-control required" required>
							</fieldset>
							<fieldset class="form-group">
								<label>Email<span class="cred">*</span></label>
								<input placeholder="Nhập địa chỉ Email" type="email" name="email" class="form-control required" required>
							</fieldset>
							<fieldset class="form-group">
								<label>Điện thoại<span class="cred">*</span></label>
								<input placeholder="Nhập số điện thoại" type="text" name="phone" class="form-control required" required>
							</fieldset>
							<fieldset class="form-group">
								<label>Nội dung<span class="cred">*</span></label>
								<textarea placeholder="Nội dung liên hệ" name="content" class="form-control required" rows="5" required></textarea>
							</fieldset>
							<fieldset class="form-group"> <button type="submit" class="btn btn-blues btn-style btn-style-active">Gửi tin nhắn</button> </fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>