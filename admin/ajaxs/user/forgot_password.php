<?php
session_start();
define('incl_path','../../global/libs/');
define('libs_path','../../libs/');
require_once(incl_path.'gfconfig.php');
require_once(incl_path.'gfinit.php');
require_once(incl_path.'gffunc.php');
require_once(incl_path.'gffunc_user.php');
require_once(libs_path.'cls.mysql.php');

require_once(libs_path."PHPMailer/src/PHPMailer.php");
require_once(libs_path."PHPMailer/src/Exception.php");
require_once(libs_path."PHPMailer/src/OAuth.php");
require_once(libs_path."PHPMailer/src/POP3.php");
require_once(libs_path."PHPMailer/src/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendMail($title, $body, $alt_body, $email_to) {
	try {
		$mail = new PHPMailer(true);       
		//Server settings
		$mail->SMTPDebug = 0;                                 // Enable verbose debug output
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'classhub.5gmedia@gmail.com';                 // SMTP username
		$mail->Password = '5gmedia@123';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to
	 
		//Recipients
		$mail->setFrom('classhub.5gmedia@gmail.com', 'ClassHub');
		foreach ($email_to as $key => $value) {
			$mail->addAddress($value);     // Add a recipient
		}
		$mail->addReplyTo('classhub.5gmedia@gmail.com', 'Information');

		//Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = $title;
		$mail->Body    = $body;
		$mail->AltBody = $alt_body;
	 
	 	if($mail->send()){
	 		return 1;
	 	}else{
	 		return 0;
	 	}
		// echo 'Message has been sent<br/>';
	} catch (Exception $e) {
		return 0;
		// echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	}
}

$user=antiData($_POST['user']);
if($user!=''){
	$strWhere=" AND `username` = '".$user."'";
	$count = SysCountList('tbl_member', $strWhere);

	if($count > 0){
		$newPass = generateRandomString();
		$pass = antiData($newPass);
		$pass = md5($pass);
		$pass = hash('sha256', $user).'|'.hash('sha256', $pass);

		$arr=array('password'=>$pass);
		$strwhere = ' `username`="'.$user.'"';
		$res = SysEdit('tbl_member', $arr, $strwhere);

		if($res){
			// Send mail
			$arr_email=[$user];			
			$title="ClassHub - Change your password!";
			$body='
			<meta charset="utf-8"/>
			<div class="wrapper">
			<div class="body">
				<div>Xin ch??o t??n t??i kho???n <b>'.$user.'</b>!</div>
				<div>H??? th???ng nh???n ???????c y??u c???u r???ng b???n b??? qu??n m???t kh???u, h??? th???ng ???? t??? ?????ng t???o m???t kh???u ????? b???n ????ng nh???p l???i t??i kho???n</div>
				<div>????y l?? m???t kh???u ???????c t???o m???i c???a b???n: <b>'.$newPass.'</b></div>
				<br>
			</div>
			<div class="footer"><div>Tr??n tr???ng c???m ??n!</div><div>?????i ng?? b???o m???t c???a ClassHub</div></div>';
			$alt_body='Xin ch??o t??n t??i kho???n'.$user.'H??? th???ng nh???n ???????c y??u c???u r???ng b???n b??? qu??n m???t kh???u, h??? th???ng ???? t??? ?????ng t???o m???t kh???u ????? b???n ????ng nh???p l???i t??i kho???n. ????y l?? m???t kh???u ???????c t???o m???i c???a b???n: '.$newPass.' Tr??n tr???ng c???m ??n! ?????i ng?? b???o m???t c???a ClassHub';

			$res_mail = sendMail($title, $body, $alt_body, $arr_email);
			if($res_mail == 1) die('success');
			else die('Mailing wrong!');
		}else{
			die("Update error!");
		}
	}else{
		die("Email not found!");
	}
}else{ die("Data is empty");}
?>