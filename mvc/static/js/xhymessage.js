var a=$("body").attr("a");
var f=$("body").attr("f");
var m=$("body").attr("m");
var uname=$("body").attr("uname");
var body = document.querySelector("body");
// var a = document.querySelector("a");
//      a.getAttribute('href')==$url;
var stop=setInterval(move, 1000);
var num = 3;
function move() {
    num--;
    if (num == 0) {
        clearInterval(stop);
        location.href="index.php?m="+m+"&f="+f+"&a="+a+"&uname="+uname+"";
    }
}
