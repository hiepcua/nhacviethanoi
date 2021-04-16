<?php
session_start();
define('incl_path','../global/libs/');
define('libs_path','../libs/');
require_once(incl_path.'gfconfig.php');
require_once(incl_path.'gfinit.php');
require_once(incl_path.'gffunc.php');
require_once(libs_path.'cls.mysql.php');

function pagingNVVPOld($total_rows,$max_rows,$cur_page,$group_id){
	$max_pages=ceil($total_rows/$max_rows);
	$start=$cur_page-5; if($start<1)$start=1;
	$end=$cur_page+5;   if($end>$max_pages)$end=$max_pages;
	$paging='
	<form action="" method="get" name="frmpaging" id="frmpaging">
	<input type="hidden" name="page" id="txtCurnpage" value="1" />
	<ul class="pagination">
	';

	$paging.='<p align="center" class="paging">';
	$paging.="<strong>Total:</strong> $total_rows <strong>on</strong> $max_pages <strong>page</strong><br>";

	if($cur_page >1){
		$paging.='<li class="page-item"><a class="page-link" href="javascript:getNVVPCurrent('.($cur_page-1).','.$group_id.')"> < Trước </a></li>';
	}
	if($max_pages>1){
		for($i=$start;$i<=$end;$i++)
		{
			if($i!=$cur_page)
				$paging.="<li class='page-item'><a class=\"page-link\" href=\"javascript:getNVVPCurrent($i,$group_id)\"> $i </a></li>";
			else
				$paging.="<li class='page-item active'><a class=\"page-link\" href=\"#\" class=\"cur_page\"> $i </a></li>";
		}
	}
	if($cur_page <$max_pages)
		$paging.='<li class="page-item"><a class="page-link" href="javascript:getNVVPCurrent('.($cur_page+1).','.$group_id.')"> Sau > </a></li>';

	$paging.='</ul></p></form>';
	echo $paging;
}

$get_page = isset($_GET['page'])? trim($_GET['page']): 1;
$group_id = isset($_GET['group_id'])? trim($_GET['group_id']): '';
$strWhere = "AND isactive AND group_id LIKE '%\"".$group_id."\"%' AND iswork=0 ORDER BY `name` ASC ";
$total_rows = SysCount('tbl_personnel', $strWhere);
$max_rows = 2;
$max_pages = ceil($total_rows/$max_rows);
$cur_page = $get_page;
$start = ($cur_page - 1) * $max_rows;
$limit = 'LIMIT '.$start.','. $max_rows;

$nvvp_old = SysGetList('tbl_personnel', [], $strWhere.$limit);
if(count($nvvp_old) > 0){
	echo '<div class="row list-nvcu">';
	foreach ($nvvp_old as $key => $value) {
		$obj_mysql = new CLS_MYSQL();
		$obj_mysql->Query('SELECT min(from_year) as min_from, max(to_year) as max_to FROM tbl_personnel_work_history WHERE 1=1 AND personnel_id='.$value['id']);
		$res_min_max = $obj_mysql->Fetch_Assoc();
		$min_fromyear = (isset($res_min_max['min_from']) && $res_min_max['min_from'] !== '' && $res_min_max['min_from'] !== null) ? $res_min_max['min_from'] : null;
		$max_toyear = (isset($res_min_max['max_to']) && $res_min_max['max_to'] !== '' && $res_min_max['max_to'] !== null) ? $res_min_max['max_to'] : null;

		$from_year = $min_fromyear!== null ? 'Công tác từ '.$min_fromyear : '';
		$to_year = $max_toyear!== null ? ' - '.$max_toyear : '';

		$url_image = 'https://viasm.edu.vn'.$value['avatar'];
		$thumb = getThumb('', '', '');
		echo '<div class="col-md-6 nvcu">
		<h3 class="name">'.$value['name'].'</h3>
		<div class="job">'.$value['job'].'</div>
		<div class="worktime">'.$from_year.$to_year.'</div>
		</div>';
	}
	echo '</div>';

	echo '<div class="wg-paging">';
	pagingNVVPOld($total_rows, $max_rows, $cur_page, $group_id);
	echo '</div>';
}
?>
