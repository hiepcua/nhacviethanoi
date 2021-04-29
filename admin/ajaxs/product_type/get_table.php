<?php
session_start();
define('incl_path','../../global/libs/');
define('libs_path','../../libs/');
require_once(incl_path.'gfconfig.php');
require_once(incl_path.'gfinit.php');
require_once(incl_path.'gffunc.php');
require_once(incl_path.'gffunc_user.php');
require_once(libs_path.'cls.mysql.php');

$strwhere = isset($_GET['strwhere'])? trim($_GET['strwhere']): '';
$start = isset($_GET['start'])? (int)$_GET['start']: 0;
$max_rows = isset($_GET['max_rows'])? (int)$_GET['max_rows']: 0;

$res = SysGetList('tbl_product_type', array(), "$strwhere ORDER BY `order` ASC, `title` ASC LIMIT $start,$max_rows");
if(count($res)>0){
	foreach ($res as $key => $rows) {
		if($rows['isactive'] == 1) 
			$icon_active    = "<i class='fas fa-toggle-on cgreen'></i>";
		else $icon_active   = '<i class="fa fa-toggle-off cgray" aria-hidden="true"></i>';

		$gproduct_name = SysGetList('tbl_product_group', array('title'), "AND id=".$rows['id_pgroup']);
		$gproduct_name = isset($gproduct_name[0]['title']) ? $gproduct_name[0]['title'] : '';

		echo "<tr name='trow'>";

		echo "<td class='text-center' width='10'><a href='#' onclick='delete1(this)' data-id='".$rows['id']."'><i class='fa fa-trash cred' aria-hidden='true'></i></a></td>";

		echo "<td><a href='#' onclick='edit(".$rows['id'].")'>".$rows['title']."</a></td>";
		echo "<td>".$gproduct_name."</td>";
		echo "<td>".$rows['intro']."</td>";

		$order = $rows['order'];
		echo "<td width='50' class='text-center'><input style='width: 50px;' type='number' min='0' name='txt_order' value=\"$order\" size=\"4\" class=\"order text-center\" onchange='order(this)' data-id='".$rows['id']."'></td>";

		echo "<td class='text-center'><a href='#' onclick='active(this)' data-id='".$rows['id']."'>".$icon_active."</a></td>";

		echo "</tr>";
	}
}
?>
