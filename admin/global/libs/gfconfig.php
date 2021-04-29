<?php
function isSSL(){
	if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') return true;
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') return true;
	else return false;
}
$REQUEST_PROTOCOL = isSSL()? 'https://' : 'http://';
// define('ROOTHOST',$REQUEST_PROTOCOL.$_SERVER['HTTP_HOST'].'/');
define('ROOTHOST','http://localhost/nhacviethanoi/admin/');
define('ROOTHOST_WEB','http://localhost/nhacviethanoi/');
define('ROOTHOST_ADMIN',$REQUEST_PROTOCOL.$_SERVER['HTTP_HOST'].'/admin/');
define('WEBSITE',$REQUEST_PROTOCOL.$_SERVER['HTTP_HOST'].'/');
define('DOMAIN','ott.ecohub.asia');
define('ROOT_IMAGE','/home/admin/web/ecohub.asia/public_html/');
define('ROOT_MEDIA','/home/admin/web/ecohub.asia/public_html/uploads/media/');
define('BASEVIRTUAL0','/home/admin/web/ecohub.asia/public_html/uploads/');
define('PLUGINS_HOST',$_SERVER['DOCUMENT_ROOT'].'/nhacviethanoi/admin/global/plugins/');
define('MEDIA_HOST',$_SERVER['DOCUMENT_ROOT'].'/nhacviethanoi/medias/');
define('DOCUMENT_FILE',$_SERVER['DOCUMENT_ROOT'].'/nhacviethanoi/files/');
define('IMAGE_HOST',ROOTHOST_WEB.'medias/');
define('IMAGE_CONTENTS_HOST', $_SERVER['DOCUMENT_ROOT'].'/nhacviethanoi/medias/contents/');
define('AVATAR_DEFAULT',ROOTHOST.'global/img/avatars/male.png');
define('IMAGE_DEFAULT',ROOTHOST.'global/img/no-photo.jpg');

define('PIT_API_KEY','6b73412dd2037b6d2ae3b2881b5073bc');
define('APP_ID','1663061363962371');
define('APP_SECRET','dd0b6d3fb803ca2a51601145a74fd9a8');

define('ROOT_PATH',''); 
define('TEM_PATH',ROOT_PATH.'templates/');
define('COM_PATH',ROOT_PATH.'components/');
define('MOD_PATH',ROOT_PATH.'modules/');
define('INC_PATH',ROOT_PATH.'includes/');
define('LAG_PATH',ROOT_PATH.'languages/');
define('EXT_PATH',ROOT_PATH.'extensions/');
define('EDI_PATH',EXT_PATH.'editor/');
define('DOC_PATH',ROOT_PATH.'documents/');
define('DAT_PATH',ROOT_PATH.'databases/');
define('IMG_PATH',ROOT_PATH.'images/');
define('MED_PATH',ROOT_PATH.'media/');
define('LIB_PATH',ROOT_PATH.'libs/');
define('JSC_PATH',ROOT_PATH.'js/');
define('LOG_PATH',ROOT_PATH.'logs/');

define('ADMIN_LOGIN_TIMEOUT',-1);
define('URL_REWRITE','1');
define('USER_TIMEOUT',3000);
define('MEMBER_TIMEOUT',300);
define('ACTION_TIMEOUT',600);
define('MEMBER_STATUS',1);
define('NAME_2FA','ecohub.asia');
define('KEY_AUTHEN_COOKIE','OTT_260584');

define('SMTP_SERVER','smtp.gmail.com');
define('SMTP_PORT','465');
define('SMTP_USER','hoangtucoc321@gmail.com');
define('SMTP_PASS','nsn2651984');
define('SMTP_MAIL','hoangtucoc321@gmail.com');

define('SITE_NAME','CÔNG TY TNHH THƯƠNG MẠI VÀ TỔ CHỨC SỰ KIỆN THIÊN THANH');
define('SITE_TITLE','CÔNG TY TNHH THƯƠNG MẠI VÀ TỔ CHỨC SỰ KIỆN THIÊN THANH');
define('SITE_DESC','');
define('SITE_KEY','');
define('SITE_IMAGE','');
define('SITE_LOGO','');
define('COM_NAME','Copyright &copy; IGF.COM.VN');
define('COM_CONTACT','');
$_FILE_TYPE=array('docx','excel','pdf');
$_MEDIA_TYPE=array('mp4','mp3');
$_IMAGE_TYPE=array('jpeg','jpg','gif','png');

const POSITIONS = array(
	'1'	=> 'header',
	'2'	=> 'navitor',
	'3'	=> 'footer',
	'4'	=> 'top',
	'5'	=> 'bottom',
	'6'	=> 'path',
	'7'	=> 'left',
	'8' => 'right',
	'9' => 'box1',
	'10' => 'box2',
	'11' => 'box3',
	'12' => 'box4',
	'13' => 'box5',
	'14' => 'box6',
	'15' => 'box7',
	'16' => 'box8',
	'17' => 'box9',
	'18' => 'box10',
	'19' => 'box11',
	'20' => 'box12',
	'21' => 'box13',
	'22' => 'box14',
	'23' => 'box15',
	'24' => 'box16',
	'25' => 'box17',
	'26' => 'box18',
	'27' => 'box19',
	'28' => 'box20',
	'29' => 'user1',
	'30' => 'user2',
	'31' => 'user3',
	'32' => 'user4',
	'33' => 'user5',
	'34' => 'user6',
	'35' => 'user7',
	'36' => 'user8',
	'37' => 'user9',
	'38' => 'user10',
	'39' => 'banner1',
	'40' => 'banner2',
	'41' => 'banner3',
	'42' => 'banner4',
	'43' => 'banner5',
	'44' => 'banner6',
	'45' => 'banner7',
	'46' => 'banner8',
	'47' => 'banner9',
	'48' => 'banner10',
	'49' => 'ads1',
	'50' => 'ads2',
	'51' => 'ads3',
	'52' => 'ads4',
	'53' => 'ads5',
	'54' => 'ads6',
	'55' => 'ads7',
	'56' => 'ads8',
	'57' => 'ads9',
	'58' => 'ads10',
	'59' => 'ads11',
	'60' => 'ads12',
	'61' => 'ads13',
	'62' => 'ads14',
	'63' => 'ads15',
	'64' => 'ads16',
	'65' => 'ads17',
	'66' => 'ads18',
	'67' => 'ads19',
	'68' => 'ads20',
);

//PHAN  QUYEN
$GLOBALS['ARR_ACTION'] = array(
	'view'		=>1,
	'add'		=>2,
	'edit'		=>4,
	'delete'	=>8,
	'accept'	=>16
	);
$GLOBALS['ARR_ACTION_NAME'] = array(
	'view'		=>'Xem',
	'add'		=>'Thêm',
	'edit'		=>'Sửa',
	'delete'	=>'Xóa',
	'accept'	=>'Duyệt'
	);
$GLOBALS['ARR_COM'] = array(
	'setting'	=>1,
	'gusers'	=>2,
	'user'		=>4,
	'order'		=>8,
	'product'	=>16,
	'product_group'	=>32,
	'content'	=>64,
	'categories'=>128,
	'seo' 		=>256,
	'feedback'	=>512,
	'slider'	=>1024,
	'tag'		=>2048,
	'menu'		=>4096,
	'mnuitem'	=>8192,
	'product_type'	=>16384,
	);
$GLOBALS['ARR_COM_ACT'] = array(
	'setting'	=>4, // edit
	'gusers'	=>15, 
	'user'		=>15, 
	'order'		=>15, 
	'product'	=>15,
	'product_group'	=>15,
	'content'	=>15,
	'categories'=>15,
	'seo'		=>15,
	'feedback'	=>15,
	'slider'	=>15,
	'tag'		=>15,
	'menu'		=>15,
	'mnuitem'	=>15,
	'product_type'	=>15,
	);
$GLOBALS['ARR_COM_NAME'] = array(
	'setting'	=>'Cấu hình chung',
	'gusers'	=>'Nhóm quản trị',
	'user'		=>'Thành viên quản trị',
	'order'		=>'Đơn đặt hàng', 
	'product'	=>'Quản lý sản phẩm',
	'product_group'	=>'Quản lý nhóm sản phẩm',
	'content'	=>'Quản lý bài viết',
	'categories'=>'Quản lý chuyên mục',
	'seo'		=>'Quản lý SEO',
	'feedback'	=>'Quản lý feedback',
	'slider'	=>'Quản lý banner',
	'tag'		=>'Quản lý Tags',
	'menu'		=>'Quản lý menu',
	'mnuitem'	=>'Quản lý menuitem',
	'product_type'	=>'Quản lý loại sản phẩm',
	);
$GLOBALS['MSG_PERMIS']='<div id="action" style="background-color:#fff; margin:10px 15px;padding:10px 0"><h3 align="center">Bạn không có quyền truy cập.</h3></div>';
?>