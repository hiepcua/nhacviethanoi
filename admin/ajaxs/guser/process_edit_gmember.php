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
	$id = antiData($_POST['txt_id'], 'int');
	if($id!=''){
		$total=0;
		if(isset($_POST['permission'])){
			foreach($_POST['permission'] as $item)
				$total+=$item;
		}

		$arr=array();
		$arr['id'] = $id;
		$arr['par_id'] = isset($_POST['cbo_par']) ? antiData($_POST['cbo_par'], 'int') : 0;
		$arr['name'] = isset($_POST['txt_name']) ? antiData($_POST['txt_name']) : '';
		$arr['intro'] = isset($_POST['txt_desc']) ? antiData($_POST['txt_desc']) : '';
		$arr['permission'] = $total;

		$rs_parent = SysGetList('tbl_user_group', array("path"), " AND id=".$arr['par_id']);
		if(count($rs_parent)>0){
			$rs_parent = $rs_parent[0];
			$arr['path'] = $rs_parent['path'].'_'.$arr['id'];
		}else{
			$arr['path'] = $arr['id'];
		}
		
		$result = SysEdit('tbl_user_group', $arr, "id=".$arr['id']);
		if($result){
			die('1');
		}else{
			die('0');
		}
	}
}
?>