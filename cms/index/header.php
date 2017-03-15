<?php
include "../public/db.php";
include "../public/session.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    ul,li{
        margin:0;
        padding:0;
        list-style: none;
    }
    a{
        text-decoration:none;
    }
    .header{
        height:200px;
        width:1000px;
        margin:0 auto;
        background:#00cc00;
        text-align: center;
        line-height: 200px;
    }
    .menu{
        height:50px;
        width:1000px;
        margin:0 auto;
        background:#0066cc;
    }
    .menu .select{
        background:#99cccc;
    }
    .menu .opt{
        height:100%;
        line-height:30px;
        position:relative;
        float:left;
    }
    .menu .opt>a{
        display:block;
        height:100%;
        padding:10px 30px;
        color:#000;
    }
    .menu .erji{
        height:100px;
        width:100px;
        box-shadow: 0 0px 6px #666;
        position:absolute;
        top:47px;
        left:10px;
        display:none;
        background:#eee;
    }
    .menu .sopt{
        line-height:26px;
        text-align:center;
    }
    .menu .sopt>a{
        color:#000;
    }
</style>
<script src="../js/jquery.min.js"></script>
<script>
    $(function(){
        $(".opt").hover(function(){
            $(this).find(".erji").slideDown(200);
        },function(){
        	$(this).find(".erji").stop(true);
            $(this).find(".erji").slideUp(200);         
        })
    })
</script>
<body>
<div class="header">
    <h1>
        <?php echo $_SESSION["username"]; ?>的奇妙之旅
    </h1>
</div>

<ul class="menu">
    <li class="opt select"><a href="index.php">首页</a></li>

    <?php
    $result=$db->query("select * from category where pid=0");
    while($row=$result->fetch_assoc()){
        ?>
        <li class="opt">
            <a href="category.php?id=<?php echo $row['cid']; ?>"><?php echo $row["cname"]; ?></a>
            <ul class="erji">
                <?php
	                $sql1="select * from category where pid=".$row["cid"];
	                $result1=$db->query($sql1);
	                while($row1=$result1->fetch_assoc()){
                ?>
                    <li class="sopt">
                        <a href="category.php?id=<?php echo $row1['cid'];?>"><?php echo $row1["cname"]?></a>
                    </li>
                <?php
                    }
                ?>
            </ul>
        </li>
        <?php
    }
    ?>
</ul>
