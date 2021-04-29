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
                <div id="mainmenu" class="box-mainmenu d-lg-inline-block">
                    <ul class="list-unstyle">
                        <li class="nav-item danh-muc has-childs has-mega">
                            <a href="javascript:void(0)" class="nav-link" title="Danh mục">
                                <svg x="0px" y="0px" viewBox="0 0 384.97 384.97" style="enable-background:new 0 0 384.97 384.97;"><path d="M12.03,120.303h360.909c6.641,0,12.03-5.39,12.03-12.03c0-6.641-5.39-12.03-12.03-12.03H12.03 c-6.641,0-12.03,5.39-12.03,12.03C0,114.913,5.39,120.303,12.03,120.303z"></path><path d="M372.939,180.455H12.03c-6.641,0-12.03,5.39-12.03,12.03s5.39,12.03,12.03,12.03h360.909c6.641,0,12.03-5.39,12.03-12.03 S379.58,180.455,372.939,180.455z"></path><path d="M372.939,264.667H132.333c-6.641,0-12.03,5.39-12.03,12.03c0,6.641,5.39,12.03,12.03,12.03h240.606 c6.641,0,12.03-5.39,12.03-12.03C384.97,270.056,379.58,264.667,372.939,264.667z"></path></svg> Danh mục
                            </a>
                            <div class="sub-menu megamenu">
                                <div class="container">
                                    <ul class="level0 list-unstyle">
                                        <?php
                                        $res_gpro = SysGetList('tbl_product_group', array(), "AND par_id=0 AND isactive=1 ORDER BY `order` ASC");
                                        if(count($res_gpro)>0){
                                            foreach ($res_gpro as $key => $value) {
                                                $id = $value['id'];
                                                $title = $value['title'];
                                                $alias = $value['alias'];
                                                $link = ROOTHOST.'san-pham/'.$alias;
                                                echo '<li class="level1 parent item">
                                                <a class="hmega" href="'.$link.'" title="'.$title.'">'.$title.'</a>';

                                                $res_ptype = SysGetList('tbl_product_type', array(), 'AND id_pgroup="'.$id.'" AND isactive=1');
                                                if(count($res_ptype)>0):
                                                    echo '<ul class="level1">';
                                                    foreach ($res_ptype as $k_child => $v_child) {
                                                        $title1 = $v_child['title'];
                                                        $link1 = ROOTHOST.'san-pham/'.$alias.'/'.$v_child['alias'];
                                                        echo '<li class="level2"> <a href="'.$link1.'" title="'.$title1.'">'.$title1.'</a> </li>';
                                                    }
                                                    echo '</ul>';
                                                endif;
                                                echo '</li>';
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item"><a href="<?php echo ROOTHOST;?>khuyen-mai" class="nav-link" title="Danh mục">Khuyến mãi HOT</a></li>
                        <li class="nav-item"><a href="<?php echo ROOTHOST;?>san-pham-moi?sortby=created_on%3Adesc" class="nav-link" title="Danh mục">Hàng mới về</a></li>
                        <li class="nav-item default">
                            <a href="javascript:void(0)" class="nav-link" title="Dịch vụ">Dịch vụ <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                            <ul class="sub-menu nav-dropdown nav-dropdown-default list-unstyle">
                                <?php
                                $res_categories = SysGetList('tbl_categories', array(), "AND isactive=1 ORDER BY `order` ASC");
                                if(count($res_categories)>0){
                                    foreach ($res_categories as $key => $value) {
                                        $name_cate = $value['title'];
                                        $link_cate = ROOTHOST.'tin-tuc/'.$value['alias'];
                                        echo '<li><a href="'.$link_cate.'" title="'.$name_cate.'" class="nav-link">'.$name_cate.'</a></li>';
                                    }
                                }
                                ?>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="box-search-desktop">
                    <div class="wg-header-search">
                        <form action="<?php echo ROOTHOST;?>tim-kiem" method="GET" class="header-search-form"> 
                            <input type="text" aria-label="Tìm sản phẩm" name="q" class="search-auto form-control" placeholder="Tìm sản phẩm..." autocomplete="off"> 
                            <button class="btn btn-default" type="submit" aria-label="Tìm kiếm"> 
                                <svg class="Icon Icon--search-desktop" viewBox="0 0 21 21"> 
                                    <g transform="translate(1 1)" stroke="currentColor" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square"> 
                                        <path d="M18 18l-5.7096-5.7096"></path> 
                                        <circle cx="7.2" cy="7.2" r="7.2"></circle> 
                                    </g> 
                                </svg> 
                            </button> 
                        </form>
                    </div>
                </div>
                <div class="box-cart">
                    <a href="javascript:void(0)" class="header-cart" aria-label="Xem giỏ hàng" title="Giỏ hàng"> 
                        <svg viewBox="0 0 19 23"> 
                            <path d="M0 22.985V5.995L2 6v.03l17-.014v16.968H0zm17-15H2v13h15v-13zm-5-2.882c0-2.04-.493-3.203-2.5-3.203-2 0-2.5 1.164-2.5 3.203v.912H5V4.647C5 1.19 7.274 0 9.5 0 11.517 0 14 1.354 14 4.647v1.368h-2v-.912z" fill="#222"></path> 
                        </svg> 
                        <span id="count_item_pr" class="count_item_pr">0</span> 
                    </a>
                </div>
            </div>
        </nav>
    </div>
</header>