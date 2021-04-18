<?php
$strWhere='';
$user=getInfo('username');

if(isset($_POST["txtaction"]) && $_POST["txtaction"]!=""){
	$ids=trim($_POST["txtids"]);
	if($ids!='')
		$ids = substr($ids,0,strlen($ids)-1);
	$ids=str_replace(",","','",$ids);

	if($_POST["txtaction"] == "delete"){
		$res_cons = SysGetList('tbl_product', [], "AND id in ('".$ids."')");

		foreach ($res_cons as $key => $value) {
			$seo_link = ROOTHOST_WEB.$value['alias'].'-'.$value['id'].'.html';
			$Cres_seos = SysCount('tbl_seo', "AND `link`='".$seo_link."'");
			SysDel('tbl_product', "id in ('".$ids."')");
		}
	}
	echo "<script language=\"javascript\">window.location='".ROOTHOST.COMS."'</script>";
}

$get_pcode = isset($_GET['pcode']) ? antiData($_GET['pcode']) : '';
$get_q = isset($_GET['q']) ? antiData($_GET['q']) : '';
$get_cate = isset($_GET['cate']) ? (int)antiData($_GET['cate']) : 0;
$action = isset($_GET['cbo_action']) ? addslashes(trim($_GET['cbo_action'])) : '';

/*Gán strWhere*/
if($get_pcode!=''){
	$strWhere.=" AND pro_code='".$get_pcode."'";
}
if($get_q!=''){
	$strWhere.=" AND name LIKE '%".$get_q."%'";
}
if($get_cate!=0){
	$strWhere.=" AND group_id=".$get_cate;
}
if($action !== '' && $action !== 'all' ){
	$strWhere.=" AND `isactive` = '$action'";
}

/*Begin pagging*/
$total_rows = SysCount('tbl_product',$strWhere);
$max_rows = 20;
$max_pages = ceil($total_rows/$max_rows);
$cur_page = getCurentPage($max_pages);
$start = ($cur_page - 1) * $max_rows;
$strWhere.=" ORDER BY cdate DESC LIMIT $start,".$max_rows;
/*End pagging*/

if (isset($_SESSION['flash'.'com_'.COMS.'add']) && $_SESSION['flash'.'com_'.COMS.'add'] == 1) {
	echo '<script>$(document).ready(function(){$.notify("Thêm mới thành công", "success");})</script>';
	unset($_SESSION['flash'.'com_'.COMS.'add']);
}
?>
<style type="text/css">
	.widget-frm-search, .widget-frm-search input, .widget-frm-search select, .widget-frm-search button{
		font-size: 12px;
	}
</style>
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Danh sách sản phẩm</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?php echo ROOTHOST;?>">Bảng điều khiển</a></li>
					<li class="breadcrumb-item active">Danh sách sản phẩm</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
	<div class='container-fluid'>
		<div class="row widget-frm-search form-group">
			<div class="col-md-9">
				<form id="frm_search" method="get" action="<?php echo ROOTHOST.COMS;?>">
					<input type='hidden' id='txt_status' name='s' value=''/>
					<div class="frm-search-box form-inline pull-left">
						<input type='text' id='txt_title' name='q' value="<?php echo $get_q;?>" class='form-control' placeholder="Tiêu đề..." />
						&nbsp&nbsp&nbsp
						<input type="text" name="pcode" value="<?php echo $get_pcode;?>" class="form-control" placeholder="Mã sản phẩm" />
						&nbsp&nbsp&nbsp
						<div class='form-group'>
							<select class="form-control" name="cate" id="cbo_cate" style="width: 250px; ">
								<option value="">-- Nhóm sản phẩm --</option>
								<?php getListComboboxCategories(0,0); ?>
							</select>
							<script type="text/javascript">
								$(document).ready(function(){
									cbo_Selected('cbo_cate', <?php echo $get_cate; ?>);
								});
							</script>
						</div>
						&nbsp&nbsp&nbsp
						<button type="submit" id="_btnSearch" class="btn btn-primary">Tìm kiếm</button>
					</div>
				</form>
			</div>
		</div>

		<div class="card">
			<div class='table-responsive'>
				<table class="table table-bordered">
					<thead>                  
						<tr>
							<th width="30" class="text-center"><input type="checkbox" name="chkall" id="chkall" value="" onclick="docheckall('chk',this.checked);"/></th>
							<th class="text-center">Xóa</th>
							<th>Tên sản phẩm</th>
							<th class="text-center" width="100px">Mã sản phẩm</th>
							<th class="text-center" width="50px">Sale</th>
							<th class="text-center" width="50px">Hot</th>
							<th class="text-center" width="80px">Hiển thị</th>
							<th class="text-center" width="100">Xem trước</th>
						</tr>
					</thead>
					<tbody>
						<?php
						if($total_rows>0){
							$obj=SysGetList('tbl_product',array(), $strWhere, false);
							$stt=$start;
							while($r=$obj->Fetch_Assoc()){
								$stt++;
								$ids = $r['id'];
								$cates = SysGetList('tbl_product_group', array('title','alias'), ' AND id='.$r['group_id']);
								$cate = count($cates)>0 ? $cates[0] : [];
								$cate_title = isset($cate['title']) ? $cate['title'] : '<i>N/A</i>';

								if(count($cates)){
									$link = ROOTHOST_WEB.$cate['alias'].'/'.$r['alias'].'-'.$r['pro_code'];
								}else{
									$link = '';
								}

								if($r['isactive'] == 1) 
									$icon_active    = "<i class='fas fa-toggle-on cgreen'></i>";
								else $icon_active   = '<i class="fa fa-toggle-off cgray" aria-hidden="true"></i>';

								if($r['ishot'] == 1) 
									$icon_ishot    = "<i class='fas fa-toggle-on cgreen'></i>";
								else $icon_ishot   = '<i class="fa fa-toggle-off cgray" aria-hidden="true"></i>';

								if($r['sale'] == 1) 
									$icon_sale    = "<i class='fas fa-toggle-on cgreen'></i>";
								else $icon_sale   = '<i class="fa fa-toggle-off cgray" aria-hidden="true"></i>';

								$thumbnail = getThumb($r['thumb'], 'thumbnail', '');
								?>
								<tr>
									<td width='30' align='center' class="td-actions">
										<label class="action mt-3" style="border:0px"><input type='checkbox' name='chk' id='chk' onclick="docheckonce('chk');" value='<?php echo $ids;?>'/></label>
									</td>

									<td width='30' align='center'><a class="action" href='<?php echo ROOTHOST.COMS."/delete/".$r['id'];?>' onclick='return confirm("Bạn có chắc muốn xóa?")'><i class='fa fa-trash cred mt-3' aria-hidden='true'></i></a></td>

									<td>
										<div class="widget-td-title">
											<div class="widget-thumbnail"><a class="action mt-3" href="<?php echo ROOTHOST.COMS.'/edit/'.$r['id'];?>"><?php echo $thumbnail;?></a></div>
											<div class="widget-title">
												<a class="action mt-3" href="<?php echo ROOTHOST.COMS.'/edit/'.$r['id'];?>"><?php echo Substring($r['name'], 0, 20);?></a>
												<div class="widget-list-info">
													<ul class="list-unstyle">
														<li><a href="" target="_blank"><?php echo $cate_title;?></a></li>
														<span class="td-public-time"><?php echo date('H:i | d-m-Y', $r['cdate']);?></span>
													</ul>
												</div>
											</div>
										</div>
									</td>
									<td align="center" width="120"><?php echo $r['pro_code'];?></td>
									<td class="text-center td-actions"><a class="action" style="border:0px" href="<?php echo ROOTHOST.COMS.'/issale/'.$r['id'];?>"><?php echo $icon_sale;?></a></td>
									<td class="text-center td-actions"><a class="action" style="border:0px" href="<?php echo ROOTHOST.COMS.'/ishot/'.$r['id'];?>"><?php echo $icon_ishot;?></a></td>
									<td class="text-center td-actions"><a class="action" style="border:0px" href="<?php echo ROOTHOST.COMS.'/active/'.$r['id'];?>"><?php echo $icon_active;?></a></td>
									<td class="text-center">
										<a class="action" href="<?php echo $link;?>" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a>
									</td>
								</tr>
							<?php }
						}else{
							?>
							<tr>
								<td colspan='6' class='text-center'>Dữ liệu trống!</td>
							</tr>
						<?php }?>
					</tbody>
				</table>
			</div>
		</div>
		<nav class="d-flex justify-content-center">
			<?php paging2($total_rows,$max_rows,$cur_page);?>
		</nav>
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function(){
		$('#cbo_cate').select2();
	});

	function checkinput(){
		var strids=document.getElementById("txtids");
		if(strids.value==""){
			alert('Bạn chưa lựa chọn đối tượng nào.');
			return false;
		}
		return true;
	}
</script>