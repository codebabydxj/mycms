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
</head>
<body>
	<form action="addCategoryInfo.php" method="post">
		上级分类：
	    <select name="pid">
	    	<option value="0">一级分类</option>
	    	<?php echo $tree->str; ?>;
	    </select><br><br>
	          分类名称：
	    <input type="text" name="cname" /><br><br>
	    <input type="submit"/>
	</form>	
</body>
</html>

