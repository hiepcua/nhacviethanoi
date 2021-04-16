<section class="home-banner">
    <div id="banner-slider" class="carousel slide" data-ride="carousel">
        <?php
        $res_banners = SysGetList('tbl_slider', [], "AND isactive=1 ORDER BY `order` ASC");
        $number = count($res_banners);
        $str_slider='';
        if($number>0){
            $str_slider.='<div class="container"><ol class="carousel-indicators">';
            for ($i=0; $i < $number; $i++) { 
                $active = $i==0 ? 'class="active"' : '';
                $str_slider.='<li data-target="#banner-slider" data-slide-to="'.$i.'" '.$active.'></li>';
            }
            $str_slider.='</ol></div>';

            $str_slider.='<div class="carousel-inner">';
            foreach ($res_banners as $key => $value) {
                $active = $key==0 ? 'active' : '';
                $str_slider.='<div class="carousel-item '.$active.'" data-src="'.$value['thumb'].'">';
                $str_slider.='<img class="d-block w-100" src="'.$value['thumb'].'">';
                $str_slider.='<div class="carousel-item-content"><div class="container caption medium20pt cwhite">'.$value['slogan'].'</div></div>';
                $str_slider.='</div>';
            }
            $str_slider.='</div>';
        }
        echo $str_slider;
        ?>
    </div>
</section>