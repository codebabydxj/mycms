<?php
 include "../public/session.php";
 include "../public/db.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
<body>
	<form action="possql.php" method="post">
		添加推荐位:<input type="text" name="pos"/>
		<input type="submit"/>
	</form>
</body>
</html>
