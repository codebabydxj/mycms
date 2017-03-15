<?php
include "header.php";
?>
<link rel="stylesheet" href="../mycss/show.css">
<!-- center start-->
<div class="dxj_center">	 
   <?php    
	   $cid=$_GET["id"];
       $res1=$db->query("select * from lists where lid=".$cid); 	
       $row1=$res1->fetch_assoc();   
       echo $row1["lcon"];	 
       /*$res2=$db->query("select * from category where cid=".$row1["cid"]); 	
       $row2=$res2->fetch_assoc();  
	   echo $row2["cname"];*/	
	  
   ?>
</div>
<script>
   	 $($(".dxj_center a").eq(1).get(0).nextSibling).remove();
   	 $(".dxj_center a").eq(2).remove();
</script>
<!-- center end-->
<?php
include "footer.php";
?>