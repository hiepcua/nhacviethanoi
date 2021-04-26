<?php
$strWhere = $price_asc = $price_desc = $lasted_new = "";
$GetSortby = isset($_GET['sortby']) ? antiData($_GET['sortby']) : 'cdate';
/*Begin pagging*/
$strWhere.='AND price1!=0';
$total_rows = SysCount('tbl_product',$strWhere);
$max_rows = 10;
$max_pages = ceil($total_rows/$max_rows);
$cur_page = getCurentPage($max_pages);
$start = ($cur_page - 1) * $max_rows;
$limit = 'LIMIT '.$start.','. $max_rows;
/*End pagging*/
$res_products = SysGetList('tbl_product', [], $strWhere." ORDER BY cdate DESC ".$limit);
$res_group = SysGetList('tbl_product_group', [], " AND isactive=1");
$arr_group = array();
foreach ($res_group as $key => $value) {
	$arr_group[$value['id']] = $value;
}
?>
<link rel="stylesheet" type="text/css" href="<?php echo ROOTHOST;?>global/css/evo-collections.css">
<section class="component">
	<section class="bread-crumb"> 
		<div class="container"> 
			<ul class="breadcrumb"> 
				<li class="home"><a href="<?php echo ROOTHOST;?>" title="Trang chủ"> <span>Trang chủ</span></a></li>
				<li><strong>Tất cả sản phẩm</strong></li> 
			</ul> 
		</div> 
	</section>
	<div class="page page-list-product container">
		<div class="main_container collection margin-bottom-5">
			<div class="page-header">
				<h1 class="col-title">Tất cả sản phẩm</h1>
			</div>
			<div class="page-content">
				<div class="row">
					<form id="frm_search" class="d-none" method="GET" action="">
						<input type="hidden" id="sortby" name="sortby" value="<?php echo $GetSortby;?>">
					</form>
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="category-products products category-products-grids clearfix">
							<div class="sort-cate clearfix">
								<div class="sort-cate-left">
									<h3><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="12px" height="12px" viewBox="0 0 97.761 97.762" style="enable-background:new 0 0 97.761 97.762;" xml:space="preserve"> <path d="M42.761,65.596H34.75V2c0-1.105-0.896-2-2-2H16.62c-1.104,0-2,0.895-2,2v63.596H6.609c-0.77,0-1.472,0.443-1.804,1.137 c-0.333,0.695-0.237,1.519,0.246,2.117l18.076,26.955c0.38,0.473,0.953,0.746,1.558,0.746s1.178-0.273,1.558-0.746L44.319,68.85 c0.482-0.6,0.578-1.422,0.246-2.117C44.233,66.039,43.531,65.596,42.761,65.596z"></path> <path d="M93.04,95.098L79.71,57.324c-0.282-0.799-1.038-1.334-1.887-1.334h-3.86c-0.107,0-0.213,0.008-0.318,0.024 c-0.104-0.018-0.21-0.024-0.318-0.024h-3.76c-0.849,0-1.604,0.535-1.887,1.336L54.403,95.1c-0.215,0.611-0.12,1.289,0.255,1.818 s0.983,0.844,1.633,0.844h5.773c0.88,0,1.657-0.574,1.913-1.416l2.536-8.324h14.419l2.536,8.324 c0.256,0.842,1.033,1.416,1.913,1.416h5.771c0.649,0,1.258-0.314,1.633-0.844C93.16,96.387,93.255,95.709,93.04,95.098z M68.905,80.066c2.398-7.77,4.021-13.166,4.82-16.041l4.928,16.041H68.905z"></path> <path d="M87.297,34.053H69.479L88.407,6.848c0.233-0.336,0.358-0.734,0.358-1.143V2.289c0-1.104-0.896-2-2-2H60.694 c-1.104,0-2,0.896-2,2v3.844c0,1.105,0.896,2,2,2h16.782L58.522,35.309c-0.233,0.336-0.358,0.734-0.358,1.146v3.441 c0,1.105,0.896,2,2,2h27.135c1.104,0,2-0.895,2-2v-3.842C89.297,34.947,88.402,34.053,87.297,34.053z"></path> </svg> Xếp theo</h3>
									<ul>
										<li class="btn-quick-sort alpha-asc <?php if($GetSortby=='name:asc') echo 'active';?>">
											<a href="javascript:;" onclick="sortby('alpha-asc')" title="Tên A-Z"><i></i>Tên A-Z</a>
										</li>
										<li class="btn-quick-sort alpha-desc <?php if($GetSortby=='name:desc') echo 'active';?>"> 
											<a href="javascript:;" onclick="sortby('alpha-desc')" title="Tên Z-A"><i></i>Tên Z-A</a> 
										</li>
										<li class="btn-quick-sort position-desc <?php if($GetSortby=='created_on:desc') echo 'active';?>"> 
											<a href="javascript:;" onclick="sortby('created-desc')" title="Hàng mới"><i></i>Hàng mới</a> 
										</li>
										<li class="btn-quick-sort price-asc <?php if($GetSortby=='price_min:asc') echo 'active';?>"> 
											<a href="javascript:;" onclick="sortby('price-asc')" title="Giá thấp đến cao"><i></i>Giá thấp đến cao</a> 
										</li>
										<li class="btn-quick-sort price-desc <?php if($GetSortby=='price_min:desc') echo 'active';?>"> 
											<a href="javascript:;" onclick="sortby('price-desc')" title="Giá cao xuống thấp"><i></i>Giá cao xuống thấp</a> 
										</li>
									</ul>
								</div>

								<div class="evo-filter d-sm-inline-block d-lg-none"> 
									<a class="btn btn-outline evo-btn-filter" title="Lọc"> Lọc 
										<svg class="svg-filter ml-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"> 
											<path fill="#666" fill-rule="nonzero" d="M11.214 0H.504a.503.503 0 0 0-.448.273.51.51 0 0 0 .04.53l3.923 5.522.004.005c.143.193.22.425.22.665v4.501a.5.5 0 0 0 .699.464l2.205-.84a.477.477 0 0 0 .328-.47V6.995c0-.24.078-.472.22-.665l.004-.005L11.623.803a.509.509 0 0 0 .04-.53.503.503 0 0 0-.449-.273z"></path>
										</svg> 
									</a> 
								</div>
							</div>

							<div class="products-view products-view-grid row">
								<?php
								switch ($GetSortby) {
									case 'price_min:asc':
									$arr_tmp = explode(':', $GetSortby);
									$price = array_column($res_products, 'price');
									array_multisort($price, SORT_ASC, $res_products);
									break;

									case 'price_min:desc':
									$arr_tmp = explode(':', $GetSortby);
									$price = array_column($res_products, 'price');
									array_multisort($price, SORT_DESC, $res_products);
									break;

									case 'name:asc':
									$arr_tmp = explode(':', $GetSortby);
									$name = array_column($res_products, 'name');
									array_multisort($name, SORT_ASC, $res_products);
									break;

									case 'name:desc':
									$arr_tmp = explode(':', $GetSortby);
									$name = array_column($res_products, 'name');
									array_multisort($name, SORT_DESC, $res_products);
									break;

									case 'created_on:desc':
									$arr_tmp = explode(':', $GetSortby);
									$cdate = array_column($res_products, 'cdate');
									array_multisort($cdate, SORT_DESC, $res_products);
									break;

									default:
									$cdate = array_column($res_products, 'cdate');
									array_multisort($cdate, SORT_DESC, $res_products);
									break;
								}

								if(count($res_products)>0){
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
								}
								?>
							</div>
							<div class="clearfix"></div>
							<?php paging($total_rows,$max_rows,$cur_page); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>