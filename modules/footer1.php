<?php
$res_configs = SysGetList('tbl_configsite', []);
$res_config = $res_configs[0];
?>
<footer class="footer">
	<div class="bg-footer"></div>
	<div class="container main-footer clearfix">
		<div class="wg-brand-footer">
			<a href="" class="logo-brand-footer"><img src="<?php echo ROOTHOST;?>images/logo-footer.png"></a>
		</div>

		<div class="frame-content">
			<div class="wg-foote-contact">
				<div class="list-contact">
					<ul class="list-unstyle">
						<li><i class="fa fa-home" aria-hidden="true"></i> 157 phố Chùa Láng, Hà Nội</li>
						<li><i class="fa fa-phone" aria-hidden="true"></i> (024) 3623 1542</li>
						<li><i class="fa fa-fax" aria-hidden="true"></i> (024) 3623 1543</li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i> info@viasm.edu.vn</li>
					</ul>
				</div>
			</div>
			<div class="wg-footer-menu">
				<?php
				$res_menufooter = SysGetList('tbl_mnuitems', [], "AND menu_id=2 AND par_id=0 AND isactive=1 ORDER BY `order` ASC");
				if(count($res_menufooter)>0){
					$str_menufooter='';
					foreach ($res_menufooter as $key => $value) {
						$str_menufooter.='<div class="wr-footer-item">
						<div class="footer-item">
						<div class="item-head medium24pt">'.$value['name'].'</div>
						<div class="item-body">';
						$res_childs = SysGetList('tbl_mnuitems', [], "AND menu_id=2 AND par_id=".$value['id']." AND isactive=1 ORDER BY `order` ASC");
						if(count($res_childs)>0){
							foreach ($res_childs as $k => $v) {
								$str_menufooter.='<a href="'.$v['link'].'" title="'.$v['name'].'">'.$v['name'].'</a>';
							}
						}
						$str_menufooter.='</div>
						</div>
						</div>';
					}
					echo $str_menufooter;
				}
				?>
			</div>
		</div>
		<div id="back-top" style="display: block;">
			<a href="javascript:void(0)"></a>
		</div>
	</div>
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-8">
					<div class="text-left"><span class="span1">Độc quyền © 2020 thuộc về </span><span class="span2">Viện Nghiên cứu cao cấp về Toán.</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>