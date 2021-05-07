<?php
$user=getInfo('username');
$isAdmin=getInfo('isadmin');
// Init variables
?>
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Bảng điều khiển </h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<?php 
		$numberProduct=SysCount('tbl_product',"AND isactive=1");
		$numberContent=SysCount('tbl_content',"");
		$numberOrder=SysCount('tbl_order',"");
		?>
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-warning">
					<div class="inner">
						<h3><?php echo number_format($numberOrder);?></h3>
						<p>Đơn đặt hàng</p>
					</div>
					<div class="icon">
						<i class="ion ion-person-add"></i>
					</div>
					<a href="<?php echo ROOTHOST;?>order" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>

			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-success">
					<div class="inner">
						<h3><?php echo number_format($numberProduct);?></h3>
						<p>Sản phẩm</p>
					</div>
					<div class="icon">
						<i class="ion ion-stats-bars"></i>
					</div>
					<a href="<?php echo ROOTHOST;?>product" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>

			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-info">
					<div class="inner">
						<h3><?php echo number_format($numberContent);?></h3>
						<p>Tin tức</p>
					</div>
					<div class="icon">
						<i class="ion ion-stats-bars"></i>
					</div>
					<a href="<?php echo ROOTHOST;?>content" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->