var bt=document.querySelectorAll(".bannerbox li");
var box=document.querySelector(".box");
var bannerbox=document.querySelector(".bannerbox");
var btns=document.querySelectorAll(".btnbox li");
var btnbox=document.querySelector(".btnbox");
var start=document.querySelector(".start");
var sx;   //开始触摸的位置
var mx;   //当前拖拽的距离
//   var l=box.offsetWidth;  //容器长度
var l=375;   //临界值
var i=0;    //当前第几张
var dir=""; //触摸方向
var moveX=0;  //当前已移动的距离
var startTime;
bannerbox.addEventListener("touchstart",function(e){
   sx=e.changedTouches[0].clientX;
   this.style.transition="none";
   startTime=e.timeStamp;
})
bannerbox.addEventListener("touchmove",function(e){
   var cx=e.changedTouches[0].clientX;
   mx=cx-sx;
   dir=mx<0?"left":"right";
   bannerbox.style.transform=`translateX(${mx+moveX}px)`;
})
bannerbox.addEventListener("touchend",function(e){
   var now=e.timeStamp;
   var cha=now-startTime;
   if(Math.abs(mx)>1/3||cha<200){
      if(dir=="left"){
         i++;
         if(i>bt.length-1){
            i--;
         }
      }else if(dir=="right"){
         i--;
         if(i<0){
            i++;
         }
      }
   }
   moveX=-i*l;
   bannerbox.style.transition="all 1s";
   bannerbox.style.transform=`translateX(${moveX}px)`;
   if(i==btns.length-1){
      start.style.display="block";
      btnbox.style.display="none";
   }else{
      start.style.display="none";
      btnbox.style.display="block";
   }
   $(".btnbox li").filter(".active").removeClass("active").end().eq(i).addClass("active");
})


// var obj=btns[0];
// Array.from(bt).forEach(function (e,i) {
//    bannerbox.addEventListener("touchend",function () {
//       obj.style.background="#fff";
//       btns[i].style.background="#666";
//       obj=btns[i];
//    })
// })
$(".start").addClass('animated tada');
