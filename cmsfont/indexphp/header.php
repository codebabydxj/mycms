<?php
	$db=new mysqli("localhost","root","","cms");
	$db->query("set names utf8");	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>北京车网互联科技有限公司</title>
	<link rel="shortcut icon" href="../myimg/icon1.png">
	<link rel="stylesheet" href="../mycss/public.css">
	<link rel="stylesheet" href="../mycss/header.css">
	<script src="../myjs/jquery.min.js"></script>
	<script src="../myjs/js.js"></script>
</head>
<body>
<!-- 右侧定位导航 start-->
<div class="dxj_younav">
    <div class="topt">
        <img src="../myimg/icon_03.gif" alt="" class="dxj_icon">
        <img src="../myimg/icon_06.gif" alt="" class="dxj_icon1">
    </div>
    <img class="dxj_top" src="../myimg/icon_08.gif" alt="" >
</div>
<img src="../myimg/icon_01_03.png" alt="" class="dxj_weixin">
<img src="../myimg/icon_03_03.png" alt="" class="dxj_xinlang">
<!-- 右侧定位导航 end-->
<!--顶部导航 start-->
<div class="dxj_topnavbox">
   <div class="dxj_topnav">
       <div class="dxj_logo"><img src="../myimg/logo.png" alt=""></div>
       <ul class="dxj_centernav">
          <li>
            <a href="index.php" class="dxj_letter">首页</a>
            <div class="dxj_hengxian"></div>
          </li>
          <li class="dxj_xialakuang">
            <a href="" class="dxj_letter">产品</a>
            <ul class="dxj_xiala">
               <li><span><i>个人产品：</i></span></li>
               <li><a href="http://autofun.carsmart.cn/main.html">乐乘</a></li>
               <li><a href="http://zc.carsmart.cn/">智乘(即将发布)</a></li>
               <li><a href="http://tripfun.carsmart.cn/" >纷乘</a></li>
               <li><span><i>行业应用：</i></span></li>
               <li><a href="http://4s.carsmart.cn/">车店通</a></li>
               <li><span><i>硬件产品：</i></span></li>
               <li><a href="http://autofun.carsmart.cn/box.html" >乐乘盒子</a></li>
               <li><a href="http://tripfun.carsmart.cn/" >纷乘行车记录仪</a></li>
            </ul>
          </li>
          <?php
            $i=0;
            $result=$db->query("select * from category where pid=0");
            while($row=$result->fetch_assoc()){
               $i++;		
          ?>
          <?php
            if($i==3){	
          ?>
             <li><a href="http://hr.carsmart.cn/" class="dxj_rczp"><?php echo $row["cname"];?></a></li>
          <?php
          }else{
          ?>
          <li class="dxj_xialakuang">
            <span class="padd"><?php echo $row["cname"]?></span>
            <ul class="dxj_xiala">
               <?php
               	$result1=$db->query("select * from category where pid=".$row["cid"]);
                while($row1=$result1->fetch_assoc()){    
               ?>
               <?php if($row["cid"]==21){ ?>
               <li><a href="list_two.php?id=<?php echo $row1['cid'];?>"><?php echo $row1["cname"]?></a></li>
               <?php
               }else{
               ?>
                 <li><a href="list_one.php?id=<?php echo $row1['cid'];?>"><?php echo $row1["cname"]?></a></li>
               <?php 
               }
               }
               ?>
            </ul>
          </li>
         <?php
           } 
           }
         ?>
       </ul>
       <div class="dxj_rightnav">网站导航<s class="sanjiao"></s></div>
       <ul class="dxj_wzdh">
	        <li><a href="">车网互联官网</a></li>
	        <li><a href="http://autofun.carsmart.cn/main.html">乐乘</a></li>
	        <li><a href="http://zc.carsmart.cn/">智乘(即将发布)</a></li>
	        <li><a href="http://tripfun.carsmart.cn/">纷乘</a></li>
	        <li><a href="http://4s.carsmart.cn/">车店通</a></li>
       </ul>
   </div>
</div>
<!--顶部导航 end-->
