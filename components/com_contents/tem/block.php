<?php
$cur_page = isset($_GET['page']) ? antiData($_GET['page']) : 1;
$get_alias = isset($_GET['alias']) ? antiData($_GET['alias']) : '';
$res_cates = SysGetList('tbl_categories', [], "AND alias='".$get_alias."'");

if(count($res_cates) <= 0){
	echo "Không có dữ liệu";
	exit();
}
$res_cate = $res_cates[0];
$cate_link = ROOTHOST.$res_cate['alias'];
$strWhere = "AND cat_id=".$res_cate['id'];

/*Begin pagging*/
$total_rows = SysCount('tbl_content',$strWhere);
$max_rows = 10;
$max_pages = ceil($total_rows/$max_rows);
$cur_page = getCurentPage($max_pages);
$start = ($cur_page - 1) * $max_rows;
$limit = 'LIMIT '.$start.','. $max_rows;
/*End pagging*/
?>
<section class="component">
	<div class="container page">
		<div class="page-category">
			<div class="wg-breadcrumb clearfix">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item" aria-current="page">Trang chủ</li>
						<li class="breadcrumb-item" aria-current="page"><?php echo $res_cate['title'];?></li>
					</ol>
				</nav>
			</div>
			
			<div class="page-content">
				<div class="main-content">
					<h1 class="page-title"><?php echo $res_cate['title'];?></h1>
					<?php
					$res_cons = SysGetList('tbl_content', [], $strWhere." ORDER BY cdate DESC ".$limit);
					if(count($res_cons)>0){
						$b_post = $res_cons[0];
						$b_link = ROOTHOST.$b_post['alias'].'-'.$b_post['id'].'.html';
						$b_title = $b_post['title'];
						$b_thumb = getThumb('', 'img-fluid', $b_title);
						$b_sapo = Substring($b_post['sapo'], 0, 40);
						?>
						<article class="big-post">
							<div class="post-content">
								<div class="post-thumb big-post-thumb" data-src="<?php echo $b_post['images'];?>"><a href="<?php echo $b_link;?>" title="<?php echo $b_title;?>"><?php echo $b_thumb;?></a></div>
								<div class="post-meta">
									<h2 class="title"><a href="<?php echo $b_link;?>" title="<?php echo $b_title;?>"><?php echo $b_title;?></a></h2>
									<div class="desc"><?php echo $b_sapo;?></div>
								</div>
							</div>
						</article>
						<hr/>
					<?php } ?>
					<div class="list-posts">
						<?php
						foreach ($res_cons as $key => $value) {
							if($key > 0){
								$link = ROOTHOST.$value['alias'].'-'.$value['id'].'.html';
								$title = $value['title'];
								$thumb = getThumb('', 'img-fluid', $title);
								$sapo = Substring($value['sapo'], 0, 60);
								echo '<article class="post">
								<div class="post-content">
								<div class="post-thumb post-thumb-120" data-src="'.$value['images'].'"><a href="'.$link.'" title="'.$title.'">'.$thumb.'</a></div>
								<div class="post-meta">
								<h3 class="title"><a href="'.$link.'" title="">'.$title.'</a></h3>
								<div class="desc">'.$sapo.'</div>
								</div>
								</div>
								</article>';
							}
						}
						?>
					</div>
					<div class="pagging">
						<?php paging($total_rows,$max_rows,$cur_page); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>