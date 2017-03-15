<?php
include "../public/session.php";
include "../public/db.php";
include "../public/functions.php";
$table=new abc();
$table->table(0,1,$db,"category");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
<style>
table{width: 800px;margin:0 auto;border-collapse: collapse;border:1px solid #000;}
tr{width:100%;height: 30px;border:1px solid #000;}
td{width: 20%;height: 30px;border:1px solid #000;text-align: center;}
td.cons{text-align:left;}
a{text-decoration: none;color:#000};
</style>
<body>
	<table>
		<tr>
			<th>id</th>
			<th>内容</th>
			<th>pid</th>
			<th>操作</th>
		</tr>
		<?php echo $table->str; ?>;
	</table>
</body>
</html>

