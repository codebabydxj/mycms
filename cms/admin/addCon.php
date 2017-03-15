<?php
include "../public/session.php";
include "../public/db.php";
include "../public/functions.php";
$tree=new abc();
$tree->tree(0,1,$db,"category");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
	<script src="../js/upload.js"></script>
</head>
<style>
.box{width:300px;height:200px;border:1px solid #000;position: relative;margin-top:10px;overflow: hidden;}
.progress{width: 0%;height: 15px;background: red;position: absolute;left: 0;bottom:0;text-align: center;}
.box .img{width:100%;height: 100%;}
</style>
<body>
	<form action="addConInfo.php" method="post">
		上级分类：
	    <select name="pid">
	    	<option value="0">一级分类</option>
	    	<?php echo $tree->str; ?>;
	    </select><br><br>
	          标题：
	    <input type="text" name="ltitle" value=""/><br><br>
	          内容：<br>
	    <textarea name="lcon" rows="10" cols="30" ></textarea><br><br>      
	    <input type="file" class="con" name="file" multiple="multiple"/><br>
		<div class="box">
			<div class="img">
				<img src="" alt="" />
			</div>
			<div class="progress"></div>
		</div><br><br>
	    <input type="hidden" name="imgurl" id="imgurl" value="">
<?php
	$res=$db->query("select * from pos");
	while($row=$res->fetch_assoc()){
?>
	<?php echo $row["posname"];?><input type="radio" name="btn" value="<?php echo $row["posid"];?>"/>
<?php		
	}
?>
	   <br><br> <input type="submit" value="提交" class="tijiao" /><br><br>
	</form>	
</body>
<script>
	var imgurl=document.querySelector("#imgurl");
  	var sumbit=document.querySelector(".tijiao");
    var obj=new upload("upload.php",".con",".progress",".img img");
    obj.up(function (e) {
        obj.loadStart=function(){
        	imgurl.setAttribute("value",e);
//      	sumbit.removeAttribute("disabled");
        }
        obj.loadStart();
    });
</script>
</html>

