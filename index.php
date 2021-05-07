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

/* --------------------- Set SESSION CART --------------------- */
if(!isset($_SESSION['CART'])) $_SESSION['CART'] = array();
$__CART = isset($_SESSION['CART']) ? $_SESSION['CART'] : array();
$__COUNT_CART = isset($_SESSION['CART']) ? count($_SESSION['CART']) : 0;
global $__CART;
global $__COUNT_CART;
/* --------------------- /.SESSION CART --------------------- */
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
	<div id="notification" style="display:none;"></div>
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
	<?php include 'modules/mobile-main-menu.php';?>
	<div id="myModalPopup" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"></h4>
				</div>
				<div class="modal-body"></div>
			</div>
		</div>
	</div>
	<div class="loading"></div>
	<!-- Bootstrap 4 -->
	<script src="<?php echo ROOTHOST;?>global/js/jquery-1.11.2.min.js" crossorigin="anonymous"></script>
	<!-- <script src="<?php echo ROOTHOST;?>global/js/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script> -->
	<script src="<?php echo ROOTHOST;?>global/plugins/bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
	<!-- Custom js -->
	<script src="<?php echo ROOTHOST;?>global/js/custom.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			loadCart();
			/* Thêm sản phẩm vào giỏ hàng */
			$('.add_to_cart').click(function(){
				var _this=$(this);
				var product_id = $(this).attr('data-productid');
				var number_product=1;
				url = '<?php echo ROOTHOST;?>ajaxs/product/add_cart.php';
				$.ajax({
					type: "POST",
					url: url,
					data: {
						'product_id':product_id,
						'number_product':number_product
					},
					success: function(res){
						$('#count_item_pr').html(parseInt(res));
						$('#notification').fadeIn('slow').html("Thêm mới sản phẩm vào giỏ hàng thành công!");
						window.setTimeout(function(){
							$('#notification').fadeOut('slow');
						},1500);
						loadCart();
					}
				});
				return false;
			});

			$("#btn_order").click(function(){	
				if(validForm()==true) {
					var url = "<?php echo ROOTHOST;?>ajaxs/product/process_save_order.php";
					$.ajax({
						type: "POST",
						url: url,
						data: $("#frmcontact").serialize(),
						success: function(req){
							console.log(req);
							if(req=="error") showMess("Lỗi trong quá trình lưu dữ liệu!","error");
							else if(req==="success") {
								showMess("Đơn đặt hàng đã được đặt thành công, chúng tôi sẽ phải hồi lại bạn trong thời gian sớm nhất. Xin cảm ơn",""); 
								setTimeout(function(){ 
									window.location.reload(); 
								}, 3000);
							}
							else if(req==="empty") {
								showMess("Bạn chưa chọn sản phẩm nào","error");
							}
						}
					});
				} return false;
			})
		});

		function showLoading() {
			$(".loading").show();
		}
		function hideLoading() {
			$(".loading").hide();
		}

		function showMess(mess,type){
			var _title='';
			var _html="";
			switch(type){
				case 'error': 
				_title="<span>Lỗi</span>"; 
				_html="<p class='alert alert-danger'>"+mess+"</p>";
				break;
				case 'alert': 
				_title="<span>Cảnh báo</span>"; 
				_html="<p class='alert alert-warning'>"+mess+"</p>";
				break;
				default:  
				_title="<span>Thông báo</span>"; 
				_html="<p class='alert alert-info'>"+mess+"</p>";	
				break;
			}
			$('#myModalPopup .modal-dialog').removeClass('modal-sm');
			$('#myModalPopup .modal-dialog').removeClass('modal-lg');
			$('#myModalPopup .modal-dialog').addClass('modal-sm');
			$('#myModalPopup .modal-header .modal-title').html(_title);
			$('#myModalPopup .modal-body').html(_html);
			$('#myModalPopup').modal('show');
		}

		function loadCart(){
			var _url = '<?php echo ROOTHOST;?>ajaxs/product/loadCart.php';
			$.post(_url, {}, function(res){
				$('#cart_body').html(res);
			});
		}

		function truSP(pro_id){
			var result = document.getElementById("qtyItem"+pro_id); 
			var qtyItem = result.value; 
			if( !isNaN( qtyItem ) && qtyItem > 1 ){
				qtyItem--;
				result.value = qtyItem;
				/* Update SESSION CART */
				updateCart(pro_id, qtyItem);
			}
			return false;
		}

		function congSP(pro_id){
			var result = document.getElementById("qtyItem"+pro_id); 
			var qtyItem = result.value; 
			if( !isNaN( qtyItem)) {
				qtyItem++;
				result.value = qtyItem;
				/* Update SESSION CART */
				updateCart(pro_id, qtyItem);
			}
			return false;
		}

		function updateCart(pro_id, number){
			var pro_id = parseInt(pro_id);
			var number = parseInt(number);
			var _url = '<?php echo ROOTHOST;?>ajaxs/product/updateCart.php';
			$.post(_url, {'pro_id': pro_id, 'number': number}, function(res){
				let total_price = parseInt(res) > 0 ? res + ' ₫' : '0 ₫';
				$('#cart_body .cart-footer .total-price').html(total_price);
			});
		}

		function removeItemCart(e){
			if(confirm('Bạn có chắc muốn xóa sản phẩm này?')){
				var _pro_id = e.getAttribute('data-id');
				updateCart(_pro_id, 0);
				var list_product = document.getElementsByClassName("cart_product");
				for (var i = 0; i < list_product.length; i++) {
					let id = list_product.item(i).getAttribute('data-id');
					if(_pro_id == id) list_product.item(i).remove();
				}
			}
		}

		function validForm(){
			var flag = true;
			$('#frmcontact .required').each(function(){
				var val = $(this).val();
				if(!val || val=='' || val=='0') {
					$(this).parents('.form-group').addClass('error');
					flag = false;
				}

				if(flag==false) {
					$('#message').html('Những mục có đánh dấu * là những thông tin bắt buộc.');
				}
			});
			return flag;
		}

		function removeProduct(e){
			if(confirm('Bạn có chắc muốn xóa sản phẩm này?')){
				var _pro_id = e.getAttribute('data-id');
				var tr_parent = e.parentElement.parentElement;
				tr_parent.remove();
				updateCart(_pro_id, 0);
			}
		}
	</script>
</body>
</html>
