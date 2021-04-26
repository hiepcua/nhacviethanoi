<?php
session_start();
define('incl_path','../../global/libs/');
define('libs_path','../../libs/');
require_once(incl_path.'gfconfig.php');
require_once(incl_path.'gfinit.php');
require_once(incl_path.'gffunc.php');
require_once(incl_path.'gffunc_user.php');
require_once(libs_path.'cls.mysql.php');
$group_id = isset($_POST['group_id']) ? (int)$_POST['group_id'] : 0;
$product_id = isset($_POST['product_id']) ? (int)$_POST['product_id'] : 0;

$res_contents = SysGetList('tbl_product', [], "AND `group_id`=".$group_id." AND id <> $product_id ORDER BY `name` ASC LIMIT 0,4");
if(count($res_contents)>0){
	foreach ($res_contents as $key => $value) {
		$images = $value['thumb']!='' ? $value['thumb'] : IMAGE_DEFAULT;
		echo '<div class="article_item w-25">';
		echo '<a href="javascript:void(0)" class="remove_product" onclick="remove_product(this)"><i class="fa fa-window-close" aria-hidden="true"></i></a>';
		echo '<input type="hidden" name="related_product[]" value="'.$value['id'].'">';
		echo '<a class="title" href="javascript:void(0)">';
		echo '<div class="wrap-thumb" data-src="'.$images.'" style="background-image: url(\''.$images.'\');">';
		echo '<img src="'.ROOTHOST.'global/img/no-photo.jpg" class="" style="display: none;">';
		echo '</div>';
		echo '<div class="name">'.$value['name'].'</div>';
		echo '</a>';
		echo '</div>';
	}
}else{
	echo "No data!";
}
?>