<?php
/* --------------------------------------------- */
$res_all_groups = SysGetList('tbl_product_group', [], " AND isactive=1");
$__ALL_PRODUCT_GOURP = array();
foreach ($res_all_groups as $key => $value) {
	$__ALL_PRODUCT_GOURP[$value['id']] = $value;
}
/* --------------------------------------------- */
$__ALL_PRODUCT = SysGetList('tbl_product', array(), 'AND isactive=1');
/* --------------------------------------------- */
?>
<!-- Banner -->
<?php include 'modules/home-banner.php';?>
<!-- /.Banner -->
<section class="awe-section-2"> 
	<div class="section_search_feature container"> 
		<div class="row"> 
			<div class="col-lg-3 col-md-6 col-12 item"> 
				<div class="img"> 
					<img class="lazy loaded" width="100" height="100" src="//bizweb.dktcdn.net/100/418/839/themes/808559/assets/feature_search_image_1.svg?1618493452970" data-src="//bizweb.dktcdn.net/100/418/839/themes/808559/assets/feature_search_image_1.svg?1618493452970" alt="Miễn phí vận chuyển" data-was-processed="true"> 
				</div> 
				<div class="detail"> 
					<a href="" title="Miễn phí vận chuyển">Miễn phí vận chuyển</a> <p>Evo Tools miễn phí vận chuyển với đơn hàng trên 350.000đ</p> 
				</div> 
			</div> 
			<div class="col-lg-3 col-md-6 col-12 item"> 
				<div class="img"> 
					<img class="lazy loaded" width="100" height="100" src="//bizweb.dktcdn.net/100/418/839/themes/808559/assets/feature_search_image_2.svg?1618493452970" data-src="//bizweb.dktcdn.net/100/418/839/themes/808559/assets/feature_search_image_2.svg?1618493452970" alt="Đổi trả trong vòng 7 ngày" data-was-processed="true"> 
				</div> 
				<div class="detail"> 
					<a href="" title="Đổi trả trong vòng 7 ngày">Đổi trả trong vòng 7 ngày</a> <p>Lỗi là đổi mới trong 1 tháng tận nhà.</p> 
				</div> 
			</div> 
			<div class="col-lg-3 col-md-6 col-12 item"> 
				<div class="img"> 
					<img class="lazy loaded" width="100" height="100" src="//bizweb.dktcdn.net/100/418/839/themes/808559/assets/feature_search_image_3.svg?1618493452970" data-src="//bizweb.dktcdn.net/100/418/839/themes/808559/assets/feature_search_image_3.svg?1618493452970" alt="Bảo hành chính hãng" data-was-processed="true"> 
				</div> 
				<div class="detail"> 
					<a href="" title="Bảo hành chính hãng">Bảo hành chính hãng</a> <p>Bảo hành chính hãng sản phẩm, có người đến tận nhà</p>
				</div> 
			</div> 
			<div class="col-lg-3 col-md-6 col-12 item"> 
				<div class="img"> 
					<img class="lazy loaded" width="100" height="100" src="//bizweb.dktcdn.net/100/418/839/themes/808559/assets/feature_search_image_4.svg?1618493452970" data-src="//bizweb.dktcdn.net/100/418/839/themes/808559/assets/feature_search_image_4.svg?1618493452970" alt="Phương thức thanh toán" data-was-processed="true"> 
				</div> 
				<div class="detail"> <a href="" title="Phương thức thanh toán">Phương thức thanh toán</a> 
					<p>Hỗ trợ thanh toán qua thẻ: Vietcombank, Techcombank, BIDV,...</p> 
				</div> 
			</div> 
		</div> 
	</div> 
</section>

<section class="awe-section-3">
	<div class="section_banner">
		<div class="hotdeal-title clearfix">
			<a class="hotdeal-title-a" href="san-pham-moi" title="Giá sốc cuối tuần">Giá sốc cuối tuần</a>
			<div class="hotdeal-sub-title">Giảm giá đến 70%</div>
		</div>

		<div class="hotdeal-content">
			<div class="container">
				<div class="products-view-grid">
					<?php
					for ($i=0; $i < 7; $i++) { 
						echo '<div class="evo-product-item"> 
						<div class="thumb-evo"> 
						<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> 
						<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" data-src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> 
						</a> 
						</div> 
						<div class="pro-brand"> 
						<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
						</div> 
						<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
						<div class="flex-prices"> 
						<div class="block-prices"> 
						<strong class="product-price">3.580.000₫</strong> 
						<strong class="product-old-price">6.450.000₫</strong>
						</div> 
						<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
						<input type="hidden" name="variantId" value="42790158"> 
						<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
						<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
						<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
						</svg>
						</button> 
						</form> 
						</div> 
						</div>';
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="awe-section-4">
	<div class="container evo_block-product evo_block-product-color-1">
		<div class="e-tabs not-dqtab ajax-tab-1">
			<div class="content">
				<div class="titlecp clearfix"> 
					<h3>Sản phẩm mới</h3> 
					<span class="hidden-md hidden-lg button_show_tab"> 
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span> 
					</span> 
					<ul id="myBtnContainer" class="tabs tabs-title tab-desktop ajax clearfix evo-close"> 
						<li class="tab-link has-content current" data-tab="tab-1" data-url="/san-pham-moi"> 
							<span title="Sản phẩm mới">Sản phẩm mới</span> 
						</li> 
						<li class="tab-link has-content" data-tab="tab-2" data-url="/may-cam-tay-dien"> 
							<span title="Máy cầm tay điện">Máy cầm tay điện</span> 
						</li> 
						<li class="tab-link has-content" data-tab="tab-3" data-url="/may-cam-tay-pin"> 
							<span title="Máy cầm tay pin">Máy cầm tay pin</span> 
						</li> 
						<li class="tab-link has-content" data-tab="tab-4" data-url="/phu-kien-may-moc"> 
							<span title="Phụ kiện máy móc">Phụ kiện máy móc</span> 
						</li> 
						<li class="tab-link has-content" data-tab="tab-5" data-url="/co-khi-dien-nuoc"> 
							<span title="Cơ khí điện nước">Cơ khí điện nước</span> 
						</li> 
					</ul> 
				</div>
				<div class="tab-1 tab-content current">
					<div class="evo-owl-product2">
						<?php
						$new_products = $__ALL_PRODUCT;
						$cdate = array_column($new_products, 'cdate');
						array_multisort($cdate, SORT_DESC, $new_products);

						foreach ($new_products as $key => $value) {
							if($key<10){
								$name = stripcslashes($value['name']);
								$price = $value['price']!='' && $value['price']!=0 ? number_format($value['price']).'₫' : 'Liên hệ';
								$price1 = $value['price1']!='' && $value['price1']!=0 ? number_format($value['price1']).'₫' : 'no';
								$thumb = getThumb('', '','');
								$img_src = $value['thumb']!='' ? $value['thumb'] : IMAGE_DEFAULT;
								$group_name = $__ALL_PRODUCT_GOURP[$value['group_id']]['title'];
								$group_alias = $__ALL_PRODUCT_GOURP[$value['group_id']]['alias'];
								$link = ROOTHOST.'san-pham/'.$group_alias.'/'.$value['alias'].'-'.$value['id'];

								echo '
								<div class="col-lg-3 col-md-3 col-sm-4 col-6">
								<div class="evo-product-item">
								<div class="thumb-evo">
								<a class="thumb-img" href="'.$link.'" title="'.$name.'"> 
								<img class="lazy loaded" src="'.$img_src.'" alt="'.$name.'"> 
								</a>
								</div>
								<div class="pro-brand"> <a href="/search?query=" title=""></a> </div>
								<a href="'.$link.'" title="'.$name.'" class="title">'.$name.'</a>
								<div class="flex-prices"> 
								<div class="block-prices">';
								if($price1=='no'){
									echo '<strong class="product-price">'.$price.'</strong>';
								}else{
									echo '<strong class="product-price">'.$price.'</strong> 
									<span class="product-old-price">'.$price1.'</span>';
								}

								echo '</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> 
								<input type="hidden" name="variantId" value="42790185"> 
								<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
								<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path></svg>
								</button> 
								</form> 
								</div>
								</div>
								</div>';
							}
						}
						?>
					</div>
				</div>

				<div class="tab-2 tab-content">
					<div class="evo-owl-product2">
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
					</div>
				</div>

				<div class="tab-3 tab-content">
					<div class="evo-owl-product2">
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
					</div>
				</div>

				<div class="tab-4 tab-content">
					<div class="evo-owl-product2">
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
					</div>
				</div>

				<div class="tab-5 tab-content">
					<div class="evo-owl-product2">
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
						<div class="evo-product-item"> 
							<div class="thumb-evo"> 
								<a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470"> <img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" data-was-processed="true"> </a> 
							</div> 
							<div class="pro-brand"> 
								<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
							</div> 
							<a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a> 
							<div class="flex-prices"> 
								<div class="block-prices"> 
									<strong class="product-price">3.580.000₫</strong> 
								</div> 
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884647"> 
									<input type="hidden" name="variantId" value="42790158"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
										<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
											<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
										</svg>
									</button> 
								</form> 
							</div> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="awe-section-5">
	<div class="container section_banner_evo">
		<div class="row"> 
			<div class="col-md-6 col-12"> 
				<a href="/collections/all" title="Evo Tools"> 
					<img width="680" height="226" class="lazy loaded" src="//bizweb.dktcdn.net/100/418/839/themes/808559/assets/feature_banner_1.jpg" alt="Evo Tools" data-was-processed="true"> 
				</a> 
			</div> 
			<div class="col-md-6 col-12"> 
				<a href="/collections/all" title="Evo Tools"> 
					<img width="680" height="226" class="lazy loaded" src="//bizweb.dktcdn.net/100/418/839/themes/808559/assets/feature_banner_2.jpg" alt="Evo Tools" data-was-processed="true"> 
				</a> 
			</div> 
		</div>
	</div>
</section>

<section class="awe-section-6">
	<div class="evo_block-product evo_block-product-color-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 fix-width-left"> 
					<div class="evo-left-cate lazy" style="background-image: url(<?php echo ROOTHOST;?>medias/images/evo_block_product_banner_2.jpg);"> 
						<div class="title"> Máy cầm tay điện </div> 
						<div class="menu-left"> 
							<a href="/may-khoan-van-vit" title="Máy khoan vặn vít">Máy khoan vặn vít</a> 
							<a href="/may-mai-goc-cat-gach" title="Máy mài góc cắt gạch">Máy mài góc cắt gạch</a> <a href="/may-cua-dia-cua-xich" title="Máy cưa đĩa cưa xích">Máy cưa đĩa cưa xích</a> 
							<a href="/may-khoan-duc-be-tong" title="Máy khoan đục bê tông">Máy khoan đục bê tông</a> 
							<a href="/may-cha-nham-danh-bong" title="Máy chà nhám đánh bóng">Máy chà nhám đánh bóng</a> 
						</div> 
						<div class="viewmore"> 
							<a href="san-pham-moi" title="Xem tất cả">Xem tất cả</a> 
						</div> 
					</div> 
				</div>

				<div class="col-lg-9 fix-width-right">
					<div class="e-tabs not-dqtab ajax-tab-2">
						<ul class="tabs tabs-title tab-desktop ajax clearfix evo-close"> 
							<li class="tab-link has-content current" data-tab="tab-1" data-url="/san-pham-moi"> 
								<span title="Sản phẩm mới">Sản phẩm mới</span> 
							</li> 
							<li class="tab-link " data-tab="tab-2" data-url="/may-cam-tay-dien"> 
								<span title="Máy cầm tay điện">Máy cầm tay điện</span> 
							</li> 
							<li class="tab-link " data-tab="tab-3" data-url="/may-cam-tay-pin"> 
								<span title="Máy cầm tay pin">Máy cầm tay pin</span> 
							</li> 
						</ul>
					</div>

					<div class="tab-1 tab-content current">
						<div class="evo-owl-product3 products-view-grid">
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
						</div>
					</div>

					<div class="tab-2 tab-content">
						<div class="evo-owl-product3 products-view-grid">
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
						</div>
					</div>

					<div class="tab-3 tab-content">
						<div class="evo-owl-product3 products-view-grid">
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="awe-section-7">
	<div class="evo_block-product evo_block-product-color-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 fix-width-left"> 
					<div class="evo-left-cate lazy" style="background-image: url(<?php echo ROOTHOST;?>medias/images/evo_block_product_banner_2.jpg);"> 
						<div class="title"> Máy cầm tay điện </div> 
						<div class="menu-left"> 
							<a href="/may-khoan-van-vit" title="Máy khoan vặn vít">Máy khoan vặn vít</a> 
							<a href="/may-mai-goc-cat-gach" title="Máy mài góc cắt gạch">Máy mài góc cắt gạch</a> <a href="/may-cua-dia-cua-xich" title="Máy cưa đĩa cưa xích">Máy cưa đĩa cưa xích</a> 
							<a href="/may-khoan-duc-be-tong" title="Máy khoan đục bê tông">Máy khoan đục bê tông</a> 
							<a href="/may-cha-nham-danh-bong" title="Máy chà nhám đánh bóng">Máy chà nhám đánh bóng</a> 
						</div> 
						<div class="viewmore"> 
							<a href="san-pham-moi" title="Xem tất cả">Xem tất cả</a> 
						</div> 
					</div> 
				</div>

				<div class="col-lg-9 fix-width-right">
					<div class="e-tabs not-dqtab ajax-tab-2">
						<ul class="tabs tabs-title tab-desktop ajax clearfix evo-close"> 
							<li class="tab-link has-content current" data-tab="tab-1" data-url="/san-pham-moi"> 
								<span title="Sản phẩm mới">Sản phẩm mới</span> 
							</li> 
							<li class="tab-link " data-tab="tab-2" data-url="/may-cam-tay-dien"> 
								<span title="Máy cầm tay điện">Máy cầm tay điện</span> 
							</li> 
							<li class="tab-link " data-tab="tab-3" data-url="/may-cam-tay-pin"> 
								<span title="Máy cầm tay pin">Máy cầm tay pin</span> 
							</li> 
						</ul>
					</div>

					<div class="tab-1 tab-content current">
						<div class="evo-owl-product3 products-view-grid">
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
						</div>
					</div>

					<div class="tab-2 tab-content">
						<div class="evo-owl-product3 products-view-grid">
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
						</div>
					</div>

					<div class="tab-3 tab-content">
						<div class="evo-owl-product3 products-view-grid">
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
							<div class="evo-product-item"> 
								<div class="thumb-evo"> 
									<strong> 40% </strong> 
									<a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR"> 
										<img class="lazy loaded" src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa cầm tay 18V DeWalt DCS391N-KR" data-was-processed="true"> 
									</a> 
								</div> 
								<div class="pro-brand"> 
									<a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa cầm tay 18V DeWalt DCS391N-KR" class="title">Máy cưa cầm tay 18V DeWalt DCS391N-KR</a> 
								<div class="flex-prices"> 
									<div class="block-prices"> 
										<strong class="product-price">3.890.000₫</strong> 
										<span class="product-old-price">6.450.000₫</span> 
									</div> 
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-20884651"> <input type="hidden" name="variantId" value="42790185"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart">
											<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
											</svg>
										</button> 
									</form> 
								</div> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="awe-section-8">
	<div class="container section_banner_evo_2"> 
		<a href="/collections/all" title="Evo Tools"> 
			<img width="1920" height="432" class="lazy loaded" src="//bizweb.dktcdn.net/100/418/839/themes/808559/assets/feature_banner_0.jpg" alt="Evo Tools"> 
		</a> 
	</div>
</section>

<section class="awe-section-9">
	<div class="section_news container">
		<div class="news-title"> 
			<div class="title"> Tin nổi bật </div> 
			<ul class="news-menu"> 
				<li><a href="/tu-van-san-pham" title="Tư vấn sản phẩm">Tư vấn sản phẩm</a></li> 
				<li><a href="/huong-dan-su-dung" title="Hướng dẫn sử dụng">Hướng dẫn sử dụng</a></li> 
			</ul> 
		</div>
		<div class="news-content row">
			<?php
			$arr_contents = array(1,2,3);
			foreach ($arr_contents as $key => $value) {
				$title = 'Cải tiến gì trên máy khoan pin Bosch GSB 120-LI được mến mộ?';
				$link = ROOTHOST.'tin-tuc/chi-tiet-bai-viet-10.html';
				$thumb = getThumb('', '', '');
				$img_src = ROOTHOST.'medias/contents/may-khoan-bosch-gsb550-1.jpg';
				$pdate = date('d/m/Y', time());
				$sapo = 'Máy khoan pin Bosch GSB 120-LI đời mới nhỏ gọn hơn, mạnh mẽ hơn tối ưu hóa ...';
				echo '<div class="col-lg-3 col-sm-6 col-9">
				<div class="evo-news-item">
				<div class="item-img"> 
				<div class="wrap-thumb" data-src="'.$img_src.'">
				<a href="'.$link.'" title="'.$title.'">'.$thumb.'</a> 
				</div>
				</div>

				<div class="item-img-content">
				<a href="'.$link.'">'.$title.'</a>
				<p>'.$sapo.'</p>
				<div class="evo-author"><i class="fa fa-calendar" aria-hidden="true"></i> '.$pdate.'</div>
				</div>
				</div>
				</div>';
			}
			?>
			<div class="col-lg-3 col-sm-6 col-9">
				<div class="evo-news-item">
					<div class="item-img"> 
						<a href="/cai-tien-gi-tren-may-khoan-pin-bosch-gsb-120-li-duoc-men-mo" title="Cải tiến gì trên máy khoan pin Bosch GSB 120-LI được mến mộ?"> 
							<img width="480" height="320" src="//bizweb.dktcdn.net/thumb/large/100/418/839/articles/may-khoan-bosch-gsb550-1.jpg" alt="Cải tiến gì trên máy khoan pin Bosch GSB 120-LI được mến mộ?" class="lazy img-responsive center-block loaded"> 
						</a> 
					</div>

					<div class="item-img-content">
						<a href="/cai-tien-gi-tren-may-khoan-pin-bosch-gsb-120-li-duoc-men-mo" title="Cải tiến gì trên máy khoan pin Bosch GSB 120-LI được mến mộ?">Cải tiến gì trên máy khoan pin Bosch GSB 120-LI được mến mộ?</a>
						<p> Máy khoan pin Bosch GSB 120-LI đời mới nhỏ gọn hơn, mạnh mẽ hơn tối ưu hóa ... </p>
						<div class="evo-author">
							<i class="fa fa-calendar" aria-hidden="true"></i> 16/02/2021
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>