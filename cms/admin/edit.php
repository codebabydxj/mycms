<?php
include "../public/session.php";
include "../public/db.php";
include "../public/functions.php";
$currentid=$_GET["id"]; //获取当前id
$tree=new abc();
$tree->tree(0,1,$db,"category",$currentid);
$sql="select * from category where cid=".$currentid;
$result=$db->query($sql);
$row=$result->fetch_assoc();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
<body>
	<form action="editInfo.php?id=<?php echo $row['cid'] ?>" method="post">
		上级分类：
	    <select name="pid">
	    	<option value="0">一级分类</option>
	    	<?php echo $tree->str; ?>;
	    </select><br><br>
	          分类名称：
	    <input type="text" name="cname" value="<?php echo $row["cname"]?>"/><br><br>
	    <input type="submit" value="修改"/>
	</form>	
</body>
</html>

