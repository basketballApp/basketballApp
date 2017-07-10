$(function () {
    var flag=true;

        $(".attention").click(function () {
            var mfid=$(this).attr("mfid");
            var uid=$(this).attr("uid");
            if(flag){
             $.ajax({
                url:"index.php?m=index&f=friends&a=Concern",
                data:{mfid:mfid,uid:uid},
                type:"post",
                success:function (e) {
                    console.log(e);
                    if(e=="ok"){
                        $(".attention").html("已关注");
                        flag=false;
                        console.log(flag);
                        alert(1)
                    }
                }
            })

            }
        })



    
    
})//end