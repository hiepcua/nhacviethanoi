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

/* Handle Post data */
$__pro_id = isset($_POST['pro_id']) ? antiData($_POST['pro_id'], 'int') : '';
$__number = isset($_POST['number']) ? antiData($_POST['number'], 'int') : '';

$n = count($_SESSION['CART']);
$flag=false;
$total_price = 0;
if($n>0){
	/* Update quantity product */
	foreach ($_SESSION['CART'] as $key => $value) {
		if($value['product_id'] == $__pro_id){
			if($__number>0){
				$_SESSION['CART'][$key]['quan'] = $__number;
			}else{
				array_splice($_SESSION['CART'], $key, 1);
			}
		}
	}

	/* SUM price */
	if(count($_SESSION['CART'])>0){
		foreach ($_SESSION['CART'] as $key => $value) {
			if((int)$value['price'] > 0){
				$total_price += $value['quan'] * (int)$value['price'];
			}
		}
	}
}
echo number_format($total_price);
die();
?>