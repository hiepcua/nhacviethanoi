<?php 
session_start();
define('incl_path','../../global/libs/');
define('libs_path','../../libs/');
require_once(incl_path.'gfconfig.php');
require_once(incl_path.'gfinit.php');
require_once(incl_path.'gffunc.php');
require_once(libs_path.'cls.mysql.php');

// lấy thông tin sản phẩm trong csdl
$product_id = isset($_POST['product_id']) ? antiData($_POST['product_id']) : "";
$number_product = isset($_POST['number_product']) ? antiData($_POST['number_product'], 'int') : 0;

$res_product = SysGetList('tbl_product', array(), "AND id='".$product_id."'");
if(count($res_product)>0){
	$row = $res_product[0];
	$name = stripslashes($row['name']);
	$pro_code = stripslashes($row['pro_code']);
	$thumb = $row['thumb']!='' ? stripslashes($row['thumb']) : IMAGE_DEFAULT;
	$price = $row['price'];

	// luu vao gio hang
	$item = array('product_id'=>$product_id,'pro_code'=>$pro_code,'name'=>$name,'thumb'=>$thumb,'quan'=>$number_product,'price'=>$price);

	if(!isset($_SESSION['CART'])) $_SESSION['CART'] = array();

	// kiem tra xem gio hang da co san pham vua them
	$n = count($_SESSION['CART']);

	$flag=false;
	$total_price = 0;
	if($n>0){
		for($i=0;$i<$n;$i++){
			if($_SESSION['CART'][$i]['product_id']==$product_id){
				$_SESSION['CART'][$i]['quan']+=$number_product;
				$flag=true; break;
			}
		}
	}

	// them moi
	if($flag==false) $_SESSION['CART'][$n]=$item;

	echo count($_SESSION['CART']);
	die();
}
?>

