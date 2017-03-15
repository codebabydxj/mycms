<?php
	include "../public/session.php";
 	include "../public/db.php";
 	$name=$_POST["pos"];
 	$db->query("insert into pos (posname) values ('$name')");
 	if($db->affected_rows>0){
 		$message="添加推荐位成功";
 		$url="tjtuijian.php";
 		include "message.html";
 	}
?>