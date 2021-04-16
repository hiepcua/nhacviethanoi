<section class="component">
	<div class="page container">
		<div class="page-history">
			<div class="page-content">
				<div class="wg-breadcrumb clearfix">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item home" aria-current="page"><a href="<?php echo ROOTHOST;?>"></a></li>
							<li class="breadcrumb-item" aria-current="page"><a href="<?php echo ROOTHOST;?>gioi-thieu" title="">Giới thiệu</a></li>
							<li class="breadcrumb-item active" aria-current="page">Cơ cấu tổ chức</li>
						</ol>
					</nav>
				</div>

				<div class="main-content">
					<ul id="tab-cctc" class="nav nav-pills nav-justified">
						<li><a data-toggle="tab" href="#tab1" class="active"> Cơ cấu tổ chức</a></li>
						<li><a data-toggle="tab" href="#tab2">Ban giám đốc</a></li>
						<li><a data-toggle="tab" href="#tab3">Văn phòng</a></li>
						<li><a data-toggle="tab" href="#tab4">Phòng thí nghiệm</a></li>
						<li><a data-toggle="tab" href="#tab5">Nhóm nghiên cứu</a></li>
					</ul>

					<div class="tab-content">
						<div id="tab1" class="tab-pane active">
							<h1 class="page-title">Sơ đồ cơ cấu tổ chức</h1>
							<div class="table-responsive">
								<table class="table table-diagram">
									<tr class="tr1">
										<td class="td1"><div class="item">BAN TƯ VẤN QUỐC TẾ</div></td>
										<td class="td2"><div class="item no-border-radius bgd">BAN GIÁM ĐỐC</div></td>
										<td class="td3"><div class="item">BAN TƯ VẤN QUỐC TẾ VÀ HĐKH</div></td>
									</tr>
									<tr class="tr2">
										<td class="td1"><div class="item">VĂN PHÒNG</div></td>
										<td class="td2"><div class="item">PHÒNG THÍ NGHIỆM</div></td>
										<td class="td3"><div class="item">NHÓM NGHIÊN CỨU</div></td>
									</tr>
									<tr class="tr3">
										<td class="td1"></td>
										<td class="td2"><div class="item">PTN KHOA HỌC DỮ LIỆU</div></td>
										<td class="td3"></td>
									</tr>
								</table>
							</div>
						</div>

						<div id="tab2" class="tab-pane fade">
							<?php
							$res_bgd = SysGetList('tbl_html_block', [], 'AND isactive=1 AND `alias`="ban-giam-doc"');
							if(count($res_bgd)>0){
								$row_bgd = $res_bgd[0];
								echo '<h1 class="tab-header relative">'.$row_bgd['title'].'</h1>';
								echo '<div class="intro light16pt">'.$row_bgd['fulltext'].'</div>';
							}
							?>
							<br>

							<div class="wg-tb-bgd">
								<ul id="tab-bgd" class="nav nav-pills nav-justified">
									<li class="active"><a data-toggle="tab" href="#bgd1" class="active">BAN GIÁM ĐỐC HIỆN TẠI</a></li>
									<li><a data-toggle="tab" href="#bgd2">BAN GIÁM ĐỐC TRƯỚC ĐÂY</a></li>
								</ul>

								<div class="tab-content">
									<?php
									$res_per_group_bgd_current = array();
									$res_per_group_bgd_old = array();
									$res_per_group_bgd = SysGetList('tbl_personnel_group', [], 'AND isactive=1 AND `code`="BGD"');

									if(isset($res_per_group_bgd[0]['id'])){
										$group_bgd_id = $res_per_group_bgd[0]['id'];
										$res_personnel_gd = SysGetList('tbl_personnel', [], "AND isactive AND group_id LIKE '%\"".$group_bgd_id."\"%' ORDER BY `order` ASC");
										if(count($res_personnel_gd)>0){
											$per_bgd_id_all = [];
											$current_date = strtotime("now");

											foreach ($res_personnel_gd as $key => $value) {
												$per_bgd_id_all[] = $value['id'];
											}

											if(count($per_bgd_id_all) > 0){
												$per_bgd_id_current = [];
												$per_bgd_id_old = [];

												$res_per_history = SysGetList('tbl_personnel_work_history', [], "AND isactive=1 AND to_date=0 OR to_date >= ".$current_date." AND personnel_id IN (".implode(",", $per_bgd_id_all).")");
												foreach ($res_per_history as $key => $value) {
													$per_bgd_id_current[] = $value['personnel_id'];
												}
												$per_bgd_id_old = array_diff($per_bgd_id_all, $per_bgd_id_current);

												// The loop personnel gets the personnel on the job and the personnel is not working
												foreach ($res_personnel_gd as $key => $value) {
													if(in_array($value['id'], $per_bgd_id_current)){
														$res_per_group_bgd_current[] = $value;
													}

													if(in_array($value['id'], $per_bgd_id_old)){
														$res_per_group_bgd_old[] = $value;
													}
												}
											}
										}
									}
									?>
									<div id="bgd1" class="tab-pane active">
										<div class="wg-box-content">
											<?php
											$num_res_per_group_bgd_current = count($res_per_group_bgd_current);
											if($num_res_per_group_bgd_current>0){
												foreach ($res_per_group_bgd_current as $key => $value) {
													$str_html = ''; $hr='<hr>';
													if(($num_res_per_group_bgd_current-1) == $key){
														$hr='';
													}
													$thumb = getThumb('', 'thumbnail', '');
													$str_html.='<div class="bgd-member">
													<div class="wrap-avatar wrap-thumb" data-src="https://viasm.edu.vn'.$value['avatar'].'">'.$thumb.'</div>
													<div class="metadata">
													<ul class="list-unstyle">';
													if($value['name']!==''){
														$str_html.='<li class="medium20pt">'.$value['degree'].'.'.$value['name'].'</li>';
													}
													if($value['job']!==''){
														$str_html.='<li class="job">'.$value['job'].'</li>';
													}
													$str_html.='<br>';
													if($value['work_room']!==''){
														$str_html.='<li  class="room">Phòng '.$value['work_room'].'</li>';
													}
													if($value['email']!==''){
														$str_html.='<li class="mail">'.$value['email'].'</li>';
													}
													if($value['phone']!==''){
														$str_html.='<li class="phone">'.$value['phone'].'</li>';
													}
													if($value['website']!==''){
														$str_html.='<li class="web cblue">'.$value['website'].'</li>';
													}
													$str_html.='<br><a href="#" class="txt-uppercase cblack btn-viewdetail">Chi tiết ></a>
													</div></div>'.$hr;

													echo $str_html;
												}
											}
											?>
										</div>
									</div>

									<div id="bgd2" class="tab-pane fade">
										<div class="wg-box-content">
											<?php
											$num_res_per_group_bgd_old = count($res_per_group_bgd_old);
											if($num_res_per_group_bgd_old>0){
												foreach ($res_per_group_bgd_old as $key => $value) {
													$str_html = ''; $hr='<hr>';
													if(($num_res_per_group_bgd_old-1) == $key){
														$hr='';
													}
													$thumb = getThumb('', 'thumbnail', '');
													$str_html.='<div class="bgd-member">
													<div class="wrap-avatar wrap-thumb" data-src="https://viasm.edu.vn'.$value['avatar'].'">'.$thumb.'</div>
													<div class="metadata">
													<ul class="list-unstyle">';
													if($value['name']!==''){
														$str_html.='<li class="medium20pt">'.$value['degree'].'.'.$value['name'].'</li>';
													}
													if($value['job']!==''){
														$str_html.='<li class="job">'.$value['job'].'</li>';
													}
													$str_html.='<br>';
													if($value['work_room']!==''){
														$str_html.='<li class="room">Phòng '.$value['work_room'].'</li>';
													}
													if($value['email']!==''){
														$str_html.='<li class="email">'.$value['email'].'</li>';
													}
													if($value['phone']!==''){
														$str_html.='<li class="phone">'.$value['phone'].'</li>';
													}
													if($value['website']!==''){
														$str_html.='<li class="web">'.$value['website'].'</li>';
													}
													$str_html.='<br><a href="#" class="txt-uppercase cblack btn-viewdetail">Chi tiết ></a>
													</div></div>'.$hr;

													echo $str_html;
												}
											}
											?>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div id="tab3" class="tab-pane fade">
							<h1 class="page-title">Nhân viên Văn phòng</h1>

							<div class="wg-box-content">
								<ul id="tab-nhanvien" class="nav nav-pills nav-justified">
									<li><a data-toggle="tab" href="#nhanvien1" class="active">NHÂN VIÊN HIỆN TẠI</a></li>
									<li><a data-toggle="tab" href="#nhanvien2">NHÂN VIÊN TRƯỚC ĐÂY</a></li>
								</ul>
								<?php
								$res_group_nvvp = SysGetList('tbl_personnel_group', [], 'AND isactive=1 AND `code`="CBVP"');
								$group_nvvp_id = (count($res_group_nvvp)>0 && isset($res_group_nvvp[0]['id'])) ? $res_group_nvvp[0]['id'] : 0;
								?>
								<div class="tab-content">
									<div id="nhanvien1" class="tab-pane active"></div>
									<div id="nhanvien2" class="tab-pane"></div>
								</div>
							</div>
						</div>

						<div id="tab4" class="tab-pane fade">
							<?php
								$res_ptn = SysGetList('tbl_html_block', [], "AND alias='phong-thi-nghiem-khoa-hoc-du-lieu' AND isactive=1");
								if(count($res_ptn)>0){
									$row_ptn = $res_ptn[0];
									echo '<h1 class="page-title">'.$row_ptn['title'].'</h1>';
									echo '<div class="fulltext light16pt">'.$row_ptn['fulltext'].'</div>';
								}
							?>
							<div class="wg-box-content">
								<h2 class="page-title">Giám đốc</h2>
								<div class="bgd-member">
									<div class="wrap-avatar wrap-thumb" data-src="https://viasm.edu.vn/Cms_Data/Contents/viasm/Media/images2018/bangiadoc1.jpg">
										<img src="https://viasm.edu.vn/Cms_Data/Contents/viasm/Media/images2018/bangiadoc1.jpg">
									</div>
									<div class="metadata">
										<ul class="list-unstyle">
											<li class="medium20pt">GS. TSKH. NGÔ BẢO CHÂU</li>
											<li class="job">Giám đốc khoa học</li><br>
											<li class="room">Phòng A301</li>
											<li class="mail">ngobaochau@viasm.edu.vn</li>
											<li class="phone">(04) 36 23 15 40</li>
											<li class="web cblue">http://www.math.uchicago.edu/~ngo/nbc-homepage.html</li>
											<br>
											<a href="#" class="txt-uppercase cblack btn-viewdetail">Chi tiết ></a>
										</ul>
									</div>
								</div>
								<?php
								// $res_giamdoc = SysGetList('tbl_html_block', [], "AND alias='giam-doc-phong-thi-nghiem' AND isactive=1");
								// if(count($res_giamdoc)>0){
								// 	$row_giamdoc = $res_giamdoc[0];
								// 	echo '<h1 class="page-title">'.$row_giamdoc['title'].'</h1>';
								// 	echo '<div class="content">'.$row_giamdoc['fulltext'].'</div>';
								// }
								?>
							</div>
							<br>
							<div class="wg-box-content">
								<h1 class="page-title">Cộng tác viên</h1>
								<div class="content">
									<div class="bgd-member">
										<div class="wrap-avatar wrap-thumb" data-src="https://viasm.edu.vn/Cms_Data/Contents/viasm/Media/images2018/bangiadoc1.jpg">
											<img src="https://viasm.edu.vn/Cms_Data/Contents/viasm/Media/images2018/bangiadoc1.jpg">
										</div>
										<div class="metadata">
											<ul class="list-unstyle">
												<li class="medium20pt">GS. TSKH. NGÔ BẢO CHÂU</li>
												<li class="job">Giám đốc khoa học</li><br>
												<li class="room">Phòng A301</li>
												<li class="mail">ngobaochau@viasm.edu.vn</li>
												<li class="phone">(04) 36 23 15 40</li>
												<li class="web cblue">http://www.math.uchicago.edu/~ngo/nbc-homepage.html</li>
												<br>
												<a href="#" class="txt-uppercase cblack btn-viewdetail">Chi tiết ></a>
											</ul>
										</div>
									</div>
									<hr>
									<div class="bgd-member">
										<div class="wrap-avatar wrap-thumb" data-src="https://viasm.edu.vn/Cms_Data/Contents/viasm/Media/images2018/bangiadoc1.jpg">
											<img src="https://viasm.edu.vn/Cms_Data/Contents/viasm/Media/images2018/bangiadoc1.jpg">
										</div>
										<div class="metadata">
											<ul class="list-unstyle">
												<li class="medium20pt">GS. TSKH. NGÔ BẢO CHÂU</li>
												<li class="job">Giám đốc khoa học</li><br>
												<li class="room">Phòng A301</li>
												<li class="mail">ngobaochau@viasm.edu.vn</li>
												<li class="phone">(04) 36 23 15 40</li>
												<li class="web cblue">http://www.math.uchicago.edu/~ngo/nbc-homepage.html</li>
												<br>
												<a href="#" class="txt-uppercase cblack btn-viewdetail">Chi tiết ></a>
											</ul>
										</div>
									</div>
									<hr>
									<div class="bgd-member">
										<div class="wrap-avatar wrap-thumb" data-src="https://viasm.edu.vn/Cms_Data/Contents/viasm/Media/images2018/bangiadoc1.jpg">
											<img src="https://viasm.edu.vn/Cms_Data/Contents/viasm/Media/images2018/bangiadoc1.jpg">
										</div>
										<div class="metadata">
											<ul class="list-unstyle">
												<li class="medium20pt">GS. TSKH. NGÔ BẢO CHÂU</li>
												<li class="job">Giám đốc khoa học</li><br>
												<li class="room">Phòng A301</li>
												<li class="mail">ngobaochau@viasm.edu.vn</li>
												<li class="phone">(04) 36 23 15 40</li>
												<li class="web cblue">http://www.math.uchicago.edu/~ngo/nbc-homepage.html</li>
												<br>
												<a href="#" class="txt-uppercase cblack btn-viewdetail">Chi tiết ></a>
											</ul>
										</div>
									</div>
									<hr>
									<div class="bgd-member">
										<div class="wrap-avatar wrap-thumb" data-src="https://viasm.edu.vn/Cms_Data/Contents/viasm/Media/images2018/bangiadoc1.jpg">
											<img src="https://viasm.edu.vn/Cms_Data/Contents/viasm/Media/images2018/bangiadoc1.jpg">
										</div>
										<div class="metadata">
											<ul class="list-unstyle">
												<li class="medium20pt">GS. TSKH. NGÔ BẢO CHÂU</li>
												<li class="job">Giám đốc khoa học</li><br>
												<li class="room">Phòng A301</li>
												<li class="mail">ngobaochau@viasm.edu.vn</li>
												<li class="phone">(04) 36 23 15 40</li>
												<li class="web cblue">http://www.math.uchicago.edu/~ngo/nbc-homepage.html</li>
												<br>
												<a href="#" class="txt-uppercase cblack btn-viewdetail">Chi tiết ></a>
											</ul>
										</div>
									</div>
									<hr>
									<div class="bgd-member">
										<div class="wrap-avatar wrap-thumb" data-src="https://viasm.edu.vn/Cms_Data/Contents/viasm/Media/images2018/bangiadoc1.jpg">
											<img src="https://viasm.edu.vn/Cms_Data/Contents/viasm/Media/images2018/bangiadoc1.jpg">
										</div>
										<div class="metadata">
											<ul class="list-unstyle">
												<li class="medium20pt">GS. TSKH. NGÔ BẢO CHÂU</li>
												<li class="job">Giám đốc khoa học</li><br>
												<li class="room">Phòng A301</li>
												<li class="mail">ngobaochau@viasm.edu.vn</li>
												<li class="phone">(04) 36 23 15 40</li>
												<li class="web cblue">http://www.math.uchicago.edu/~ngo/nbc-homepage.html</li>
												<br>
												<a href="#" class="txt-uppercase cblack btn-viewdetail">Chi tiết ></a>
											</ul>
										</div>
									</div>
								</div>

								<div class="wg-paging">
									<nav>
										<ul class="pagination">
											<li class="page-item"><a class="page-link" href="#">< Trước</a></li>
											<li class="page-item active"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item"><a class="page-link" href="#">4</a></li>
											<li class="page-item"><a class="page-link" href="#">5</a></li>
											<li class="page-item"><a class="page-link" href="#">...</a></li>
											<li class="page-item"><a class="page-link" href="#">Sau ></a></li>
										</ul>
									</nav>
								</div>
							</div>
						</div>

						<div id="tab5" class="tab-pane fade"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script src="<?php echo ROOTHOST;?>global/js/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).ready(function(){
		getNVVPCurrent("1", "<?php echo $group_nvvp_id;?>");
		getNVVPOld("1", "<?php echo $group_nvvp_id;?>");
	});

	function getNVVPCurrent(page, group_id){
		var _url="<?php echo ROOTHOST;?>ajaxs/get_personnel_current.php";
		var _data={
			"page": page,
			"group_id": group_id,
		};

		$.get(_url, _data, function(req){
			$('#nhanvien1').html(req);
		});
	}

	function getNVVPOld(page, group_id){
		var _url="<?php echo ROOTHOST;?>ajaxs/get_personnel_old.php";
		var _data={
			"page": page,
			"group_id": group_id,
		};

		$.get(_url, _data, function(req){
			$('#nhanvien2').html(req);
		});
	}
</script>