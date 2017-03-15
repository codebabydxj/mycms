<?php
include "../public/session.php";
include "../public/db.php";
$lid=$_GET["id"];
$cid=$_POST["pid"];
$ltitle=$_POST["ltitle"];
$lcon=$_POST["lcon"];
$imgurl=$_POST["imgurl"];
@$posid=$_POST["btn"];
$sql="update lists set ltitle='$ltitle',lcon='$lcon',cid='$cid',imgurl='$imgurl',posid='$posid' where lid=".$lid;
$db->query($sql);
if($db->affected_rows>0){
    $message="修改成功";
    $url="guanliCon.php";
    include "message.html";
    exit;
}else{
    $message="修改失败";
    $url="editCon.php";
    include "message.html";
    exit;
}
?>