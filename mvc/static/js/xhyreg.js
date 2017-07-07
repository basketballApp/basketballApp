var reg=/^[a-zA-Z]{5,8}$/;
var reg1=/^[a-zA-Z0-9]{5,8}$/;
$("input[type=text]").blur(function () {
    var value=$("input[type=text]").val();
    if(reg.test(value)){
        $(".nametrue").css("display","block");
        $(".namefalse").css("display",'none');
    }else{
        $(".namefalse").css("display",'block');
        $(".nametrue").css("display","none");
    }
})
$(".pass1").blur(function () {
    var value=$(".pass1").val();
    if(reg1.test(value)){
        $(".passtrue.true1").css("display","block");
        $(".passfalse.false1").css("display",'none');
    }else{
        $(".passfalse.false1").css("display",'block');
        $(".passtrue.true1").css("display","none");
    }
})
$(".pass2").blur(function () {
    var val1=$(".pass1").val();
    var val2=$(".pass2").val();
    if(val1==val2){
        $(".passtrue.true2").css("display","block");
        $(".passfalse.false2").css("display",'none');
    }else{
        $(".passtrue.true2").css("display","none");
        $(".passfalse.false2").css("display",'block');
    }
})
$(".login-btn").click(function () {
    $(".login-btn").css("border", "2px solid #fd7846");
    $(".login-btn>input").css("background", "#fd7846");
})