<?php
session_start();  //session_start的作用是开启$_SESION,需要在$_SESION使用之前调用。PHP $_SESION 变量用于存储关于用户会话（session）的信息
if(!isset($_SESSION["is_login"])){  //$_SESSION["is_login"]判断有没有登录
	$message="请登录";
	$url="login.php";
	include "message.html";
	exit;
}
?>