<?php
 include "../public/session.php";
 include "../public/db.php";
 $res=$db->query("select * from pos");
 ?>
 <form action="delpos.php" method="post">
 <?php
 while($row=$res->fetch_assoc()){
 ?>
	<?php echo $row["posname"];?><input type="radio" name="btn" value="<?php echo $row["posid"];?>"/>
 <?php	
 }
?>
<input type="submit" value="删除"/>
</form>