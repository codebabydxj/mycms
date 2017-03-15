<?php
include "../public/db.php";
$sql="select username from user";
$result=$db->query($sql);
$username=$_POST["username"];
while($row=$result->fetch_assoc()){
	if($username==$row["username"]){
		echo "no";
		exit;
	}
}
echo "yes";
?>