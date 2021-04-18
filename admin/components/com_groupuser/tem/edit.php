<?php
$user=getInfo('username');
$isAdmin=getInfo('isadmin');
define('OBJ_PAGE','MEMBER');
if($isAdmin==1){
	$GetID = isset($_GET['id']) ? (int)antiData($_GET['id']) : 0;
	$rows = SysGetList('tbl_user_group', array(), " AND id=$GetID ");
	if(count($rows) <= 0){
		echo 'Không có dữ liệu.'; 
		return;
	}
	$row = $rows[0];
	$permission=$row['permission'];

	$arr_childs = array();
	$res_children = SysGetList('tbl_user_group', array('id'), " AND `path` LIKE '".$row['path']."%'");
	if(count($res_children) >0){
		foreach ($res_children as $key => $value) {
			$arr_childs[] = $value['id'];
		}
	}
	$str_children = implode(',', $arr_childs);
	?>
	<!-- Content Header (Page header) -->
	<div class="widget-tree" style="padding-left: 7px;">
		<header class="header">
			<h2><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp&nbspCập nhật nhóm người dùng</h2>
		</header>
	</div>

	<!-- /.content-header -->
	<!-- Main content -->
	<section class="content">
		<div class='container-fluid'>
			<div class="card">
				<form id="frm_add" class="smart-form" method="post" action="" style="padding: 15px 10px;">
					<input type="hidden" name="txt_id" value="<?php echo $GetID;?>">
					<div class="rows">
						<div class="col-md-12 form_wrap_tool">
							<input type="submit" name="cmdsave_tab" id="cmdsave_tab" class="save btn btn-success" value="Cập nhật" class="btn btn-primary">
							<a href="#" onclick="DeleteGroupMember()" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>Xóa</a>
							<button type="button" class="btn btn-primary" name="cmd_cancel" id="cmd_cancel" onclick="backPage()"><i class="fa fa-refresh" aria-hidden="true"></i> Hủy bỏ</button>
						</div>
					</div>
					<div class="mess" style="color: red;"></div>
					<div class="row">
						<div class="col-md-6 form-group">
							<label class="label">Nhóm cha<small class="cred">(*)</small></label>
							<select id="cbo_par" name="cbo_par" class="form-control">
								<option value="0">-- Chọn một --</option>
								<?php getListCombobox(0,0, $arr_childs); ?>
							</select>
							<script type="text/javascript">
								$(document).ready(function(){
									cbo_Selected('cbo_par', <?php echo $row['par_id']; ?>);
								});
							</script>
						</div>
						<div class="col-md-6 form-group">
							<label class="label">Tên nhóm<small class="cred">(*)</small></label>
							<input type="text" name="txt_name" value="<?php echo $row['name'];?>" id="txt_name" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<label>Phân quyền</label>
						<table class="table table-striped">
							<tr>
								<th>Chức năng</th>
								<th class="text-center"><label><input type="checkbox" name="permis_all" id="permis_all" value="1" onclick="checkall('permission[]',this.checked);"/> Chọn tất cả</label></th>
							</tr>
							<?php
							foreach($GLOBALS['ARR_COM'] as $key=>$value){
								$com=explode("_",$key);
								$com=$com[0];
								$chk='';
								if($permission!=''){
									if($permission & $value) {
										$chk='checked="checked"';
									}
								}

								echo '<tr><td>'.$GLOBALS['ARR_COM_NAME'][$key].'</td>';
								echo '<td align="center" width="120"><input type="checkbox" name="permission[]" value="'.$value.'" onclick="'."checkonce('permission[]','permis_all')".'" '.$chk.'/></td>';
								echo '</tr>';
							} ?>
						</table>
					</div>

					<div class="rows">
						<div class="col-md-12 form-group">
							<label class="label">Mô tả</label>
							<textarea class="form-control" rows="3" id="txt_desc" name="txt_desc"><?php echo $row['intro'];?></textarea>
						</div>
					</div>
					
				</form>
			</div>
		</div>
	</section>
	<script>
		$("form#frm_add").submit(function(e) {
			if(frm_validate()){
				e.preventDefault();
				var formData = new FormData(this);

				var _url="<?php echo ROOTHOST;?>ajaxs/guser/process_edit_gmember.php";
				$.ajax({
					url: _url,
					type: 'POST',
					data: formData,
					success: function (res) {
						if(parseInt(res) == 1){
							showMess("Thêm mới thành công");
							setTimeout(function(){window.location.reload(); }, 2000);
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

		function frm_validate(){
			var flag=true;
			var par_id = parseInt($('#cbo_par').val());
			var arr_childs = '<?php echo $str_children;?>';
			var name = $('#txt_name').val();
			if(name == '') {
				flag = false;
				$('.mess').html('Tên nhóm không được để trống.');
			}
			if(par_id == 0){
				flag = false;
				$('.mess').html('Nhóm cha không được bỏ trống');
			}else if(arr_childs.indexOf(par_id) !== -1){
				flag = false;
				$('.mess').html('Lựa chọn nhóm lỗi.');
			}
			return flag;
		};

		function backPage() {
			window.history.back();
		};

		function DeleteGroupMember(){
			var r = confirm("Bạn có chắc chắn muốn xóa đối tượng này?");
			if (r == true) {
				var _url="<?php echo ROOTHOST;?>ajaxs/guser/process_delete_gmember.php";
				var _data={
					'id': '<?php echo $row["id"];?>',
				}
				$.post(_url, _data, function(req){
					if(req=='success'){
						window.location.href=('<?php echo ROOTHOST;?>groupuser');
					}else{
						$('.mess').html(req);
					}
				})
			}
		}

		function checkall(name,status){
			var objs=document.getElementsByName(name);
			for(i=0;i<objs.length;i++){
				objs[i].checked=status;
			}
		}
		function checkonce(name,all){
			var objs=document.getElementsByName(name);
			var flag=true;
			for(i=0;i<objs.length;i++){
				if(objs[i].checked!=true){
					flag=false;
					break;
				}
			}
			document.getElementById(all).checked=flag;
		}
		function checkinput(){
			if($("#txtname").val()==""){
				$("#txtname_err").fadeTo(200,0.1,function(){ 
					$(this).html('Vui lòng nhập tên').fadeTo(900,1);
				});
				$("#txtname").focus();
				return false;
			}
			return true;
		}
	</script>
<?php }else{
	echo "<h3 class='text-center'>You haven't permission</h3>";
}?>