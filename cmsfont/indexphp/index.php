<?php
include "header.php";	
?>
<link rel="stylesheet" href="../mycss/index.css">
<!--banner start-->
<div class="dxj_bannerbox">
  <ul class="dxj_banner">
  	<li class="dxj_first"><a href=""><img src="../myimg/edmbanner.png" alt=""></a></li>
  	<li><a href="http://autofun.carsmart.cn/main.html"><img src="../myimg/banner-01.jpg" alt=""></a></li>
  	<li><a href="http://4s.carsmart.cn/"><img src="../myimg/banner-02.jpg" alt=""></a></li>
  	<li><a href="http://www.carsmart.cn/edmweb/index.html"><img src="../myimg/chediantong.jpg" alt=""></a></li>
  </ul>
  <div class="dxj_leftbtn">&lt;</div>
  <div class="dxj_rightbtn">&gt;</div>
  <ul class="dxj_circle">
    <li class="dxj_first"></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
</div>
<!--banner end-->
<!--车网互联 start-->
<div class="dxj_cwhlbox">
	<h2>车网互联</h2>
	<h5>以移动互联网技术创造用户新体验</h5>
	<h6>致力于成为车网产业先行者，打造智能交通新秩序，为推动移动信息产业与智能城市的发展而不懈努力！</h6>
    <div class="dxj_cwhlbtn">
        <a href="list_one.php?id=<?php echo $cid=30;?>">CARSMART</a>
    </div>
    <ul class="dxj_cwhlimg">
        <li>
            <img src="../myimg/icon01.png" alt="">
            <span>车辆软硬件</span>
        </li>
        <li>
            <img src="../myimg/icon02.png" alt="">
            <span>移动终端软件</span>
        </li>
        <li>
            <img src="../myimg/icon03.png" alt="">
            <span>互联网应用</span>
        </li>
        <li class="dxj_cwhllast">
            <img src="../myimg/icon04.png" alt="">
            <span>行业应用平台</span>
        </li>
    </ul>
</div>
<!--车网互联 end-->
<!-- 新闻中心 star -->
<div class="dxj_newbox">
    <div class="dxj_new">
    	<h2>新闻中心</h2>
        <h4>与您分享车网互联的最新动态</h4>
           <?php
             $result=$db->query("select * from category where pid=21");
             while($row=$result->fetch_assoc()){
           ?>
    	   <div>
             <h3><a href="list_two.php?id=<?php echo $row['cid'];?>"><?php echo $row["cname"];?></a></h3>
               <ul class="dxj_newwords">
               	    <?php
		              $result1=$db->query("select * from lists where cid=".$row["cid"]);
                      while($row1=$result1->fetch_assoc()){
		            ?>
                    <li style="list-style-image: url(../myimg/li.gif)">
	                <a href="show.php?id=<?php echo $row1['cid'];?>"><?php echo $row1["ltitle"];?></a></li>
	               <?php
		              }
		           ?>
	               <a href="list_two.php?id=<?php echo $row['cid'];?>" class="dxj_newmore">更多</a>
                </ul>
           </div>
           <?php
            }
           ?>
    </div>
</div>
<!-- 新闻中心 end -->
<!-- 招投标公告 start -->
<div class="dxj_toubiaobox">
    <h2>招投标公告</h2>
    <h4>为了美好未来，我们一直在努力！</h4>
    <div class="dxj_tongzhi">
        <h3>公告通知</h3>
        <img src="../myimg/zbimg.png" alt="">
    </div>
</div>
<!-- 招投标公告 end -->
<?php
include "footer.php";
?>
