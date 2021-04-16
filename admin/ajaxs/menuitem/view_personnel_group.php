<?php
session_start();
define('incl_path','../../global/libs/');
define('libs_path','../../libs/');
require_once(incl_path.'gfconfig.php');
require_once(incl_path.'gfinit.php');
require_once(incl_path.'gffunc.php');
require_once(incl_path.'gffunc_user.php');
require_once(libs_path.'cls.mysql.php');
$_link = isset($_POST['link']) ? addslashes($_POST['link']) : '#';
$selected_id = isset($_POST['selected_id']) ? (int)$_POST['selected_id'] : 0;

function getListComboboxPersonnelGroup($parid=0, $level=0, $childs=array(), $selected_id=0){
	$sql="SELECT * FROM tbl_personnel_group WHERE `par_id`='$parid' AND `isactive`='1'";
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
		$link = ROOTHOST_WEB.'nhan-su/'.$rows['alias'];
		$selected = ($rows['id'] == $selected_id) ? 'selected' : '';
		if(in_array($id, $childs)){
			echo "<option value='$id' disabled='true' class='disabled' data-link='".$link."' ".$selected.">$char $title</option>";
		}else{
			echo "<option value='$id' data-link='".$link."' ".$selected.">$char $title</option>";
		}
		$nextlevel=$level+1;
		getListComboboxPersonnelGroup($id,$nextlevel, $childs, $selected_id);
	}
}
?>
<div class="form-group">
	<label>Chức vụ nhà khoa học</label>
	<select onchange="change_personnel_group(this)" name="cbo_selected" class="form-control">
		<option value="0">-- Chọn một --</option>
		<?php getListComboboxPersonnelGroup(0,0, array(), $selected_id);?>
	</select>
</div>
<div class="form-group">
	<label>Link chức vụ nhà khoa học<span id="err_link" class="mes-error"></span></label><small class="cred"> (*)</small>
	<input name="txtlink" type="text" id="txtlink" class="form-control" value="<?php echo $_link; ?>" placeholder="http://" required />
</div>
<script type="text/javascript">
	function change_personnel_group(e){
		var link = e.options[e.selectedIndex].getAttribute('data-link');
		$('#txtlink').val(link);
	}
</script>