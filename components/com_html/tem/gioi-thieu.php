<?php
$code = 'gioi-thieu';
$res_gioithieu = SysGetList('tbl_html_block', array(), "AND alias='".$code."'");
?>
<section class="component">
	<div class="page container">
		<div class="page-history">
			<div class="page-content">
				<div class="wg-breadcrumb clearfix">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item home" aria-current="page"><a href="<?php echo ROOTHOST;?>"></a></li>
							<li class="breadcrumb-item active" aria-current="page">Giới thiệu</li>
						</ol>
					</nav>
				</div>

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