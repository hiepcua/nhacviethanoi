<?php
session_start();
define('incl_path','../../global/libs/');
define('libs_path','../../libs/');
require_once(incl_path.'gfconfig.php');
require_once(incl_path.'gfinit.php');
require_once(incl_path.'gffunc.php');
require_once(incl_path.'gffunc_user.php');
require_once(libs_path.'cls.mysql.php');
$keywork = isset($_POST['keywork']) ? trim($_POST['keywork']) : '';

$res_contents = SysGetList('tbl_product', [], "AND `name` LIKE '%".$keywork."%' ORDER BY `cdate` DESC, `name` ASC LIMIT 0,10");
if(count($res_contents)>0){
	foreach ($res_contents as $key => $value) {
		echo '<a href="javascript:void(0)" class="article_item" onclick="select_related_product(this)" data-id="'.$value['id'].'" data-img="'.$value['thumb'].'" data-title="'.$value['name'].'">'.$value['name'].'</a>';
	}
}else{
	echo "No data!";
}
?>