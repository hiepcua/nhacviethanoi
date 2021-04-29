<?php
session_start();
define('incl_path','../../global/libs/');
define('libs_path','../../libs/');
require_once(incl_path.'gfconfig.php');
require_once(incl_path.'gfinit.php');
require_once(incl_path.'gffunc.php');
require_once(incl_path.'gffunc_user.php');
require_once(libs_path.'cls.mysql.php');

$id_pgroup = isset($_POST['id_pgroup'])? antiData($_POST['id_pgroup'], 'int') : '';
if(count($$id_pgroup)!==''){
	$res = SysGetList('tbl_product_type', array(), "AND id_pgroup=".$id_pgroup);
	if(count($res)>0){
		foreach ($res as $key => $value) {
			echo '<option value="'.$value['id'].'">'.$value['title'].'</option>';
		}
	}else{
		echo '<option value="0">-- Chọn một --</option>';
	}
}
die();
?>
