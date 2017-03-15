<?php
include "../public/session.php";
include "../public/db.php";
$lid=$_GET["id"];
$sql="delete from lists where lid=".$lid;
$db->query($sql);
if($db->affected_rows>0){
	$message="删除成功";
	$url="guanliCon.php";
	include "message.html";
}else{
	$message="删除失败";
	$url="guanliCon.php";
	include "message.html";
}
?>