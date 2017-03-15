<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
<style>
 .box{
        width:300px;
        height:200px;
        box-shadow: 0 2px 6px #ccc;
        position: fixed;
        left:0;right:0;top:0;bottom: 0;
        margin:auto;
        text-align: center;
  }
</style>
<body>
	<div class="box">
		<h3>请登录</h3>
		<form action="dl.php" method="post">
			用户名:<input type="text" name="username" autocomplete="off"><br><br>
                                  密&nbsp;码:<input type="password" name="password"><br><br>
          <input type="submit" value="登陆">
		</form><br>
		没有用户名,请<a href="reg.php">点击注册</a>
	</div>
</body>
</html>