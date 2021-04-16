<?php
defined('ISHOME') or die("Can't access this page!");
define('COMS','setting');
$COM='setting';

$viewtype=isset($_GET['viewtype'])?addslashes($_GET['viewtype']):'configsite';
$user=getInfo('username');
$isAdmin=getInfo('isadmin');
if($isAdmin==1){
	if(is_file(COM_PATH.'com_'.$COM.'/tem/'.$viewtype.'.php'))
		include_once('tem/'.$viewtype.'.php');
	unset($viewtype); unset($obj); unset($COM);
}else{
	echo "<h3 class='text-center'>You haven't permission</h3>";
}
?>