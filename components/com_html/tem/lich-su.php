<section class="component">
	<div class="page">
		<div class="page-history">
			<div class="page-content">
				<div class="wg-breadcrumb clearfix">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item home" aria-current="page"><a href="<?php echo ROOTHOST;?>"></a></li>
							<li class="breadcrumb-item" aria-current="page"><a href="<?php echo ROOTHOST;?>gioi-thieu" title="">Giới thiệu</a></li>
							<li class="breadcrumb-item active" aria-current="page">Lịch sử</li>
						</ol>
					</nav>
				</div>

				<div class="main-content">
					<ul id="tab-history" class="nav nav-pills nav-justified">
						<li class="active"><a data-toggle="tab" href="#history2">Lịch sử</a></li>
						<li><a data-toggle="tab" href="#history3">Bài viết về viện</a></li>
					</ul>

					<div class="tab-content">
						<div id="history2" class="tab-pane active">
							<?php
							$res_content1s = SysGetList('tbl_html_block', array(), 'AND alias="lich-su-vien-nghien-cuu-cao-cap-ve-toan" AND isactive=1');
							if(count($res_content1s) > 0){
								$row = $res_content1s[0];
								echo '<div class="fulltext">';
								echo '<h1 class="page-title">'.$row['title'].'</h1>';
								echo $row['fulltext'];
								echo '</div>';
							}
							?>

							<!-- <div class="wg-related-document">
								<h3 class="related-document-header">VĂN BẢN LIÊN QUAN</h3>
								<ul class="list-unstyle">
									<li><a href="" title="">Quyết định thành lập Viện Nghiên cứu cao cấp về Toán</a></li>
									<li><a href="" title="">Quy chế Tổ chức và hoạt động của Viện Nghiên cứu cao cấp về Toán</a></li>
								</ul>
							</div> -->
						</div>

						<div id="history3" class="tab-pane fade">
							<div class="list-articles-about-viasm clearfix">
								<?php
								$res_cates = SysGetList('tbl_categories', [], "AND isactive=1 AND `alias`='bai-viet-ve-vien'");
								if(isset($res_cates[0]['id']) && $res_cates[0]['id']!==''){
									$res_contents = SysGetList('tbl_content', [], 'AND isactive=1 AND cat_id='.$res_cates[0]['id']);

									if(count($res_contents)>0){
										$cate_alias = $res_cates[0]['alias'];
										foreach ($res_contents as $key => $value) {
											$sapo = $value['sapo'];
											$link = ROOTHOST.$cate_alias.'/'.$value['alias'].'-'.$value['id'].'.html';
											$thumb = getThumb($value['images'], '', $value['title']);
											$url_image = ($value['images'] !== '' && $value['images'] !== null) ? $value['images'] : IMAGE_DEFAULT;

											echo '<div class="article">
											<div class="wrap-thumb" data-src="'.$url_image.'">
											<a href="'.$link.'" title="'.$value['title'].'">'.$thumb.'</a>
											</div>
											<div class="metadata">
											<h3 class="title"><a href="'.$link.'" title="'.$value['title'].'">'.$value['title'].'</a></h3>
											<div class="intro">'.$sapo.'</div>
											</div>
											</div>';
										}
									}
								}

								?>
								<!-- <div class="list-author">
									<div class="author"><span class="cred">Ngô Bảo Châu</span>, <span class="cgray">Công tác tại: 157 Chùa Láng, Đống Đa, Hà Nội</span></div>
									<div class="author"><span class="cred">Ngô Quang Hưng</span>, <span class="cgray">Công tác tại: 157 Chùa Láng, Đống Đa, Hà Nội</span></div>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>