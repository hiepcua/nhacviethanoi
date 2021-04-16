<section class="sec-2 bg-white">
	<div class="container">
		<div class="breadcrumb-footer clearfix">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item" aria-current="page">Xem thêm thông tin ></li>
					<li class="breadcrumb-item" aria-current="page">Nhà khoa học</li>
					<li class="breadcrumb-item" aria-current="page">Hoạt động khoa học</li>
					<li class="breadcrumb-item" aria-current="page">Hoạt động đào tạo</li>
				</ol>
			</nav>
		</div>

		<div class="row custome_row">
			<div class="col-md-4 wr-category-item custome_col">
				<div class="category-item">
					<div class="wrap-thumb" data-src="<?php echo ROOTHOST;?>medias/images/images-01.jpg">
						<a href="" title=""><img src="<?php echo ROOTHOS;?>global/img/no-photo.jpg"></a>
					</div>
					<div class="title medium24pt"><a href="" title="">Nhóm nghiên cứu</a></div>
				</div>
			</div>
			<div class="col-md-4 wr-category-item custome_col">
				<div class="category-item">
					<div class="wrap-thumb" data-src="<?php echo ROOTHOST;?>medias/images/images-02.jpg">
						<a href="" title=""><img src="<?php echo ROOTHOS;?>global/img/no-photo.jpg"></a>
					</div>
					<div class="title medium24pt"><a href="" title="">Đào tạo, bồi dưỡng</a></div>
				</div>
			</div>
			<div class="col-md-4 wr-category-item custome_col">
				<div class="category-item">
					<div class="wrap-thumb" data-src="<?php echo ROOTHOST;?>medias/images/images-03.jpg">
						<a href="" title=""><img src="<?php echo ROOTHOS;?>global/img/no-photo.jpg"></a>
					</div>
					<div class="title medium24pt"><a href="" title="">Bản tin, báo cáo</a></div>
				</div>
			</div>
			<div class="col-md-4 wr-category-item custome_col">
				<div class="category-item">
					<div class="wrap-thumb" data-src="<?php echo ROOTHOST;?>medias/images/images-04.jpg">
						<a href="" title=""><img src="<?php echo ROOTHOS;?>global/img/no-photo.jpg"></a>
					</div>
					<div class="title medium24pt"><a href="" title="">Thư viện, tủ sách VIASM</a></div>
				</div>
			</div>
			<div class="col-md-4 wr-category-item custome_col">
				<div class="category-item">
					<div class="wrap-thumb" data-src="<?php echo ROOTHOST;?>medias/images/images-05.jpg">
						<a href="" title=""><img src="<?php echo ROOTHOS;?>global/img/no-photo.jpg"></a>
					</div>
					<div class="title medium24pt"><a href="" title="">PTN khoa học dữ liệu</a></div>
				</div>
			</div>
			<div class="col-md-4 wr-category-item custome_col">
				<div class="category-item">
					<div class="wrap-thumb" data-src="<?php echo ROOTHOST;?>medias/images/images-06.jpg">
						<a href="" title=""><img src="<?php echo ROOTHOS;?>global/img/no-photo.jpg"></a>
					</div>
					<div class="title medium24pt"><a href="" title="">Chương trình toán</a></div>
				</div>
			</div>
			<div class="col-md-4 wr-category-item custome_col">
				<div class="category-item">
					<div class="wrap-thumb" data-src="<?php echo ROOTHOST;?>medias/images/images-07.jpg">
						<a href="" title=""><img src="<?php echo ROOTHOS;?>global/img/no-photo.jpg"></a>
					</div>
					<div class="title medium24pt"><a href="" title="">Hệ tri thức số toán học</a></div>
				</div>
			</div>
			<div class="col-md-4 wr-category-item custome_col">
				<div class="category-item">
					<div class="wrap-thumb" data-src="<?php echo ROOTHOST;?>medias/images/images-08.jpg">
						<a href="" title=""><img src="<?php echo ROOTHOS;?>global/img/no-photo.jpg"></a>
					</div>
					<div class="title medium24pt"><a href="" title="">CSDL toán học Việt Nam</a></div>
				</div>
			</div>
			<div class="col-md-4 wr-category-item custome_col">
				<div class="category-item">
					<div class="wrap-thumb" data-src="<?php echo ROOTHOST;?>medias/images/images-09.jpg">
						<a href="" title=""><img src="<?php echo ROOTHOS;?>global/img/no-photo.jpg"></a>
					</div>
					<div class="title medium24pt"><a href="" title="">Thư viện hình ảnh</a></div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
$res_configs = SysGetList('tbl_configsite', []);
$res_config = $res_configs[0];
?>
<footer class="footer">
	<div class="bg-footer"></div>
	<div class="container main-footer clearfix">
		<div class="wg-brand-footer">
			<a href="" class="logo-brand-footer"><img src="<?php echo ROOTHOST;?>images/logo-footer.png"></a>
		</div>

		<div class="frame-content">
			<div class="wg-foote-contact">
				<div class="list-contact">
					<ul class="list-unstyle">
						<li><i class="fa fa-home" aria-hidden="true"></i> 157 phố Chùa Láng, Hà Nội</li>
						<li><i class="fa fa-phone" aria-hidden="true"></i> (024) 3623 1542</li>
						<li><i class="fa fa-fax" aria-hidden="true"></i> (024) 3623 1543</li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i> info@viasm.edu.vn</li>
					</ul>
				</div>
			</div>
			<div class="wg-footer-menu">
				<?php
				$res_menufooter = SysGetList('tbl_mnuitems', [], "AND menu_id=2 AND par_id=0 AND isactive=1 ORDER BY `order` ASC");
				if(count($res_menufooter)>0){
					$str_menufooter='';
					foreach ($res_menufooter as $key => $value) {
						$str_menufooter.='<div class="wr-footer-item">
						<div class="footer-item">
						<div class="item-head medium24pt">'.$value['name'].'</div>
						<div class="item-body">';
						$res_childs = SysGetList('tbl_mnuitems', [], "AND menu_id=2 AND par_id=".$value['id']." AND isactive=1 ORDER BY `order` ASC");
						if(count($res_childs)>0){
							foreach ($res_childs as $k => $v) {
								$str_menufooter.='<a href="'.$v['link'].'" title="'.$v['name'].'">'.$v['name'].'</a>';
							}
						}
						$str_menufooter.='</div>
						</div>
						</div>';
					}
					echo $str_menufooter;
				}
				?>
			</div>
		</div>

		<form id="frm-register" method="post" action="">
			<div class="register-body">
				<div class="col-left">
					<h3 class="register-title semiBold16pt">Đăng ký để nhận thông tin từ VIASM</h3>
					<div class="form-check">
						<div class="icheck-danger">
							<input type="checkbox" value="1" id="check1" checked/>
							<label for="check1" class="light14pt">Tin tức hoạt động khoa học</label>
						</div>
					</div>
					<div class="form-check">
						<div class="icheck-danger">
							<input type="checkbox" value="2" id="check2" checked />
							<label for="check2" class="light14pt">Bản tin và báo cáo thường niên</label>
						</div>
					</div>
				</div>
				<div class="col-right">
					<input type="text" name="hoten" class="ip-df" placeholder="Họ tên">
					<input type="text" name="hoten" class="ip-df" placeholder="Đơn vị công tác">
					<input type="text" name="email" class="ip-df" placeholder="Email">
				</div>
				<div class="wr-tool"><button type="button" class="btn btn-register semiBold14pt">Gửi</button></div>
			</div>
		</form>
		<div id="back-top" style="display: block;">
			<a href="javascript:void(0)"></a>
		</div>
	</div>
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-8">
					<div class="text-left"><span class="span1">Độc quyền © 2020 thuộc về </span><span class="span2">Viện Nghiên cứu cao cấp về Toán.</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>