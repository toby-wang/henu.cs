$(document).ready(function(){
	       //图片定时器轮番
			var index=0;
            var len=$(".picture ul li").length-1;
            var time1=setInterval(function(){
                showImg(index);
                if(index==len){
                    index=0;
                }else {
                    index++;
                }
            },2000);
            //hover()，鼠标移上去和鼠标移开，===mouseover()+mouseout()
            $(".button span").hover(function(){
                clearInterval(time1);
                index=$(".button span").index(this);
                showImg(index);

            },function(){
                time1=setInterval(function(){
                    showImg(index);
                    if(index==len){
                        index=0;
                    }else {
                        index++;
                    }
                },2000);
            });

            function showImg(index){
                $(".button span").eq(index).addClass("one")
                        .siblings().removeClass("one");
                $(".picture ul li").eq(index).fadeIn()
                       .siblings().hide();
            }
			
			
			//独立的选项卡
			$(".nav ul li").hover(function(){
			$(this).children("ul").slideToggle();
			});
			
			
 
	
	
});