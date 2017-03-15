function upload(url,inputObj,progressObj,imgObj){
	var inputObj=inputObj||{};
	if(inputObj.nodeName=="INPUT"){
		this.inputObj=inputObj;
	}else if(typeof inputObj=="string"){
		this.inputObj=document.querySelector(inputObj);
	}
	var progressObj=progressObj||{};
	if(progressObj.nodeName=="DIV"){
		this.progressObj=progressObj;
	}else if(typeof progressObj=="string"){
		this.progressObj=document.querySelector(progressObj);
	}
	var imgObj=imgObj||{};
	if(imgObj.nodeName=="IMG"){
		this.imgObj=imgObj;
	}else if(typeof imgObj=="string"){
		this.imgObj=document.querySelector(imgObj);
	}
	this.type=["jpeg","jpg","png","gif","zip","mp3"];
	this.size=1024*1024*30;
	this.uploadName="file";
	this.url=url;
    this.loadStart=function(){

    }
}
upload.prototype={
    up:function(callback){
    	if(this.url){
    		this.callback=callback;
    		this.getCon();
    	}else{
    		alert("文件路径不正确");
    	}       
    },
    getCon:function(){
        var that=this;
        this.inputObj.onchange=function(){
        	that.data=this.files[0];    //当内容发生改变的时候，读取到他里面的内容
        	var read=new FileReader();  //这是H5中的解析文件
        	read.onload=function(e){
        		that.imgObj.src=e.target.result;   //data:image/jpeg;base64,文件以base64的形式输出；
        	}
        	read.readAsDataURL(that.data);    //得到的数据以URL的形式输出     
        	if(that.check()){
        	    that.upfile();	
        	}
        }
    },
    check:function(){//监听的过程中，要看文件的后缀名，文件大小是否符合要求，如果符合要求的话，那么就算成功，否则提示相应的信息。
    	var that=this;
    	var data=that.data;
    	var size=data.size;
    	var extname=data.name.substr(data.name.lastIndexOf(".")+1).toLowerCase();//取文件的后缀名，要注意的是检测到点出现的位置，并且统一转换成小写
        if(size>that.size){
             alert("传输文件太大了");
             return false;
        }
        var flag=false;
        for(var i=0;i<that.type.length;i++){
           if(that.type[i]==extname){
           	  return true;
              break;
           }
        }
        if(!flag){
             alert("文件格式不相符");
             return false;
        }
        return true;
    },
    upfile:function(){
    	var that=this;
        var ajax=new XMLHttpRequest();//上传的时候，要定义一个XML对象
        var form=new FormData();  //H5实例化一个表单对象
        form.append(this.uploadName,this.data);
        ajax.onloadstart=function(){
            that.loadStart=function(){
            	
            };
        }
		ajax.upload.onprogress=function(e){  //上传的进程
			var total=e.total;
			var loaded=e.loaded;
			var scale=loaded/total*100;
			that.progressObj.style.width=scale+"%";
			that.progressObj.innerHTML=scale.toFixed(2)+"%";
		}
        ajax.onload=function(e){
            if(e){
               that.callback(ajax.response); 
            }   
        }
			ajax.open("post",that.url);
			ajax.send(form);
    }
}