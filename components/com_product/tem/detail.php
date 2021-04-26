<link rel="stylesheet" href="<?php echo ROOTHOST;?>global/plugins/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo ROOTHOST;?>global/css/evo-products.css">
<?php
$strWhere='';
$getID = isset($_GET['id']) ? antiData($_GET['id'], 'int') : 0;
$getGroupCode = isset($_GET['group']) ? antiData($_GET['group']) : '';

if($getID!==0){
	$strWhere.='AND id='.$getID;
}

/* ------------- all product groups --------------*/
$res_group = SysGetList('tbl_product_group', [], " AND isactive=1");
$arr_group = array();
foreach ($res_group as $key => $value) {
	$arr_group[$value['id']] = $value;
}

/* ------------- all products --------------*/
$all_products = SysGetList('tbl_product', [], " AND isactive=1 ORDER BY cdate DESC");
$arr_product = array();
foreach ($all_products as $key => $value) {
	$arr_product[$value['id']] = $value;
}

/* ---------------------------*/
$res_products = SysGetList('tbl_product', [], $strWhere);
if(count($res_products)>0) {
	$row = $res_products[0];
	$name_product = stripcslashes($row['name']);
	$main_thumb = $row['thumb']!='' ? stripcslashes($row['thumb']) : IMAGE_DEFAULT;
	$arr_images = $row['images']!='' ? json_decode($row['images']) : array();
	array_unshift($arr_images, $main_thumb);
	$price_product = $row['price']!='' && $row['price']!=0 ? number_format($row['price']).'₫' : 'Liên hệ';
	$price1_product = $row['price1']!='' && $row['price1']!=0 ? number_format($row['price1']).'₫' : 'no';

	if($price1_product!=='no'){
		$sale = $row['price'] - $row['price1'];
		$sale = number_format($sale).'₫';
	}

	/* Group product */
	$row_g = $arr_group[$row['group_id']];
	$name_group = $row_g['title'];
	$link_group = ROOTHOST.'san-pham/'.$row_g['alias'];
	?>
	<section class="component">
		<section class="bread-crumb"> 
			<div class="container"> 
				<ul class="breadcrumb"> 
					<li class="home"><a href="<?php echo ROOTHOST;?>" title="Trang chủ"> <span>Trang chủ</span></a></li>
					<li><a href="<?php echo $link_group;?>" title="<?php echo $name_group;?>"> <span><?php echo $name_group;?></span></a></li>
					<li><strong><?php echo $name_product;?></strong></li> 
				</ul> 
			</div> 
		</section>
		<section class="product product-margin">
			<div class="container">
				<div class="details-product product-bottom row">
					<div class="col-xl-5 col-lg-7 col-md-6 col-sm-12 col-12">
						<div class="product-image-block relative">
							<div class="swiper-container gallery-top">
								<div class="swiper-wrapper" id="lightgallery">
									<?php
									foreach ($arr_images as $key => $value) {
										echo '<div class="swiper-slide">
										<img src="'.$value.'" alt="'.$name_product.'" class="img-responsive mx-auto d-block swiper-lazy swiper-lazy-loaded">
										</div>';
									}
									?>
								</div>
							</div>

							<div class="swiper-container gallery-thumbs">
								<div class="swiper-wrapper">
									<?php
									foreach ($arr_images as $key => $value) {
										echo '<div class="swiper-slide">
										<img src="'.$value.'" alt="'.$name_product.'" class="swiper-lazy swiper-lazy-loaded">
										</div>';
									}
									?>
								</div>
								<!-- If we need navigation buttons -->
								<div class="swiper-button-prev"></div>
								<div class="swiper-button-next"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-7 col-lg-5 col-md-6 col-sm-12 col-12">
						<div class="details-pro">
							<div class="product-top clearfix"> 
								<h1 class="title-head"><?php echo $name_product;?></h1> 
								<div class="sku-product clearfix"> 
									<span class="brand d-none">
										Thương hiệu: <strong>Thiên Thanh</strong>
									</span> 
									<span class="variant-sku">Mã sản phẩm: <strong><?php echo $row['pro_code'];?></strong></span> 
								</div> 
								<div>
									<div class="inventory_quantity"> 
										<span class="a-stock a2">Còn hàng</span> 
									</div>
									<div class="price-box clearfix">
										<?php
										if($price1_product=='no'){
											echo '<span class="special-price">
											<span class="price product-price">'.$price_product.'</span> 
											</span>'; 
										}else{
											echo '<span class="special-price">
											<span class="price product-price">'.$price1_product.'</span> 
											</span>'; 
											echo '
											<span class="old-price"> Giá thị trường: <del class="price product-price-old">'.$price_product.'</del>
											</span>
											<span class="save-price">Tiết kiệm: <span class="price product-price-save">'.$sale.'</span> </span> 
											';
										}
										?>
									</div>

									<div class="form-product"> 
										<form enctype="multipart/form-data" id="add-to-cart-form" action="/cart/add" method="post" class="clearfix has-validation-callback"> 
											<div class="box-variant clearfix d-none "> 
												<input type="hidden" id="one_variant" name="variantId" value="42790190"> 
											</div> 
											<div class="form-groups evo-btn-cart clearfix "> 
												<div class="qty-ant clearfix custom-btn-number "> 
													<label>Số lượng:</label> 
													<div class="custom custom-btn-numbers clearfix"> 
														<button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty) &amp; qty > 1 ) result.value--;return false;" class="btn-minus btn-cts" type="button">–</button> 
														<input type="text" class="qty input-text" id="qty" name="quantity" size="4" value="1" maxlength="3" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == 0)this.value=1;" autocomplete="off"> 
														<button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" class="btn-plus btn-cts" type="button">+</button> 
													</div> 
												</div> 
												<div class="btn-mua"> 
													<button type="submit" data-role="addtocart" class="btn btn-lg btn-gray btn-cart btn_buy add_to_cart">Thêm vào giỏ</button> 
													<button type="button" class="btn btn-buy-now">Mua ngay</button> 
												</div>
											</div> 
										</form> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<?php
			$related_product = $row['related_product']!='' ? json_decode($row['related_product']) : array();
			if(count($related_product)>0){
				?>
				<div class="related-product">
					<div class="container">
						<div class="home-title"><a href="/san-pham-moi" title="Sản phẩm liên quan">Sản phẩm liên quan</a></div>
						<div id="evo-owl-product" class="evo-owl-product swiper-container">
							<div class="swiper-wrapper">
								<?php
								foreach ($related_product as $key => $value) {
									$row_p = $arr_product[$value];
									if(count($row_p)>0){
										$name = stripcslashes($row_p['name']);
										$price = $row_p['price']!='' && $row_p['price']!=0 ? number_format($row_p['price']).'₫' : 'Liên hệ';
										$price1 = $row_p['price1']!='' && $row_p['price1']!=0 ? number_format($row_p['price1']).'₫' : 'no';
										$thumb = getThumb('', '','');
										$img_src = $row_p['thumb']!='' ? $row_p['thumb'] : IMAGE_DEFAULT;
										$group_name = $arr_group[$row_p['group_id']]['title'];
										$group_alias = $arr_group[$row_p['group_id']]['alias'];
										$link = ROOTHOST.'san-pham/'.$group_alias.'/'.$row_p['alias'].'-'.$row_p['id'];

										echo '<div class="swiper-slide">
										<div class="evo-product-item"> 
										<div class="thumb-evo">';
										if($price1!=='no'){
											$percent = ($price1-$price)*100;
											echo '<strong> '.$percent.'% </strong> ';
										}
										echo '<a class="thumb-img" href="'.$link.'" title="'.$name.'"> 
										<img class="lazy loaded" src="'.$img_src.'" alt="'.$name.'" data-was-processed="true"> 
										</a> 
										</div> 
										<div class="pro-brand d-none"> 
										<a href="/search?query=vendor:Thiên Thanh" title="Thiên Thanh">Thiên Thanh</a> 
										</div> 
										<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="'.$name.'" class="title">'.$name.'</a> 
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
										<input type="hidden" name="variantId" value="42790190"> 
										<button type="button" title="Thêm vào giỏ" class="action add_to_cart"><svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path></svg></button> 
										</form> 
										</div> 
										</div>
										</div>';
									}
								}
								?>
							</div>
							<!-- If we need navigation buttons -->
							<div class="swiper-button-prev"></div>
							<div class="swiper-button-next"></div>
						</div>
					</div>
				</div>
				<?php
			}
			?>

			<div id="evo-product-content-block" class="container">
				<div class="row">
					<div class="col-lg-9 col-md-12 col-sm-12 col-12 evo-product-tabs margin-bottom-15">
						<h4 class="evo-product-tabs-title">Thông tin sản phẩm</h4>
						<div class="evo-product-tabs-content">
							<div class="fulltext"><?php echo stripcslashes($row['fulltext']);?></div>
						</div>
					</div>

					<div id="product-sidebar" class="col-lg-3 col-md-12 col-sm-12 col-12">
						<aside id="text-2" class="widget widget_text">
							<div class="textwidget">
								<div class="icon-box featured-box icon-box-left text-left">
									<div class="icon-box-img" style="width: 40px">
										<div class="icon">
											<div class="icon-inner"> 
												<img width="45" height="34" src="<?php echo ROOTHOST;?>images/productdetail-icon5.png" class="attachment-medium size-medium" alt="" loading="lazy">
											</div>
										</div>
									</div>
									<div class="icon-box-text last-reset">
										<p><strong>Giao hàng nhanh chóng</strong><br> <span style="font-size: 90%;">chỉ trong vòng 24 giờ</span></p>
									</div>
								</div>

								<div class="icon-box featured-box icon-box-left text-left">
									<div class="icon-box-img" style="width: 40px">
										<div class="icon">
											<div class="icon-inner"> 
												<img width="33" height="34" src="<?php echo ROOTHOST;?>images/productdetail-icon4.png" class="attachment-medium size-medium" alt="" loading="lazy">
											</div>
										</div>
									</div>
									<div class="icon-box-text last-reset">
										<p><strong>Sản phẩm chính hãng</strong><br> <span style="font-size: 90%;">sản phẩm nhập khẩu 100%</span></p>
									</div>
								</div>

								<div class="icon-box featured-box icon-box-left text-left">
									<div class="icon-box-img" style="width: 40px">
										<div class="icon">
											<div class="icon-inner"> 
												<img width="34" height="34" src="<?php echo ROOTHOST;?>images/productdetail-icon3.png" class="attachment-medium size-medium" alt="" loading="lazy">
											</div>
										</div>
									</div>
									<div class="icon-box-text last-reset">
										<p><strong>Mua hàng tiết kiệm</strong><br> <span style="font-size: 90%;">rẻ hơn từ 10% – 30%</span></p>
									</div>
								</div>

								<div class="icon-box featured-box icon-box-left text-left">
									<div class="icon-box-img" style="width: 40px">
										<div class="icon">
											<div class="icon-inner"> 
												<img width="37" height="34" src="<?php echo ROOTHOST;?>images/productdetail-icon1.png" class="attachment-medium size-medium" alt="" loading="lazy">
											</div>
										</div>
									</div>
									<div class="icon-box-text last-reset">
										<p><strong>Hotline mua hàng</strong><br> <span style="font-size: 90%;"><?php echo $res_config['phone'];?></span></p>
									</div>
								</div>
							</div>
						</aside>

						<aside id="woocommerce_products-2" class="widget woocommerce widget_products">
							<span class="widget-title shop-sidebar">Có thể bạn thích</span>
							<div class="is-divider small"></div>
							<ul class="product_list_widget">
								<?php
								for ($i=0; $i < 7; $i++) { 
									$row_p = $all_products[$i];
									$name = stripcslashes($row_p['name']);
									$price = $row_p['price']!='' && $row_p['price']!=0 ? number_format($row_p['price']).'₫' : 'Liên hệ';
									$price1 = $row_p['price1']!='' && $row_p['price1']!=0 ? number_format($row_p['price1']).'₫' : 'no';
									$thumb = getThumb('', '','');
									$img_src = $row_p['thumb']!='' ? $row_p['thumb'] : IMAGE_DEFAULT;
									$group_name = $arr_group[$row_p['group_id']]['title'];
									$group_alias = $arr_group[$row_p['group_id']]['alias'];
									$link = ROOTHOST.'san-pham/'.$group_alias.'/'.$row_p['alias'].'-'.$row_p['id'];

									echo '<li>
									<a href="'.$link.'"> 
									<img src="'.$img_src.'" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail lazy-load-active" alt="'.$name.'"> 
									<span class="product-title">'.$name.'</span> 
									</a>';
									if($price1!=='no'){
										echo '<span class="amount">'.$price1.'</span>';
									}else{
										echo '<span class="amount">'.$price.'</span>';
									}
									echo '</li>';
								}
								?>
							</ul>
						</aside>
					</div>
				</div>
				<div class="widget-related-products">
					<h3>Sản phẩm tương tự</h3>
					<div class="is-divider small"></div>
					<div class="row">
						<?php
						$res_products2 = SysGetList('tbl_product', array(), "AND group_id=".$row_g['id']." LIMIT 0,4");
						if(count($res_products2)>0){
							foreach ($res_products2 as $key => $value) {
								$name = stripcslashes($value['name']);
								$price = $value['price']!='' && $value['price']!=0 ? number_format($value['price']).'₫' : 'Liên hệ';
								$price1 = $value['price1']!='' && $value['price1']!=0 ? number_format($value['price1']).'₫' : 'no';
								$thumb = getThumb('', '','');
								$img_src = $value['thumb']!='' ? $value['thumb'] : IMAGE_DEFAULT;
								$group_name = $arr_group[$value['group_id']]['title'];
								$group_alias = $arr_group[$value['group_id']]['alias'];
								$link = ROOTHOST.'san-pham/'.$group_alias.'/'.$value['alias'].'-'.$value['id'];

								echo '<div class="col-md-3">
								<div class="evo-product-item"> 
								<div class="thumb-evo">';
								if($price1!=='no'){
									$percent = ($price1-$price)*100;
									echo '<strong> '.$percent.'% </strong> ';
								}
								echo '<a class="thumb-img" href="'.$link.'" title="'.$name.'"> 
								<img class="lazy loaded" src="'.$img_src.'" alt="'.$name.'" data-was-processed="true"> 
								</a> 
								</div> 
								<div class="pro-brand d-none"> 
								<a href="/search?query=vendor:Thiên Thanh" title="Thiên Thanh">Thiên Thanh</a> 
								</div> 
								<a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="'.$name.'" class="title">'.$name.'</a> 
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
								<input type="hidden" name="variantId" value="42790190"> 
								<button type="button" title="Thêm vào giỏ" class="action add_to_cart"><svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path></svg></button> 
								</form> 
								</div> 
								</div>
								</div>';
							}
						}
						?>
					</div>
				</div>
			</div>
		</section>
	</section>
	<?php 
} ?>
<script src="<?php echo ROOTHOST;?>global/plugins/swiper/swiper-bundle.min.js"></script>
<script type="text/javascript">
	var galleryThumbs = new Swiper('.gallery-thumbs', {
		spaceBetween: 5,
		slidesPerView: 10,
		lazy: true,
		hashNavigation: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		direction: 'vertical',
		loop: false,
		loopAdditionalSlides: 0,
		breakpoints: {
			300: {
				slidesPerView: 4,
				spaceBetween: 10,
				direction: 'horizontal',
			},
			500: {
				slidesPerView: 4,
				spaceBetween: 10,
				direction: 'horizontal',
			},
			640: {
				slidesPerView: 5,
				spaceBetween: 10,
				direction: 'horizontal',
			},
			768: {
				slidesPerView: 4,
				spaceBetween: 10,
				direction: 'horizontal',
			},
			1024: {
				slidesPerView: 5,
				spaceBetween: 10,
			},
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});

	var galleryTop = new Swiper('.gallery-top', {
		spaceBetween: 0,
		lazy: true,
		hashNavigation: true,
		thumbs: {
			swiper: galleryThumbs
		}
	});

	const swiper = new Swiper('#evo-owl-product', {
		slidesPerView: 1,
		spaceBetween: 10,
		breakpoints: {
			300: {
				slidesPerView: 4,
				spaceBetween: 10,
				direction: 'horizontal',
			},
			500: {
				slidesPerView: 4,
				spaceBetween: 10,
				direction: 'horizontal',
			},
			640: {
				slidesPerView: 5,
				spaceBetween: 10,
				direction: 'horizontal',
			},
			768: {
				slidesPerView: 4,
				spaceBetween: 10,
				direction: 'horizontal',
			},
			1024: {
				slidesPerView: 5,
				spaceBetween: 10,
			},
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	})
</script>