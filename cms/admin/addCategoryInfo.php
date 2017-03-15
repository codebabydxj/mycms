<?php
include "../public/session.php";
include "../public/db.php";
$cname=$_POST["cname"];
$pid=$_POST["pid"];
$sql="insert into category (cname,pid) value ('$cname','$pid')";
$db->query($sql);
if($db->affected_rows>0){
	$message="添加成功";
	$url="addCategory.php";
	include "message.html";
}else{
	$message="添加失败";
	$url="addCategory.php";
	include "message.html";
}
?>