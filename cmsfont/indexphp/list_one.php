<?php
include "header.php";
?>
<link rel="stylesheet" href="../mycss/list_one.css">	
<!--banner start-->
<div class="dxj_bannerbox">
	<div class="dxj_banner">
        <?php
           $cid=$_GET["id"];
           $result=$db->query("select * from category where cid=".$cid);
           $row=$result->fetch_assoc();
           $result1=$db->query("select * from lists where cid=".$row["pid"]);
           $row1=$result1->fetch_assoc();
        ?>
		<img src="<?php echo $row1["imgurl"]?>" alt="">
		<h1><?php echo $row["cname"]?></h1>
		<ul class="dxj_kids">
		  <?php 
		    $cid=$_GET["id"];
            $result=$db->query("select * from category where cid=".$cid);
            $row=$result->fetch_assoc();
			$res4=$db->query("select * from category where pid=".$row["pid"]);
		  	while($row1=$res4->fetch_assoc()){
		  ?>
		  <li class="<?php if($cid==$row1['cid']){echo 'dxj_kidslist';}?>"><a href="list_one.php?id=<?php echo $row1['cid'];?>"><?php echo $row1["cname"];?></a></li>
		  <?php	 
		  	}
		  ?>
        </ul>
    </div>
</div>
<!--banner end-->
<!-- center start-->
<div class="dxj_center">
	 <?php    
	   $cid=$_GET["id"];
       $res1=$db->query("select * from lists where cid=".$cid); 	
       $row1=$res1->fetch_assoc();   
	   echo $row1["lcon"];	
	 ?>
</div>
<!-- center end-->
<?php
include "footer.php";
?>
