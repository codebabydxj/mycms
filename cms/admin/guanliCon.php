<?php
include "../public/session.php";
include "../public/db.php";
include  "../public/functions.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
<style>
table{width: 1050px;margin:0 auto;border-collapse: collapse;border:1px solid #000;}
tr{width:100%;height: 30px;border:1px solid #000;}
td{width: 15%;height: 30px;border:1px solid #000;text-align: center;}
td.cons{text-align:left;}
a{text-decoration: none;color:#000};

</style>
<body>
	<table>
		<tr>
			<th>lid</th>
			<th>标题</th>
			<th>内容</th>
			<th>cid</th>
			<th>时间</th>
			<th>作者</th>
			<th>操作</th>
		</tr>
		<?php
		    $result=$db->query("select * from lists");
		    while($row=$result->fetch_assoc()){
		?>
		    <tr>
		    	<td><?php echo $row["lid"] ?></td>
		    	<td><?php echo $row["ltitle"] ?></td>
		    	<td><?php echo $row["lcon"] ?></td>
		    	<td><?php echo $row["cid"] ?></td>
		    	<td><?php echo $row["ltime"] ?></td>
		    	<td><?php echo $row["username"] ?></td>
		    	<td>
		    		<a href="delCon.php?id=<?php echo $row["lid"] ?>">删除</a>
		    		<a href="editCon.php?id=<?php echo $row["lid"] ?>&cid=<?php echo $row["cid"] ?>">修改</a>
		    	</td>
		    </tr>
		<?php } ?>
	</table>
</body>
</html>

