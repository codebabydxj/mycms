<?php	
session_start();
if(!isset($_SESSION["is_login"])){   //用SESSION判断并保持用户登录状态。 解决http无状态协议的一种手段
	$message="请登录";
	$url="login.php";
	include "message.html";
	exit;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
<style>
	*{
        box-sizing: border-box;
    }
    html,body{
        width:100%;height:100%;
        padding:0;margin: 0;
        overflow: hidden;
    }
    .header{
        width:100%;height:15%;
        border-bottom: 2px solid #000;
        text-align: center;
        background:rgba(64,232,64,0.7);
        position: relative;
    }
    .header h1{line-height: 90px;margin: 0;}
    .header a{display:block;position: absolute;right:20px;bottom:20px;font-size: 14px;color:#000;text-decoration: none;}
    .main{
        width:100%;height:85%;
    }
    .left{
        float:left;width:20%;height:100%;
        border-right:2px solid #000;
        background:rgba(121,119,216,0.8);
    }
    .right{
        float:left;width:80%;height:100%;
        background: #ccc;
    }
    iframe{
        width:100%;height:100%;
    }
    .opt{
    	line-height: 30px;
        cursor: move;
    }
</style>
<script src="../js/jquery.min.js"></script>
<script>
    $(function(){
        $(".opt").click(function(){
            $(this).find(".son").toggle(100);
        })
        $(".son>li>a").click(function(e){
        	e.stopPropagation();
        })
    })
</script>
<body>
<div class="header">
	<h1><?php echo $_SESSION["username"] ?> 欢迎来到内容管理系统</h1><a href="logOut.php">退出登录</a>   
</div>	
<div class="main">
	<div class="left">
		<ul class="menu">
			<li class="opt">用户管理
				<ul class="son">
					<li><a href="" target="right">添加用户</a></li>
			        <li><a href="" target="right">管理用户</a></li>
			    </ul> 
			</li>
			<li class="opt">分类管理
			    <ul class="son">
					<li><a href="addCategory.php" target="right">添加分类</a></li>
			        <li><a href="guanli.php" target="right">管理分类</a></li>
			    </ul>
			</li>
			<li class="opt">内容管理
			    <ul class="son">
					<li><a href="addCon.php" target="right">添加内容</a></li>
			        <li><a href="guanliCon.php" target="right">管理内容</a></li>
			    </ul>
			</li>
			<li class="opt">推荐位管理
			    <ul class="son">
					<li><a href="tjtuijian.php" target="right">添加推荐位</a></li>
			        <li><a href="gltuijian.php" target="right">管理推荐位</a></li>
			    </ul>
			</li>
		</ul>
	</div>
	<div class="right">
		<iframe src="" frameborder="0" name="right"></iframe>
	</div>
</div>	
</body>
</html>