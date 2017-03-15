<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
<style>
 .box{
        width:300px;
        height:250px;
        box-shadow: 0 2px 6px #ccc;
        position: fixed;
        left:0;right:0;top:0;bottom: 0;
        margin:auto;
        text-align: center;
  }
  .message{font-size: 14px;}
</style>
<script src="../js/jquery.min.js"></script>
<script>
    $(function(){
       var reg=/^\w{5,10}$/;
       $("input[name='username']").keyup(function(){
       	var val=$(this).val();console.log(this)
       	if(reg.test(val)){
       		$.ajax({
           	 type:"post",
           	 url:"selectUser.php",
           	 data:{username:val},
           	 success:function(e){
           	 	if(e=="no"){
                   $(".message").eq(0).html("用户名存在").css("color","red");
                   $("input[name='username']").removeAttr("ok");
                   $(":submit").attr("disabled","disabled");
               }else if(e=="yes"){
                   $(".message").eq(0).html("用户名可用").css("color","green");
                   $("input[name='username']").attr("ok","ok");
                   if($("input[name='password']").attr("ok")=="ok"){
           	           $(":submit").removeAttr("disabled");
                   }
               }
           	 }
           })
       	}else{
           $(".message").eq(0).html("格式错误").css("color","red");
       		$(":submit").attr("disabled","disabled");
       	}
       })
       
    $("input[name='password']").keyup(function(){
    	var val=$(this).val();
        if(!reg.test(val)){
       		$(".message").eq(1).html("格式错误").css("color","red");
       		$("input[name='password']").removeAttr("ok");
       		$(":submit").attr("disabled","disabled");
       	}else{
           $(".message").eq(1).html("格式正确").css("color","green");
           $("input[name='password']").attr("ok","ok");
           if($("input[name='username']").attr("ok")=="ok"){
           	   $(":submit").removeAttr("disabled");
           }
        }
    })   
    })
</script>
<body>
	<div class="box">
		<h3>请注册</h3>
		<form action="addUser.php" method="post">
			用户名:<input type="text" name="username"><br>
				<span class="message"></span>
				<br>
                                  密&nbsp;码:<input type="password" name="password"><br>
                <span class="message"></span>
                <br>
          admin：<input type="text" /><br><br>
          <input type="submit" value="注册" disabled="disabled">
		</form><br>
		已经有用户名,请<a href="login.php">点击登录</a>
	</div>
</body>
</html>