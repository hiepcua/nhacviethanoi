<?php 
session_start();
define('incl_path','../../global/libs/');
define('libs_path','../../libs/');
require_once(incl_path.'gfconfig.php');
require_once(incl_path.'gfinit.php');
require_once(incl_path.'gffunc.php');
require_once(libs_path.'cls.mysql.php');

$__CART = isset($_SESSION['CART']) ? $_SESSION['CART'] : array();
$__COUNT_CART = isset($_SESSION['CART']) ? count($_SESSION['CART']) : 0;
?>
<div class="cart_body">
	<!-- Nếu chưa có sản phẩm -->
	<?php
	if($__COUNT_CART <= 0){
		echo '<div class="cart-empty">
		<span class="empty-icon">
		<i class="ico ico-cart"></i>
		</span>
		<div class="btn-cart-empty">
		<a class="btn btn-default" href="'.ROOTHOST.'san-pham" title="Tiếp tục mua hàng">Tiếp tục mua hàng</a>
		</div>
		</div>';
	}else{
		foreach ($__CART as $key => $value) {
			$pro_id = $value['product_id'];
			$pro_name = $value['name'];
			$pro_thumb = $value['thumb'];
			$pro_quan = $value['quan'];
			$pro_price = $value['price']!='' ? number_format($value['price']).' ₫' : 'Liên hệ';
			$pro_link = ROOTHOST.'san-pham/';

			echo '<div class="clearfix cart_product" data-id="'.$pro_id.'">
			<a class="cart_image" href="'.$pro_link.'" title="'.$pro_name.'">
			<img src="'.$pro_thumb.'" alt="'.$pro_name.'">
			</a>
			<div class="cart_info">
			<div class="cart_name">
			<a href="'.$pro_link.'" title="'.$pro_name.'">'.$pro_name.'</a>
			</div>
			<div class="row-cart-left">
			<div class="cart_item_name">
			<label class="cart_size variant-title-popup d-none" style="display: none;">Default Title</label><div><label class="cart_quantity">Số lượng</label>
			<div class="cart_select">
			<div class="input-group-btn">
			<input class="variantID" type="hidden" name="variantId" value="'.$pro_id.'">
			<button onclick="truSP('.$pro_id.')" class="reduced items-count btn-minus btn btn-default" type="button">–</button>
			<input type="text" maxlength="3" min="0" class="input-text number-sidebar qtyItem'.$pro_id.'" id="qtyItem'.$pro_id.'" name="Lines" size="4" value="'.$pro_quan.'">
			<button onclick="congSP('.$pro_id.')" class="increase items-count btn-plus btn btn-default" type="button">+</button>
			</div>
			</div>
			</div>
			</div>
			<div class="text-right cart_prices">
			<div class="cart__price">
			<span class="cart__sale-price">'.$pro_price.'</span>
			</div>
			<a class="cart__btn-remove remove-item-cart" onclick="removeItemCart(this)" href="javascript:void(0)" data-id="'.$pro_id.'" title="Bỏ sản phẩm">Bỏ sản phẩm</a>
			</div>
			</div>
			</div>
			</div>';
		}
	}
	?>
</div>

<!-- Nếu có sản phẩm -->
<?php
if($__COUNT_CART > 0){
	$total_price = 0;
	foreach ($__CART as $key => $value) {
		if((int)$value['price'] > 0){
			$total_price += (int)$value['price'] * (int)$value['quan'];
		}
	}
	$total_price = $total_price > 0 ? number_format($total_price).' ₫' : 'Liên hệ';
	?>
	<div class="cart-footer"> 
		<hr> 
		<div class="clearfix"> 
			<div class="cart__subtotal"> 
				<div class="cart__col-6">Tổng tiền:</div> 
				<div class="text-right cart__totle">
					<span class="total-price"><?php echo $total_price;?></span>
				</div> 
			</div> 
		</div> 
		<div class="cart__btn-proceed-checkout-dt">
			<a href="<?php echo ROOTHOST;?>checkout" class="button btn btn-default cart__btn-proceed-checkout" id="btn-proceed-checkout" title="Thanh toán">Thanh toán</a>
		</div> 
	</div>
	<!-- Nếu chưa có sản phẩm -->
<?php } ?>

