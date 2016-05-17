<?php


header("Content-type:textml;charset=utf-8");
// var_dump($_GET);
   var_dump($_POST);
 
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
// var_dump($sql);
// $rs = mysqli_query($link, $sql);
// var_dump($rs);