<?php
ob_start();
session_start();
ini_set('display_errors',1);
define('incl_path','global/libs/');
define('libs_path','libs/');
require_once(incl_path.'gfconfig.php');
require_once(incl_path.'gfinit.php');
require_once(incl_path.'gffunc.php');
require_once(libs_path.'cls.mysql.php');
require_once(libs_path.'cls.template.php');
define('ISHOME',true);
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$tmp = new CLS_TEMPLATE();
$res_configs = SysGetList('tbl_configsite', []);
$res_config = $res_configs[0];

$res_seos = SysGetList('tbl_seo', [], "AND `link`='".$actual_link."'");
if(count($res_seos)>0){
	$res_seo = $res_seos[0];
	$seo_url = $res_seo['link'];
	$seo_title = $res_seo['title'];
	$seo_key = $res_seo['meta_key'];
	$seo_desc = $res_seo['meta_desc'];
	$seo_image = $res_seo['image'];
}else{
	$seo_url = $actual_link;
	$seo_title = $res_config['title'];
	$seo_key = $res_config['meta_keyword'];
	$seo_desc = $res_config['meta_descript'];
	$seo_image = $res_config['image'];
}

global $tmp;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $seo_title;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:url"           content="<?php echo $seo_url;?>" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="<?php echo $seo_title;?>" />
	<meta property="og:description"   content="<?php echo $seo_desc;?>" />
	<meta property="og:image"         content="<?php echo $seo_image;?>" />

	<!-- CSS only -->
	<link rel="stylesheet" href="<?php echo ROOTHOST;?>global/plugins/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo ROOTHOST;?>global/plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="<?php echo ROOTHOST;?>global/plugins/icheck-bootstrap/icheck-bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo ROOTHOST;?>global/plugins/slick/slick.css"/>
	<link rel="stylesheet" href="<?php echo ROOTHOST;?>global/css/header.css">
	<link rel="stylesheet" href="<?php echo ROOTHOST;?>global/css/style.css">
</head>
<body id="body">
	<div class="wrapper">
		<!-- Header -->
		<?php include 'modules/header.php';?>
		<!-- /.Header -->

		<!-- Content Wrapper. Contains page content -->
		<div id="main-content">
			<div class="content-wrapper">
				<?php 
				$com=isset($_GET['com'])?$_GET['com']:'frontpage';
				if($com=='frontpage'){
					include_once('components/com_'.$com.'/layout.php');
				}else{
					echo '<div class="component-header"></div>';
					include_once('components/com_'.$com.'/layout.php');
				}
				?>
			</div>
		</div>
		<!-- /.content-wrapper -->

		<!-- Footer -->

		<?php 
		if($com=='frontpage'){
			echo '<div class="frontpage">';
			include 'modules/footer.php';
			include 'modules/cart_sidebar.php';
			echo '</div>';
		}else{
			include 'modules/footer.php';
			include 'modules/cart_sidebar.php';
		}
		?>
		<!-- /.Footer -->
	</div>
	<!-- Bootstrap 4 -->
	<script src="<?php echo ROOTHOST;?>global/js/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
	<script src="<?php echo ROOTHOST;?>global/plugins/bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
	<!-- Custom js -->
	<script src="<?php echo ROOTHOST;?>global/js/custom.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>
