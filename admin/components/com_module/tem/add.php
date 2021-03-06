<?php
defined("ISHOME") or die("Can't acess this page, please come back!");
$viewtype = "mainmenu";
if(isset($_POST["txt_type"])){
    $viewtype = $_POST["txt_type"];
}

if(isset($_POST['cmdsave_tab1']) && $_POST['txttitle']!='') {
    $Cate_ID    = isset($_POST['cbo_cate']) ? (int)$_POST['cbo_cate'] : 0;
    $Con_ID     = isset($_POST['cbo_content']) ? (int)$_POST['cbo_content'] : 0;
    $MnuID      = isset($_POST['cbo_menutype']) ? (int)$_POST['cbo_menutype'] : 0;
    $ViewTitle  = isset($_POST['optviewtitle']) ? (int)$_POST['optviewtitle'] : 0;
    $isActive   = isset($_POST['optactive']) ? (int)$_POST['optactive'] : 0;
    $Title      = isset($_POST['txttitle']) ? addslashes($_POST['txttitle']) : '';
    $Type       = isset($_POST['cbo_type']) ? addslashes($_POST['cbo_type']) : '';
    $Theme      = isset($_POST['cbo_theme']) ? addslashes($_POST['cbo_theme']) : '';
    $HTML       = isset($_POST['txtcontent']) ? antiData($_POST['txtcontent'], 'plaintext', true) : '';
    $Position   = isset($_POST['cbo_position']) ? addslashes($_POST['cbo_position']) : '';
    $Class      = isset($_POST['txtclass']) ? addslashes($_POST['txtclass']) : '';
    $Intro      = isset($_POST['txtintro']) ? addslashes($_POST['txtintro']) : '';

    $Personnel_group    = isset($_POST['cbo_personnel_group']) ? (int)$_POST['cbo_personnel_group'] : 0;
    $Event_group        = isset($_POST['cbo_event_group']) ? (int)$_POST['cbo_event_group'] : 0;
    $Publish_group      = isset($_POST['cbo_publish_group']) ? (int)$_POST['cbo_publish_group'] : 0;
    $Event_ID           = isset($_POST['cbo_event']) ? (int)$_POST['cbo_event'] : 0;

    $arr=array();
    $arr['title'] = $Title;
    $arr['type'] = $Type;
    $arr['category_id'] = $Cate_ID;
    $arr['content_id'] = $Con_ID;
    $arr['menu_id'] = $MnuID;
    $arr['viewtitle'] = $ViewTitle;
    $arr['isactive'] = $isActive;
    $arr['theme'] = $Theme;
    $arr['content'] = $HTML;
    $arr['position'] = $Position;
    $arr['class'] = $Class;
    $arr['intro'] = $Intro;
    $arr['personnel_group'] = $Personnel_group;
    $arr['event_group'] = $Event_group;
    $arr['publish_group'] = $Publish_group;
    $arr['event_id'] = $Event_ID;

    $result = SysAdd('tbl_modules', $arr);
    if($result){
        $_SESSION['flash'.'com_'.COMS] = 1;
    }else{
        $_SESSION['flash'.'com_'.COMS] = 0;
    }
}
?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">TH??M M???I MODULE</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo ROOTHOST;?>">B???ng ??i???u khi???n</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo ROOTHOST.COMS;?>">Danh s??ch module</a></li>
                    <li class="breadcrumb-item active">Th??m m???i module</li>
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
                $msg->success('Th??m m???i th??nh c??ng.');
                echo $msg->display();
            }else if($_SESSION['flash'.'com_'.COMS] == 0){
                $msg->error('C?? l???i trong qu?? tr??nh th??m m???i.');
                echo $msg->display();
            }
            unset($_SESSION['flash'.'com_'.COMS]);
        }
        ?>
        <form id="frm_type" name="frm_type" method="post" action="" style="display:none;">
            <input type="text" name="txt_type" id="txt_type" />
        </form>

        <form id="frm_action" class="form-horizontal" name="frm_action" method="post" action="">
            <p>Nh???ng m???c ????nh d???u <font color="red">*</font> l?? y??u c???u b???t bu???c.</p>
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <div class="form-group">
                        <label>Ki???u hi???n th???<small class="cred"> (*)</small><span id="err1" class="mes-error"></span></label>
                        <select name="cbo_type" class="form-control" id="cbo_type" onchange="select_type();" style="width: 100%;">
                            <?php
                            $res_modtypes = MODULE_TYPES;
                            foreach ($res_modtypes as $key => $value) {
                                echo "<option value=".$key.">".$value."</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Ti??u ?????<small class="cred"> (*)</small><span id="err2" class="mes-error"></span></label>
                        <input name="txttitle" type="text" id="txttitle" class="form-control" value="">
                    </div>

                    <?php
                    if(array_key_exists($viewtype, MODULE_TYPES)){ 

                        if($viewtype == "mainmenu"){ ?>
                            <div class="form-group">
                                <label>Menu<small class="cred"> (*)</small><span id="err3" class="mes-error"></span></label>
                                <select name="cbo_menutype" class="form-control" id="cbo_menutype">
                                    <option value="1">Main menu</option>
                                </select>
                                <span id="menutype_err" class="check_error"></span>
                            </div>

                        <?php }else if($viewtype=="category"){ ?>
                            <div class="form-group">
                                <label>Nh??m tin</label>
                                <select name="cbo_cate" class="form-control" id="cbo_cate" style="width: 100%;">
                                    <option value="0">Ch???n m???t nh??m tin</option>
                                    <?php echo getListComboboxCategories(0,0);?>
                                </select>
                            </div>

                        <?php }else if($viewtype=="news"){ ?>
                            <div class="form-group">
                                <label>B??i tin</label>
                                <select name="cbo_content" class="form-control" id="cbo_content" style="width: 100%;">
                                    <option value="0">Ch???n m???t b??i tin</option>
                                    <?php
                                    $res_cons = SysGetList('tbl_content', [], "AND status=4");
                                    foreach ($res_cons as $key => $value) {
                                        echo '<option value="'.$value['id'].'">'.$value['title'].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                        <?php }else if($viewtype=="personnel_group"){ ?>
                            <div class="form-group">
                                <label>Nh??m nh??n s???</label>
                                <select name="cbo_personnel_group" class="form-control" id="cbo_personnel_group" style="width: 100%;">
                                    <option value="0">Ch???n m???t nh??m nh??n s???</option>
                                    <?php echo getListComboboxPersonnelGroup(0,0);?>
                                </select>
                            </div>

                        <?php }else if($viewtype=="event_group"){ ?>
                            <div class="form-group">
                                <label>Nh??m ho???t ?????ng khoa h???c</label>
                                <select name="cbo_event_group" class="form-control" id="cbo_event_group" style="width: 100%;">
                                    <option value="0">Ch???n m???t nh??m ho???t ?????ng khoa h???c</option>
                                    <?php echo getListComboboxEventGroup(0,0);?>
                                </select>
                            </div>

                        <?php }else if($viewtype=="publish_group"){ ?>
                            <div class="form-group">
                                <label>Nh??m ???n ph???m</label>
                                <select name="cbo_publish_group" class="form-control" id="cbo_publish_group" style="width: 100%;">
                                    <option value="0">Ch???n m???t nh??m ???n ph???m</option>
                                   <?php echo getListComboboxPublishGroup(0,0);?>
                                </select>
                            </div>

                        <?php }else if($viewtype=="event"){ ?>
                            <div class="form-group">
                                <label>Ho???t ?????ng khoa h???c</label>
                                <select name="cbo_event" class="form-control" id="cbo_event" style="width: 100%;">
                                    <option value="0">Ch???n m???t ho???t ?????ng khoa h???c</option>
                                    <?php
                                    $res_cons = SysGetList('tbl_event', [], "AND isactive=1");
                                    foreach ($res_cons as $key => $value) {
                                        echo '<option value="'.$value['id'].'">'.$value['title'].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            
                        <?php }else if($viewtype=="html"){ ?>
                            <div class="form-group">
                                <label>N???i dung html</label>
                                <textarea name="txtcontent" id="txtcontent" class="form-control"></textarea>
                            </div>
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    tinymce.init({
                                        selector: '#txtcontent',
                                        height: 400,
                                        plugins: [
                                        'link image imagetools table lists autolink fullscreen media hr code'
                                        ],
                                        image_title: true,
                                        automatic_uploads: true,
                                        toolbar: 'bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify |  numlist bullist | removeformat | insertfile image media link anchor codesample | outdent indent',
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
                            </script>
                        <?php } ?>
                    <?php } ?>

                    <div class="form-group">
                        <label>Giao di???n</label>
                        <select name="cbo_theme" class="form-control" id="cbo_theme" style="width: 100%;">
                            <option value="">Ch???n m???t giao di???n</option>
                            <?php LoadModBrow("mod_".$viewtype);?>
                        </select>
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $("#cbo_theme").select2();
                            });
                        </script>
                    </div>
                </div>

                <div class="col-md-3 col-sm-4">
                    <div class="form-group">
                        <label>V??? tr??</label>
                        <select class="form-control" name="cbo_position" id="cbo_position">
                            <option value="">-- Select position --</option>
                            <?php
                            $res_positions = POSITIONS;
                            foreach ($res_positions as $key => $value) {
                                echo '<option value="'.$value.'">'.$value.'</option>';
                            }
                            ?>
                        </select>
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $("#cbo_position").select2();
                            });
                        </script>
                    </div>

                    <div class="form-group">
                        <label>Class</label>
                        <input type="text" name="txtclass" id="txtclass" class="form-control" value="" />
                    </div>

                    <div class="form-group">
                        <label>Hi???n th??? ti??u ?????</label>
                        <div>
                            <label class="radio-inline"><input type="radio" name="optviewtitle" value="1">C??</label>
                            <label class="radio-inline"><input type="radio" name="optviewtitle" value="0" checked>Kh??ng</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Hi???n th???</label>
                        <div>
                            <label class="radio-inline"><input type="radio" name="optactive" value="1" checked>C??</label>
                            <label class="radio-inline"><input type="radio" name="optactive" value="0">Kh??ng</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center toolbar">
                <input type="submit" name="cmdsave_tab1" id="cmdsave_tab1" class="save btn btn-success" value="L??u th??ng tin" class="btn btn-primary">
            </div>
        </form>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function(){
        cbo_Selected('cbo_type','<?php echo $viewtype;?>');
        $("#cbo_type").select2();
        $("#cbo_cate").select2();
        $("#cbo_content").select2();
        $("#cbo_event").select2();

        $('#txttitle').blur(function(){
            if($(this).val()=="") {
                $("#err2").fadeTo(200,0.1,function(){ 
                    $(this).html('M???i b???n nh???p ti??u ????? Module').fadeTo(900,1);
                });
            }
        });

        $('#frm_action').submit(function(){
            return validForm();
        });
    });

    function validForm(){
        if($('#txttitle').val()=="") {
            $("#err2").fadeTo(200,0.1,function(){ 
                $(this).html('M???i b???n nh???p ti??u ????? Module').fadeTo(900,1);
            });
            $('#txttitle').focus();
            return false;
        }
        if( $('#cbo_type').val()=="mainmenu") {
            if($('#cbo_menutype').val()=="") {
                $("#err3").fadeTo(200,0.1,function(){ 
                    $(this).html('M???i ch???n ki???u Menu c???n hi???n th???').fadeTo(900,1);
                });
                $('#cbo_menutype').focus();
                return false;
            }
        }
        return true;
    }
    function select_type(){
        var txt_viewtype=document.getElementById("txt_type");
        var cbo_viewtype=document.getElementById("cbo_type");
        for(i=0;i<cbo_viewtype.length;i++){
            if(cbo_viewtype[i].selected==true)
                txt_viewtype.value=cbo_viewtype[i].value;
        }
        document.frm_type.submit();
    }
</script>