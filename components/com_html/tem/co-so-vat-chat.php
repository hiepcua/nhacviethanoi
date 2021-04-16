<section class="component">
	<div class="page container">
		<div class="page-history">
			<div class="page-content">
				<div class="wg-breadcrumb clearfix">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item home" aria-current="page"><a href="<?php echo ROOTHOST;?>"></a></li>
							<li class="breadcrumb-item" aria-current="page"><a href="<?php echo ROOTHOST;?>gioi-thieu" title="">Giới thiệu</a></li>
							<li class="breadcrumb-item active" aria-current="page">Cơ sở vật chất</li>
						</ol>
					</nav>
				</div>

				<div class="main-content">
					<ul id="tab-cctc" class="nav nav-pills nav-justified">
						<li><a data-toggle="tab" href="#tab1" class="active">Giới thiệu</a></li>
						<li><a data-toggle="tab" href="#tab2">Ngân sách hoạt động</a></li>
						<li><a data-toggle="tab" href="#tab3">Sơ đồ làm việc</a></li>
						<li><a data-toggle="tab" href="#tab4">Đường đến viện</a></li>
					</ul>

					<div class="tab-content">
						<div id="tab1" class="tab-pane active">
							<?php
							$res_content1s = SysGetList('tbl_html_block', array(), 'AND alias="dia-diem-va-co-so-vat-chat" AND isactive=1');
							if(count($res_content1s) > 0){
								$row = $res_content1s[0];
								echo '<h1 class="page-title">'.$row['title'].'</h1>';
								echo '<article class="fulltext">';
								echo $row['fulltext'];
								echo '</article>';
							}
							?>

							<div id="slick-album">
								<section class="slider-for">
									<div>
										<img src="<?php echo ROOTHOST;?>images/img-1.jpg">
									</div>
									<div>
										<img src="<?php echo ROOTHOST;?>images/img-1.jpg">
									</div>
									<div>
										<img src="<?php echo ROOTHOST;?>images/img-1.jpg">
									</div>
									<div>
										<img src="<?php echo ROOTHOST;?>images/img-1.jpg">
									</div>
									<div>
										<img src="<?php echo ROOTHOST;?>images/img-1.jpg">
									</div>
									<div>
										<img src="<?php echo ROOTHOST;?>images/img-1.jpg">
									</div>
									<div>
										<img src="<?php echo ROOTHOST;?>images/img-1.jpg">
									</div>
									<div>
										<img src="<?php echo ROOTHOST;?>images/img-1.jpg">
									</div>
									<div>
										<img src="<?php echo ROOTHOST;?>images/img-1.jpg">
									</div>
									<div>
										<img src="<?php echo ROOTHOST;?>images/img-1.jpg">
									</div>
								</section>
								
								<section class="slider-nav">
									<div>
										<img src="<?php echo ROOTHOST;?>images/img-1.jpg">
									</div>
									<div>
										<img src="<?php echo ROOTHOST;?>images/img-1.jpg">
									</div>
									<div>
										<img src="<?php echo ROOTHOST;?>images/img-1.jpg">
									</div>
									<div>
										<img src="<?php echo ROOTHOST;?>images/img-1.jpg">
									</div>
									<div>
										<img src="<?php echo ROOTHOST;?>images/img-1.jpg">
									</div>
									<div>
										<img src="<?php echo ROOTHOST;?>images/img-1.jpg">
									</div>
									<div>
										<img src="<?php echo ROOTHOST;?>images/img-1.jpg">
									</div>
									<div>
										<img src="<?php echo ROOTHOST;?>images/img-1.jpg">
									</div>
									<div>
										<img src="<?php echo ROOTHOST;?>images/img-1.jpg">
									</div>
									<div>
										<img src="<?php echo ROOTHOST;?>images/img-1.jpg">
									</div>
								</section>
							</div>
						</div>

						<div id="tab2" class="tab-pane fade"></div>
						<div id="tab3" class="tab-pane fade"></div>
						<div id="tab4" class="tab-pane fade"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>