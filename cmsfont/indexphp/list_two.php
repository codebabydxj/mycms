<?php
include "header.php";
?>
<link rel="stylesheet" href="../mycss/list_two.css">	
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
		  <li class="<?php if($cid==$row1['cid']){echo 'dxj_kidslist';}?>"><a href="list_two.php?id=<?php echo $row1['cid'];?>"><?php echo $row1["cname"];?></a></li>
		  <?php	 
		  	}
		  ?>
        </ul>
    </div>
</div>
<!--banner end-->
<!--新闻中心 start-->
<div class="dxj_xwzxbox">
	<ul class="dxj_xwzx">
		<?php
		  $cid=$_GET["id"];
          $res1=$db->query("select * from lists where cid=".$cid);
          while($row1=$res1->fetch_assoc()){
		?>
		<li>
			<a href="show.php?id=<?php echo $row1['lid']?>" class="dxj_title" target="_blank"><?php echo $row1['ltitle']?></a>
			<p>........</p>
			<div>
			<img src="../myimg/rili.png" alt="" class="dxj_xwzximg">
			<h6><?php echo $row1["ltime"];?></h6>
			</div>
		</li>
		<?php
          }			
 		?>
		<!--<ul class="dxj_btnbox">
			{$pages}		
		</ul>
		<script>
			$(".dxj_btnbox a").eq(0).remove();
			$(".dxj_btnbox a").eq(0).html("<");
			$(".dxj_btnbox a").eq(-1).html(">");
	    </script>-->
	</ul>
</div>
<!--新闻中心 end-->
<?php
include "footer.php";
?>
