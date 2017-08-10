$(function () {
    //点赞

    $(".par-main").delegate(".fzan>.zimg","click",function () {
        alert(1)
        var cid=$(this).parent(".div").attr("cid");
        var belove=parseInt($(this).siblings("span").html());
        var that=$(this);
        $.ajax({
            url:"index.php?m=index&f=index&a=courtzan",
            type:"post",
            // dataType:"json",
            data:{
               cid:cid,belove:belove
            },
            success:function (data) {
                console.log(data)
                if(data=="ok"){
                    that.siblings("span").html(belove+1)
                    console.log("关注成功")
                }
                if(data=="ok1"){
                    that.siblings("span").html(belove-1)
                    console.log("取消关注成功")
                }
            }
        })
    })
    $(".comment").delegate(".scan>.wimg","click",function () {
        var cid=$(this).parent(".div").attr("cid");
        var cwatch=parseInt($(this).siblings("span").html());
        var that=$(this);
        $.ajax({
            url:"index.php?m=index&f=index&a=courtwatch",
            type:"post",
            // dataType:"json",
            data:{
                cid:cid,cwatch:cwatch
            },
            success:function (data) {
                console.log(data)
                if(data=="ok"){
                    that.siblings("span").html(cwatch+1)
                    console.log("收藏成功")
                }
                if(data=="ok1"){
                    that.siblings("span").html(cwatch-1)
                    console.log("取消收藏成功")
                }
            }
        })
    })
})