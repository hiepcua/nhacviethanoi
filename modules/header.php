<?php
function haveChildren($id){
    $res = SysGetList('tbl_mnuitems', [], 'AND isactive=1 AND path LIKE "'.$id.'_%"');
    return count($res);
}
?>
<header id="main-header" class="header"> 
    <div class="main-header bg-white">
        <nav class="navbar navbar-expand-md">
            <div id="main-header-container" class="container">
                <!-- Brand -->
                <a class="navbar-brand" href="<?php echo ROOTHOST;?>"><img src="<?php echo ROOTHOST;?>images/logo.png" class="logo-brand"></a>

                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" onclick="toggle_fix_main_header(this)" type="button" data-toggle="collapse" data-target="#main-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="main-menu">
                    <div class="top-header clearfix bg-black">
                        <div class="container">
                            <ul class="list-social pull-left">
                                <li class="facebook"><a href=""><i class="fab fa-facebook-f cgray"></i></a></li>
                                <li class="google"><a href=""><i class="fab fa-google-plus-g cgray"></i></a></li>
                                <li class="instagram"><a href=""></a><i class="fab fa-instagram cgray"></i></li>
                                <li class="twitter"><a href=""><i class="fab fa-twitter cgray"></i></a></li>
                                <li class="instagram2"><a href=""><i class="fab fa-linkedin-in cgray"></i></a></li>
                            </ul>
                            <div class="box-right">
                                <div class="top-menu">
                                    <?php
                                    $res_menutop = SysGetList('tbl_mnuitems',[], "AND menu_id=3 AND isactive=1 ORDER BY `order` ASC");
                                    if(count($res_menutop)>0){
                                        foreach ($res_menutop as $key => $value) {
                                            echo '<a href="'.$value['link'].'" title="'.$value['name'].'">'.$value['name'].'</a>';
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="box-icon">
                                    <a href="" class="vi">VI</a><span class="line14"></span><a href="" class="en">EN</a>
                                </div>
                                <form id="frm-search-home" method="get" class="form-inline" action="<?php echo ROOTHOST;?>tim-kiem" autocomplete="off">
                                    <input id="ip-search-home" name="q" class="form-control" type="text" placeholder="Tìm kiếm">
                                    <button type="button" class="btn-mobile-site-search">
                                        <span class="bi-search bi-mb-search"></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <ul class="navbar-nav" id="ul_mainmenu">
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
                </div>
            </div>
        </nav>
        
    </div>
</header>