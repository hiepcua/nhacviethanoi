<?php
if(isset($_POST['cmdsave_tab1']) && $_POST['txt_name']!='') {
	$Email 			= isset($_POST['txt_email']) ? addslashes($_POST['txt_email']) : '';
	$Name 			= isset($_POST['txt_name']) ? addslashes($_POST['txt_name']) : '';
	$Comment 		= isset($_POST['txt_comment']) ? addslashes($_POST['txt_comment']) : '';
	$Phone 		= isset($_POST['txt_phone']) ? addslashes($_POST['txt_phone']) : '';

	$arr=array();
	$arr['name'] = $Name;
	$arr['email'] = $Email;
	$arr['phone'] = $Phone;
	$arr['comment'] = $Comment;
	$arr['cdate'] = time();
	$arr['isactive'] = 1;

	$result = SysAdd('tbl_contact', $arr);
	if($result){
		$_SESSION['flash'.'com_'.$COM.'add'] = 1;
		echo "<script language=\"javascript\">window.location.href='".ROOTHOST.$COM."'</script>";
	}else{
		echo '<script>$(document).ready(function(){$.notify("Lỗi!", "error");})</script>';
	}
}
?>
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Thêm mới liên hệ</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?php echo ROOTHOST;?>">Bảng điều khiển</a></li>
					<li class="breadcrumb-item"><a href="<?php echo ROOTHOST.COMS;?>">Quản lý liên hệ</a></li>
					<li class="breadcrumb-item active">Thêm mới liên hệ</li>
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
							<input type="text" id="txt_email" name="txt_email" class="form-control required" value="" placeholder="Email address">
						</div>

						<div class="form-group">
							<label>Tên</label><font color="red">*</font>
							<input type="text" id="txt_name" name="txt_name" class="form-control required" value="" placeholder="Tên khách hàng">
						</div>

						<div class="form-group">
							<label>Số điện thoại</label><font color="red">*</font>
							<input type="text" id="txt_phone" name="txt_phone" class="form-control required" value="" placeholder="Số điện thoại">
						</div>

						<div class="form-group">
							<label>Nội dung</label>
							<textarea class="form-control" name="txt_comment" placeholder="Nội dung..." rows="2"></textarea>
						</div>
					</div>
					
					<div class="text-center toolbar">
						<input type="submit" name="cmdsave_tab1" id="cmdsave_tab1" class="save btn btn-success" value="Lưu thông tin" class="btn btn-primary">
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