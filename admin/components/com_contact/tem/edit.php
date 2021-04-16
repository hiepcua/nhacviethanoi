<?php
$GetID = isset($_GET['id']) ? (int)$_GET["id"] : 0;
$number = SysCount('tbl_contact', " AND id=".$GetID);
if($number == 0){
	echo 'Không có dữ liệu.'; 
	return;
}

if(isset($_POST['cmdsave_tab1']) && $_POST['txt_name']!='') {
	$result = SysEdit('tbl_contact', ['isactive' => 0], " id=".$GetID);
	if($result){
        echo '<script>$(document).ready(function(){$.notify("Cập nhật thành công", "success");})</script>';
    }else{
        echo '<script>$(document).ready(function(){$.notify("Lỗi!", "error");})</script>';
    }
}

$res_Feed = SysGetList('tbl_contact', array(), ' AND id='. $GetID);
if(count($res_Feed) <= 0){
	echo 'Không có dữ liệu.'; 
	return;
}
$row = $res_Feed[0];
?>
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Cập nhật liên hệ</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?php echo ROOTHOST;?>">Bảng điều khiển</a></li>
					<li class="breadcrumb-item"><a href="<?php echo ROOTHOST.COMS;?>">Danh sách liên hệ</a></li>
					<li class="breadcrumb-item active">Cập nhật liên hệ</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<div id='action'>
			<div class="card">
				<form name="frm_action" id="frm_action" action="" method="post" enctype="multipart/form-data">
					<div class="mess"></div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Email address</label><font color="red">*</font>
							<input type="text" id="txt_email" name="txt_email" class="form-control required" value="<?php echo $row['email'];?>" placeholder="Email address">
						</div>

						<div class="form-group">
							<label>Tên</label><font color="red">*</font>
							<input type="text" id="txt_name" name="txt_name" class="form-control required" value="<?php echo $row['name'];?>" placeholder="Tên khách hàng">
						</div>

						<div class="form-group">
							<label>Số điện thoại</label><font color="red">*</font>
							<input type="text" id="txt_phone" name="txt_phone" class="form-control required" value="<?php echo $row['phone'];?>" placeholder="Số điện thoại">
						</div>

						<div class="form-group">
							<label>Nội dung</label>
							<textarea class="form-control" name="txt_comment" placeholder="Nội dung..." rows="2"><?php echo $row['comment'];?></textarea>
						</div>
					</div>
					
					<div class="text-center toolbar">
						<a href="<?php echo ROOTHOST.COMS;?>" class="btn btn-default"><i class="fa fa-backward" aria-hidden="true"></i>&nbsp&nbspQuay lại</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="submit" name="cmdsave_tab1" id="cmdsave_tab1" class="save btn btn-success" value="Đã xử lý" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- /.row -->
<!-- /.content-header -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#frm_action').submit(function(){
			return validForm();
		})
	});

	function validForm(){
		var flag = true;
		$('#frm_action .required').each(function(){
			var val = $(this).val();
			if(!val || val=='' || val=='0') {
				$(this).parents('.form-group').addClass('error');
				flag = false;
			}else{
				$(this).parents('.form-group').removeClass('error');
			}

			if(flag==false) {
				showMess("Những mục có đánh dấu * là những thông tin bắt buộc.", "error");
			}
		});
		return flag;
	}
</script>