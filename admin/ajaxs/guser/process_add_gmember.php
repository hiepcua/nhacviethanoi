<?php
session_start();
define('incl_path','../../global/libs/');
define('libs_path','../../libs/');
require_once(incl_path.'gfconfig.php');
require_once(incl_path.'gfinit.php');
require_once(incl_path.'gffunc.php');
require_once(incl_path.'gffunc_user.php');
require_once(libs_path.'cls.mysql.php');
if(isLogin()){
	$total=0;
	if(isset($_POST['permission'])){
		foreach($_POST['permission'] as $item)
			$total+=$item;
	}

	$arr=array();
	$arr['par_id'] = isset($_POST['cbo_par']) ? antiData($_POST['cbo_par'], 'int') : 0;
	$arr['name'] = isset($_POST['txt_name']) ? antiData($_POST['txt_name']) : '';
	$arr['intro'] = isset($_POST['txt_desc']) ? antiData($_POST['txt_desc']) : '';
	$arr['permission'] = $total;

	if($arr['name']!=''){
		$lastID = SysAdd('tbl_user_group',$arr);

		$rs_parent = SysGetList('tbl_user_group', array("path"), " AND id=".$arr['par_id']);
		if(count($rs_parent)>0){
			$rs_parent = $rs_parent[0];
			$path = $rs_parent['path'].'_'.$lastID;
		}else{
			$path = $lastID;
		}

		$result = SysEdit('tbl_user_group', array('path' => $path), " id=".$lastID);
		if($result){
			die('1');
		}else{
			die('0');
		}
	}
}else{
	die("3");
}
?>