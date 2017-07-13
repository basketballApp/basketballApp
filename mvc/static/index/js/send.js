$(function () {
    $(".button").click(function () {
        var content=$("textarea").val();
        $.ajax({
            url:"index.php?m=index&f=send&a=sends",
            type:"post",
            data:{content:content},
            success:function (e) {
                if(e=="ok"){
                    location.href='index.php?m=index&f=member&a=own';
                }
            }
        })
    })
})//end