<?php
require_once('libs/cls.upload.php');
$obj_upload = new CLS_UPLOAD();
$file=$strWhere='';
$GetID = isset($_GET['id']) ? (int)$_GET["id"] : 0;

if(isset($_POST['txt_name']) && $_POST['txt_name']!=='') {
	$Url = isset($_POST['txt_url']) ? addslashes($_POST['txt_url']) : '';
	$Images = isset($_POST['txt_thumb2']) ? addslashes($_POST['txt_thumb2']) : '';

	if(isset($_FILES['txt_thumb']) && $_FILES['txt_thumb']['size'] > 0){
		$save_path 	= MEDIA_HOST."/images/";
		$obj_upload->setPath($save_path);
		$file = ROOTHOST_WEB.'medias/images/'.$obj_upload->UploadFile("txt_thumb", $save_path);
	}else{
		$file = $Images;
	}

	$arr=array();
	$arr['title'] 		= isset($_POST['txt_name']) ? addslashes($_POST['txt_name']) : '';
	$arr['alias'] 		= $Url=='' ? un_unicode($arr['title']) : $Url;
	$arr['fulltext'] 	= isset($_POST['txt_fulltext']) ? addslashes($_POST['txt_fulltext']) : '';
	$arr['image'] 		= $file;
	$arr['author'] 		= getInfo('username');
	$arr['cdate'] 		= time();
	$result = SysEdit('tbl_html_block', $arr, " id=".$GetID);

	if($result){
        echo '<script>$(document).ready(function(){$.notify("Cập nhật thành công", "success");})</script>';
    }else{
        echo '<script>$(document).ready(function(){$.notify("Lỗi!", "error");})</script>';
    }
}

$res_Cons = SysGetList('tbl_html_block', array(), "AND id=".$GetID);
if(count($res_Cons) <= 0){
	echo 'Không có dữ liệu.'; 
	return;
}
$row = $res_Cons[0];
?>
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Cập nhật html block</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?php echo ROOTHOST;?>">Bảng điều khiển</a></li>
					<li class="breadcrumb-item"><a href="<?php echo ROOTHOST.COMS;?>">Html block</a></li>
					<li class="breadcrumb-item active">Cập nhật html block</li>
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
					<input type="hidden" name="txtid" value="<?php echo $GetID;?>">
					<div class="row">
						<div class="col-md-9">
							<div  class="form-group">
								<label>Tiêu đề<font color="red">*</font></label>
								<input type="text" id="txt_name" name="txt_name" class="form-control" value="<?php echo $row['title']; ?>" placeholder="Tiêu đề html block">
							</div>

							<div class="form-group">
								<label>Url</label>
								<input type="text" id="txt_url" name="txt_url" value="<?php echo $row['alias']; ?>" class="form-control">
							</div>
							
							<div class="form-group" id="type_text">
								<label>Nội dung</label>
								<textarea class="form-control" id="txt_fulltext" name="txt_fulltext" placeholder="Nội dung chính..." rows="5"><?php echo $row['fulltext']; ?></textarea>
							</div>
						</div>
						
						<div class="col-md-3">
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
											<input type="file" id="file_image" name="txt_thumb" accept="image/jpg, image/jpeg/png">
										</span>
										<a href="javascript:void(0)" class="btn fileupload-exists" data-dismiss="fileupload" onclick="cancel_fileupload()">Hủy</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="toolbar">
					<div class="widget_control text-center">
						<input type="submit" name="cmdsave_tab1" id="cmdsave_tab1" class="border-radius0 btn btn-success" value="Lưu thay đổi" class="border-radius0 btn btn-primary">
					</div>
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
		// Hidden left sidebar
		$('#body').addClass('sidebar-collapse');
		$('#frm_action').submit(function(){
			return validForm();
		});

		$('#txt_name').on('change', function(){
			var name = $(this).val();
			var _url = "<?php echo ROOTHOST;?>ajaxs/generate_alias.php";
			if(name.length > 0){
				$.post(_url, {"name": name}, function(req){
					/*console.log(req);*/
					if(req!=='0'){
						$('#txt_url').val(req);
					}
				})
			}
		});

		tinymce.init({
			selector: '#txt_fulltext',
			height: 450,
			plugins: [
			'link image imagetools table lists autolink fullscreen media hr code textcolor'
			],
			image_title: true,
			automatic_uploads: true,
			toolbar: 'bold italic underline | fontselect fontsizeselect formatselect forecolor backcolor | alignleft aligncenter alignright alignjustify |  numlist bullist | removeformat | insertfile image media link anchor codesample | outdent indent fullscreen',
			contextmenu: 'link image imagetools table spellchecker lists',
			content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
			image_caption: true,
			images_reuse_filename: true,
			images_upload_credentials: true,
			relative_urls : false,
			remove_script_host : false,
			convert_urls : true,
            
            // override default upload handler to simulate successful upload
            images_upload_handler: function (blobInfo, success, failure) {
            	var xhr, formData;

            	xhr = new XMLHttpRequest();
            	xhr.withCredentials = false;
            	xhr.open('POST', '<?php echo ROOTHOST;?>ajaxs/upload.php');

            	xhr.onload = function() {
            		console.log(xhr.responseText);
            		var json;

            		if (xhr.status != 200) {
            			failure('HTTP Error: ' + xhr.status);
            			return;
            		}

            		json = JSON.parse(xhr.responseText);

            		if (!json || typeof json.location != 'string') {
            			failure('Invalid JSON: ' + xhr.responseText);
            			return;
            		}

            		success(json.location);
            	};

            	formData = new FormData();
            	formData.append('file', blobInfo.blob(), blobInfo.filename());
            	formData.append('folder', 'images/');
            	xhr.send(formData);
            },
        });
	});

	/*
	 Ajax upload image
	*/

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
		var title = $('#txt_name').val();

		if(title=='' || cate==0){
			alert('Các mục đánh dấu * không được để trống');
			flag = false;
		}
		return flag;
	}
</script>