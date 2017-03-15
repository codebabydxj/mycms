<?php
include "../public/session.php";
include "../public/db.php";
$cid=$_POST["pid"];
$ltitle=$_POST["ltitle"];
$lcon=$_POST["lcon"];
$username=$_SESSION["username"];
$imgurl=$_POST["imgurl"];
@$posid=$_POST["btn"];
$sql="insert into lists (cid,ltitle,lcon,username,imgurl,posid) values ('$cid','$ltitle','$lcon','$username','$imgurl','$posid')";
$db->query($sql);
if($db->affected_rows>0){
	$message="添加内容成功";
	$url="addCon.php";
	include "message.html";
	exit;
}else{
	$message="添加内容失败";
	$url="addCon.php";
	include "message.html";
	exit;
}
?>