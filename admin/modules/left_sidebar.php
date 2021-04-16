<?php
$isAdmin=getInfo('isadmin');
?>
<style type="text/css">
	.nav-sidebar>.nav-item .nav-icon.fa, .nav-sidebar>.nav-item .nav-icon.fab, .nav-sidebar>.nav-item .nav-icon.far, .nav-sidebar>.nav-item .nav-icon.fas, .nav-sidebar>.nav-item .nav-icon.glyphicon, .nav-sidebar>.nav-item .nav-icon.ion{font-size: 1rem;}
	.nav-sidebar .nav-treeview>.nav-item>.nav-link>.nav-icon{font-size: 0.8em;}
	[class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link{font-size: 0.9em;}
</style>
<nav class="mt-2 pb-5">
	<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
		<?php if($isAdmin==1){ ?>
			<li class="nav-item <?php menuOpen(array('order'), 'com'); ?>">
				<a href="<?php echo ROOTHOST;?>order" class="nav-link <?php activeMenu('order', '', 'com');?> ">
					<i class="nav-icon fa fa-book" aria-hidden="true"></i>
					<p>Quản lý đặt hàng</p>
				</a>
			</li>

			<li class="nav-item <?php menuOpen(array('product'), 'com'); ?> menu-open">
				<a href="<?php echo ROOTHOST;?>product" class="nav-link <?php activeMenus(array('product'), 'com'); ?>">
					<i class="nav-icon fa fa-server" aria-hidden="true"></i>
					<p>Quản lý sản phẩm <i class="right fas fa-angle-left"></i></p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="<?php echo ROOTHOST;?>product/add" class="nav-link <?php activeMenu('product','add','viewtype');?>">
							<i class="far fa-circle nav-icon"></i>
							<p>Thêm mới</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo ROOTHOST;?>product?viewtype=list" class="nav-link <?php activeMenu('product','list','viewtype');?>">
							<i class="far fa-circle nav-icon"></i>
							<p>Danh sách</p>
						</a>
					</li>
				</ul>
			</li>

			<li class="nav-item <?php menuOpen(array('content'), 'com'); ?> menu-open">
				<a href="<?php echo ROOTHOST;?>content" class="nav-link <?php activeMenus(array('content'), 'com'); ?>">
					<i class="nav-icon far fa-calendar-alt"></i>
					<p>Tin tức <i class="right fas fa-angle-left"></i></p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="<?php echo ROOTHOST;?>content/add" class="nav-link <?php activeMenu('content','add','viewtype');?>">
							<i class="far fa-circle nav-icon"></i>
							<p>Thêm mới</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo ROOTHOST;?>content?viewtype=list" class="nav-link <?php activeMenu('content','list','viewtype');?>">
							<i class="far fa-circle nav-icon"></i>
							<p>Danh sách</p>
						</a>
					</li>
				</ul>
			</li>

			<li class="nav-item <?php menuOpen(array('categories', 'product_group'), 'com'); ?>">
				<a href="#" class="nav-link <?php activeMenus(array('categories', 'product_group'), 'com');?> ">
					<i class="nav-icon fa fa-server" aria-hidden="true"></i>
					<p>Chuyên mục/ Nhóm <i class="right fas fa-angle-left"></i></p>
				</a>

				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="<?php echo ROOTHOST;?>product_group" class="nav-link <?php activeMenu('product_group', '', 'com');?> ">
							<i class="far fa-circle nav-icon"></i>
							<p>Nhóm sản phẩm</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo ROOTHOST;?>categories" class="nav-link <?php activeMenu('categories', '', 'com');?> ">
							<i class="far fa-circle nav-icon"></i>
							<p>Chuyên mục bài viết</p>
						</a>
					</li>
				</ul>
			</li>

			<li class="nav-item <?php menuOpen(array('contact'), 'com'); ?>">
				<a href="<?php echo ROOTHOST;?>contact" class="nav-link <?php activeMenu('contact', '', 'com');?> ">
					<i class="nav-icon fa fa-book" aria-hidden="true"></i>
					<p>Quản lý liên hệ</p>
				</a>
			</li>

			<li class="nav-item <?php menuOpen(array('seo'), 'com'); ?>">
				<a href="<?php echo ROOTHOST;?>seo" class="nav-link <?php activeMenu('seo', '', 'com');?> ">
					<i class="nav-icon fa fa-server" aria-hidden="true"></i>
					<p>Quản lý SEO</p>
				</a>
			</li>

			<li class="nav-item <?php menuOpen(array('setting', 'user', 'html_block', 'tag', 'menu', 'mnuitem', 'slider', 'module', 'partner'), 'com'); ?>">
				<a href="<?php echo ROOTHOST;?>setting" class="nav-link <?php activeMenus(array('setting', 'user', 'html_block', 'tag', 'menu', 'mnuitem', 'slider', 'module', 'partner'), 'com'); ?>">
					<i class="nav-icon fas fa-wrench" aria-hidden="true"></i>
					<p>Cấu hình<i class="right fas fa-angle-left"></i></p>
				</a>

				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="<?php echo ROOTHOST;?>html_block" class="nav-link <?php activeMenu('html_block', '', 'com');?> ">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="nav-icon bi bi-blockquote-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm5 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
								<path d="M3.734 6.352a6.586 6.586 0 0 0-.445.275 1.94 1.94 0 0 0-.346.299 1.38 1.38 0 0 0-.252.369c-.058.129-.1.295-.123.498h.282c.242 0 .431.06.568.182.14.117.21.29.21.521a.697.697 0 0 1-.187.463c-.12.14-.289.21-.503.21-.336 0-.577-.108-.721-.327C2.072 8.619 2 8.328 2 7.969c0-.254.055-.485.164-.692.11-.21.242-.398.398-.562.16-.168.33-.31.51-.428.18-.117.33-.213.451-.287l.211.352zm2.168 0a6.588 6.588 0 0 0-.445.275 1.94 1.94 0 0 0-.346.299c-.113.12-.199.246-.257.375a1.75 1.75 0 0 0-.118.492h.282c.242 0 .431.06.568.182.14.117.21.29.21.521a.697.697 0 0 1-.187.463c-.12.14-.289.21-.504.21-.335 0-.576-.108-.72-.327-.145-.223-.217-.514-.217-.873 0-.254.055-.485.164-.692.11-.21.242-.398.398-.562.16-.168.33-.31.51-.428.18-.117.33-.213.451-.287l.211.352z"/>
							</svg>
							<p>Html block</p>
						</a>
					</li>

					<li class="nav-item">
						<a href="<?php echo ROOTHOST;?>menu" class="nav-link <?php activeMenu('menu', '', 'com');?>">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-markdown-fill nav-icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm11.5 1a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L11 9.293V5.5a.5.5 0 0 1 .5-.5zM3.56 7.01V11H2.5V5.001h1.208l1.71 3.894h.04l1.709-3.894h1.2V11H7.294V7.01h-.057l-1.42 3.239h-.773l-1.428-3.24H3.56z"/>
							</svg>
							<p>Quản lý menu</p>
						</a>
					</li>

					<li class="nav-item">
						<a href="<?php echo ROOTHOST;?>mnuitem/1" class="nav-link <?php activeMenu('mnuitem', '', 'com');?>">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-markdown-fill nav-icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm11.5 1a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L11 9.293V5.5a.5.5 0 0 1 .5-.5zM3.56 7.01V11H2.5V5.001h1.208l1.71 3.894h.04l1.709-3.894h1.2V11H7.294V7.01h-.057l-1.42 3.239h-.773l-1.428-3.24H3.56z"/>
							</svg>
							<p>Menu chính</p>
						</a>
					</li>

					<li class="nav-item">
						<a href="<?php echo ROOTHOST;?>slider" class="nav-link <?php activeMenu('slider', '', 'com');?>">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-sliders nav-icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M14 3.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0zM11.5 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM7 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0zM4.5 10a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9.5 3.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0zM11.5 15a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
								<path fill-rule="evenodd" d="M9.5 4H0V3h9.5v1zM16 4h-2.5V3H16v1zM9.5 14H0v-1h9.5v1zm6.5 0h-2.5v-1H16v1zM6.5 9H16V8H6.5v1zM0 9h2.5V8H0v1z"/>
							</svg>
							<p>Banner</p>
						</a>
					</li>

					<li class="nav-item">
						<a href="<?php echo ROOTHOST;?>user" class="nav-link <?php activeMenu('user', '', 'com');?>">
							<i class="nav-icon fas fa-user"></i>
							<p>Người dùng</p>
						</a>
					</li>
					
					<li class="nav-item">
						<a href="<?php echo ROOTHOST;?>setting" class="nav-link <?php activeMenu('setting', '', 'com');?>">
							<i class="nav-icon fas fa-wrench" aria-hidden="true"></i>
							<p>Cấu hình website</p>
						</a>
					</li>
				</ul>
			</li>

		<?php }else{ ?>
			<li class="nav-item <?php menuOpen(array('order'), 'com'); ?>">
				<a href="<?php echo ROOTHOST;?>order" class="nav-link <?php activeMenu('order', '', 'com');?> ">
					<i class="nav-icon fa fa-book" aria-hidden="true"></i>
					<p>Quản lý đặt hàng</p>
				</a>
			</li>

			<li class="nav-item <?php menuOpen(array('content'), 'com'); ?> menu-open">
				<a href="<?php echo ROOTHOST;?>content" class="nav-link <?php activeMenus(array('content'), 'com'); ?>">
					<i class="nav-icon far fa-calendar-alt"></i>
					<p>Tin tức <i class="right fas fa-angle-left"></i></p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="<?php echo ROOTHOST;?>content/add" class="nav-link <?php activeMenu('content','add','viewtype');?>">
							<i class="far fa-circle nav-icon"></i>
							<p>Thêm mới</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo ROOTHOST;?>content?viewtype=list" class="nav-link <?php activeMenu('content','list','viewtype');?>">
							<i class="far fa-circle nav-icon"></i>
							<p>Danh sách</p>
						</a>
					</li>
				</ul>
			</li>

			<li class="nav-item <?php menuOpen(array('contact'), 'com'); ?>">
				<a href="<?php echo ROOTHOST;?>contact" class="nav-link <?php activeMenu('contact', '', 'com');?> ">
					<i class="nav-icon fa fa-book" aria-hidden="true"></i>
					<p>Quản lý liên hệ</p>
				</a>
			</li>

			<li class="nav-item <?php menuOpen(array('seo'), 'com'); ?>">
				<a href="<?php echo ROOTHOST;?>seo" class="nav-link <?php activeMenu('seo', '', 'com');?> ">
					<i class="nav-icon fa fa-server" aria-hidden="true"></i>
					<p>Quản lý SEO</p>
				</a>
			</li>
		<?php } ?>
	</ul>
</nav>
<script>
	$('.logout').click(function(){
		var _url="<?php echo ROOTHOST;?>ajaxs/user/logout.php";
		$.get(_url,function(){
			window.location.reload();
		})
	});

	function event_addnew(){
		var _url="<?php echo ROOTHOST;?>ajaxs/event/form_add.php";
		$.get(_url, function(req){
			$('#popup_modal .modal-dialog').addClass('modal-xl');
			$('#popup_modal .modal-title').html('Thêm mới hoạt động khoa học');
			$('#popup_modal .modal-body').html(req);
			$('#popup_modal').modal('show');
		});
	}
</script>