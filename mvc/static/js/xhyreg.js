
$(".login-btn").click(function () {
    $(".login-btn").css("border", "2px solid #fd7846");
    $(".login-btn>input").css("background", "#fd7846");
})

$("#login-form").validate({
    rules:{
        uname:{
            required:true,
            minlength:5,
            maxlength:8
        },
        upass:{
            required:true,
            minlength:5,
            maxlength:8,
        },
        upass1:{
            required:true,
            minlength:5,
            maxlength:8,
            equalTo:$("#password")
        }
    },
    messages:{
        uname:{
            required:"*必填",
            minlength:"*不能少于5位",
            maxlength:"*不能超过8位",
        },
        upass:{
            required:"*必填",
            minlength:"*不能少于5位",
            maxlength:"*不能超过8位",
        },
        upass1:{
            required:"*必填",
            minlength:"*不能少于5位",
            maxlength:"*不能超过8位",
            equalTo:"*两次密码必须一致"
        }
    }
})

