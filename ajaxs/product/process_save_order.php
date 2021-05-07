<?php 
session_start();
define('incl_path','../../global/libs/');
define('libs_path','../../libs/');
require_once(incl_path.'gfconfig.php');
require_once(incl_path.'gfinit.php');
require_once(incl_path.'gffunc.php');
require_once(libs_path.'cls.mysql.php');
$obj_mysql = new CLS_MYSQL;

$countCart = count($_SESSION['CART']) ? isset($_SESSION['CART']) : 0;
$Fullname = $_POST['contact_full_name'] ? antiData($_POST['contact_full_name']) : '';
if($Fullname!=='' && $countCart > 0){
	$total =0;
	for ($i=0; $i <count($_SESSION['CART']) ; $i++) {
		if((int)$_SESSION['CART'][$i]['price'] > 0){
			$total += $_SESSION['CART'][$i]['quan']*$_SESSION['CART'][$i]['price'];
		}
	}
	$Phone 			= antiData($_POST['contact_phone']);
	$Email 			= antiData($_POST['contact_email']);
	$AddressDelivery = antiData($_POST['contact_address']);
	$Cdate 			= date("Y-m-d H:i:s");
	$TotalMoney 	= (int)$total;

	$sql="INSERT INTO `tbl_order`(`cdate`,`fullname`,`phone`,`email`,`address_delivery`,`totalmoney`) VALUES ('".$Cdate."','".$Fullname."','".$Phone."','".$Email."','".$AddressDelivery."','".$TotalMoney."')";

	$obj_mysql->Exec('BEGIN');
	$result = $obj_mysql->Exec($sql);
	$order_id = $obj_mysql->LastInsertID();

	$sql="INSERT INTO `tbl_order_detail`(`order_id`,`product_id`,`quantity`,`price`) VALUES ";
	$n=count($_SESSION['CART']);

	for($i=0;$i<$n;$i++){
		$sql.=" ('".$order_id."','".$_SESSION['CART'][$i]['product_id']."','".$_SESSION['CART'][$i]['quan']."','".$_SESSION['CART'][$i]['price']."') ";
		if($i<$n-1) $sql.=" , ";
	}
	$result1 = $obj_mysql->Exec($sql);

	if($result && $result1 ){
		$obj_mysql->Exec('COMMIT');
		unset($_SESSION['CART']);
		die('success');
	}else {
		$obj_mysql->Exec('ROLLBACK');
		die('error');
	}
}else{
	die('empty');
}
?>

