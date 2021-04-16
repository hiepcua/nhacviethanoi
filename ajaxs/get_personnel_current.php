<?php
session_start();
define('incl_path','../global/libs/');
define('libs_path','../libs/');
require_once(incl_path.'gfconfig.php');
require_once(incl_path.'gfinit.php');
require_once(incl_path.'gffunc.php');
require_once(libs_path.'cls.mysql.php');

function pagingNVVPCurrent($total_rows,$max_rows,$cur_page,$group_id){
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
$strWhere = "AND isactive AND group_id LIKE '%\"".$group_id."\"%' AND iswork=1 ORDER BY `name` ASC ";
$total_rows = SysCount('tbl_personnel', $strWhere);
$max_rows = 2;
$max_pages = ceil($total_rows/$max_rows);
$cur_page = $get_page;
$start = ($cur_page - 1) * $max_rows;
$limit = 'LIMIT '.$start.','. $max_rows;

$nvvp_current = SysGetList('tbl_personnel', [], $strWhere.$limit);
if(count($nvvp_current) > 0){
	echo '<div class="list-bgd-member clearfix">';
	foreach ($nvvp_current as $key => $value) {
		$url_image = 'https://viasm.edu.vn'.$value['avatar'];
		$thumb = getThumb('', '', '');
		echo '<div class="bgd-member">
		<div class="wrap-avatar wrap-thumb" data-src="'.$url_image.'">'.$thumb.'</div>
		<div class="metadata">
		<ul class="list-unstyle">
		<li class="medium20pt">'.$value['name'].'</li>
		<li class="job">'.$value['job'].'</li><br>
		<li  class="room">'.$value['work_room'].'</li>
		<li class="mail">'.$value['email'].'</li>
		<li class="phone">'.$value['phone'].'</li>
		<li class="mayle">'.$value['mayle'].'</li>
		</ul>
		</div>
		</div>';
	}
	echo '</div>';

	echo '<div class="wg-paging">';
	pagingNVVPCurrent($total_rows, $max_rows, $cur_page, $group_id);
	echo '</div>';
}
?>
<script type="text/javascript">
	$('.post-thumb-120, .wrap-thumb-220, .big-post-thumb, .wrap-thumb, .i-wrap-thumb, .wrap-thumb, #banner-slider .carousel-item').each(function(){
		var url = $(this).attr('data-src');
		if(url !== undefined && url.length > 0){
			$(this).css('background-image', 'url('+url+')');
			$(this).find('img').css('display', 'none');
		}
	});
</script>
