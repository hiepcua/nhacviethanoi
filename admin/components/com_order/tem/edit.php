<?php
defined("ISHOME") or die("Can't acess this page, please come back!");
$id = isset($_GET["id"]) ? antiData($_GET["id"],'int') : '';
$obj = new CLS_MYSQL();
/* ----------------------------------------------- */
$_PRODUCTS = array();
$res_product = SysGetList('tbl_product', array(), '');
if(count($res_product)>0){
    foreach ($res_product as $key => $value) {
        $_PRODUCTS[$value['id']] = $value;
    }
}
/* ----------------------------------------------- */
if(isset($_POST['txtid']) && antiData($_POST['txtid'],'int')!==0){
    $order_id = antiData($_POST['txtid'],'int');
    $p_status = isset($_POST['status']) ? (int)$_POST['status'] : 1;

    $_PRODUCTS = array();
    $res_product = SysGetList('tbl_product', array(), '');
    if(count($res_product)>0){
        foreach ($res_product as $key => $value) {
            $_PRODUCTS[$value['id']] = $value;
        }
    }
    $product = isset($_POST['product']) ? $_POST['product'] : array();
    $mdate = time();

    $result1 = SysEdit('tbl_order', array('mdate'=>$mdate, 'status'=>$p_status), "id=".$order_id);

    if(count($product)>0){
        SysDel('tbl_order_detail', 'order_id='.$order_id);
        foreach ($product as $key => $value) {
            $price = $_PRODUCTS[$value]['price'];
            $sql="INSERT INTO tbl_order_detail (order_id,product_id,quantity,price) VALUES($order_id,'$value',1,'$price')"; 
            $obj->Exec($sql);
        }
    }

    if($result1){
        echo '<script>$(document).ready(function(){$.notify("Cập nhật thành công", "success");})</script>';
    }else{
        echo '<script>$(document).ready(function(){$.notify("Lỗi!", "error");})</script>';
    }
}
/* ----------------------------------------------- */
$res_order = SysGetList('tbl_order', array(), "AND id=".$id);
$row = $res_order[0];
/* ----------------------------------------------- */
$res_order_detail = SysGetList('tbl_order_detail', array(), "AND order_id=".$row['id']);
/* ----------------------------------------------- */
?>
<style type="text/css">
    .list-group label{
        width: 150px;
        margin-right: 10px;
    }

    /* Customize the label (the container) */
    .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default radio button */
    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Create a custom radio button */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
        border-radius: 50%;
    }

    /* On mouse-over, add a grey background color */
    .container:hover input ~ .checkmark {
        background-color: #ccc;
    }

    /* When the radio button is checked, add a blue background */
    .container input:checked ~ .checkmark {
        background-color: #2196F3;
    }

    /* Create the indicator (the dot/circle - hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the indicator (dot/circle) when checked */
    .container input:checked ~ .checkmark:after {
        display: block;
    }

    /* Style the indicator (dot/circle) */
    .container .checkmark:after {
        top: 9px;
        left: 9px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: white;
    }
</style>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Chi tiết đơn đặt hàng</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo ROOTHOST;?>">Bảng điều khiển</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo ROOTHOST.COMS;?>">Danh sách đơn đặt hàng</a></li>
                    <li class="breadcrumb-item active">Chi tiết đơn đặt hàng</li>
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
                    <input type="hidden" name="txtid" value="<?php echo $row['id'];?>">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Thông tin khách hàng</h3>
                            <ul class="list-group">
                                <li class="list-group-item"><label>Tên:</label><?php echo $row['fullname']; ?></li>
                                <li class="list-group-item"><label>Email:</label><?php echo $row['email']; ?></li>
                                <li class="list-group-item"><label>SĐT:</label><?php echo $row['phone']; ?></li>
                                <li class="list-group-item"><label>Địa chỉ:</label><?php echo $row['address']; ?></li>
                                <li class="list-group-item"><label>Địa chỉ giao hàng:</label><?php echo $row['address_delivery']; ?></li>
                                <li class="list-group-item"><label>Ngày đặt hàng:</label><?php echo date('d-m-Y', $row['cdate']); ?></li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <ul class="list-inline">
                            <?php
                            $status = (int)$row['status'];
                            if($status === 0){
                                ?>
                                <li class="list-inline-item">
                                    <label class="container">Đơn hủy
                                        <input type="radio" name="status" value="0">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <?php
                            }else if($status === 3){
                                ?>
                                <li class="list-inline-item">
                                    <label class="container">Đơn thành công
                                        <input type="radio" name="status" value="3" <?php echo $status === 3 ? 'checked' : '';?>>
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <?php
                            }else{
                                ?>
                                <li class="list-inline-item">
                                    <label class="container">Đơn mới
                                        <input type="radio" name="status" value="1" <?php echo $status === 1 ? 'checked' : '';?>>
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li class="list-inline-item">
                                    <label class="container">Đơn đang xử lý
                                        <input type="radio" name="status" value="2" <?php echo $status === 2 ? 'checked' : '';?>>
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li class="list-inline-item">
                                    <label class="container">Đơn thành công
                                        <input type="radio" name="status" value="3" <?php echo $status === 3 ? 'checked' : '';?>>
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li class="list-inline-item">
                                    <label class="container">Hủy đơn
                                        <input type="radio" name="status" value="0">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">STT</th>
                                <th class="text-center"></th>
                                <th>Tên sản phẩm</th>
                                <th>Mã sản phẩm</th>
                                <th class="text-center">Giá</th>
                            </tr>
                        </thead>
                        <tbody id="list_product">
                            <?php
                            if(count($res_order_detail)>0){
                                foreach ($res_order_detail as $key => $value) {
                                    $stt = $key+1;
                                    $product_name = $_PRODUCTS[$value['product_id']]['name'];
                                    $product_code = $_PRODUCTS[$value['product_id']]['pro_code'];
                                    $price = $value['price']==0 ? '<span class="label info">Liên hệ</span>' : number_format($value['price']).' vnđ';
                                    echo '<tr dataid="'.$value['product_id'].'">';
                                    echo '<input type="hidden" value="'.$value['product_id'].'" name="product[]">';
                                    echo '<td width="50" align="center">'.$stt.'</td>';
                                    echo '<td width="50" align="center"><a href="javascript:void(0)" dataid="'.$value['product_id'].'" onclick="remove_product(this)"><i class="fa fa-trash cred" aria-hidden="true"></i></a></td>';
                                    echo '<td><a href="'.ROOTHOST.'product/edit/'.$value['product_id'].'" target="_blank">'.$product_name.'</a></td>';
                                    echo '<td><a href="'.ROOTHOST.'product/edit/'.$value['product_id'].'" target="_blank">'.$product_code.'</a></td>';
                                    echo '<td align="center">'.$price.'</td>';
                                    echo '</tr>';
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="text-center toolbar">
                <button type="submit" class="save btn btn-success"><i class="fas fa-save"></i> Cập nhật trạng thái đơn</button>
            </div>
        </form>
    </div>
</section>
<script type="text/javascript">
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

    function remove_product(e){
        if(confirm('Bạn có chắc muốn xóa sản phẩm này?')){
            var pro_id = e.getAttribute('dataid');
            $('#list_product tr').each(function(e2){
                var id = $(this).attr('dataid');
                if(id == pro_id) $(this).remove();
            })
        }
    }
</script>