<?php
include "../public/session.php";
include "../public/db.php";
include "../public/functions.php";
$cname=$_POST["cname"];
$pid=$_POST["pid"];
$cid=$_GET["id"];
$sql="update category set cname='$cname',pid='$pid' where cid=".$cid;
$db->query($sql);
if($db->affected_rows>0){
	$message="修改成功";
	$url="guanli.php";
	include "message.html";
}else{
	$message="修改失败";
	$url="guanli.php";
	include "message.html";
}
?>