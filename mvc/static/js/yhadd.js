$(function () {
        $(".attention").click(function () {
            var flags=$(this).text();
            var that=$(this);
            console.log($.trim(flags));
            var mfid=$(this).attr("mfid");
            var uid=$(this).attr("uid");
            if($.trim(flags)=="未关注"){
             $.ajax({
                url:"index.php?m=index&f=friends&a=Concern",
                data:{mfid:mfid,uid:uid},
                type:"post",
                success:function (e) {
                    console.log(e);
                    if(e=="ok"){
                        that.html("已关注");
                    }
                }
            })

            }
        })



    
    
})//end