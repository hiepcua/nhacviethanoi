<?php
defined('ISHOME') or die('Can not acess this page, please come back!');
define('COMS','seo');
define('THIS_COM_PATH',COM_PATH.'com_'.COMS.'/');
$COM='seo';
$isAdmin = getInfo('isadmin');
$objmysql 	= new CLS_MYSQL();

$task='';
if(isset($_GET['task'])) $task=$_GET['task'];
if(!is_file(THIS_COM_PATH.'task/'.$task.'.php')){
	$task='list';
}

include_once(THIS_COM_PATH.'task/'.$task.'.php');
unset($obj); unset($task);	unset($objmysql); unset($ids);
?>