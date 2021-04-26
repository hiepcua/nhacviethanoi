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
$res_cons = SysGetList('tbl_content', [], $strWhere." ORDER BY cdate DESC ".$limit);
?>
<section class="component">
	<section class="bread-crumb"> 
		<div class="container"> 
			<ul class="breadcrumb"> 
				<li class="home"><a href="<?php echo ROOTHOST;?>" title="Trang chủ"> <span>Trang chủ</span></a></li> 
				<li><strong><?php echo $res_cate['title'];?></strong></li> 
			</ul> 
		</div> 
	</section>
	<div class="page page-block-content container">
		<div class="page-header">
			<h1><?php echo $res_cate['title'];?></h1>
		</div>
		<div class="page-content">
			<div class="row">
				<div class="col-md-8 col-lg-9 col-sm-12 evo-list-blog-page">
					<div class="row">
						<?php
						if(count($res_cons)>0){
							foreach ($res_cons as $key => $value) {
								$title = stripcslashes($value['title']);
								$sapo = subString(stripcslashes($value['sapo']), 0, 60);
								$thumb = getThumb('', '','');
								$img_src = $value['images']!='' ? $value['images'] : IMAGE_DEFAULT;
								$link = ROOTHOST.'tin-tuc/'.$value['alias'].'-'.$value['id'].'.html';

								echo '<div class="col-lg-6 col-md-6 col-sm-12 evo-blog-item">
								<div class="blog-item-image">
								<div class="wrap-thumb" data-src="'.$img_src.'">
								<a href="'.$link.'">'.$thumb.'</a>
								</div>
								</div>
								<div class="blog-item-author">
								<h3> <a href="'.$link.'" title="'.$title.'">'.$title.'</a> </h3>
								<p>'.$sapo.'</span>
								</div>
								</div>';
							}
						}
						?>
					</div>
					<?php paging($total_rows,$max_rows,$cur_page); ?>
				</div>
				<div class="col-md-4 col-lg-3 col-sm-12 blog-sidebar">
					<div class="aside-title">Danh mục</div>
					<ul class="navbar-pills nav-category">
						<li class="nav-item "> 
							<a class="nav-link" href="/san-pham-moi" title="Sản phẩm mới">Sản phẩm mới</a> 
							<span class="Collapsible__Plus"></span>
							<ul class="dropdown-menu"> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-khoan-van-vit" title="Máy khoan vặn vít">Máy khoan vặn vít</a> 
								</li> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-mai-goc-cat-gach" title="Máy mài góc cắt gạch">Máy mài góc cắt gạch</a> 
								</li> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-cua-dia-cua-xich" title="Máy cưa đĩa cưa xích">Máy cưa đĩa cưa xích</a> 
								</li> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-khoan-duc-be-tong" title="Máy khoan đục bê tông">Máy khoan đục bê tông</a> 
								</li> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-cha-nham-danh-bong" title="Máy chà nhám đánh bóng">Máy chà nhám đánh bóng</a> 
								</li> 
							</ul>
						</li>
						<li class="nav-item "> 
							<a class="nav-link" href="/san-pham-moi" title="Sản phẩm mới">Sản phẩm mới</a> 
							<span class="Collapsible__Plus"></span>
							<ul class="dropdown-menu"> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-khoan-van-vit" title="Máy khoan vặn vít">Máy khoan vặn vít</a> 
								</li> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-mai-goc-cat-gach" title="Máy mài góc cắt gạch">Máy mài góc cắt gạch</a> 
								</li> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-cua-dia-cua-xich" title="Máy cưa đĩa cưa xích">Máy cưa đĩa cưa xích</a> 
								</li> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-khoan-duc-be-tong" title="Máy khoan đục bê tông">Máy khoan đục bê tông</a> 
								</li> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-cha-nham-danh-bong" title="Máy chà nhám đánh bóng">Máy chà nhám đánh bóng</a> 
								</li> 
							</ul>
						</li>
						<li class="nav-item "> 
							<a class="nav-link" href="/san-pham-moi" title="Sản phẩm mới">Sản phẩm mới</a> 
							<span class="Collapsible__Plus"></span>
							<ul class="dropdown-menu"> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-khoan-van-vit" title="Máy khoan vặn vít">Máy khoan vặn vít</a> 
								</li> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-mai-goc-cat-gach" title="Máy mài góc cắt gạch">Máy mài góc cắt gạch</a> 
								</li> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-cua-dia-cua-xich" title="Máy cưa đĩa cưa xích">Máy cưa đĩa cưa xích</a> 
								</li> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-khoan-duc-be-tong" title="Máy khoan đục bê tông">Máy khoan đục bê tông</a> 
								</li> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-cha-nham-danh-bong" title="Máy chà nhám đánh bóng">Máy chà nhám đánh bóng</a> 
								</li> 
							</ul>
						</li>
						<li class="nav-item "> 
							<a class="nav-link" href="/san-pham-moi" title="Sản phẩm mới">Sản phẩm mới</a> 
							<span class="Collapsible__Plus"></span>
							<ul class="dropdown-menu"> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-khoan-van-vit" title="Máy khoan vặn vít">Máy khoan vặn vít</a> 
								</li> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-mai-goc-cat-gach" title="Máy mài góc cắt gạch">Máy mài góc cắt gạch</a> 
								</li> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-cua-dia-cua-xich" title="Máy cưa đĩa cưa xích">Máy cưa đĩa cưa xích</a> 
								</li> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-khoan-duc-be-tong" title="Máy khoan đục bê tông">Máy khoan đục bê tông</a> 
								</li> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-cha-nham-danh-bong" title="Máy chà nhám đánh bóng">Máy chà nhám đánh bóng</a> 
								</li> 
							</ul>
						</li>
						<li class="nav-item "> 
							<a class="nav-link" href="/san-pham-moi" title="Sản phẩm mới">Sản phẩm mới</a> 
							<span class="Collapsible__Plus"></span>
							<ul class="dropdown-menu"> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-khoan-van-vit" title="Máy khoan vặn vít">Máy khoan vặn vít</a> 
								</li> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-mai-goc-cat-gach" title="Máy mài góc cắt gạch">Máy mài góc cắt gạch</a> 
								</li> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-cua-dia-cua-xich" title="Máy cưa đĩa cưa xích">Máy cưa đĩa cưa xích</a> 
								</li> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-khoan-duc-be-tong" title="Máy khoan đục bê tông">Máy khoan đục bê tông</a> 
								</li> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-cha-nham-danh-bong" title="Máy chà nhám đánh bóng">Máy chà nhám đánh bóng</a> 
								</li> 
							</ul>
						</li>
						<li class="nav-item "> 
							<a class="nav-link" href="/san-pham-moi" title="Sản phẩm mới">Sản phẩm mới</a> 
							<span class="Collapsible__Plus"></span>
							<ul class="dropdown-menu"> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-khoan-van-vit" title="Máy khoan vặn vít">Máy khoan vặn vít</a> 
								</li> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-mai-goc-cat-gach" title="Máy mài góc cắt gạch">Máy mài góc cắt gạch</a> 
								</li> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-cua-dia-cua-xich" title="Máy cưa đĩa cưa xích">Máy cưa đĩa cưa xích</a> 
								</li> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-khoan-duc-be-tong" title="Máy khoan đục bê tông">Máy khoan đục bê tông</a> 
								</li> 
								<li class="nav-item "> 
									<a class="nav-link" href="/may-cha-nham-danh-bong" title="Máy chà nhám đánh bóng">Máy chà nhám đánh bóng</a> 
								</li> 
							</ul>
						</li>
					</ul>

					<div class="aside-title margin-top-20"><a href="tin-tuc" title="Tin khuyến mãi">Tin khuyến mãi</a></div>
					<div class="evo-list-blogs clearfix">
						<article class="has-post-thumbnail clearfix"> 
							<div class="qodef-e-media-image"> 
								<a class="thumb" href="/cai-tien-gi-tren-may-khoan-pin-bosch-gsb-120-li-duoc-men-mo" title="Cải tiến gì trên máy khoan pin Bosch GSB 120-LI được mến mộ?"> 
									<img src="//bizweb.dktcdn.net/thumb/medium/100/418/839/articles/may-khoan-bosch-gsb550-1.jpg?v=1613483734173" data-src="//bizweb.dktcdn.net/thumb/medium/100/418/839/articles/may-khoan-bosch-gsb550-1.jpg?v=1613483734173" alt="Cải tiến gì trên máy khoan pin Bosch GSB 120-LI được mến mộ?" class="lazy img-responsive mx-auto d-block loaded" data-was-processed="true">
								</a> 
							</div> 
							<div class="qodef-e-content"> 
								<a href="/cai-tien-gi-tren-may-khoan-pin-bosch-gsb-120-li-duoc-men-mo" title="Cải tiến gì trên máy khoan pin Bosch GSB 120-LI được mến mộ?">Cải tiến gì trên máy khoan pin Bosch GSB 120-LI được mến mộ?</a> 
							</div> 
						</article>
						<article class="has-post-thumbnail clearfix"> 
							<div class="qodef-e-media-image"> 
								<a class="thumb" href="/cai-tien-gi-tren-may-khoan-pin-bosch-gsb-120-li-duoc-men-mo" title="Cải tiến gì trên máy khoan pin Bosch GSB 120-LI được mến mộ?"> 
									<img src="//bizweb.dktcdn.net/thumb/medium/100/418/839/articles/may-khoan-bosch-gsb550-1.jpg?v=1613483734173" data-src="//bizweb.dktcdn.net/thumb/medium/100/418/839/articles/may-khoan-bosch-gsb550-1.jpg?v=1613483734173" alt="Cải tiến gì trên máy khoan pin Bosch GSB 120-LI được mến mộ?" class="lazy img-responsive mx-auto d-block loaded" data-was-processed="true">
								</a> 
							</div> 
							<div class="qodef-e-content"> 
								<a href="/cai-tien-gi-tren-may-khoan-pin-bosch-gsb-120-li-duoc-men-mo" title="Cải tiến gì trên máy khoan pin Bosch GSB 120-LI được mến mộ?">Cải tiến gì trên máy khoan pin Bosch GSB 120-LI được mến mộ?</a> 
							</div> 
						</article>
						<article class="has-post-thumbnail clearfix"> 
							<div class="qodef-e-media-image"> 
								<a class="thumb" href="/cai-tien-gi-tren-may-khoan-pin-bosch-gsb-120-li-duoc-men-mo" title="Cải tiến gì trên máy khoan pin Bosch GSB 120-LI được mến mộ?"> 
									<img src="//bizweb.dktcdn.net/thumb/medium/100/418/839/articles/may-khoan-bosch-gsb550-1.jpg?v=1613483734173" data-src="//bizweb.dktcdn.net/thumb/medium/100/418/839/articles/may-khoan-bosch-gsb550-1.jpg?v=1613483734173" alt="Cải tiến gì trên máy khoan pin Bosch GSB 120-LI được mến mộ?" class="lazy img-responsive mx-auto d-block loaded" data-was-processed="true">
								</a> 
							</div> 
							<div class="qodef-e-content"> 
								<a href="/cai-tien-gi-tren-may-khoan-pin-bosch-gsb-120-li-duoc-men-mo" title="Cải tiến gì trên máy khoan pin Bosch GSB 120-LI được mến mộ?">Cải tiến gì trên máy khoan pin Bosch GSB 120-LI được mến mộ?</a> 
							</div> 
						</article>
						<article class="has-post-thumbnail clearfix"> 
							<div class="qodef-e-media-image"> 
								<a class="thumb" href="/cai-tien-gi-tren-may-khoan-pin-bosch-gsb-120-li-duoc-men-mo" title="Cải tiến gì trên máy khoan pin Bosch GSB 120-LI được mến mộ?"> 
									<img src="//bizweb.dktcdn.net/thumb/medium/100/418/839/articles/may-khoan-bosch-gsb550-1.jpg?v=1613483734173" data-src="//bizweb.dktcdn.net/thumb/medium/100/418/839/articles/may-khoan-bosch-gsb550-1.jpg?v=1613483734173" alt="Cải tiến gì trên máy khoan pin Bosch GSB 120-LI được mến mộ?" class="lazy img-responsive mx-auto d-block loaded" data-was-processed="true">
								</a> 
							</div> 
							<div class="qodef-e-content"> 
								<a href="/cai-tien-gi-tren-may-khoan-pin-bosch-gsb-120-li-duoc-men-mo" title="Cải tiến gì trên máy khoan pin Bosch GSB 120-LI được mến mộ?">Cải tiến gì trên máy khoan pin Bosch GSB 120-LI được mến mộ?</a> 
							</div> 
						</article>
						<article class="has-post-thumbnail clearfix"> 
							<div class="qodef-e-media-image"> 
								<a class="thumb" href="/cai-tien-gi-tren-may-khoan-pin-bosch-gsb-120-li-duoc-men-mo" title="Cải tiến gì trên máy khoan pin Bosch GSB 120-LI được mến mộ?"> 
									<img src="//bizweb.dktcdn.net/thumb/medium/100/418/839/articles/may-khoan-bosch-gsb550-1.jpg?v=1613483734173" data-src="//bizweb.dktcdn.net/thumb/medium/100/418/839/articles/may-khoan-bosch-gsb550-1.jpg?v=1613483734173" alt="Cải tiến gì trên máy khoan pin Bosch GSB 120-LI được mến mộ?" class="lazy img-responsive mx-auto d-block loaded" data-was-processed="true">
								</a> 
							</div> 
							<div class="qodef-e-content"> 
								<a href="/cai-tien-gi-tren-may-khoan-pin-bosch-gsb-120-li-duoc-men-mo" title="Cải tiến gì trên máy khoan pin Bosch GSB 120-LI được mến mộ?">Cải tiến gì trên máy khoan pin Bosch GSB 120-LI được mến mộ?</a> 
							</div> 
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>