<?php
session_start();
define('incl_path','../../global/libs/');
define('libs_path','../../libs/');
require_once(incl_path.'gfconfig.php');
require_once(incl_path.'gfinit.php');
require_once(incl_path.'gffunc.php');
require_once(incl_path.'gffunc_user.php');
require_once(libs_path.'cls.mysql.php');
?>
<br/>
<div class='ajx_mess' style='color:#f00;'></div>
<form name="frm_action" id="frm_action" action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Tên </label><font color="red">*</font>
		<input type="text" id="txt_name" name="txt_name" class="form-control" value="" placeholder="Tên menu" required>
	</div>

	<div class="form-group">
		<label>Mô tả</label>
		<textarea id="desc" class="form-control" name="desc" placeholder="Mô tả về menu" rows="3"></textarea>
	</div>
	<div class="text-center toolbar">
		<input type="submit" name="cmdsave_tab" id="cmdsave_tab" class="save btn btn-success" value="Lưu thông tin" class="btn btn-primary">
	</div>
</form>
<script type="text/javascript">
	$(document).ready(function(){
		$("form#frm_action").submit(function(e) {
			if(validForm()){
				e.preventDefault();    
				var formData = new FormData(this);

				var _url="<?php echo ROOTHOST;?>ajaxs/menu/process_add.php";
				$.ajax({
					url: _url,
					type: 'POST',
					data: formData,
					success: function (data) {
						if(parseInt(data) == 1){
							window.location.reload();
						}else{
							alert('Lỗi!')
						}
					},
					cache: false,
					contentType: false,
					processData: false
				});
			}else{
				e.preventDefault();
			}
		});
	});

	function validForm(){
		var flag = true;
		var title = $('#txt_name').val();

		if(title==''){
			alert('Các mục đánh dấu * không được để trống');
			flag = false;
		}
		return flag;
	}
</script>