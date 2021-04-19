<?php
defined('ISHOME') or die('Can not acess this page, please come back!');
$objmysql = new CLS_MYSQL();
$strWhere = '';

// Khai báo SESSION
$get_q = isset($_GET['q']) ? addslashes(trim($_GET['q'])) : '';
$action = isset($_GET['cbo_action']) ? antiData($_GET['cbo_action']) : '';
$get_fdate = isset($_GET['fdate']) ? antiData($_GET['fdate']) : '';
$get_tdate = isset($_GET['tdate']) ? antiData($_GET['tdate']) : '';

// Gán strWhere
if($get_q !== ''){
    $strWhere.=" AND `fullname` like '%$get_q%' OR `email`='$get_q'";
}
if($action !== '' && $action !== 'all' ){
    if($action== -1){
        $strWhere.=" AND `status` = '0'";
    }else{
        $strWhere.=" AND `status` = '$action'";
    }
}
if($get_fdate !== ''){
    $fdate = date('Y-m-d', strtotime($get_fdate));
    $strWhere.=" AND `cdate`>".strtotime($get_fdate);
}
if($get_tdate !== ''){
    $tdate = date('Y-m-d', strtotime($get_tdate));
    $strWhere.=" AND `cdate`<".strtotime($get_tdate);
}

/*Begin pagging*/
$total_rows = SysCount('tbl_order',$strWhere);
$max_rows = 20;
$max_pages = ceil($total_rows/$max_rows);
$cur_page = getCurentPage($max_pages);
$start = ($cur_page - 1) * $max_rows;
$strWhere.=" ORDER BY cdate DESC LIMIT $start,".$max_rows;
/*End pagging*/
?>
<script language="javascript">
    function checkinput(){
        var strids=document.getElementById("txtids");
        if(strids.value==""){
            alert('Bạn chưa lựa chọn đối tượng nào.');
            return false;
        }
        return true;
    }
</script>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Danh sách đặt hàng</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo ROOTHOST;?>">Bảng điều khiển</a></li>
                    <li class="breadcrumb-item active">Danh sách đặt hàng</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <form id="frm_list" method="get" action="<?php echo ROOTHOST.COMS;?>">
                    <div class="frm-search-box form-inline pull-left">
                        <input class="form-control" type="text" value="<?php echo $get_q?>" name="q" placeholder="Từ khóa"/>
                        &nbsp&nbsp&nbsp
                        Từ ngày
                        <input type="date" name="fdate" class="form-control" value="<?php echo $fdate;?>">
                        &nbsp&nbsp&nbsp
                        Đến ngày
                        <input type="date" name="tdate" class="form-control" value="<?php echo $tdate;?>">
                        &nbsp&nbsp&nbsp
                        Trạng thái
                        <select name="cbo_action" class="form-control" id="cbo_action">
                            <option value="all">Tất cả</option>
                            <option value="1">Đơn mới</option>
                            <option value="2">Đang xác nhận</option>
                            <option value="3">Thành công</option>
                            <option value="-1">Đã hủy</option>
                            <script language="javascript">
                                $(document).ready(function(){
                                    cbo_Selected('cbo_action','<?php echo $action;?>');
                                });
                            </script>
                        </select>
                        &nbsp&nbsp&nbsp
                        <button type="submit" id="_btnSearch" class="btn btn-success">Tìm kiếm</button>
                    </div>
                </form>
            </div>
            <div class="col-md-2">
                <div class="pull-right">
                    <div id="menus" class="toolbars">
                        <form id="frm_menu" name="frm_menu" method="post" action="">
                            <input type="hidden" name="txtorders" id="txtorders" />
                            <input type="hidden" name="txtids" id="txtids" />
                            <input type="hidden" name="txtaction" id="txtaction" />
                            <ul class="list-inline">
                                <li><a class="addnew btn btn-default" href="<?php echo ROOTHOST.COMS;?>/add" title="Thêm mới"><i class="fa fa-plus-circle cgreen" aria-hidden="true"></i> Thêm mới</a></li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <th width="30" align="center">#</th>
                    <th>Tên khách hàng</th> 
                    <th>SĐT</th>
                    <th>Email</th>
                    <th>Ngày tạo</th>
                    <th class="text-center">Trạng thái</th>
                    <th class="text-center">Chi tiết</th>
                </thead>
                <tbody>
                    <?php
                    if($total_rows>0){
                        $obj=SysGetList('tbl_order',array(), $strWhere, false);
                        $stt=$start;

                        while($rows = $obj->Fetch_Assoc()){
                            $stt++;
                            $ids        = $rows['id'];
                            $fullname   = $rows['fullname'];
                            $phone      = $rows['phone'];
                            $email      = $rows['email'];
                            $cdate      = $rows['cdate']!='' && $rows['cdate']!=0 ? date('d-m-Y', $rows['cdate']) : null;

                            switch ($rows['status']) {
                                case '1':
                                $icon_active    = '<span class="label danger">Đơn mới</span>';
                                break;
                                case '2':
                                $icon_active    = '<span class="label warning">Đang xác nhận</span>';
                                break;
                                case '3':
                                $icon_active    = '<span class="label success">Thành công</span>';
                                break;
                                case '0':
                                $icon_active    = '<span class="label other">Hủy</span>';
                                break;
                                default:
                                $icon_active    = '<span class="label danger">Đơn mới</span>';
                                break;
                            }

                            echo "<tr name='trow'>";
                            echo "<td width='30' align='center'>$stt</td>";
                            echo "<td>".$fullname."</td>";
                            echo "<td>".$phone."</td>";
                            echo "<td>".$email."</td>";
                            echo "<td>".$cdate."</td>";

                            echo "<td align='center' width='150'>".$icon_active."</td>";

                            echo "<td align='center' width='80'><a href='".ROOTHOST.COMS."/edit/$ids'><i class='fa fa-edit' aria-hidden='true'></i></a></td>";

                            echo "</tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
            <nav class="d-flex justify-content-center">
                <?php 
                paging2($total_rows,$max_rows,$cur_page);
                ?>
            </nav>
        </div>
    </div>
</section>
<?php //----------------------------------------------?>
