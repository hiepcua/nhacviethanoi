<?php
define('OBJ_PAGE','html_block');
// Init variables
$user=getInfo('username');
$isAdmin=getInfo('isadmin');
$strWhere="";

if($isAdmin==1){
	$strWhere.="";
}else{
	$strWhere.=" AND `author`='".$user."'";
}

$get_q = isset($_GET['q']) ? antiData($_GET['q']) : '';
$action = isset($_GET['cbo_action']) ? addslashes(trim($_GET['cbo_action'])) : '';

/*Gán strWhere*/
if($get_q!=''){
	$strWhere.=" AND title LIKE '%".$get_q."%'";
}
if($action !== '' && $action !== 'all' ){
    $strWhere.=" AND `isactive` = '$action'";
}

/*Begin pagging*/
$total_rows = SysCount('tbl_html_block',$strWhere);
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
				<h1 class="m-0 text-dark">Html block</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?php echo ROOTHOST;?>">Bảng điều khiển</a></li>
					<li class="breadcrumb-item active">Html block</li>
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
                	<input type='hidden' id='txt_status' name='s' value=''/>
                    <div class="frm-search-box form-inline pull-left">
                    	<input type='text' id='txtkeyword' name='q' value="<?php echo $get_q;?>" class='form-control' placeholder="Từ khóa..." />
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
                    <a href="<?php echo ROOTHOST.COMS;?>/add" class="btn btn-primary float-sm-right"><i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm mới</a>
                </div>
            </div>
        </div>

		<div class="card">
			<div class='table-responsive'>
				<table class="table table-bordered">
					<thead>                  
						<tr>
							<th class="text-center">#</th>
							<th class="text-center" width="50px">Xóa</th>
							<th>Tên</th>
							<th class="text-center" width="80px">Hiển thị</th>
						</tr>
					</thead>
					<tbody>
						<?php
						if($total_rows>0){
							$obj=SysGetList('tbl_html_block',array(), $strWhere, false);
							$stt=$start;
							while($r=$obj->Fetch_Assoc()){
								$stt++;
								$ids = $r['id'];
								
								if($r['isactive'] == 1) 
									$icon_active    = "<i class='fas fa-toggle-on cgreen'></i>";
								else $icon_active   = '<i class="fa fa-toggle-off cgray" aria-hidden="true"></i>';
								?>
								<tr>
									<td width='10' align='center'><span class="action" style="border:0px"><?php echo $stt;?></span></td>

									<td class="text-center"><a class="action" href='<?php echo ROOTHOST.COMS."/delete/".$r['id'];?>' onclick='return confirm("Bạn có chắc muốn xóa?")'><i class='fa fa-trash cred' aria-hidden='true'></i></a></td>

									<td><a href="<?php echo ROOTHOST.COMS.'/edit/'.$r['id'];?>"><?php echo $r['title'];?></a></td>

									<td class="text-center td-actions"><a class="action" style="border:0px" href="<?php echo ROOTHOST.COMS.'/active/'.$r['id'];?>"><?php echo $icon_active;?></a></td>
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
			paging($total_rows,$max_rows,$cur_page);
			?>
		</nav>
	</div>
</section>
<script type="text/javascript">
	function checkinput(){
		var strids=document.getElementById("txtids");
		if(strids.value==""){
			alert('Bạn chưa lựa chọn đối tượng nào.');
			return false;
		}
		return true;
	}
</script>