var bt=document.querySelectorAll(".mui-slider-item");
var btns=document.querySelectorAll(".btns");
var start=document.querySelector(".start");
Array.from(btns).forEach(function (btn,i) {
   bt[i].touchmove=function () {
      console.log(1);
      if(i==2){
         btns.style.display="none";
         start.style.display="block";
      }else{
         btns.style.display="block";
         start.style.display="none";
      }
   }
})
$(".start").addClass('animated tada');
