<?php
function haveChildren($id){
    $res = SysGetList('tbl_mnuitems', [], 'AND isactive=1 AND path LIKE "'.$id.'_%"');
    return count($res);
}
$conf = $res_config;
?>
<header id="main-header" class="header"> 
    <div class="header-notice">
        <div class="container notice-list"> 
            <div class="notice-item"> Giảm <strong>5%</strong> cho tất cả đơn hàng </div> 
            <div class="notice-item"> <strong>Miễn phí vận chuyển</strong> đơn hàng <strong>trên 5tr</strong> </div> 
        </div> 
    </div>
    <div class="top-header clearfix">
        <div class="container">
            <div class="box-left">
                <span>Bạn cần giúp đỡ? Hãy gọi: </span>
                <a class="hotline cred" href="tel:<?php echo $conf['phone'];?>" title="<?php echo $conf['phone'];?>"><?php echo $conf['phone'];?></a>
                <span class="span-or">hoặc</span>
                <a href="mailto:<?php echo $conf['email'];?>" title="<?php echo $conf['email'];?>"><?php echo $conf['email'];?></a>
            </div>
            <div class="box-right">
                <div class="top-menu">
                    <?php
                    $res_menutop = SysGetList('tbl_mnuitems',[], "AND menu_id=3 AND isactive=1 ORDER BY `order` ASC");
                    if(count($res_menutop)>0){
                        foreach ($res_menutop as $key => $value) {
                            echo '<a href="'.$value['link'].'" title="'.$value['name'].'" class="'.$value['class'].'">'.$value['name'].'</a>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="main-header bg-white">
        <nav class="navbar">
            <div id="main-header-container" class="container">
                <div class="header-logo">
                    <a class="logo-wrapper" href="<?php echo ROOTHOST;?>"><img src="<?php echo ROOTHOST;?>images/logo2.png" class="logo-brand"></a>
                </div>

                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" onclick="toggle_fix_main_header(this)" type="button" data-toggle="collapse" data-target="#main-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar links -->
                <div id="mainmenu" class="box-mainmenu">
                    <ul class="list-unstyle">
                        <?php
                        $res_mainmenu = SysGetList('tbl_mnuitems',[], "AND menu_id=1 AND par_id=0 AND isactive=1 ORDER BY `order` ASC");
                        if(count($res_mainmenu)>0){
                            $str_mainmenu = '';
                            foreach ($res_mainmenu as $key => $value) {
                                $cls = '';
                                $children = haveChildren($value['id']);
                                if($children > 0) $cls = 'sub_menu';
                                $str_mainmenu.='<li class="nav-item '.$cls.'">';
                                $str_mainmenu.='<a class="nav-link" href="'.$value['link'].'">'.$value['name'].'</a>';
                                if($children > 0){
                                    $str_mainmenu.='<span class="toggle_submenu"></span>';
                                    $str_mainmenu.='<div class="dropdown-menu"><div class="dropdown-content">';
                                    $res_children = SysGetList('tbl_mnuitems',[], "AND menu_id=1 AND path LIKE '".$value['id']."_%' AND isactive=1 ORDER BY `order` ASC");
                                    foreach ($res_children as $k_child => $v_child) {
                                        $str_mainmenu.='<a href="'.$v_child['link'].'" title="'.$v_child['name'].'">'.$v_child['name'].'</a>';
                                    }
                                    $str_mainmenu.='</div></div>';
                                }
                                $str_mainmenu.='</li>';
                            }
                            echo $str_mainmenu;
                        }
                        ?>
                    </ul>
                </div>

                <div class="box-search-desktop"></div>
                <div class="box-cart"></div>
            </div>
        </nav>
    </div>
</header>