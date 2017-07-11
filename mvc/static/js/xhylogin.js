var reg = /^[a-zA-Z]{5,8}$/;
var reg1 = /^[a-zA-Z0-9]{5,8}$/;
$("input[name=uname]").blur(function () {
    var val1 = $("input[name=uname]").val();
    if (reg.test(val1)) {
        $(".nametrue").css("display", "block");
        $(".namefalse").css("display", 'none');
    } else {
        $(".namefalse").css("display", 'block');
        $(".nametrue").css("display", "none");
    }
})
$("input[name=upass]").blur(function () {
    var val2 = $("input[name=upass]").val();
    if (reg1.test(val2)) {
        $(".passtrue").css("display", "block");
        $(".passfalse").css("display", 'none');
    } else {
        $(".passfalse").css("display", 'block');
        $(".passtrue").css("display", "none");
    }
})
$(".login-btn").click(function () {
    $(".login-btn").css("border", "2px solid #fd7846");
    $(".login-btn>input").css("background", "#fd7846");
})

