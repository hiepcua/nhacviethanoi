<?php
session_start();
define('incl_path','../../global/libs/');
define('libs_path','../../libs/');
require_once(incl_path.'gfconfig.php');
require_once(incl_path.'gfinit.php');
require_once(incl_path.'gffunc.php');
require_once(incl_path.'gffunc_user.php');
require_once(libs_path.'cls.mysql.php');

function getListComboboxCategories($selectedid=null, $parid=0, $level=0, $childs=array()){
	$sql="SELECT * FROM tbl_product_group WHERE `par_id`='$parid' AND `isactive`='1'";
	$objdata=new CLS_MYSQL();
	$objdata->Query($sql);
	$char="";
	if($level!=0){
		for($i=0;$i<$level;$i++)
			$char.="|-----";
	}
	if($objdata->Num_rows()<=0) return;
	while($rows=$objdata->Fetch_Assoc()){
		$id=$rows['id'];
		$parid=$rows['par_id'];
		$title=$rows['title'];
		$selected = '';
		if($selectedid == $id){
			$selected = 'selected';
		}
		if(in_array($id, $childs)){
			echo "<option value='$id' disabled='true' class='disabled'>$char $title</option>";
		}else{
			echo "<option value='$id' ".$selected.">$char $title</option>";
		}
		$nextlevel=$level+1;
		getListComboboxCategories($selectedid, $id,$nextlevel, $childs);
	}
}
$GetID = isset($_GET['id']) ? (int)$_GET["id"] : 0;

$res_type = SysGetList('tbl_product_type', array(), ' AND id='. $GetID);
if(count($res_type) <= 0){
	echo 'Không có dữ liệu.'; 
	return;
}
$row = $res_type[0];
$id_pgroup = $row['id_pgroup'];
?>
<br/>
<div class='ajx_mess' style='color:#f00;'></div>
<form name="frm_action" id="frm_action" action="" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" id="id" value="<?php echo $row['id'];?>">
	<div class="row">
		<div class="col-md-8">
			<div class="form-group">
				<label>Tên loại sản phẩm </label><font color="red">*</font>
				<input type="text" id="txt_name" name="txt_name" class="form-control required" value="<?php echo $row['title'];?>" placeholder="Tên loại sản phẩm">
			</div>

			<div class="form-group">
				<label>Nhóm sản phẩm</label>
				<select class="form-control" name="cbo_par" id="ajax_cbo_gproduct">
					<option value="0">-- Chọn một --</option>
					<?php getListComboboxCategories($id_pgroup,0,0, $arr_childs);?>
				</select>
			</div>

			<div class="form-group">
				<label>Mô tả</label>
				<textarea class="form-control" name="txt_intro" placeholder="Mô tả về chuyên mục..." rows="2"><?php echo $row['intro'];?></textarea>
			</div>
		</div>

		<div class="col-md-4">
			<div class='form-group'>
				<div class="widget-fileupload fileupload fileupload-new" data-provides="fileupload">
					<label>Ảnh đại diện</label><small> (Dung lượng < 10MB)</small>
					<div class="widget-avatar mb-2">
						<div class="fileupload-new thumbnail">
							<?php
							if(strlen($row['image'])>0){
								echo '<img src="'.$row['image'].'" id="img_image_preview">';
							}else{
								echo '<img src="'.ROOTHOST.'global/img/no-photo.jpg" id="img_image_preview">';
							}
							?>
						</div>
						<div class="fileupload-preview fileupload-exists thumbnail" style="line-height: 20px;"></div>
						<input type="hidden" name="txt_thumb2" value="<?php echo $row['image'];?>">
					</div>
					<div class="control">
						<span class="btn btn-file">
							<span class="fileupload-new">Tải lên</span>
							<span class="fileupload-exists">Thay đổi</span>
							<input type="file" id="file_image" name="txt_thumb" accept="image/jpg, image/jpeg">
						</span>
						<a href="javascript:void(0)" class="btn fileupload-exists" data-dismiss="fileupload" onclick="cancel_fileupload()">Hủy</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="text-center toolbar">
		<input type="submit" name="cmdsave_tab" id="cmdsave_tab" class="save btn btn-success" value="Lưu thông tin" class="btn btn-primary">
	</div>
</form>
<script type="text/javascript">
	$(document).ready(function(){
		$('#ajax_cbo_gproduct').select2();
		$("form#frm_action").submit(function(e) {
			if(validForm()){
				e.preventDefault();    
				var formData = new FormData(this);
				var _url="<?php echo ROOTHOST;?>ajaxs/product_type/process_edit.php";
				$.ajax({
					url: _url,
					type: 'POST',
					data: formData,
					success: function (data) {
						if(parseInt(data) == 1){
							window.location.reload();
						}else if(parseInt(res)==3){
							showMess('Bạn không có quyền thực hiện chức năng này!','error');
						}else{
							showMess('Lỗi!','error');
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

	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				var img = document.createElement("img");
				img.src = e.target.result;
				// Hidden fileupload new
				$('.fileupload').removeClass('fileupload-new');
				$('.fileupload').addClass('fileupload-exists');
				$('.fileupload-preview').html(img);
			}

			reader.readAsDataURL(input.files[0]); // convert to base64 string
		}
	}

	$("#file_image").on('change', function(){
		readURL(this);
	});

	function cancel_fileupload(){
		$('.fileupload').removeClass('fileupload-exists');
		$('.fileupload').addClass('fileupload-new');
		$('.fileupload-preview').empty();
		$("#file_image").val('');
	}

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
				alert("Những mục có đánh dấu * là những thông tin bắt buộc.");
			}
		});
		return flag;
	}
</script>