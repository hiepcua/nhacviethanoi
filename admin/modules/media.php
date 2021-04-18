<?php
function listDir($urldir,$level){
    $objdir=dir($urldir);
    $cls="";
    for($i=1;$i<=$level;$i++){
        if($i==1){
            $cls="list level_".$i;
        }else{
            $cls="sub_folder level_".$i;
        }
    }
    $files=array();
    while($file=$objdir->read()){
        $files[]=$file;
    }
    sort($files);

    echo '<ul class="'.$cls.'">';
    foreach($files as $file){
        $fullurl=$urldir.$file."/";
        if(is_dir($fullurl) && $file!="." && $file!=".."&& $file!="_notes" && $file!="thumb"){
            echo '<li>
            <div class="wr-lifolder" data-url="'.$fullurl.'">
            <div class="arrow right"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
            <div class="foldername">
            <i class="fa fa-folder" aria-hidden="true"></i>
            <span class="name">'.$file.'</span>
            </div>
            </div>';
            listdir($fullurl,++$level);
            echo '</li>';
        }
    }
    echo '</ul>';
}
?>
<!-- modal popup media -->
<div id="modalPopupMedia">
    <div class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeMedia()">&times;</a>
        <div id="mainMedia" class="overlay-content">
            <div class="grid-view-toolbar sec-header">
                <div class="breadcrumbs-wrapper">
                    <div class="breadcrumbs">
                        <div class="item"><i class="fa fa-home" aria-hidden="true"></i></div>
                        <div class="box-md"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                        <div class="item">Folder</div>
                        <div class="box-md"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                        <div class="item">
                            <div class="tooltip">
                                <button type="button" id="btn_new_folder" class="btn" onclick="new_folder(this)" data-parent=""><i class="fa fa-folder" aria-hidden="true"></i></button>
                                <span class="tooltiptext">Thêm thư mục</span>
                            </div>
                        </div>
                    </div>
                    <a href="javascript:void(0)" class="btn btn-primary">Tải lên
                        <input type="file" name="uploadFiles" class="btn btn-primary" style="display: none;" multiple="multiple">
                    </a>
                </div>
            </div>
            <div id="main-content-wrapper" class="main-content-wrapper flex-grow flex flex-shrink-0">
                <div class="folders-sidebar h-100 w-100 overflow-hidden">
                    <div class="header">
                        <div class="name">Thư mục</div>
                    </div>
                    <div class="folders-tree">
                        <?php listDir(MEDIA_HOST,2); ?>
                    </div>
                </div>
                <div class="folder-contents flex flex-column overflow-hidden">
                    <div class="grid-media">
                        <div class="grid">
                            <div class="col">
                                <div class="wrap-thumb" data-src="http://localhost/viasm.edu/medias/images/image-14.jpg">
                                    <img src="http://localhost/viasm.edu/medias/images/image-14.jpg" alt="">
                                </div>
                                <div class="asset-info">
                                    <div class="wrap-name"><span class="name">Ảnh sản phẩm</span></div>
                                    <div class="flex assets">
                                        <div class="file-type">
                                            <i class="fa fa-file-video-o" aria-hidden="true"></i> MP4
                                        </div>
                                        <div class="file-size">37.06 MB</div>
                                        <div class="file-dimensions">400x600</div>
                                    </div>
                                </div>
                                <svg width="24px" height="24px" class="rqet2b" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"></path></svg>
                                <svg width="24px" height="24px" class="eoYPIb" viewBox="0 0 24 24"><circle cx="12.5" cy="12.2" r="8.292"></circle></svg>
                                <svg width="24px" height="24px" class="orgUxc" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path></svg>
                            </div>
                            <div class="col">
                                <div class="wrap-thumb" data-src="http://localhost/viasm.edu/medias/images/image-14.jpg">
                                    <img src="http://localhost/viasm.edu/medias/images/image-14.jpg" alt="">
                                </div>
                                <div class="asset-info">
                                    <div class="wrap-name"><span class="name">Ảnh sản phẩm</span></div>
                                    <div class="flex assets">
                                        <div class="file-type">
                                            <i class="fa fa-file-video-o" aria-hidden="true"></i> MP4
                                        </div>
                                        <div class="file-size">37.06 MB</div>
                                        <div class="file-dimensions">400x600</div>
                                    </div>
                                </div>
                                <svg width="24px" height="24px" class="rqet2b" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"></path></svg>
                                <svg width="24px" height="24px" class="eoYPIb" viewBox="0 0 24 24"><circle cx="12.5" cy="12.2" r="8.292"></circle></svg>
                                <svg width="24px" height="24px" class="orgUxc" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path></svg>
                            </div>
                            <div class="col">
                                <div class="wrap-thumb" data-src="http://localhost/viasm.edu/medias/images/image-14.jpg">
                                    <img src="http://localhost/viasm.edu/medias/images/image-14.jpg" alt="">
                                </div>
                                <div class="asset-info">
                                    <div class="wrap-name"><span class="name">Ảnh sản phẩm</span></div>
                                    <div class="flex assets">
                                        <div class="file-type">
                                            <i class="fa fa-file-video-o" aria-hidden="true"></i> MP4
                                        </div>
                                        <div class="file-size">37.06 MB</div>
                                        <div class="file-dimensions">400x600</div>
                                    </div>
                                </div>
                                <svg width="24px" height="24px" class="rqet2b" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"></path></svg>
                                <svg width="24px" height="24px" class="eoYPIb" viewBox="0 0 24 24"><circle cx="12.5" cy="12.2" r="8.292"></circle></svg>
                                <svg width="24px" height="24px" class="orgUxc" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path></svg>
                            </div>
                            <div class="col">
                                <div class="wrap-thumb" data-src="http://localhost/viasm.edu/medias/images/image-14.jpg">
                                    <img src="http://localhost/viasm.edu/medias/images/image-14.jpg" alt="">
                                </div>
                                <div class="asset-info">
                                    <div class="wrap-name"><span class="name">Ảnh sản phẩm</span></div>
                                    <div class="flex assets">
                                        <div class="file-type">
                                            <i class="fa fa-file-video-o" aria-hidden="true"></i> MP4
                                        </div>
                                        <div class="file-size">37.06 MB</div>
                                        <div class="file-dimensions">400x600</div>
                                    </div>
                                </div>
                                <svg width="24px" height="24px" class="rqet2b" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"></path></svg>
                                <svg width="24px" height="24px" class="eoYPIb" viewBox="0 0 24 24"><circle cx="12.5" cy="12.2" r="8.292"></circle></svg>
                                <svg width="24px" height="24px" class="orgUxc" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path></svg>
                            </div>
                            <div class="col">
                                <div class="wrap-thumb" data-src="http://localhost/viasm.edu/medias/images/image-14.jpg">
                                    <img src="http://localhost/viasm.edu/medias/images/image-14.jpg" alt="">
                                </div>
                                <div class="asset-info">
                                    <div class="wrap-name"><span class="name">Ảnh sản phẩm</span></div>
                                    <div class="flex assets">
                                        <div class="file-type">
                                            <i class="fa fa-file-video-o" aria-hidden="true"></i> MP4
                                        </div>
                                        <div class="file-size">37.06 MB</div>
                                        <div class="file-dimensions">400x600</div>
                                    </div>
                                </div>
                                <svg width="24px" height="24px" class="rqet2b" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"></path></svg>
                                <svg width="24px" height="24px" class="eoYPIb" viewBox="0 0 24 24"><circle cx="12.5" cy="12.2" r="8.292"></circle></svg>
                                <svg width="24px" height="24px" class="orgUxc" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path></svg>
                            </div>
                            <div class="col">
                                <div class="wrap-thumb" data-src="http://localhost/viasm.edu/medias/images/image-14.jpg">
                                    <img src="http://localhost/viasm.edu/medias/images/image-14.jpg" alt="">
                                </div>
                                <div class="asset-info">
                                    <div class="wrap-name"><span class="name">Ảnh sản phẩm</span></div>
                                    <div class="flex assets">
                                        <div class="file-type">
                                            <i class="fa fa-file-video-o" aria-hidden="true"></i> MP4
                                        </div>
                                        <div class="file-size">37.06 MB</div>
                                        <div class="file-dimensions">400x600</div>
                                    </div>
                                </div>
                                <svg width="24px" height="24px" class="rqet2b" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"></path></svg>
                                <svg width="24px" height="24px" class="eoYPIb" viewBox="0 0 24 24"><circle cx="12.5" cy="12.2" r="8.292"></circle></svg>
                                <svg width="24px" height="24px" class="orgUxc" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path></svg>
                            </div>
                            <div class="col">
                                <div class="wrap-thumb" data-src="http://localhost/viasm.edu/medias/images/image-14.jpg">
                                    <img src="http://localhost/viasm.edu/medias/images/image-14.jpg" alt="">
                                </div>
                                <div class="asset-info">
                                    <div class="wrap-name"><span class="name">Ảnh sản phẩm</span></div>
                                    <div class="flex assets">
                                        <div class="file-type">
                                            <i class="fa fa-file-video-o" aria-hidden="true"></i> MP4
                                        </div>
                                        <div class="file-size">37.06 MB</div>
                                        <div class="file-dimensions">400x600</div>
                                    </div>
                                </div>
                                <svg width="24px" height="24px" class="rqet2b" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"></path></svg>
                                <svg width="24px" height="24px" class="eoYPIb" viewBox="0 0 24 24"><circle cx="12.5" cy="12.2" r="8.292"></circle></svg>
                                <svg width="24px" height="24px" class="orgUxc" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path></svg>
                            </div>
                            <div class="col">
                                <div class="wrap-thumb" data-src="http://localhost/viasm.edu/medias/images/image-14.jpg">
                                    <img src="http://localhost/viasm.edu/medias/images/image-14.jpg" alt="">
                                </div>
                                <div class="asset-info">
                                    <div class="wrap-name"><span class="name">Ảnh sản phẩm</span></div>
                                    <div class="flex assets">
                                        <div class="file-type">
                                            <i class="fa fa-file-video-o" aria-hidden="true"></i> MP4
                                        </div>
                                        <div class="file-size">37.06 MB</div>
                                        <div class="file-dimensions">400x600</div>
                                    </div>
                                </div>
                                <svg width="24px" height="24px" class="rqet2b" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"></path></svg>
                                <svg width="24px" height="24px" class="eoYPIb" viewBox="0 0 24 24"><circle cx="12.5" cy="12.2" r="8.292"></circle></svg>
                                <svg width="24px" height="24px" class="orgUxc" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path></svg>
                            </div>
                            <div class="col">
                                <div class="wrap-thumb" data-src="http://localhost/viasm.edu/medias/images/image-14.jpg">
                                    <img src="http://localhost/viasm.edu/medias/images/image-14.jpg" alt="">
                                </div>
                                <div class="asset-info">
                                    <div class="wrap-name"><span class="name">Ảnh sản phẩm</span></div>
                                    <div class="flex assets">
                                        <div class="file-type">
                                            <i class="fa fa-file-video-o" aria-hidden="true"></i> MP4
                                        </div>
                                        <div class="file-size">37.06 MB</div>
                                        <div class="file-dimensions">400x600</div>
                                    </div>
                                </div>
                                <svg width="24px" height="24px" class="rqet2b" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"></path></svg>
                                <svg width="24px" height="24px" class="eoYPIb" viewBox="0 0 24 24"><circle cx="12.5" cy="12.2" r="8.292"></circle></svg>
                                <svg width="24px" height="24px" class="orgUxc" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path></svg>
                            </div>
                        </div>
                    </div>
                    <div id="detail_sidebar" class="detail_sidebar">

                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal popup media -->
<script type="text/javascript">
    $(document).ready(function(){
        $('.grid-media .grid').on('click', function(e){

        });

        $('.orgUxc').on('click', function(e){
            $(this).parent().addClass('active');
        });
    });

    function new_folder(e){
        var _url="<?php echo ROOTHOST;?>ajaxs/media/new_folder.php";
        $.get(_url, function(req){
            $('#popup_modal').css('z-index', '9999999');
            $('#popup_modal .modal-dialog').removeClass('modal-sm modal-lg');
            $('#popup_modal .modal-dialog').addClass('modal-md');
            $('#popup_modal .modal-title').text('Thêm thư mục');
            $('#popup_modal .modal-body').html(req);
            $('#popup_modal').modal('show');
        });
    }
</script>