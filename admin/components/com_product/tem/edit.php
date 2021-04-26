<?php
if(!isset($_SESSION['flash'.'com_'.COMS])) $_SESSION['flash'.'com_'.COMS] = 2;
require_once(incl_path.'gffunc_media.php');
$file=$strWhere='';
$GetID = isset($_GET['id']) ? (int)$_GET["id"] : 0;

/*Check user permission*/
$user = getInfo('username');
$strWhere.=' AND `author`="'.$user.'" AND id='. $GetID;

if(isset($_POST['txt_name']) && $_POST['txt_name']!=='') {
	$thumb = isset($_POST['txt_thumb2']) ? addslashes($_POST['txt_thumb2']) : '';
	if(isset($_FILES['txt_thumb']) && $_FILES['txt_thumb']['size'] > 0){
		$file = uploadFile('txt_thumb', '', '');
	}else{
		$file = $thumb;
	}

	$obj_images = array();
	$txt_images = isset($_POST['txt_images']) ? $_POST['txt_images'] : '';
	if($txt_images !== ''){
		foreach ($_POST['txt_images'] as $k => $val) {
			$n = count($obj_images);
			$obj_images[$n] = addslashes($val);
		}
		$images = json_encode($obj_images, JSON_UNESCAPED_UNICODE);
	}

	$arr = array();
	$arr['group_id'] = isset($_POST['cbo_gproduct']) ? (int)$_POST['cbo_gproduct'] : 0;
	$arr['trademark_id'] = isset($_POST['trademark_id']) ? (int)$_POST['trademark_id'] : 0;
	$arr['pro_code'] = isset($_POST['pro_code']) ? antiData($_POST['pro_code']) : '';
	$arr['name'] = isset($_POST['txt_name']) ? antiData($_POST['txt_name']) : '';
	$arr['alias'] = un_unicode($arr['name']);
	$arr['thumb'] = $file;
	$arr['images'] = $images;
	$arr['intro'] = isset($_POST['txt_intro']) ? antiData($_POST['txt_intro']) : '';
	$arr['fulltext'] = isset($_POST['txt_fulltext']) ? addslashes($_POST['txt_fulltext']) : '';
	$arr['price'] = isset($_POST['price']) ? floatval($_POST['price']) : '';
	$arr['price1'] = isset($_POST['price1']) ? floatval($_POST['price1']) : '';
	$arr['related_product'] = isset($_POST['related_product']) ? json_encode($_POST['related_product']) : null;
	$arr['related_articles'] = isset($_POST['related_articles']) ? json_encode($_POST['related_articles']) : null;
	$arr['author'] = isset($_POST['author']) && $_POST['author'] != '' ? addslashes($_POST['author']) : getInfo('username');
	$arr['tag_ids'] = isset($_POST['tag_ids']) ? json_encode($_POST['tag_ids']) : null;
	$arr['mdate'] = time();

	$result = SysEdit('tbl_product', $arr, " id=".$GetID);
	if($result){
		echo '<script>$(document).ready(function(){$.notify("Cập nhật thành công", "success");})</script>';
	}else{
		echo '<script>$(document).ready(function(){$.notify("Lỗi!", "error");})</script>';
	}
}

$res_Cons = SysGetList('tbl_product', array(), $strWhere);
if(count($res_Cons) <= 0){
	echo 'Không có dữ liệu.'; 
	return;
}
$row = $res_Cons[0];
$price = $row['price']!=0 ? $row['price'] : '';
$price1 = $row['price1']!=0 ? $row['price1'] : '';
?>
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Cập nhật sản phẩm</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?php echo ROOTHOST;?>">Bảng điều khiển</a></li>
					<li class="breadcrumb-item"><a href="<?php echo ROOTHOST.COMS;?>">Danh sách sản phẩm</a></li>
					<li class="breadcrumb-item active">Cập nhật sản phẩm</li>
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
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Tên sản phẩm</label><font color="red">*</font>
										<input type="text" id="txt_name" name="txt_name" class="form-control" value="<?php echo $row['name'];?>" placeholder="Tên sản phẩm">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Mã sản phẩm</label><font color="red">*</font>
										<input type="text" id="pro_code" name="pro_code" class="form-control" value="<?php echo $row['pro_code'];?>" placeholder="Mã sản phẩm">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Giá</label><small> (vnđ) Nếu bỏ trống thì sẽ hiển thị giá là liên hệ</small>
										<input type="number" id="price" name="price" class="form-control" value="<?php echo $price;?>" placeholder="Giá sản phẩm">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Giá khuyến mại</label><small> (vnđ)</small>
										<input type="number" id="price1" name="price1" class="form-control" value="<?php echo $price1;?>" placeholder="Giá khuyến mại">
									</div>
								</div>
							</div>

							<div class='form-group'>
                                <label>Chọn thêm ảnh<span id="err_images" class="mes-error"></span></label>
                                <div id="response_img">
                                    <?php
                                    $arr_image = json_decode($row['images']);
                                    if(is_array($arr_image)){
                                        foreach ($arr_image as $k => $val) {
                                            echo '<div class="info-item" data-number="'. $k .'">
                                            <div class="wrap-thumb" data-src="'.$val.'">
                                            <input type="hidden" name="txt_images[]" value="'.$val.'"/>
                                            <img class="thumb" src="'.$val.'" width="150px">
                                            </div>
                                            <div class="wrap-item-info">
                                            <div class="del-item" onclick="images_delete_item(this);" title="Xóa"></div>
                                            </div>
                                            </div>';
                                        }
                                    }else{
                                        echo '<input type="hidden" name="txt_images[]" value=""/>';
                                    }
                                    ?>
                                    <div class="default">
                                        <img src="<?php echo ROOTHOST;?>global/img/add_image.png" class="thumb-default" onclick="OpenPopup('<?php echo ROOTHOST;?>extensions/upload_images.php');">
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>

							<div class="form-group">
								<label>Mô tả</label>
								<textarea class="form-control" id="txt_intro" name="txt_intro" placeholder="Mô tả ngắn về sản phẩm" rows="3"><?php echo $row['intro'];?></textarea>
							</div>

							<div class="form-group" id="type_text">
								<label>Nội dung</label>
								<textarea class="form-control" id="txt_fulltext" name="txt_fulltext" placeholder="Nội dung mô tả về sản phẩm..." rows="5"><?php echo $row['fulltext'];?></textarea>
							</div>

							<div class="form-group" id="wg-related_product">
								<div class="header">
									<div class="d-inline" style="color: #fff;">Sản phẩm liên quan</div>
									<div class="form-inline pull-right">
										<input type="text" id="ip_search_related_product" class="form-control border-radius0" placeholder="Tên sản phẩm">&nbsp
										<button type="button" class="btn btn-primary border-radius0" id="btn_search_related_product" onclick="search_related_product()">Tìm kiếm</button>
									</div>
								</div>
								<div class="wg-body">
									<div class="list-response"></div>
									<div id="wr-related_product">
										<div>
											<strong class="wg-title">Sản phẩm liên quan</strong>
											<a href="javascript:void(0)" class="btn_auto_related" onclick="btn_auto_related_product()">Auto</a>
										</div>
										<div id="list_related_product" class="grid">
											<?php
											$ar_related_product= $row['related_product']!==null && $row['related_product']!=='' ? json_decode($row['related_product']) : [];
											$str_related_proID = implode(',', $ar_related_product);
											$res_related_product = SysGetList('tbl_product', [], "AND id IN(".$str_related_proID.")");
											if(count($res_related_product)>0){
												foreach ($res_related_product as $key => $value) {
													$images = $value['thumb']!='' ? $value['thumb'] : IMAGE_DEFAULT;
													echo '<div class="article_item w-25">';
													echo '<a href="javascript:void(0)" class="remove_product" onclick="remove_product(this)"><i class="fa fa-window-close" aria-hidden="true"></i></a>';
													echo '<input type="hidden" name="related_product[]" value="'.$value['id'].'">';
													echo '<a class="title" href="javascript:void(0)">';
													echo '<div class="wrap-thumb" data-src="'.$images.'" style="background-image: url(\''.$images.'\');">';
													echo '<img src="'.ROOTHOST.'global/img/no-photo.jpg" class="" style="display: none;">';
													echo '</div>';
													echo '<div class="name">'.$value['name'].'</div>';
													echo '</a>';
													echo '</div>';
												}
											}
											?>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group" id="wg-related_articles">
								<div class="header">
									<div class="d-inline" style="color: #fff;">Tin tức liên quan</div>
									<div class="form-inline pull-right">
										<input type="text" id="ip_search_related_article" class="form-control border-radius0" placeholder="Tên bài viết">&nbsp
										<button type="button" class="btn btn-primary border-radius0" id="btn_search_related_article" onclick="search_related_article()">Tìm kiếm</button>
									</div>
								</div>
								<div class="wg-body">
									<div class="list-response"></div>
									<div id="wr-related_articles">
										<div>
											<strong class="wg-title">Tin tức liên quan</strong>
											<a href="javascript:void(0)" class="btn_auto_related" onclick="btn_auto_related_article()">Auto</a>
										</div>
										<div id="list_related_articles" class="grid">
											<?php
											$ar_related_articles= $row['related_articles']!==null && $row['related_articles']!=='' ? json_decode($row['related_articles']) : [];
											$str_related_article_id = implode(',', $ar_related_articles);
											$res_related_articles = SysGetList('tbl_content', [], "AND id IN(".$str_related_article_id.")");
											if(count($res_related_articles)>0){
												foreach ($res_related_articles as $key => $value) {
													$images = $value['images']!='' ? $value['images'] : IMAGE_DEFAULT;
													echo '<div class="article_item w-25">';
													echo '<a href="javascript:void(0)" class="remove_article" onclick="remove_article(this)"><i class="fa fa-window-close" aria-hidden="true"></i></a>';
													echo '<input type="hidden" name="related_articles[]" value="'.$value['id'].'">';
													echo '<a class="title" href="javascript:void(0)">';
													echo '<div class="wrap-thumb" data-src="'.$images.'" style="background-image: url(\''.$images.'\');">';
													echo '<img src="'.ROOTHOST.'global/img/no-photo.jpg" class="" style="display: none;">';
													echo '</div>';
													echo '<div class="name">'.$value['title'].'</div>';
													echo '</a>';
													echo '</div>';
												}
											}
											?>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label>Nhóm sản phẩm</label><font color="red"> *</font>
								<select class="form-control" name="cbo_gproduct" id="cbo_gproduct">
									<?php getListComboboxCategories(0, 0); ?>
								</select>
								<script type="text/javascript">
									$(document).ready(function(){
										cbo_Selected('cbo_gproduct', <?php echo $row['group_id']; ?>);
									});
								</script>
							</div>

							<div class='form-group'>
								<div class="widget-fileupload fileupload fileupload-new" data-provides="fileupload">
									<label>Ảnh đại diện</label><small> (Dung lượng < 10MB)</small>
									<div class="widget-avatar mb-2">
										<div class="fileupload-new thumbnail">
											<?php
											if(strlen($row['thumb'])>0){
												echo '<img src="'.$row['thumb'].'" id="img_image_preview">';
											}else{
												echo '<img src="'.ROOTHOST.'global/img/no-photo.jpg" id="img_image_preview">';
											}
											?>
										</div>
										<div class="fileupload-preview fileupload-exists thumbnail" style="line-height: 20px;"></div>
										<input type="hidden" name="txt_thumb2" value="<?php echo $row['thumb'];?>">
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

							<a href="<?php echo ROOTHOST.'?com='.COMS.'&viewtype=history&id='.$row['id'];?>" class="a-history">Lịch sử</a>
						</div>
					</div>
				</div>

				<div class="toolbar">
					<div class="widget_control text-center">
						<button type="submit" id="cmdsave" class="border-radius0 btn blue" data-key="4">Lưu thông tin</button>
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
			return checkinput();
		});

		// Stop submit form when enter input
		$(window).keydown(function(event){
			if( (event.keyCode == 13)) {
				event.preventDefault();
				return false;
			}
		});

		$('#cbo_gproduct').select2();

		tinymce.init({
			selector: '#txt_fulltext',
			height: 350,
			plugins: [
			'link image imagetools table lists autolink fullscreen media hr code textcolor'
			],
			image_title: true,
			automatic_uploads: true,
			toolbar: 'bold italic underline | fontselect fontsizeselect formatselect forecolor backcolor  | alignleft aligncenter alignright alignjustify |  numlist bullist | removeformat | insertfile image media link anchor codesample | outdent indent fullscreen',
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

	/* -------------------- Tin tức liên quan -------------------- */
	function btn_auto_related_article(){
		var cate_id = $('#cbo_cate').val();
		if(parseInt(cate_id)!= '0'){
			var _url="<?php echo ROOTHOST;?>ajaxs/content/auto_related_article.php";

			$.post(_url, {'cate_id': cate_id}, function(res){
				$('#list_related_articles').html(res);
			});
		}else{
			alert('Bạn chưa chuyên mục nào');
		}
	}

	function search_related_article(){
		var keywork = $('#ip_search_related_article').val();
		if(keywork.length > 2){
			var _url="<?php echo ROOTHOST;?>ajaxs/content/search_content.php";

			$.post(_url, {'keywork': keywork}, function(res){
				$('#wg-related_articles .list-response').html(res);
			});
		}
	}

	function images_delete_item(attr){
        var del=confirm("Bạn có chắc muốn xóa ảnh này?");
        if (del==true){
            var parent = attr.parentElement.parentElement;
            parent.remove();
        }
    }

	function select_related_article(e){
		var id = e.getAttribute('data-id'),
		title = e.getAttribute('data-title'),
		url_img = e.getAttribute('data-img');

		var str='<div class="article_item w-25">';
		str+='<a href="javascript:void(0)" class="remove_article" onclick="remove_article(this)"><i class="fa fa-window-close" aria-hidden="true"></i></a>';
		str+='<input type="hidden" name="related_articles[]" value="'+id+'">';
		str+='<a class="title" href="javascript:void(0)">';
		str+='<div class="wrap-thumb" data-src="'+url_img+'" style="background-image: url(\''+url_img+'\');">';
		str+='<img src="<?php echo ROOTHOST_WEB;?>global/img/no-photo.jpg" class="" style="display: none;">';
		str+='</div>';
		str+='<div class="name">'+title+'</div>';
		str+='</a>';
		str+='</div>';

		$('#list_related_articles').append(str);
	}

	function remove_article(e){
		e.parentElement.remove();
	}
	/* -------------------- /. Tin tức liên quan -------------------- */

	/* -------------------- Sản phẩm liên quan -------------------- */
	function btn_auto_related_product(){
		var group_id = $('#cbo_gproduct').val();
		var product_id = '<?php echo $GetID;?>';
		if(parseInt(group_id)!= '0'){
			var _url="<?php echo ROOTHOST;?>ajaxs/product/auto_related_product.php";

			$.post(_url, {'group_id': group_id, 'product_id': product_id}, function(res){
				$('#list_related_product').html(res);
			});
		}else{
			alert('Bạn chưa chọn nhóm sản phẩm nào');
		}
	}

	function search_related_product(){
		var keywork = $('#ip_search_related_product').val();
		if(keywork.length > 2){
			var _url="<?php echo ROOTHOST;?>ajaxs/product/search_product.php";

			$.post(_url, {'keywork': keywork}, function(res){
				$('#wg-related_product .list-response').html(res);
			});
		}
	}

	function select_related_product(e){
		var id = e.getAttribute('data-id'),
		title = e.getAttribute('data-title'),
		url_img = e.getAttribute('data-img');

		var str='<div class="article_item w-25">';
		str+='<a href="javascript:void(0)" class="remove_article" onclick="remove_product(this)"><i class="fa fa-window-close" aria-hidden="true"></i></a>';
		str+='<input type="hidden" name="related_product[]" value="'+id+'">';
		str+='<a class="title" href="javascript:void(0)">';
		str+='<div class="wrap-thumb" data-src="'+url_img+'" style="background-image: url(\''+url_img+'\');">';
		str+='<img src="<?php echo ROOTHOST_WEB;?>global/img/no-photo.jpg" class="" style="display: none;">';
		str+='</div>';
		str+='<div class="name">'+title+'</div>';
		str+='</a>';
		str+='</div>';

		$('#list_related_product').append(str);
	}

	function remove_product(e){
		e.parentElement.remove();
	}
	/* -------------------- /. Sản phẩm liên quan -------------------- */

	$("#file_image").on('change', function(){
		readURL(this);
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

	function cancel_fileupload(){
		$('.fileupload').removeClass('fileupload-exists');
		$('.fileupload').addClass('fileupload-new');
		$('.fileupload-preview').empty();
		$("#file_image").val('');
	}

	function checkinput(){
		var flag = true;
		$('#frm_action .required').each(function(){
			var val = $(this).val();
			if(!val || val=='' || val=='0') {
				$(this).parents('.form-group').addClass('error');
				flag = false;
			}

			if(flag==false) {
				$('.ajx_mess').html('Những mục có đánh dấu * là những thông tin bắt buộc.');
			}else{
				$('.ajx_mess').html('');
			}
		});
		return flag;
	}
</script>