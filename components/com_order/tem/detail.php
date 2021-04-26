<?php
// 
?>
<section class="component">
	<section class="bread-crumb"> 
		<div class="container"> 
			<ul class="breadcrumb"> 
				<li class="home"><a href="<?php echo ROOTHOST;?>" title="Trang chủ"> <span>Trang chủ</span></a></li>
				<li><strong>Checkout</strong></li> 
			</ul> 
		</div> 
	</section>
	<div class="page page-order-detail container">
		<div class="main_container collection margin-bottom-5">
			<div class="page-header">
				<h1 class="page-title">THÔNG TIN ĐẶT HÀNG</h1>
			</div>
			<div class="page-content">
				<form class="frm-contact" id="frmcontact" method="POST">
					<div id="message"></div>
					<div class="row">
						<div class="col-md-7 col-sm-7">
							<div class="form-group">
								<div class="row">
									<div class="col-md-12 m-mar15">
										<input type="text" placeholder="Họ và tên*" required="" class="form-control" name="contact_sur_name">
									</div>

								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6 in-email" style="margin-bottom:15px;">
										<input type="text" placeholder="Số điện thoại" required="" class="form-control" name="contact_phone" id="contact_phone">
									</div>
									<div class="col-md-6 in-email">
										<input type="email" placeholder="E-mail" required="" class="form-control" name="contact_email" id="contact_email">
									</div>
								</div>
							</div>

							<div class="form-group box-area">
								<textarea placeholder="Ghi chú" required="" class="form-control" style="min-height: 120px" name="contact_content"></textarea>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6 col-sm-7 col-xs-6">
										<input type="text" placeholder="Nhập mã bảo mật" name="contact_txt_sercurity" id="contact_txt_sercurity" class="form-control" required="">
									</div>
									<div class="col-md-6 col-sm-5 col-xs-6">
										<img src="<?php echo ROOTHOST;?>extensions/captcha/CaptchaSecurityImages.php?width=110&amp;height=40" align="left" alt="">
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="box-btn text-center">
								<input type="submit" value="Đặt hàng" id="btn_order" class="btn btn-order">
							</div>
						</div>
						<aside class="col-md-5 col-sm-5">
							<div class="contact-content">
								<h3>THÔNG TIN LIÊN HỆ</h3>
								<div class="info">
									<p><span class="txtbold txtlabel">Văn phòng:</span><?php echo $res_config['address'];?></p>
									<p><span class="txtbold txtlabel">Điện thoại:</span><?php echo $res_config['phone'];?></p>
									<p><span class="txtbold txtlabel">Hotline:</span> <a href="tel:<?php echo $res_config['tel'];?>"><?php echo $res_config['tel'];?></a>  </p>
									<p><span class="txtbold txtlabel">Email:</span><?php echo $res_config['email'];?></p>
									<p><span class="txtbold txtlabel">Facebook Fanpage:</span><a href="<?php echo $res_config['facebook'];?>" target="_blank"> <?php echo $res_config['facebook'];?></a></p>
									<p><span class="txtbold txtlabel">Zalo :</span><a href="<?php echo $res_config['gplus'];?>"> <?php echo $res_config['gplus'];?></a></p>
								</div>
							</div>
						</aside>
					</div>
				</form>
			</div>
		</div>

		<section class="widget list-order-products">
			<h3 class="cred">Danh sách sản phẩm đã chọn</h3>
			<div class="is-divider small"></div>
			<div class='table-responsive'>
				<table class="table table-bordered">
					<thead>
						<th width="30">STT</th>
						<th width="50">Xóa</th>
						<th width="120">Ảnh</th>
						<th>Tên sản phẩm</th>
						<th>Mã sản phẩm</th>
						<th width="120">Giá</th>
					</thead>
					<tbody>
						<tr>
							<input type="hidden" name="product[]" value="1">
							<td align="center">1</td>
							<td align="center"><a href="javascript:void(0)" onclick="removeProduct(this)" data-id="30"><i class="fa fa-trash cred" aria-hidden="true"></i></a></td>
							<td>
								<div class="wrap-thumb" data-src="">
									<img src="<?php echo IMAGE_DEFAULT;?>" alt="">
								</div>
							</td>
							<td><strong>Presonus Itwo</strong></td>
							<td><strong>Presonus-Itwo</strong></td>
							<td><strong class="cred">3,600,000₫</strong></td>
						</tr>
						<tr>
							<input type="hidden" name="product[]" value="1">
							<td align="center">1</td>
							<td align="center"><a href="javascript:void(0)" onclick="removeProduct(this)" data-id="30"><i class="fa fa-trash cred" aria-hidden="true"></i></a></td>
							<td>
								<div class="wrap-thumb" data-src="">
									<img src="<?php echo IMAGE_DEFAULT;?>" alt="">
								</div>
							</td>
							<td><strong>Presonus Itwo</strong></td>
							<td><strong>Presonus-Itwo</strong></td>
							<td><strong class="cred">3,600,000₫</strong></td>
						</tr>
						<tr>
							<input type="hidden" name="product[]" value="1">
							<td align="center">1</td>
							<td align="center"><a href="javascript:void(0)" onclick="removeProduct(this)" data-id="30"><i class="fa fa-trash cred" aria-hidden="true"></i></a></td>
							<td>
								<div class="wrap-thumb" data-src="">
									<img src="<?php echo IMAGE_DEFAULT;?>" alt="">
								</div>
							</td>
							<td><strong>Presonus Itwo</strong></td>
							<td><strong>Presonus-Itwo</strong></td>
							<td><strong class="cred">3,600,000₫</strong></td>
						</tr>
						<!-- <tr>
							<td colspan="6" align="center">Chưa có sản phẩm nào</td>
						</tr> -->
					</tbody>
				</table>
			</div>
		</section>
	</div>
</section>

<script type="text/javascript">
	function removeProduct(e){
		var tr_parent = e.parentElement.parentElement;
		tr_parent.remove();
	}
</script>