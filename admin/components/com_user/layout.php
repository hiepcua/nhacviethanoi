<?php
defined('ISHOME') or die("Can't access this page!");
define('COMS','user');
$COM='user';
$isAdmin=getInfo('isadmin');

require_once libs_path."cls.upload.php";
$obj_upload = new CLS_UPLOAD();

$viewtype=isset($_GET['viewtype'])?addslashes($_GET['viewtype']):'list';

function getListComboboxGuser($parid=0, $level=0){
	$sql="SELECT * FROM tbl_user_group WHERE `par_id`='$parid' AND `isactive`='1' ";
	$objdata=new CLS_MYSQL();
	$objdata->Query($sql);
	$char="";
	if($level!=0){
		for($i=0;$i<$level;$i++)
			$char.="|-----";
	}
	if($objdata->Num_rows()<=0) return;
	while($rows=$objdata->Fetch_Assoc()){
		$id=$rows['id'];
		$parid=$rows['par_id'];
		$title=$rows['name'];
		echo "<option value='$id'>$char $title</option>";
		$nextlevel=$level+1;
		getListComboboxGuser($id,$nextlevel);
	}
}

if(is_file(COM_PATH.'com_'.COMS.'/task/'.$viewtype.'.php')){
	include_once('task/'.$viewtype.'.php');
}

unset($viewtype); unset($obj);
?>