<?php
include "../public/db.php";
include "../public/functions.php";
$cid=$_GET["id"];
$del=new abc();
$del->del($cid,$db,"category");
?>