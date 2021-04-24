<?php
$code = 'gioi-thieu';
$res_gioithieu = SysGetList('tbl_html_block', array(), "AND alias='".$code."'");
?>
<section class="component">
	<section class="bread-crumb"> 
		<div class="container"> 
			<ul class="breadcrumb"> 
				<li class="home"><a href="<?php echo ROOTHOST;?>" title="Trang chủ"> <span>Trang chủ</span></a></li>
				<li><strong>Giới thiệu về chúng tôi</strong></li> 
			</ul> 
		</div> 
	</section>
	<div class="page container">
		<div class="page-history">
			<div class="page-content">
				<div class="main-content">
					<?php if(count($res_gioithieu) > 0){
						$row = $res_gioithieu[0];
						echo $row['fulltext'];
					} ?>
				</div>
			</div>
		</div>
	</div>
</section>