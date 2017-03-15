<?php
    include "../public/session.php";
    date_default_timezone_set("Asia/Shanghai"); //设置日期语言
    $fileInfo=$_FILES["file"];   
    if(is_uploaded_file($fileInfo["tmp_name"])){   
        if(!file_exists("../upload")){
            mkdir("../upload",0077,true);
        }
        $dirname=date("y-m-d");
        if(!file_exists("../upload/".$dirname)){
            mkdir("../upload/".$dirname,0077,true);
        }
        $filename=time().$fileInfo["name"];    //建立的文件的名字
        $path="../upload/".$dirname."/".$filename;  //建立的日期的文件
        move_uploaded_file($fileInfo["tmp_name"],$path);   //添加进去
        echo "http://localhost/cms/upload/".$dirname."/".$filename;  //输出文件所在的路径
    }
?>