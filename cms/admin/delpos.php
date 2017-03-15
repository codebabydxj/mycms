<?php
 include "../public/session.php";
 include "../public/db.php";
	$id=$_POST["btn"];
	$db->query("delete from pos where posid=".$id);
	if($db->affected_rows>0){
 		$message="删除推荐位成功";
 		$url="gltuijian.php";
 		include "message.html";		
	}
?>