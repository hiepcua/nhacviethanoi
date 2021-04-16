<?php
$get_id = isset($_GET['id']) ? antiData($_GET['id']) : 0;
$res_bookcase = SysGetList('tbl_bookcase', [], "AND id='".$get_id."'");
if(count($res_bookcase) <= 0){
	echo "Không có dữ liệu";
	exit();
}
$row = $res_bookcase[0];
$res_cates = SysGetList('tbl_categories', [], "AND id='".$row['cat_id']."'");
$res_cate = $res_cates[0];
$cate_title = $res_cate['title'];
$cate_link = ROOTHOST.'tin-tuc/'.$res_cate['alias'];
?>
<section class="component">
	<div class="container page">
		<div class="page-article">
			<div class="wg-breadcrumb clearfix">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item" aria-current="page">Trang chủ</li>
						<li class="breadcrumb-item" aria-current="page"><a href="<?php echo $cate_link;?>" title="<?php echo $cate_title;?>"><?php echo $cate_title;?></a></li>
						<li class="breadcrumb-item" aria-current="page"><?php echo $row['title'];?></li>
					</ol>
				</nav>
			</div>
			<div class="main-content">
				<h1 class="page-title"><?php echo $row['title'];?></h1>
				<article class="fulltext"><?php echo $row['fulltext'];?></article>
				<br/>

				<?php
				$res_relateds = SysGetList('tbl_content', [], "AND id <> ".$get_id." AND cat_id=".$res_cate['id']." AND isactive=1 LIMIT 0,3");
				if(count($res_relateds)>0){
					?>
					<div class="widget-related-posts">
						<?php
						foreach ($res_relateds as $key => $value) {
							$rel_link = ROOTHOST.$value['alias'].'-'.$value['id'].'.html';
							$rel_title = $value['title'];
							$rel_thumb = getThumb('', 'img-fluid', $rel_title);
							$rel_sapo = Substring($value['sapo'], 0, 60);

							echo '<article class="post-item related">
							<p class="post-thumb post-thumb-120" data-src="'.$value['images'].'">
							<a href="'.$rel_link.'" title="'.$rel_title.'">'.$rel_thumb.'</a>
							</p>
							<h3 class="post-title"><a href="'.$rel_link.'" title="'.$rel_title.'">'.$rel_title.'</a></h3>
							<div class="post-sapo">'.$rel_sapo.'</div>
							</article>';
						}
						?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>