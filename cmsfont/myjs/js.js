$(document).ready(function(){
  //微信、新浪 移入移出
  $(".dxj_icon").hover(function(){
     $(".dxj_xinlang").css("display","block");
  },function(){
     $(".dxj_xinlang").css("display","none");
  })
  $(".dxj_icon1").hover(function(){
     $(".dxj_weixin").css("display","block");
  },function(){
     $(".dxj_weixin").css("display","none");
  })
  //点击回到顶部
  jQuery.extend({
    returnTop:function(obj,time){
       obj.on("click",function(){
          var top=$(document).scrollTop();
          var objs={top:top};
          $(objs).animate({top:0},{duration:time,step:function(){
              $(document).scrollTop(objs.top);
          }
        })
       })
    }
  })
   $.returnTop($(".dxj_top"))
//下拉
$(".dxj_xialakuang").each(function(index,val){
  $(".dxj_xialakuang").eq(index).hover(function(){
     $(".dxj_xiala").eq(index).css("display","block");
  },function(){
     $(".dxj_xiala").eq(index).css("display","none");
  })
})
//banner轮播
function banner(){
  $(".dxj_banner img").each(function(index,val){
    var cw=document.documentElement.clientWidth;
    $(".dxj_banner img").css({width:cw+"px"});
  })
  var now=0;
  var next=0;
  var flag=true;
  var width=$(".dxj_banner img").width();
  function move(type){
      var type=type||"rr";
      if(type=="ll"){
           next--;
          if(next<0){
              next=$("ul.dxj_banner li").length-1;
          }
          $("ul.dxj_banner li").eq(next).css({left:-width+"px"});
          $("ul.dxj_banner li").eq(now).animate({left:width},500);
          $("ul.dxj_banner li").eq(next).animate({left:0},500,function(){flag=true});
      }else if(type=="rr"){
           next++;
          if(next>=$("ul.dxj_banner li").length){
              next=0;
          } 
          $("ul.dxj_banner li").eq(next).css({left:width+"px"});
          $("ul.dxj_banner li").eq(now).animate({left:-width},500);
          $("ul.dxj_banner li").eq(next).animate({left:0},500,function(){flag=true});
      }
          $("ul.dxj_circle li").eq(now).removeClass("dxj_first");
          $("ul.dxj_circle li").eq(next).addClass("dxj_first");
          now=next;
  }
  var t=setInterval(move,4000);
  $(".dxj_bannerbox").hover(function(){
      clearInterval(t);
  },function(){
      t=setInterval(move,4000);
  })
  $(".dxj_leftbtn").click(function(){
    if(flag){
       flag=false;
       move("ll");
    }     
  })
  $(".dxj_rightbtn").click(function(){
    if(flag){
       flag=false;
       move("rr");
    }
  })
  //小按钮
  $("ul.dxj_circle li").click(function(){
      next=$(this).index();
      if(flag){
        flag=false;
          if(now>next){
            $("ul.dxj_banner li").eq(next).css({left:width+"px"});
            $("ul.dxj_banner li").eq(now).animate({left:-width},500);
            $("ul.dxj_banner li").eq(next).animate({left:0},500,function(){flag=true});
          }else if(now<next){
            $("ul.dxj_banner li").eq(next).css({left:-width+"px"});
            $("ul.dxj_banner li").eq(now).animate({left:width},500);
            $("ul.dxj_banner li").eq(next).animate({left:0},500,function(){flag=true});
          }
          $("ul.dxj_circle li").eq(now).removeClass("dxj_first");
          $("ul.dxj_circle li").eq(next).addClass("dxj_first");
          now=next;
      }
  })
}
banner();
//网站导航
document.body.onclick=function(e){
    var e=e||window.event;
    var obj=e.target||e.srcElement;
    if(obj.className!=="dxj_rightnav"){
        $(".dxj_wzdh").css("display","none");
    }
}
$(".dxj_rightnav").on("click",function(){
     $(".dxj_wzdh").toggle(); 
})
//首页中间
function move(){
$(window).scroll(function(){
   var top=$(window).scrollTop();
   if(top>200){
   	  arr=[
   	    $(".dxj_cwhlimg>li").eq(0).animate({opacity:1,marginTop:0},500),
   	    $(".dxj_cwhlimg>li").eq(1).animate({opacity:1,marginTop:0},580),
   	    $(".dxj_cwhlimg>li").eq(2).animate({opacity:1,marginTop:0},620),
   	    $(".dxj_cwhlimg>li").eq(3).animate({opacity:1,marginTop:0},650)
   	  ]
   	 $(".dxj_top").show();
/*   	  function moves(){
   	  	 $(".dxj_cwhlimg>li").dequeue();
   	  }
   	     $(".dxj_cwhlimg>li").queue(arr);
   	  moves();*/
   }else{
     	$(".dxj_top").hide();
   }
})
}
move();
})