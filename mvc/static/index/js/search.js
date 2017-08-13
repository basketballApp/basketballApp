    //存放数组
    var str={};
    $.ajax({
        url:"index.php?m=index&f=index&a=addOrder",
        success:function (data) {
            var start=data.indexOf("</html>")+7;
            str=JSON.parse(data.substr(start));

            // str=str.split("=");
            //console.log(str);
            //console.log(typeof str);
        }
    })
    var app=angular.module("myApp",[]);
    app.controller("myCtrl",["$scope",function ($scope) {
        $scope.con=str;
    }])


//结束