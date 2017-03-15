<?php
class abc{
	function abc(){
		$this->str="";
	}
	function tree($pid,$flag,$db,$table,$currentid=null){
		if($currentid){
			$result=$db->query("select * from $table where cid=".$currentid);
			$row=$result->fetch_assoc();
			$father=$row["pid"];
		}
		$flag=$flag+1;
		$sql="select * from $table where pid=".$pid;
		$result=$db->query($sql);
		while($row=$result->fetch_assoc()){
             $cid=$row["cid"];
             $cname=$row["cname"];
             $str=str_repeat('-',$flag);
             if($currentid && $father==$row["cid"]){
                 $this->str.="<option value='$father' selected='selected'>{$str}{$cname}</option>";
             }else{
             	$this->str.="<option value='$cid'>{$str}{$cname}</option>";
                $this->tree($row["cid"], $flag, $db, $table,$currentid);	
             }	
		}
	}
	 function table($pid,$flag,$db,$table){
        $flag=$flag+1;
        $result=$db->query("select * from $table where pid=".$pid);
        while($row=$result->fetch_assoc()){
            $cid=$row["cid"];
            $cname=$row["cname"];
            $pid=$row["pid"];
            $str=str_repeat("--",$flag);
            $this->str.="<tr><td>$cid</td><td class='cons'>{$str}{$cname}</td><td>$pid</td>
				<td>
					<a href='delete.php?id=$cid'>删除</a>
					<a href='edit.php?id=$cid'>修改</a>
				</td></tr>";
            $this->table($row["cid"],$flag,$db,$table);
        }
    }
    function del($id,$db,$table){
    	$sql="select * from $table where pid=".$id;
    	$result=$db->query($sql);
    	if($result->fetch_assoc()){
    	        $message="有子类，请先删除子类";
    			$url="guanli.php";
    			include "message.html";
    	}else{
    		$sql="delete from $table where cid=".$id;
    		$db->query($sql);
    		if($db->affected_rows>0){
    			$message="删除分类成功";
    			$url="guanli.php";
    			include "message.html";
    		}
    	}
    }
    function con($pid,$flag,$db,$table,$currentid=null){
        $flag=$flag+1;
        $sql="select * from $table where pid=".$pid;
        $result=$db->query($sql);
        while($row=$result->fetch_assoc()){
            $cid=$row["cid"];
            $str=str_repeat("-",$flag);
            if($currentid==$row["cid"]){
                $this->str.="<option value='$cid' selected='selected'>{$str}{$row["cname"]}</option>";
            }else{
                $this->str.="<option value='$cid'>{$str}{$row["cname"]}</option>";
                $this->con($row["cid"],$flag,$db,$table,$currentid);
            }
        }
        return $this->str;
    }
}
?>