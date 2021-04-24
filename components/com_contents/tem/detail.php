<?php
$cur_page = isset($_GET['page']) ? antiData($_GET['page']) : 1;
$strWhere = "";

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
				<li class="home"><a href="/" title="Trang chủ"> <span>Trang chủ</span></a></li> 
				<li class="home"><a href="/" title="Tin tức"> <span>Tin tức</span></a></li> 
				<li><strong>Cải tiến gì trên máy khoan pin Bosch GSB 120-LI được mến mộ?</strong></li> 
			</ul> 
		</div> 
	</section>
	<div class="page container article-wraper">
		<article class="article-main">
			<div class="row">
				<div class="col-md-12 col-lg-9 col-sm-12">
					<h1 class="title-head">Cải tiến gì trên máy khoan pin Bosch GSB 120-LI được mến mộ?</h1>
					<div class="blog-item-author"> 
						<span>Evo Themes</span> 
						<span>Thứ Ba, Tháng 2, 2021</span> 
					</div><br>

					<div class="article-details evo-toc-content"> 
						<p><strong>Máy khoan pin Bosch GSB 120-LI đời mới nhỏ gọn hơn, mạnh mẽ hơn tối ưu hóa tốc độ và lực xoắn giúp khoan xoay, khoan tường mượt mà và kéo dài tuổi thọ pin đáng kể.</strong></p> <p>Một công cụ hoàn mỹ khi khoan lỗ và vặn vít trong gia đình đến từ nhà sản xuất Đức danh tiếng toàn thế giới. <strong>Máy khoan pin Bosch GSB 120-LI </strong>nay gọn đẹp hơn, chạy khỏe và bền bỉ hơn so với phiên bản cũ nhưng vẫn có mức giá cực tốt tại DIY. Cùng nhau bóc hộp và xem liền những cải tiến mới nhất trên máy khoan không dây ưu việt này nhé.</p> <h2><strong>1. Máy khoan pin Bosch thiết kế thông minh cầm gọn trong tay</strong></h2> <p>Bosch GSB 120-LI GEN II là phiên bản mới của dòng GSB 120-Li trước đây hấp dẫn với kiểu dáng nhỏ nhắn và thiết kế tinh tế, nịnh mắt. Ngoại hình được làm ngắn hơn mang đến sự nhỏ gọn và liền lạc, tay cầm cao su đảm bảo không bị trượt hay ra mồ hôi khi cầm nắm. Các nút bấm nằm gần nhau giúp người dùng kích hoạt nhanh hoặc đổi chế độ thuận tiện.</p> <p><img alt="Máy khoan pin Bosch GSB 120-LI GEN II" src="https://diyhomedepot.vn/Uploads/images/image/BOSCH/d%E1%BB%A5ng%20c%E1%BB%A5%20%C4%91i%E1%BB%87n/may-khoan-pin-gsb-120li-gen2-5.jpg"></p> <p><strong>Máy khoan pin Bosch GSB 120-LI </strong>phối màu xanh đen với những đường vát cứng cáp, sắc nét mang đến vẻ đẹp sang trọng và mạnh mẽ. Đầu cặp Autolock kích thước 1.5 – 10mm cứng chắc linh hoạt để thay đổi mũi khoan, mũi vít. Phía mặt trên và công tắc chỉnh tốc độ, phía trước là vòng chỉnh các chế độ khoan xoay, khoan tường và vặn vít theo từng nhu cầu.</p> <h2><strong>2. Máy khoan pin Bosch GSB 120-LI tốc độ cao và lực xoắn khỏe</strong></h2> <p>Cải tiến rõ nhất trên <strong>máy khoan pin vặn vít Bosch</strong> là về mặt hiệu năng với bộ truyền động được nâng cấp để có tốc độ cao hơn đạt 400 – 1.500 vòng/phút. Nhờ đó sức khoan gỗ và thép tốt hơn 20/10mm, máy cũng có chế độ búa khoan tường 8mm, lực xoắn khỏe 14/30 N.m. Các thông số này đều vượt trội so với đời máy trước để làm việc hiệu quả và năng suất cao hơn.</p> <p><img alt="Máy khoan pin Bosch GSB 120-LI GEN II" src="https://diyhomedepot.vn/Uploads/images/image/BOSCH/may-khoan-gsb120li-gen2.jpg"></p> <p>Các chức năng của máy khoan pin Bosch rất thích hợp sử dụng trong gia đình phục vụ khoan lỗ, lắp đặt vật dụng, đồ đạc tiện lợi và mau chóng. Hệ thống điều chỉnh điện tử nhạy bén, dễ kiểm soát tạo ra mũi khoan đẹp và đúng kích thước. Máy nhỏ nhắn hoạt động êm ái, linh hoạt thay đổi các chế độ và phụ kiện với nhau tùy theo mục đích khoan lỗ hay vặn vít.</p> <h2><strong>3. Hệ thống pin linh hoạt tiết kiệm năng lượng và kéo dài tuổi thọ</strong></h2> <p>Là thiết bị không dây, <strong>máy khoan pin Bosch GSB 120-LI</strong> hưởng lợi thế đó là tính di động cao sử dụng ở bất kỳ không gian nào bạn muốn. Pin 12V/1.5Ah được kiểm soát bởi mạch điện tử mang đến thời gian hoạt động dài hơi, tiết kiệm năng lượng hiệu quả và tăng tuổi thọ. Vị trí lắp pin nằm gọn dưới đế máy tạo sự liền mạch không vướng bận, cồng kềnh.</p> <p>Nhỏ hơn, mạnh hơn là những từ để nói tới những cải tiến trên <strong>Bosch GSB 120-LI GEN II</strong> chắc chắn mang đến hài lòng cho gia đình. Một thiết bị khoan lỗ vặn vít đa năng, tốc độ cao lực xoắn khỏe chạy êm ái và linh hoạt ở mọi không gian. Máy được bán chính hãng tại cửa hàng DIYhomedepot với giá cực yêu chỉ 2.461.000đ đã có pin, sạc và bảo hành 6 tháng.</p> <p><img alt="Máy khoan pin Bosch GSB 120-LI GEN II" src="https://diyhomedepot.vn/Uploads/images/image/BOSCH/may-khoan-gsb120li-gen2-3.jpg"></p> <p><strong>Kết luận: Máy khoan pin Bosch GSB 120-LI</strong> nhỏ nhắn, thiết kế thông minh và trang bị hiện đại ghi điểm cao khi sửa chữa dân dụng. Đây là là công cụ được nhiều gia đình mến mộ và lựa chọn, kể cả chị em phụ nữ cũng dễ dàng thao tác.</p> 
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