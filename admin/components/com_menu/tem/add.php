<?php
$msg 		= new \Plasticbrain\FlashMessages\FlashMessages();
if(!isset($_SESSION['flash'.'com_'.COMS])) $_SESSION['flash'.'com_'.COMS] = 2;
require_once('libs/cls.upload.php');
$obj_upload = new CLS_UPLOAD();
$file='';
$get_mnuid = isset($_GET['mnuid']) ? (int)$_GET['mnuid'] : 0;
if(isset($_POST['cmdsave_tab1']) && $_POST['txtname']!='') {
	$Cate_ID 	= '';
	$Con_ID 	= '';
	$Link 		= '';
	$Page_ID 	= '';
	$Personnel_group 		= '';
	$Event_group 			= '';
	$Publish_group 			= '';
	$Event_ID 				= '';
	$Mnu_ID 	= $get_mnuid;
	$Code 		= addslashes(un_unicode($_POST['txtname']));
	$Par_ID		= isset($_POST['cbo_parid']) ? (int)$_POST['cbo_parid'] : 0;
	$Name 		= isset($_POST['txtname']) ? addslashes($_POST['txtname']) : '';
	$Intro 		= isset($_POST['txtdesc']) ? addslashes($_POST['txtdesc']) : '';
	$Viewtype 	= isset($_POST['cbo_viewtype']) ? addslashes($_POST['cbo_viewtype']) : '';
	$Icon 		= isset($_POST['txticon']) ? addslashes($_POST['txticon']) : '';
	$Class 		= isset($_POST['txtclass']) ? addslashes($_POST['txtclass']) : '';
	$isActive 	= isset($_POST['optactive']) ? (int)$_POST['optactive'] : 0;

	if($Viewtype == 'block'){
		$Cate_ID = (int)$_POST['cbo_cate'];
	}
	else if($Viewtype == 'article'){		
		$Con_ID = (int)$_POST['cbo_article'];
	}
	else if($Viewtype == 'page'){		
		$Page_ID = (int)$_POST['cbo_page'];
	}
	else if($Viewtype == 'personnel_group'){		
		$Personnel_group = (int)$_POST['cbo_personnel_group'];
	}
	else if($Viewtype == 'event_group'){
		$Event_group = (int)$_POST['cbo_event_group'];
	}
	else if($Viewtype == 'publish_group'){
		$Publish_group = (int)$_POST['cbo_publish_group'];
	}
	else if($Viewtype == 'event'){		
		$Event_ID = (int)$_POST['cbo_event'];
	}
	else{
		$Link = addslashes($_POST['txtlink']);
	}

	$arr=array();
	$arr['par_id'] = $Par_ID;
	$arr['menu_id'] = $Mnu_ID;
	$arr['name'] = $Name;
	$arr['code'] = un_unicode($Name);
	$arr['intro'] = $Intro;
	$arr['viewtype'] = $Viewtype;
	$arr['cate_id'] = $Cate_ID;
	$arr['con_id'] = $Con_ID;
	$arr['page_id'] = $Page_ID;
	$arr['link'] = $Link;
	$arr['icon'] = $Icon;
	$arr['class'] = $Class;
	$arr['isactive'] = $isActive;
	$arr['personnel_group'] = $Personnel_group;
	$arr['event_group'] = $Event_group;
	$arr['publish_group'] = $Publish_group;
	$arr['event_id'] = $Event_ID;

	$result = SysAdd('tbl_mnuitems', $arr);
	if($result){
		$rs_parent = SysGetList('tbl_mnuitems', array("path"), " AND id=".$Par_ID);
		if(count($rs_parent)>0){
			$rs_parent = $rs_parent[0];
			$path = $rs_parent['path'].'_'.$result;
		}else{
			$path = $result;
		}

		SysEdit('tbl_mnuitems', array('path' => $path), " id=".$result);
		$_SESSION['flash'.'com_'.COMS] = 1;
	}else{
		$_SESSION['flash'.'com_'.COMS] = 0;
	}
}

$viewtype="block";
if(isset($_POST["txt_viewtype"]))
	$viewtype=$_POST["txt_viewtype"];
?>
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Thêm mới menu item</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?php echo ROOTHOST;?>">Bảng điều khiển</a></li>
					<li class="breadcrumb-item"><a href="<?php echo ROOTHOST.COMS.'/'.$get_mnuid;?>">Menu chính</a></li>
					<li class="breadcrumb-item active">Thêm mới menu item</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<?php
		if (isset($_SESSION['flash'.'com_'.COMS])) {
			if($_SESSION['flash'.'com_'.COMS] == 1){
				$msg->success('Cập nhật thành công.');
				echo $msg->display();
			}else if($_SESSION['flash'.'com_'.COMS] == 0){
				$msg->error('Có lỗi trong quá trình thêm mới.');
				echo $msg->display();
			}
			unset($_SESSION['flash'.'com_'.COMS]);
		}
		?>
		<form id="frm_type" name="frm_type" method="post" action="" style="display:none;">
			<input type="text" name="txt_viewtype" id="txt_viewtype" />
		</form>

		<form id="frm_action" class="" name="frm_action" method="post" action="">
			<p>Những mục đánh dấu <font color="red">*</font> là yêu cầu bắt buộc.</p>
			<div class="row">
				<div class="col-md-9">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Kiểu hiển thị<small class="cred"> (*)</small><span id="err_viewtype" class="mes-error"></span></label>
								<select name="cbo_viewtype" id="cbo_viewtype" class="form-control" onchange="select_type();">
									<?php
									foreach (MENU_VIEW_TYPES as $key => $value) {
										if($key=='link'){
											echo '<option value="'.$key.'" selected="selected">'.$value.'</option>';
										}else{
											echo '<option value="'.$key.'">'.$value.'</option>';
										}
									}
									?>
									<script language="javascript">
										$(document).ready(function() {
											cbo_Selected('cbo_viewtype','<?php echo $viewtype;?>');
										});
									</script>
								</select>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Tên<small class="cred"> (*)</small><span id="err_name" class="mes-error"></span></label>
								<input name="txtname" type="text" id="txtname" class="form-control" placeholder="Tên menu item">
							</div>
						</div>

						<?php if($viewtype=="block"){?>
							<div class="col-md-12">
								<div class="form-group">
									<label>Nhóm tin<small class="cred"> (*)</small><span id="err_cate" class="mes-error"></span></label>
									<select name="cbo_cate" id="cbo_cate" class="form-control" style="width:100%;">
										<?php echo getListComboboxCate(0,0);?>
									</select>
									<script type="text/javascript">
										$(document).ready(function() {
											$("#cbo_cate").select2();
										});
									</script>
								</div>
							</div>
						<?php } else if($viewtype=="article"){?>
							<div class="col-md-12">
								<div class="form-group">
									<label>Bài viết<small class="cred"> (*)</small><span id="err_article" class="mes-error"></span></label>
									<select name="cbo_article" id="cbo_article" class="form-control" style="width: 100%;">
										<option value="0" title="N/A">Chọn một bài viết</option>
										<?php
										$res_cons = SysGetList('tbl_content', [], 'AND status=4');
										foreach ($res_cons as $key => $value) {
											echo '<option value="'.$value['id'].'">'.$value['title'].'</option>';
										}
										?>
									</select>
									<script type="text/javascript">
										$(document).ready(function() {
											$("#cbo_article").select2();
										});
									</script>
								</div>
							</div>
						<?php } else if($viewtype=="page"){?>
							<div class="col-md-12">
								<div class="form-group">
									<label>Trang tĩnh<small class="cred"> (*)</small><span id="err_page" class="mes-error"></span></label>
									<select name="cbo_page" id="cbo_page" class="form-control" style="width: 100%;">
										<option value="0" title="N/A">Chọn một trang tĩnh</option>
										<?php
										$res_pages = SysGetList('tbl_page', [], 'AND isactive=1');
										foreach ($res_pages as $key => $value) {
											echo '<option value="'.$value['id'].'">'.$value['title'].'</option>';
										}
										?>
									</select>
									<script type="text/javascript">
										$(document).ready(function() {
											$("#cbo_page").select2();
										});
									</script>
								</div>
							</div>
						<?php } else if($viewtype=="personnel_group"){?>
							<div class="col-md-12">
								<div class="form-group">
									<label>Nhóm nhân sự<small class="cred"> (*)</small><span id="err_personnel_group" class="mes-error"></span></label>
									<select name="cbo_personnel_group" id="cbo_personnel_group" class="form-control" style="width: 100%;">
										<option value="0" title="N/A">Chọn một nhóm nhân sự</option>
										<?php
										$res_personnel_groups = SysGetList('tbl_personnel_group', [], 'AND isactive=1');
										foreach ($res_personnel_groups as $key => $value) {
											echo '<option value="'.$value['id'].'">'.$value['title'].'</option>';
										}
										?>
									</select>
									<script type="text/javascript">
										$(document).ready(function() {
											$("#cbo_personnel_group").select2();
										});
									</script>
								</div>
							</div>
						<?php } else if($viewtype=="event_group"){?>
							<div class="col-md-12">
								<div class="form-group">
									<label>Nhóm hoạt động khoa học<small class="cred"> (*)</small><span id="err_event_group" class="mes-error"></span></label>
									<select name="cbo_event_group" id="cbo_event_group" class="form-control" style="width: 100%;">
										<option value="0" title="N/A">Chọn một nhóm HĐKH</option>
										<?php
										$res_event_groups = SysGetList('tbl_event_group', [], 'AND isactive=1');
										foreach ($res_event_groups as $key => $value) {
											echo '<option value="'.$value['id'].'">'.$value['title'].'</option>';
										}
										?>
									</select>
									<script type="text/javascript">
										$(document).ready(function() {
											$("#cbo_event_group").select2();
										});
									</script>
								</div>
							</div>
						<?php } else if($viewtype=="event"){?>
							<div class="col-md-12">
								<div class="form-group">
									<label>Hoạt động khoa học<small class="cred"> (*)</small><span id="err_event" class="mes-error"></span></label>
									<select name="cbo_event" id="cbo_event" class="form-control" style="width: 100%;">
										<option value="0" title="N/A">Chọn một HĐKH</option>
										<?php
										$res_events = SysGetList('tbl_event', [], 'AND isactive=1');
										foreach ($res_events as $key => $value) {
											echo '<option value="'.$value['id'].'">'.$value['title'].'</option>';
										}
										?>
									</select>
									<script type="text/javascript">
										$(document).ready(function() {
											$("#cbo_event").select2();
										});
									</script>
								</div>
							</div>
						<?php } else if($viewtype=="publish_group"){?>
							<div class="col-md-12">
								<div class="form-group">
									<label>Nhóm xuất bản, ấn phẩm<small class="cred"> (*)</small><span id="err_publish_grop" class="mes-error"></span></label>
									<select name="cbo_publish_group" id="cbo_publish_group" class="form-control" style="width: 100%;">
										<option value="0" title="N/A">Chọn một nhóm xuất bản, ấn phẩm</option>
										<?php
										$res_publish_groups = SysGetList('tbl_publish_group', [], 'AND isactive=1');
										foreach ($res_publish_groups as $key => $value) {
											echo '<option value="'.$value['id'].'">'.$value['title'].'</option>';
										}
										?>
									</select>
									<script type="text/javascript">
										$(document).ready(function() {
											$("#cbo_publish_group").select2();
										});
									</script>
								</div>
							</div>
						<?php } else { ?>
							<div class="col-md-6">
								<div class="form-group">
									<label>Link<small class="cred"> (*)</small><span id="err_link" class="mes-error"></span></label>
									<input name="txtlink" type="text" id="txtlink" class="form-control" value="" placeholder="http://"/>
								</div>
							</div>
						<?php }?>

						<div class="col-sm-12">
							<div class="form-group">
								<label>Mô tả:</label>
								<textarea name="txtdesc" id="txtdesc" cols="45" rows="5"></textarea>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="form-group">
						<label>Danh mục cha</label>
						<select name="cbo_parid" id="cbo_parid" class="form-control" style="width: 100%;">
							<option value="0">Top</option>
							<?php echo getListComboboxMnuitems(0,0); ?>
						</select>
						<script type="text/javascript">
							$(document).ready(function() {
								$("#cbo_parid").select2();
							});
						</script>
					</div>
					<div class="form-group">
						<label>Biểu tượng (Icon)</label>
						<input type="text" name="txticon" id="txticon" class="form-control"/>
					</div>

					<div class="form-group">
						<label>Class</label>
						<input type="text" name="txtclass" id="txtclass" class="form-control"/>
					</div>

					<div class="form-group">
						<label>Hiển thị</label>
						<div>
							<label class="radio-inline"><input type="radio" value="1" name="optactive" checked>Có</label>
							<label class="radio-inline"><input type="radio" value="0" name="optactive">Không</label>
						</div>
					</div>
				</div>
			</div>

			<div class="text-center toolbar">
				<input type="submit" name="cmdsave_tab1" id="cmdsave_tab1" class="save btn btn-success" value="Lưu thông tin" class="btn btn-primary">
			</div>
		</form>
	</div>
</section>
<!-- /.row -->
<!-- /.content-header -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#frm_action').submit(function(){
			return validForm();
		});

		tinymce.init({
			selector: '#txtdesc',
			height: 300,
			plugins: [
			'link image imagetools table lists autolink fullscreen media hr code'
			],
			image_title: true,
			automatic_uploads: true,
			toolbar: 'bold italic underline | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify |  numlist bullist | removeformat | insertfile image media link anchor codesample | outdent indent fullscreen',
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

	function validForm(){
		var flag = true;
		var name = $("#txtname").val();
		var viewtype = $("#cbo_viewtype").val();

		if(viewtype=="block"){
			if($("#cbo_cate").val()=="0") {
				$("#err_cate").fadeTo(200,0.1, function(){ 
					$(this).html('Vui lòng chọn một nhóm tin').fadeTo(900,1);
				});
				return false;
			}
		}
		else if(viewtype=="article"){
			if($("#cbo_article").val()=="0") {
				$("#err_article").fadeTo(200,0.1,function()
				{ 
					$(this).html('Vui lòng chọn một bài viết').fadeTo(900,1);
				});
				return false;
			}
		}
		else if(viewtype=="personnel_group"){
			if($("#cbo_personnel_group").val()=="0") {
				$("#err_personnel_group").fadeTo(200,0.1,function()
				{ 
					$(this).html('Vui lòng chọn một nhóm nhân sự').fadeTo(900,1);
				});
				return false;
			}
		}
		else if(viewtype=="event_group"){
			if($("#cbo_event_group").val()=="0") {
				$("#err_event_group").fadeTo(200,0.1,function()
				{ 
					$(this).html('Vui lòng chọn một nhóm HĐKH').fadeTo(900,1);
				});
				return false;
			}
		}
		else if(viewtype=="event"){
			if($("#cbo_event").val()=="0") {
				$("#err_event").fadeTo(200,0.1,function()
				{ 
					$(this).html('Vui lòng chọn một HĐKH').fadeTo(900,1);
				});
				return false;
			}
		}
		else if(viewtype=="publish_group"){
			if($("#cbo_publish_group").val()=="0") {
				$("#err_publish_grop").fadeTo(200,0.1,function()
				{ 
					$(this).html('Vui lòng chọn một nhóm ấn phẩm, xuất bản').fadeTo(900,1);
				});
				return false;
			}
		}
		else if(viewtype=="link"){
			if($("#txtlink").val()=="" || $("#txtlink").val()=="http://" ) {
				$("#err_link").fadeTo(200,0.1,function()
				{ 
					$(this).html('Vui lòng nhập đường dẫn đến bài viết').fadeTo(900,1);
				});
				$("#txtlink").focus();
				return false;
			}
		}

		if(name==""){
			$("#err_name").fadeTo(200,0.1,function(){ 
				$(this).html('Vui lòng nhập tên').fadeTo(900,1);
			});
			return false;
		}
		return true;
	}

	function select_type(){
		var txt_viewtype=document.getElementById("txt_viewtype");
		var cbo_viewtype=document.getElementById("cbo_viewtype");
		for(i=0;i<cbo_viewtype.length;i++){
			if(cbo_viewtype[i].selected==true)
				txt_viewtype.value=cbo_viewtype[i].value;
		}
		document.frm_type.submit();
	}
</script>