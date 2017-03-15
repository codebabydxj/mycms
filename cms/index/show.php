<?php
include "header.php";
$id=$_GET["id"];
$sql="select * from lists where lid=".$id;
$result=$db->query($sql);
$row=$result->fetch_assoc();
?>
<style>
    p{
        padding:0;
        margin:0;
    }
    .content{
        min-height:400px;
        width: 1000px;
        padding-top:20px;
        margin:0 auto;
        background: #ccc;
    }
    .title{
        line-height:50px;
        text-align:center;
        font-weight:500;
        font-size:20px;
        color:#333;
        margin:0;
    }
    .info{
        line-height:20px;
        text-align:center;
        border-bottom:1px solid #ddd;
        padding-bottom:10px;
    }
    .time,.username{
        color:#555;
        padding:10px;
    }
    .lcon{
        padding:15px;
        text-align: center;
    }
</style>

<div class="content">
    <h3 class="title"><?php echo $row["ltitle"]?></h3>
    <p class="info">
        <span class="time"><?php echo $row["ltime"];?></span>
        <span class="username"><?php echo $row["username"];?></span>
    </p>
    <div class="lcon">
        <?php echo $row["lcon"]?>
    </div>
</div>

</body>
</html>