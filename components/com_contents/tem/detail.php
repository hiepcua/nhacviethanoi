<?php
$get_id = isset($_GET['id']) ? antiData($_GET['id']) : 0;
$res_cons = SysGetList('tbl_content', [], "AND id='".$get_id."'");
if(count($res_cons) <= 0){
	echo "Không có dữ liệu";
	exit();
}
$row = $res_cons[0];
$res_cates = SysGetList('tbl_categories', [], "AND id='".$row['cat_id']."'");
$res_cate = $res_cates[0];
$cate_title = $res_cate['title'];
$cate_link = ROOTHOST.'tin-tuc/'.$res_cate['alias'];
?>
<section class="component">
	<section class="bread-crumb"> 
		<div class="container"> 
			<ul class="breadcrumb"> 
				<li class="home"><a href="<?php echo ROOTHOST;?>" title="Trang chủ"> <span>Trang chủ</span></a></li>
				<li class="home"><a href="<?php echo $cate_link;?>" title="<?php echo $cate_title;?>"> <span><?php echo $cate_title;?></span></a></li> 
				<li><strong><?php echo $row['title'];?></strong></li> 
			</ul> 
		</div> 
	</section>
	<div class="page container article-wraper evo-article">
		<article class="article-main">
			<div class="row">
				<div class="col-md-12 col-lg-9 col-sm-12">
					<h1 class="title-head text-center"><?php echo $row['title'];?></h1>
					<div class="blog-item-author text-center"> 
						<span><?php echo $row['pseudonym'];?></span> 
						<span><?php echo 'Ngày '.date('d-m-Y', $row['cdate']);?></span> 
					</div><br>

					<div class="article-details evo-toc-content"> 
						<?php echo stripcslashes($row['fulltext']); ?>
					</div>
				</div>
				<div class="col-md-12 col-lg-3 col-sm-12 blog-sidebar">
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
		</article>
	</div>
</section>