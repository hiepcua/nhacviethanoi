<?php
/* --------------- All product group ------------------- */
$res_all_groups = SysGetList('tbl_product_group', [], " AND isactive=1");
$__ALL_PRODUCT_GOURP = array();
foreach ($res_all_groups as $key => $value) {
	$__ALL_PRODUCT_GOURP[$value['id']] = $value;
}
$__ALL_PRODUCT_GOURP_KEYS = array_keys($__ALL_PRODUCT_GOURP);

/* --------------- All product type ------------------ */
$res_all_type = SysGetList('tbl_product_type', [], " AND isactive=1");
$__ALL_PRODUCT_TYPE = array();	/* Tất cả sản phẩm theo loại sản phẩm */
$__ALL_TYPE_BY_GROUP = array();	/* Tất cả loại sản phẩm theo nhóm sản phẩm */

foreach ($res_all_type as $key => $value) {
	$id = $value['id'];
	$group = $value['id_pgroup'];

	$__ALL_PRODUCT_TYPE[$id] = $value;
	if(!array_key_exists($group, $__ALL_TYPE_BY_GROUP)){
		$arr = array(); 
		array_push($arr, $value);
		$__ALL_TYPE_BY_GROUP[$group] = $arr;
	}else{
		array_push($__ALL_TYPE_BY_GROUP[$group], $value);
	}
}

/* ---------------- All product ----------------- */
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
					<a href="" title="Miễn phí vận chuyển">Miễn phí vận chuyển</a> <p>Thiên Thanh miễn phí vận chuyển với đơn hàng trên 350.000đ</p> 
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
					$sale_products = $__ALL_PRODUCT;
					$price1 = array_column($sale_products, 'price1');
					array_multisort($price1, SORT_DESC, $sale_products);
					foreach ($sale_products as $key => $value) {
						if($key<10){
							$id_pro = $value['id'];
							$name = stripcslashes($value['name']);
							$price = $value['price']!='' && $value['price']!=0 ? number_format($value['price']).'₫' : 'Liên hệ';
							$price1 = $value['price1']!='' && $value['price1']!=0 ? number_format($value['price1']).'₫' : 'no';
							$images = $value['images']!=='' ? json_decode($value['images']) : '';
							$thumb = getThumb('', '','');

							if($images!=='' && $value['thumb']==''){
								$img_src = $images[0];
							}else{
								$img_src = $value['thumb']!='' ? $value['thumb'] : IMAGE_DEFAULT;
							}

							$group_name = $__ALL_PRODUCT_GOURP[$value['group_id']]['title'];
							$group_alias = $__ALL_PRODUCT_GOURP[$value['group_id']]['alias'];
							$link = ROOTHOST.'san-pham/'.$group_alias.'/'.$value['alias'].'-'.$value['id'];

							echo '
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
							<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback">
							<button type="button" title="Thêm vào giỏ" class="action add_to_cart" data-productid="'.$id_pro.'">
							<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path></svg>
							</button> 
							</form> 
							</div>
							</div>';
						}
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
						<li class="tab-link has-content current" data-tab="tab-0" data-url="/san-pham-moi"> 
							<span title="Sản phẩm mới">Sản phẩm mới</span> 
						</li> 
						<?php
						$i=0;
						foreach ($__ALL_PRODUCT_GOURP as $key => $value) {
							$i++;
							if($i<4){
								echo '<li class="tab-link has-content" data-tab="tab-'.$key.'"> <span title="'.$value['title'].'">'.$value['title'].'</span></li> ';
							}
						}
						?>
					</ul> 
				</div>

				<div class="tab-0 tab-content current">
					<div class="evo-owl-product2 products-view-grid">
						<?php
						$new_products = $__ALL_PRODUCT;
						$cdate = array_column($new_products, 'cdate');
						array_multisort($cdate, SORT_DESC, $new_products);

						foreach ($new_products as $key => $value) {
							if($key<10){
								$id_pro = $value['id'];
								$name = stripcslashes($value['name']);
								$price = $value['price']!='' && $value['price']!=0 ? number_format($value['price']).'₫' : 'Liên hệ';
								$price1 = $value['price1']!='' && $value['price1']!=0 ? number_format($value['price1']).'₫' : 'no';
								$images = $value['images']!=='' ? json_decode($value['images']) : '';
								$thumb = getThumb('', '','');

								if($images!=='' && $value['thumb']==''){
									$img_src = $images[0];
								}else{
									$img_src = $value['thumb']!='' ? $value['thumb'] : IMAGE_DEFAULT;
								}
								
								$group_name = $__ALL_PRODUCT_GOURP[$value['group_id']]['title'];
								$group_alias = $__ALL_PRODUCT_GOURP[$value['group_id']]['alias'];
								$link = ROOTHOST.'san-pham/'.$group_alias.'/'.$value['alias'].'-'.$value['id'];

								echo '
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
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback"> 
								<button type="button" title="Thêm vào giỏ" class="action add_to_cart" data-productid="'.$id_pro.'">
								<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path></svg>
								</button> 
								</form> 
								</div>
								</div>';
							}
						}
						?>
					</div>
				</div>

				<div class="tab-<?php echo $__ALL_PRODUCT_GOURP_KEYS[0];?> tab-content">
					<div class="evo-owl-product2 products-view-grid">
						<?php
						$tab_products = array();
						foreach ($__ALL_PRODUCT as $key => $value) {
							if($__ALL_PRODUCT_GOURP_KEYS[0] == $value['group_id']){
								$tab_products[] = $value;
							}
						}

						foreach ($tab_products as $key => $value) {
							if($key<10){
								$id_pro = (int)$value['id'];
								$name = stripcslashes($value['name']);
								$price = $value['price']!='' && $value['price']!=0 ? number_format($value['price']).'₫' : 'Liên hệ';
								$price1 = $value['price1']!='' && $value['price1']!=0 ? number_format($value['price1']).'₫' : 'no';
								$images = $value['images']!=='' ? json_decode($value['images']) : '';
								$thumb = getThumb('', '','');

								if($images!=='' && $value['thumb']==''){
									$img_src = $images[0];
								}else{
									$img_src = $value['thumb']!='' ? $value['thumb'] : IMAGE_DEFAULT;
								}
								
								$group_name = $__ALL_PRODUCT_GOURP[$value['group_id']]['title'];
								$group_alias = $__ALL_PRODUCT_GOURP[$value['group_id']]['alias'];
								$link = ROOTHOST.'san-pham/'.$group_alias.'/'.$value['alias'].'-'.$value['id'];

								echo '
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
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback"> 
								<button type="button" title="Thêm vào giỏ" class="action add_to_cart" data-productid="'.$id_pro.'">
								<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path></svg>
								</button> 
								</form> 
								</div>
								</div>';
							}
						}
						?>
					</div>
				</div>

				<div class="tab-<?php echo $__ALL_PRODUCT_GOURP_KEYS[1];?> tab-content">
					<div class="evo-owl-product2 products-view-grid">
						<?php
						$tab_products = array();
						foreach ($__ALL_PRODUCT as $key => $value) {
							if($__ALL_PRODUCT_GOURP_KEYS[1] == $value['group_id']){
								$tab_products[] = $value;
							}
						}

						foreach ($tab_products as $key => $value) {
							if($key<10){
								$id_pro = $value['id'];
								$name = stripcslashes($value['name']);
								$price = $value['price']!='' && $value['price']!=0 ? number_format($value['price']).'₫' : 'Liên hệ';
								$price1 = $value['price1']!='' && $value['price1']!=0 ? number_format($value['price1']).'₫' : 'no';
								$images = $value['images']!=='' ? json_decode($value['images']) : '';
								$thumb = getThumb('', '','');

								if($images!=='' && $value['thumb']==''){
									$img_src = $images[0];
								}else{
									$img_src = $value['thumb']!='' ? $value['thumb'] : IMAGE_DEFAULT;
								}
								
								$group_name = $__ALL_PRODUCT_GOURP[$value['group_id']]['title'];
								$group_alias = $__ALL_PRODUCT_GOURP[$value['group_id']]['alias'];
								$link = ROOTHOST.'san-pham/'.$group_alias.'/'.$value['alias'].'-'.$value['id'];

								echo '
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
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback"> 
								<button type="button" title="Thêm vào giỏ" class="action add_to_cart" data-productid="'.$id_pro.'">
								<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path></svg>
								</button> 
								</form> 
								</div>
								</div>';
							}
						}
						?>
					</div>
				</div>

				<div class="tab-<?php echo $__ALL_PRODUCT_GOURP_KEYS[2];?> tab-content">
					<div class="evo-owl-product2 products-view-grid">
						<?php
						$tab_products = array();
						foreach ($__ALL_PRODUCT as $key => $value) {
							if($__ALL_PRODUCT_GOURP_KEYS[2] == $value['group_id']){
								$tab_products[] = $value;
							}
						}

						foreach ($tab_products as $key => $value) {
							if($key<10){
								$id_pro = $value['id'];
								$name = stripcslashes($value['name']);
								$price = $value['price']!='' && $value['price']!=0 ? number_format($value['price']).'₫' : 'Liên hệ';
								$price1 = $value['price1']!='' && $value['price1']!=0 ? number_format($value['price1']).'₫' : 'no';
								$images = $value['images']!=='' ? json_decode($value['images']) : '';
								$thumb = getThumb('', '','');

								if($images!=='' && $value['thumb']==''){
									$img_src = $images[0];
								}else{
									$img_src = $value['thumb']!='' ? $value['thumb'] : IMAGE_DEFAULT;
								}
								
								$group_name = $__ALL_PRODUCT_GOURP[$value['group_id']]['title'];
								$group_alias = $__ALL_PRODUCT_GOURP[$value['group_id']]['alias'];
								$link = ROOTHOST.'san-pham/'.$group_alias.'/'.$value['alias'].'-'.$value['id'];

								echo '
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
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback"> 
								<button type="button" title="Thêm vào giỏ" class="action add_to_cart" data-productid="'.$id_pro.'">
								<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path></svg>
								</button> 
								</form> 
								</div>
								</div>';
							}
						}
						?>
					</div>
				</div>

				<div class="tab-<?php echo $__ALL_PRODUCT_GOURP_KEYS[3];?> tab-content">
					<div class="evo-owl-product2 products-view-grid">
						<?php
						$tab_products = array();
						foreach ($__ALL_PRODUCT as $key => $value) {
							if($__ALL_PRODUCT_GOURP_KEYS[3] == $value['group_id']){
								$tab_products[] = $value;
							}
						}

						foreach ($tab_products as $key => $value) {
							if($key<10){
								$id_pro = $value['id'];
								$name = stripcslashes($value['name']);
								$price = $value['price']!='' && $value['price']!=0 ? number_format($value['price']).'₫' : 'Liên hệ';
								$price1 = $value['price1']!='' && $value['price1']!=0 ? number_format($value['price1']).'₫' : 'no';
								$images = $value['images']!=='' ? json_decode($value['images']) : '';
								$thumb = getThumb('', '','');

								if($images!=='' && $value['thumb']==''){
									$img_src = $images[0];
								}else{
									$img_src = $value['thumb']!='' ? $value['thumb'] : IMAGE_DEFAULT;
								}
								
								$group_name = $__ALL_PRODUCT_GOURP[$value['group_id']]['title'];
								$group_alias = $__ALL_PRODUCT_GOURP[$value['group_id']]['alias'];
								$link = ROOTHOST.'san-pham/'.$group_alias.'/'.$value['alias'].'-'.$value['id'];

								echo '
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
								<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback"> 
								<button type="button" title="Thêm vào giỏ" class="action add_to_cart" data-productid="'.$id_pro.'">
								<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path></svg>
								</button> 
								</form> 
								</div>
								</div>';
							}
						}
						?>
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
				<a href="<?php echo ROOTHOST;?>khuyen-mai" title="Thiên Thanh">
					<img width="680" height="226" class="lazy loaded" src="<?php echo ROOTHOST;?>images/feature_banner_1.jpg" alt="Thiên Thanh" data-was-processed="true"> 
				</a> 
			</div> 
			<div class="col-md-6 col-12"> 
				<a href="<?php echo ROOTHOST;?>khuyen-mai" title="Thiên Thanh">
					<img width="680" height="226" class="lazy loaded" src="<?php echo ROOTHOST;?>images/feature_banner_2.jpg" alt="Thiên Thanh" data-was-processed="true"> 
				</a> 
			</div> 
		</div>
	</div>
</section>

<section class="awe-section-6">
	<div class="evo_block-product evo_block-product-color-2">
		<div class="container">
			<?php
			$id_anhsang_product = 4;
			/* Get all loa product */
			$res_product_anhsang = array();
			foreach ($__ALL_PRODUCT as $key => $value) {
				if($value['group_id']==$id_anhsang_product){
					$res_product_anhsang[] = $value;
				}
			}

			/* Get all keys loa product */
			$res_ptype_anhsang = $__ALL_TYPE_BY_GROUP[$id_anhsang_product];
			/* Row product group với id loa */
			$arr_group_anhsang = $__ALL_PRODUCT_GOURP[$id_anhsang_product];
			?>
			<div class="row">
				<div class="col-lg-3 fix-width-left"> 
					<div class="evo-left-cate lazy" style="background-image: url(<?php echo ROOTHOST;?>images/bg12.jpg);"> 
						<div class="title"> <?php echo $arr_group_anhsang['title'];?> </div> 
						<div class="menu-left"> 
							<?php
							foreach ($res_ptype_anhsang as $key => $value) {
								echo '<a href="'.ROOTHOST.'san-pham/'.$arr_group_anhsang['alias'].'/'.$value['alias'].'" title="'.$value['title'].'">'.$value['title'].'</a> ';
							}
							?>
						</div> 
						<div class="viewmore"> 
							<a href="<?php echo ROOTHOST.'san-pham/'.$__ALL_PRODUCT_GOURP[$id_anhsang_product]['alias'];?>" title="Xem tất cả">Xem tất cả</a>
						</div> 
					</div> 
				</div>

				<div class="col-lg-9 fix-width-right">
					<div class="e-tabs not-dqtab ajax-tab-2">
						<ul class="tabs tabs-title tab-desktop ajax clearfix evo-close"> 
							<?php
							foreach ($res_ptype_anhsang as $key => $value) {
								if($key>3) continue; 
								$current = $key == 0 ? 'current' : '';
								echo '<li class="tab-link has-content '.$current.'" data-tab="tab-'.$key.'"> 
								<span title="'.$value['title'].'">'.$value['title'].'</span> 
								</li> ';
							}
							?>
						</ul>

						<?php
						foreach ($res_ptype_anhsang as $key1 => $value1) {
							$current = $key1 == 0 ? 'current' : '';
							echo '<div class="tab-'.$key1.' tab-content '.$current.'">';
							echo '<div class="evo-owl-product3 products-view-grid">';
							foreach ($res_product_anhsang as $key => $value) {
								if($key>10) break;
								if($value['type_id'] == $value1['id']){
									$id_pro = $value['id'];
									$name = stripcslashes($value['name']);
									$price = $value['price']!='' && $value['price']!=0 ? number_format($value['price']).'₫' : 'Liên hệ';
									$price1 = $value['price1']!='' && $value['price1']!=0 ? number_format($value['price1']).'₫' : 'no';
									$images = $value['images']!=='' ? json_decode($value['images']) : '';
									$thumb = getThumb('', '','');

									if($images!=='' && $value['thumb']==''){
										$img_src = $images[0];
									}else{
										$img_src = $value['thumb']!='' ? $value['thumb'] : IMAGE_DEFAULT;
									}
									
									$group_name = $__ALL_PRODUCT_GOURP[$value['group_id']]['title'];
									$group_alias = $__ALL_PRODUCT_GOURP[$value['group_id']]['alias'];
									$link = ROOTHOST.'san-pham/'.$group_alias.'/'.$value['alias'].'-'.$value['id'];

									echo '
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
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart" data-productid="'.$id_pro.'">
									<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path></svg>
									</button> 
									</form> 
									</div>
									</div>';
								}
							}
							echo '</div>';
							echo '</div>';
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="awe-section-7">
	<div class="evo_block-product evo_block-product-color-2">
		<div class="container">
			<?php
			$id_loa_product = 6;
			/* Get all loa product */
			$res_product_loa = array();
			foreach ($__ALL_PRODUCT as $key => $value) {
				if($value['group_id']==$id_loa_product){
					$res_product_loa[] = $value;
				}
			}

			/* Get all keys loa product */
			$res_ptype_loa = $__ALL_TYPE_BY_GROUP[$id_loa_product];
			/* Row product group với id loa */
			$arr_group_loa = $__ALL_PRODUCT_GOURP[$id_loa_product];
			?>
			<div class="row">
				<div class="col-lg-3 fix-width-left"> 
					<div class="evo-left-cate lazy" style="background-image: url(<?php echo ROOTHOST;?>images/bg13.jpg);">
						<div class="title"> <?php echo $arr_group_loa['title'];?> </div> 
						<div class="menu-left"> 
							<?php
							foreach ($res_ptype_loa as $key => $value) {
								echo '<a href="'.ROOTHOST.'san-pham/'.$arr_group_loa['alias'].'/'.$value['alias'].'" title="'.$value['title'].'">'.$value['title'].'</a> ';
							}
							?>
						</div> 
						<div class="viewmore"> 
							<a href="<?php echo ROOTHOST.'san-pham/'.$__ALL_PRODUCT_GOURP[$id_loa_product]['alias'];?>" title="Xem tất cả">Xem tất cả</a>
						</div>
					</div> 
				</div>

				<div class="col-lg-9 fix-width-right">
					<div class="e-tabs not-dqtab ajax-tab-2">
						<ul class="tabs tabs-title tab-desktop ajax clearfix evo-close"> 
							<?php
							foreach ($res_ptype_loa as $key => $value) {
								if($key>3) continue; 
								$current = $key == 0 ? 'current' : '';
								echo '<li class="tab-link has-content '.$current.'" data-tab="tab-'.$key.'"> 
								<span title="'.$value['title'].'">'.$value['title'].'</span> 
								</li> ';
							}
							?>
						</ul>

						<?php
						foreach ($res_ptype_loa as $key1 => $value1) {
							if($key1>3) break;
							$current = $key1 == 0 ? 'current' : '';
							echo '<div class="tab-'.$key1.' tab-content '.$current.'">';
							echo '<div class="evo-owl-product3 products-view-grid">';
							foreach ($res_product_loa as $key => $value) {
								if($key>10) break;
								if($value['type_id'] == $value1['id']){
									$id_pro = $value['id'];
									$name = stripcslashes($value['name']);
									$price = $value['price']!='' && $value['price']!=0 ? number_format($value['price']).'₫' : 'Liên hệ';
									$price1 = $value['price1']!='' && $value['price1']!=0 ? number_format($value['price1']).'₫' : 'no';
									$images = $value['images']!=='' ? json_decode($value['images']) : '';
									$thumb = getThumb('', '','');

									if($images!=='' && $value['thumb']==''){
										$img_src = $images[0];
									}else{
										$img_src = $value['thumb']!='' ? $value['thumb'] : IMAGE_DEFAULT;
									}
									
									$group_name = $__ALL_PRODUCT_GOURP[$value['group_id']]['title'];
									$group_alias = $__ALL_PRODUCT_GOURP[$value['group_id']]['alias'];
									$link = ROOTHOST.'san-pham/'.$group_alias.'/'.$value['alias'].'-'.$value['id'];

									echo '
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
									<form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback"> 
									<button type="button" title="Thêm vào giỏ" class="action add_to_cart" data-productid="'.$id_pro.'">
									<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path></svg>
									</button> 
									</form> 
									</div>
									</div>';
								}
							}
							echo '</div>';
							echo '</div>';
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="awe-section-8">
	<div class="container section_banner_evo_2"> 
		<a href="<?php echo ROOTHOST;?>san-pham" title="Thiên Thanh"> 
			<img class="lazy loaded" src="<?php echo ROOTHOST;?>images/bg2.jpg" alt="Thiên Thanh"> 
		</a> 
	</div>
</section>

<section class="awe-section-9">
	<div class="section_news container">
		<div class="news-title"> 
			<div class="title"> Tin nổi bật </div> 
			<ul class="news-menu"> 
				<li><a href="<?php echo ROOTHOST;?>tin-tuc/su-kien-tieu-bieu" title="Sự kiện tiêu biểu">Sự kiện tiêu biểu</a></li> 
				<li><a href="<?php echo ROOTHOST;?>tin-tuc" title="Dịch vụ">Dịch vụ</a></li> 
			</ul> 
		</div>
		<div class="news-content row">
			<?php
			$res_contents = SysGetList('tbl_content', array(), "AND isactive=1 AND ishot=1");
			if(count($res_contents)>0){
				foreach ($res_contents as $key => $value) {
					if($key<4){
						$title = $value['title'];
						$link = ROOTHOST.'tin-tuc/'.$value['alias'].'-'.$value['id'].'.html';
						$thumb = getThumb('', '', '');
						$img_src = $value['images']!=='' ? $value['images'] : IMAGE_DEFAULT;
						$pdate = date('d/m/Y', $value['cdate']);
						$sapo = Substring($value['sapo'],0,30);
						echo '<div class="col-lg-3 col-sm-6 col-9">
						<div class="evo-news-item">
						<div class="item-img"> 
						<a href="'.$link.'" title="'.$title.'">
						<div class="wrap-thumb" data-src="'.$img_src.'">
						'.$thumb.' 
						</div>
						</a>
						</div>

						<div class="item-img-content">
						<a href="'.$link.'">'.$title.'</a>
						<p>'.$sapo.'</p>
						<div class="evo-author"><i class="fa fa-calendar" aria-hidden="true"></i> '.$pdate.'</div>
						</div>
						</div>
						</div>';
					}
				}
			}
			?>
		</div>
	</div>
</section>