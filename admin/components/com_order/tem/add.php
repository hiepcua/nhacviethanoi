<?php
defined("ISHOME") or die("Can't acess this page, please come back!");
if(isset($_POST['fullname']) && antiData($_POST['fullname']) !== ''){
    $_PRODUCTS = array();
    $res_product = SysGetList('tbl_product', array(), '');
    if(count($res_product)>0){
        foreach ($res_product as $key => $value) {
            $_PRODUCTS[$value['id']] = $value;
        }
    }

    $product = isset($_POST['product']) ? $_POST['product'] : array();
    $fullname = isset($_POST['fullname']) ? antiData($_POST['fullname']) : '';
    $email = isset($_POST['email']) ? antiData($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? antiData($_POST['phone']) : '';
    $address = isset($_POST['address']) ? antiData($_POST['address']) : '';
    $address_delivery = isset($_POST['address2']) ? antiData($_POST['address2']) : '';
    $cdate = time();
    $status = 1;

    $obj=new CLS_MYSQL;
    $sql="INSERT INTO tbl_order (`fullname`,`email`,`phone`,address,address_delivery,cdate,status) VALUES('$fullname','$email','$phone','$address','$address_delivery','$cdate',$status)";
    $result1 = $obj->Exec($sql);
    $lastID = $obj->LastInsertID();

    if(count($product)>0 && $lastID!=0){
        foreach ($product as $key => $value) {
            $price = $_PRODUCTS[$value]['price'];
            $sql="INSERT INTO tbl_order_detail (order_id,product_id,quantity,price) VALUES($lastID,'$value',1,'$price')"; 
            $obj->Exec($sql);
        }
    }

    if($result1){
        echo '<script>$(document).ready(function(){$.notify("Thêm mới thành công", "success");})</script>';
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
                <h1 class="m-0 text-dark">Thêm đơn đặt hàng mới</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo ROOTHOST;?>">Bảng điều khiển</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo ROOTHOST.COMS;?>">Danh sách đơn đặt hàng</a></li>
                    <li class="breadcrumb-item active">Thêm đơn mới</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <form id="frm_action" class="form-horizontal" name="frm_action" method="post" enctype="multipart/form-data">
            <div class="tab-content card">
                <div class="tab-pane container-fluid active" id="info">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Sản phẩm</label>
                                    <select name="product[]" class="form-control" id="product" style="width: 100%;" multiple>
                                        <option value="">Chọn sản phẩm</option>
                                        <?php
                                        $res_pro = SysGetList('tbl_product', array(), "AND isactive=1");
                                        if(count($res_pro)>0){
                                            foreach ($res_pro as $key => $value) {
                                                echo '<option value="'.$value['id'].'">'.$value['name'].'</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-form-label">Tên KH</label><font color="red">*</font>
                                    <input class="form-control required" type="text" name="fullname" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-form-label">Số điện thoại</label><font color="red">*</font>
                                    <input class="form-control required" type="text" name="phone" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-form-label">Email</label>
                                    <input class="form-control" type="text" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="col-form-label">Địa chỉ</label>
                                <textarea name="address" class="form-control" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Địa chỉ giao hàng</label> (Giao hàng đến cho ai)
                                <textarea name="address2" class="form-control" rows="2"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center toolbar">
                    <button type="submit" class="save btn btn-success"><i class="fas fa-save"></i> Lưu thông tin</button>
                </div>
            </div>
        </form>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function(){
        $("#product").select2({
            placeholder: "Chọn sản phẩm",
            allowClear: true
        });
        $('#frm_action').submit(function(){
            return checkinput();
        });
    });

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