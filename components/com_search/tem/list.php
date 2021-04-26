<?php
$get_q = isset($_GET['q']) ? antiData($_GET['q']) : '';
$strWhere = "";
if($get_q!==''){
	$strWhere .= "AND name LIKE '%".$get_q."%'";
}

/*Begin pagging*/
$total_rows = SysCount('tbl_product',$strWhere);
$max_rows = 10;
$max_pages = ceil($total_rows/$max_rows);
$cur_page = getCurentPage($max_pages);
$start = ($cur_page - 1) * $max_rows;
$limit = 'LIMIT '.$start.','. $max_rows;
/*End pagging*/

$res_products = SysGetList('tbl_product', [], $strWhere." LIMIT ".$start.",".$max_rows);
?>
<link rel="stylesheet" type="text/css" href="<?php echo ROOTHOST;?>global/css/evo-search.css">
<section class="component">
	<section class="bread-crumb"> 
		<div class="container"> 
			<ul class="breadcrumb"> 
				<li class="home"><a href="<?php echo ROOTHOST;?>" title="Trang chủ"> <span>Trang chủ</span></a></li>
				<li><strong>Kết quả tìm kiếm</strong></li> 
			</ul> 
		</div> 
	</section>
	<div class="signup search-main collections-container padding-top-20">
		<div class="container margin-bottom-20">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h1 class="title-head text-center margin-bottom-20 margin-top-0">Có <?php echo count($res_products);?> kết quả tìm kiếm phù hợp</h1>
				</div>

				<div class="col-lg-12 col-md-12 col-sm-12">
					<?php if(count($res_products)>0): ?>
						<div class="products-view-grid products row">
							<?php
							foreach ($res_products as $key => $value) {
								$name = stripcslashes($value['name']);
								$price = $value['price']!='' && $value['price']!=0 ? number_format($value['price']).'₫' : 'Liên hệ';
								$price1 = $value['price1']!='' && $value['price1']!=0 ? number_format($value['price1']).'₫' : 'no';
								$thumb = getThumb('', '','');
								$img_src = $value['thumb']!='' ? $value['thumb'] : IMAGE_DEFAULT;
								$group_name = $arr_group[$value['group_id']]['title'];
								$group_alias = $arr_group[$value['group_id']]['alias'];
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
							?>
						</div>
						<div class="pagging">
							<?php paging($total_rows,$max_rows,$cur_page); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>