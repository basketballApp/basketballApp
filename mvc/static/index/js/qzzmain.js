$(function () {
    //点赞

    $(".par-main").delegate(".fzan>.zimg","click",function () {
            var did=$(this).parent(".div").attr("did");
            var belove=parseInt($(this).siblings("span").html());
            var that=$(this);
            $.ajax({
                url:"index.php?m=index&f=index&a=support",
                type:"post",
                // dataType:"json",
                data:{
                    did:did,belove:belove
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
        var did=$(this).parent(".div").attr("did");
        var collect=parseInt($(this).siblings("span").html());
        console.log(did,collect)
        var that=$(this);
        $.ajax({
            url:"index.php?m=index&f=index&a=collect",
            type:"post",
            // dataType:"json",
            data:{
                did:did,collect:collect
            },
            success:function (data) {
                console.log(data)
                if(data=="ok"){
                    that.siblings("span").html(collect+1)
                    console.log("收藏成功")
                }
                if(data=="ok1"){
                        that.siblings("span").html(collect-1)
                        console.log("取消收藏成功")
                }
            }
        })
    })

    //视频播放
    var startflag=true;
    $(".par-main").delegate(".start","click",function () {
        var that=$(this)
        var now=0;
        var video = $(this).parent().siblings("video");
        video[0].ontimeupdate=function () {
            now=video[0].currentTime;//当前时长
            if(now==video[0].duration){
                $(this).siblings().html(" <div  style='float: left;width: 0.8rem;height: 0.8rem;margin-top:0.2rem' class='start'>");
            }
        }
        if (startflag) {
            video[0].play();
            $(this).parent(".img").html(" <div  style='float: left;width: 0.8rem;height: 0.8rem;margin-top: 0.25rem' class='start'>");
        } else {
            video[0].pause();
            $(this).parent(".img").html(" <div alt='' style='float: left;width: 0.8rem;width: 0.8rem;margin-top: 0.25rem' class='start'>");
        }
        startflag = !startflag;
    })
})