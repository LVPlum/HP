<?php 

header("content-type:text/html;charset=utf-8"); 
ini_set("magic_quotes_runtime",0); 
require 'class.phpmailer.php';
// var_dump($_GET);
// var_dump($_POST);
 
 $link = mysqli_connect('localhost', 'root','','20160409');
 mysqli_query($link,'set names utf8');
 
   $data = $_POST;
// $data = $_GET;
 $name = $data['name'];
 $email = $data['email'];
 $subject = $data['subject'];
 $message = $data['message'];
   $sql = "insert into mail(name,email,subject,message) values
        ('{$name}','{$email}','{$subject}','{$message}')"; 
try { 
$mail = new PHPMailer(true); 
$mail->IsSMTP(); 
$mail->CharSet='UTF-8'; 
$mail->SMTPAuth = true; 
$mail->Port = 465; 
$mail->Host = "ssl://smtp.qq.com"; 
$mail->Username = "2356674013"; 
$mail->Password = "komdhufdkaxtebgb"; 
//$mail->IsSendmail();
$mail->AddReplyTo("2356674013@qq.com","mckee");
$mail->From = "2356674013@qq.com"; 
$mail->FromName = "www.phpddt.com"; 
$to = "2356674013@qq.com"; 
$mail->AddAddress($to); 
$mail->Subject = "phpmailer"; 
$mail->Body = "<h1>发件人：$name 发件人邮箱：$email 发送主题：$subject</h1><font color=red>内容:$message</font>"; 
$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; //���ʼ���֧��htmlʱ������ʾ������ʡ�� 
$mail->WordWrap = 80; 

$mail->IsHTML(true); 
$mail->Send(); 
echo '发送成功'; 
} catch (phpmailerException $e) { 
echo "发送失败".$e->errorMessage(); 
}
header("Location:personal.html"); 
?>
<!--<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
  </head>
  <body>
    <form action="personal.html" method="post">
      <input  type="button" value="返回"/>
    </form>
  </body>
</html> -->