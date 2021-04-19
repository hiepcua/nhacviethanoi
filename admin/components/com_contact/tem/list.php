<?php
$strWhere="";$fdate=$tdate=null;
$get_q = isset($_GET['q']) ? antiData($_GET['q']) : '';
$get_fdate = isset($_GET['fdate']) ? antiData($_GET['fdate']) : '';
$get_tdate = isset($_GET['tdate']) ? antiData($_GET['tdate']) : '';

/*Gán strWhere*/
if($get_q!=''){
	$strWhere.=" AND name LIKE '%".$get_q."%' OR email LIKE '%".$get_q."%'";
}
if($get_fdate !== ''){
	$fdate = date('Y-m-d', strtotime($get_fdate));
    $strWhere.=" AND `cdate`>".strtotime($get_fdate);
}
if($get_tdate !== ''){
	$tdate = date('Y-m-d', strtotime($get_tdate));
    $strWhere.=" AND `cdate`<".strtotime($get_tdate);
}

/*Begin pagging*/
$total_rows = SysCount('tbl_contact',$strWhere);
$max_rows = 20;
$max_pages = ceil($total_rows/$max_rows);
$cur_page = getCurentPage($max_pages);
$start = ($cur_page - 1) * $max_rows;
$strWhere.=" ORDER BY cdate DESC, isactive DESC LIMIT $start,".$max_rows;
/*End pagging*/

if (isset($_SESSION['flash'.'com_'.$COM.'add']) && $_SESSION['flash'.'com_'.$COM.'add'] == 1) {
	echo '<script>$(document).ready(function(){$.notify("Thêm mới thành công", "success");})</script>';
	unset($_SESSION['flash'.'com_'.$COM.'add']);
}
?>
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Yêu cầu liên hệ</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?php echo ROOTHOST;?>">Bảng điều khiển</a></li>
					<li class="breadcrumb-item active">Yêu cầu liên hệ</li>
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
            <div class="col-md-10">
                <form id="frm_search" method="get" action="<?php echo ROOTHOST.COMS;?>">
                    <div class="frm-search-box form-inline pull-left">
                        <input type='text' id='txt_title' name='q' value="<?php echo $get_q;?>" class='form-control' placeholder="Email address, name..." />
                        &nbsp&nbsp&nbsp
                        Từ ngày
                        <input type="date" name="fdate" class="form-control" value="<?php echo $fdate;?>">
                        &nbsp&nbsp&nbsp
                        Đến ngày
                        <input type="date" name="tdate" class="form-control" value="<?php echo $tdate;?>">
                        &nbsp&nbsp&nbsp
                        <button type="submit" id="_btnSearch" class="btn btn-primary">Tìm kiếm</button>
                    </div>
                </form>
            </div>
            <div class="col-md-2">
                <div class="pull-right">
                    <form id="frm_actions" method="post" action="">
                        <input type="hidden" name="txtaction" id="txtaction"/>
                        <input type="hidden" name="txtids" id="txtids" />
                    </form>
                    <!-- <a href="<?php echo ROOTHOST.COMS;?>/add" class="btn btn-primary float-sm-right"><i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm mới</a> -->
                </div>
            </div>
        </div>

		<div class="card">
			<div class="table-responsive">
            	<table class="table table-bordered">
					<thead>                  
						<tr>
							<th width="30" align="center">#</th>
							<th width="30" align="center">Xóa</th>
							<th>Tên</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Ngày tạo</th>
							<th width="80" class="text-center">Yêu cầu mới</th>
							<th width="80">Chi tiết</th>
						</tr>
					</thead>
					<tbody>
						<?php
						if($total_rows>0){
							$obj=SysGetList('tbl_contact',array(), $strWhere, false);
							$stt=$start;
							while($r=$obj->Fetch_Assoc()){ 
								$stt++;
								if($r['isactive'] == 1) 
									$icon_active    = "<i class='fas fa-toggle-on cgreen'></i>";
								else $icon_active   = '<i class="fa fa-toggle-off cgray" aria-hidden="true"></i>';
								?>
								<tr>
									<td><?php echo $stt;?></td>
									<td align="center" style="width: 50px;"><a href="<?php echo ROOTHOST.COMS.'/delete/'.$r['id'];?>" onclick="return confirm('Bạn có chắc muốn xóa ?')"><i class="fa fa-trash cred" aria-hidden="true"></i></a></td>
									<td><?php echo $r['name'];?></td>
									<td><?php echo $r['email'];?></td>
									<td><?php echo $r['phone'];?></td>
									<td><?php echo date('H:i | d-m-Y', $r['cdate']);?></td>
									<td align='center'><a href="<?php echo ROOTHOST.COMS.'/active/'.$r['id'];?>"><?php echo $icon_active;?></a></td>
									<td class="text-center"><a href="<?php echo ROOTHOST.COMS.'/edit/'.$r['id'];?>"><i class="fas fa-edit cblue"></i></a></td>
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
			<?php 
			paging2($total_rows,$max_rows,$cur_page);
			?>
		</nav>
	</div>
</section>