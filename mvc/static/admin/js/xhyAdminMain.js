$(function () {
    $(".first>span").click(function () {
        //有active的a元素除了当前点击的a元素去除active,并让紧挨其的二级导航收起
        $(".first>span").not(this).removeClass("active").next().slideUp();
        //当前的a元素进行active类名的切换及二级菜单显现收齐的切换。
        // 实现点击时出现，再点击时隐藏
        $(this).toggleClass("active").next().slideToggle()
    }).hover(function () {//鼠标移入一级导航时样式的变化
        $(this).css({background:"#ffd305",color:"#fff"})
    },function () {
        $(this).css({background:"",color:""})
    })

})