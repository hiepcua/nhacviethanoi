<?php
defined('ISHOME') or die('Can not acess this page, please come back!');
define('COMS','order');
define('THIS_COM_PATH',COM_PATH.'com_'.COMS.'/');

$tem='';
if(isset($_GET['viewtype'])) $tem=$_GET['viewtype'];
if(!is_file(THIS_COM_PATH.'tem/'.$tem.'.php')){
	$tem='list';
}

include_once(THIS_COM_PATH.'tem/'.$tem.'.php');
unset($obj); unset($tem);
?>