<div class="mobile-main-menu">
	<div class="la-scroll-fix-infor-user">
		<button class="evo-close-menu" aria-label="Đóng menu" title="Đóng menu"> 
			<svg class="Icon Icon--close" viewBox="0 0 16 14"> 
				<path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd"></path> 
			</svg> 
		</button>

		<ul class="la-nav-list-items list-unstyle">
			<?php
			$res_menutop = SysGetList('tbl_mnuitems',[], "AND menu_id=3 AND isactive=1 ORDER BY `order` ASC");
			if(count($res_menutop)>0){
				foreach ($res_menutop as $key => $value) {
					echo '<li class="ng-scope"><a href="'.$value['link'].'" title="'.$value['name'].'" class="'.$value['class'].'">'.$value['name'].'</a></li>';
				}
			}
			?>
			<li class="ng-scope ng-cate">Danh mục sản phẩm</li>
			<li class="ng-scope"><a href="<?php echo ROOTHOST;?>khuyen-mai" class="nav-link" title="Danh mục">Khuyến mãi HOT</a></li>
			<li class="ng-scope"><a href="<?php echo ROOTHOST;?>san-pham-moi?sortby=created_on%3Adesc" class="nav-link" title="Danh mục">Hàng mới về</a></li>
                        
			<?php
			$res_gpro = SysGetList('tbl_product_group', array(), "AND par_id=0 AND isactive=1 ORDER BY `order` ASC");
			if(count($res_gpro)>0){
				foreach ($res_gpro as $key => $value) {
					$id = $value['id'];
					$title = $value['title'];
					$alias = $value['alias'];
					$link = ROOTHOST.'san-pham/'.$alias;

					$res_ptype = SysGetList('tbl_product_type', array(), 'AND id_pgroup="'.$id.'" AND isactive=1');
					if(count($res_ptype)>0){
						echo '<li class="ng-scope ng-has-child1">
						<a class="hmega" href="'.$link.'" title="'.$title.'">'.$title.'<span class="svg svg1 collapsible-plus"></span></a>';
						echo '<ul class="ul-has-child1">';
						foreach ($res_ptype as $k_child => $v_child) {
							$title1 = $v_child['title'];
							$link1 = ROOTHOST.'san-pham/'.$alias.'/'.$v_child['alias'];
							echo '<li class="ng-scope"> <a href="'.$link1.'" title="'.$title1.'">'.$title1.'</a> </li>';
						}
						echo '</ul>';
						echo '</li>';
					}else{
						echo '<li class="ng-scope"><a class="hmega" href="'.$link.'" title="'.$title.'">'.$title.'</a></li>';
					}
				}
			}
			?>
			<li class="ng-scope ng-cate">Dịch vụ</li>
			<?php
			$res_categories = SysGetList('tbl_categories', array(), "AND isactive=1 ORDER BY `order` ASC");
			if(count($res_categories)>0){
				foreach ($res_categories as $key => $value) {
					$name_cate = $value['title'];
					$link_cate = ROOTHOST.'tin-tuc/'.$value['alias'];
					echo '<li class="ng-scope"><a href="'.$link_cate.'" title="'.$name_cate.'" class="nav-link">'.$name_cate.'</a></li>';
				}
			}
			?>
		</ul>
	</div>
</div>