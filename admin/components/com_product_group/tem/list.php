<?php
$strWhere=""; $limit='';
$get_q = isset($_GET['q']) ? antiData($_GET['q']) : '';
$action = isset($_GET['cbo_action']) ? addslashes(trim($_GET['cbo_action'])) : '';
$cbo_par = isset($_GET['cbo_par']) ? addslashes(trim($_GET['cbo_par'])) : '';

/*Gán strWhere*/
if($get_q!=''){
	$strWhere.=" AND title LIKE '%".$get_q."%'";
}
if($action !== '' && $action !== 'all' ){
	$strWhere.=" AND `isactive` = '$action'";
}
if($cbo_par !== '' && $cbo_par !== 'all' ){
	$strWhere.=" AND `path` LIKE '".$cbo_par."_%' ";
}

/*Begin pagging*/
$total_rows = SysCount('tbl_product_group',$strWhere);
$max_rows = 20;
$max_pages = ceil($total_rows/$max_rows);
$cur_page = getCurentPage($max_pages);
$start = ($cur_page - 1) * $max_rows;
/*End pagging*/
?>
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Danh sách nhóm sản phẩm</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?php echo ROOTHOST;?>">Bảng điều khiển</a></li>
					<li class="breadcrumb-item active">Danh sách nhóm sản phẩm</li>
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
						<input type='text' id='txt_title' name='q' class='form-control' value="<?php echo $get_q?>" placeholder="Tên nhóm sản phẩm..." />
						&nbsp&nbsp&nbsp
						<select name="cbo_action" class="form-control" id="cbo_action">
							<option value="all">Tất cả</option>
							<option value="1">Hiển thị</option>
							<option value="0">Ẩn</option>
							<script language="javascript">
								$(document).ready(function(){
									cbo_Selected('cbo_action','<?php echo $action;?>');
								});
							</script>
						</select>
						&nbsp&nbsp&nbspDanh mục&nbsp
						<select name="cbo_par" class="form-control" id="cbo_par">
							<option value="all">Tất cả</option>
							<?php getListComboboxCategories();?>
							<script language="javascript">
								$(document).ready(function(){
									cbo_Selected('cbo_par','<?php echo $cbo_par;?>');
								});
							</script>
						</select>
						&nbsp&nbsp&nbsp
						<button type="submit" id="_btnSearch" class="btn btn-primary">Tìm kiếm</button>
					</div>
				</form>
			</div>
			<div class="col-md-2">
				<div class="pull-right">
					<a href="#" onclick="add()" class="btn btn-primary float-sm-right"><i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm mới</a>
				</div>
			</div>
		</div>

		<div class="card">
			<div class='table-responsive'>
				<table class="table table-bordered">
					<thead>                  
						<tr>
							<th>Xóa</th>
							<th>Tên nhóm sản phẩm</th>
							<th>Nhóm sản phẩm cha</th>
							<th>Mô tả</th>
							<th class="order" width="80px">Sắp xếp</th>
							<th style="text-align: center;" width="80px">Hiển thị</th>
							<th style="text-align: center;" width="100px">Xem trước</th>
						</tr>
					</thead>
					<tbody id="data-table"></tbody>
				</table>
			</div>
		</div>
		<nav class="d-flex justify-content-center"><?php paging2($total_rows,$max_rows,$cur_page);?></nav>
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function(){
		getTable("<?php echo $strWhere;?>", "<?php echo $start;?>", "<?php echo $max_rows;?>");
	});

	function add(){
		var _url="<?php echo ROOTHOST;?>ajaxs/product_group/form_add.php";
		$.get(_url, function(req){
			$('#popup_modal .modal-dialog').addClass('modal-xl');
			$('#popup_modal .modal-title').text('Thêm mới nhóm sản phẩm');
			$('#popup_modal .modal-body').html(req);
			$('#popup_modal').modal('show');
		});
	}

	function getTable(strwhere, start, max_rows){
		var _url="<?php echo ROOTHOST;?>ajaxs/product_group/get_table.php";
		var _data={
			"strwhere": strwhere,
			"start": start,
			"max_rows": max_rows,
		};

		$.get(_url, _data, function(req){
			$('#data-table').html(req);
		});
	}

	function edit(id){
		if(parseInt(id)!==0){
			var _url="<?php echo ROOTHOST;?>ajaxs/product_group/form_edit.php";
			$.get(_url, {"id": id}, function(req){
				$('#popup_modal .modal-dialog').addClass('modal-xl');
				$('#popup_modal .modal-title').text('Cập nhật nhóm sản phẩm');
				$('#popup_modal .modal-body').html(req);
				$('#popup_modal').modal('show');
			});
		}
	}

	function active(e){
		var id = parseInt(e.getAttribute('data-id'));
		$.post('<?php echo ROOTHOST;?>ajaxs/product_group/active.php', {"id": id}, function(res){
			if(parseInt(res)==1){
				window.location.reload();
			}else if(parseInt(res)==3){
				alert('Bạn không có quyền thực hiện chức năng này!');
			}else{
				alert('Lỗi!');
			}
		});
	}

	function order(e){
		var val = parseInt(e.value);
		var id = parseInt(e.getAttribute('data-id'));
		var _data = {
			"id" : id,
			"val" : val,
		}
		$.post('<?php echo ROOTHOST;?>ajaxs/product_group/order.php', _data, function(res){
			if(parseInt(res)==1){
				window.location.reload();
			}else if(parseInt(res)==3){
				alert('Bạn không có quyền thực hiện chức năng này!');
			}else{
				alert('Lỗi!');
			}
		});
	}

	function delete1(e){
		var id = parseInt(e.getAttribute('data-id'));
		if(confirm('Bạn có chắc muốn xóa?')){
			$.post('<?php echo ROOTHOST;?>ajaxs/product_group/delete.php', {"id": id}, function(res){
				if(parseInt(res)==1){
					window.location.reload();
				}else if(parseInt(res)==3){
					alert('Bạn không có quyền thực hiện chức năng này!');
				}else{
					alert('Lỗi!');
				}
			});
		}
	}
</script>