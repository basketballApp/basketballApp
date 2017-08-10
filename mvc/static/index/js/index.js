class upload {
    constructor() {
        this.type = "image/jpeg;image/png;image/gif";
        this.size = 1024*1024*10;
        this.selectBtnStyle = {width: "100px", height: "40px", background: "#orangered", color: "#fff",position:"relative"};
        this.uploadBtnStyle = {width: "100px", height: "40px", background: "green", color: "#fff"};
        this.messageInfo = {text: "文件大小不符合"}
        this.Pstyle = {width: 200, border: "1px solid #ccc", " border-radius:": 5}
        this.listStyle = {width: 100, height: 100, border: "1px solid #ccc", margin: 5}
        this.spanStyle={position:"absolute"}
    }

    createView(params = {}) {
        this.createContainer(params.container, params.parent, ()=> {
            this.createSelectBtn(params.selectBtn);
            console.log(params.selectBtn,params.uploadBtn)
            this.createUploadBtn(params.uploadBtn);
            // this.createList(params.panel);
            this.createP(params.panel);
            this.change();
        });
    }
    createContainer(container, parent, callback) {
        if (container) {//container存在时，大容器为container   父元素为parent  直接返回
            this.container = container;
            this.parent = parent;
            return;
        }
        if (!parent) {//父容器不存在时  直接返回
            console.log("父容器未设置");
            return;
        }
        this.parent = parent;
        this.container = document.createElement("div");
        this.container.style.cssText = "width:auto;overflow:hidden;margin:0 auto";
        this, parent.appendChild(this.container);//将父元素插入到大容器
        callback();//调用回调函数
    }

    createSelectBtn(btnEle) {//选择按钮
        console.log(btnEle)
        if (btnEle) {//如果此时选择按钮存在，这个选择按钮就是selectBtn  直接返回
            this.selectBtn = btnEle;
            return;
        }
        //创建选择按钮div
        var selectdiv =this.selectBtn= document.createElement("div");
        //添加样式
        selectdiv.style.cssText = "height:" + this.selectBtnStyle.height + ";background:red;;position:relative";

        //定义选择按钮的内容
        var span = document.createElement("span");
        span.style.cssText = "width:100%;height:" + this.selectBtnStyle.height + ";background:"
            + this.selectBtnStyle.background + ";color:" + this.selectBtnStyle.color+"" +
            ";position:absolute;left:0;right:0;top:0;bottom:0;margin:auto;line-height:40px;text-align:center;";
        span.innerHTML = "选择文件";

        //定义上传文件控件
        var input = this.selectBtn = document.createElement("input");
        input.type = "file";//指定Input的类型
        input.multiple = "multiple";
        input.accept = this.type;//指定input接收的类型
        //隐藏上传控件
        input.style.cssText = "width:" + 100 + "px;height:" + 40 + "px;background:blue;color:#000;opacity:0";

        // 将span/input添加到选择按钮中
        selectdiv.appendChild(span);
        selectdiv.appendChild(input);

        // 将选择按钮添加到大容器中
        this.container.appendChild(selectdiv);
    }

    createUploadBtn(btnEle) {
        if (btnEle) {
            this.uploadBtn = btnEle;
            return;
        }
        var upbtn = this.uploadBtn = document.createElement("div");
        upbtn.style.cssText ="height:30px;background:lightblue;" +
            "text-align:center;line-height:30px;clear:both";
        upbtn.innerHTML = "上传";
        this.container.appendChild(upbtn)
    }

    //创建列表   创建列表容器   放入图片   创建进度条   创建进度条背景  创建提示信息  创建删除按钮
    //返回值  img  messsge  progress
    createList(ele) {//存放list
        if (ele) {
            this.list = ele;
            return;
        }

        var list = this.panel = document.createElement("div")
        var img = document.createElement("img")
        var progress = document.createElement("div")
        var back = document.createElement("div")
        var del = document.createElement("div")
        var message = document.createElement("div")

        list.style.cssText = "width:200px;float:left;border:1px solid #ccc;position:relative;overflow:hidden;margin:5px";
        img.style.cssText = "width:100%;height:170px;";
        progress.style.cssText = "width:100%;height:10px`;position:absolute;left:0;bottom:0;border:1px solid #000";
        back.style.cssText = "width:0%;height:100%;background:red;position:absolute;top:0;left:0";
        del.style.cssText = "width:40px;height:30px;text-align:center;line-height:30px;" +
            "position:absolute;right:0;top:0;font-size:14px;display:none";
        del.innerHTML = "删除";
        message.style.cssText = "width:100%;height:30px;background:#ccc;text-align:center;" +
            "line-height:30px;opacity:0.7;" +
            "position:absolute;top:0;bottom:0;left:0;right:0;margin:auto;display:none";
        // message.innerHTML = this.messageInfo.text;
        progress.appendChild(back)
        list.appendChild(img)
        list.appendChild(progress)
        list.appendChild(del)
        list.appendChild(message)
        // this.container.appendChild(list);
        this.container.insertBefore(list, this.uploadBtn);//新节点  已经存在的节点

        del.onclick = function () {
            var parent = this.parentNode;
            var parent_parent = parent.parentNode;
            parent_parent.removeChild(parent)
        }
        list.onmouseover = function () {
            del.style.display = "block"
        }
        list.onmouseout = function () {
            del.style.display = "none"
        }
        return {
            img: img, message: message, back: back, del: del
        }
    }

    createP(ele) {//存放list盒子
        if (ele) {
            this.createP = ele;
            return;
        }
        var div = document.createElement("div");
        div.style.cssText = "width:" + this.Pstyle.width + "px;height:auto;overflow:hidden;border-radius:" + this.Pstyle["border-radius"] + "px";
        this.creatP = div;//
        this.container.insertBefore(div, this.uploadBtn);
    }

    //创建change事件
    change() {//保存上传文件信息  this.data
        var that = this;
        this.selectBtn.onchange = function () {
            // console.log(this.files)
            that.data = Array.prototype.slice.call(this.files);//把带length属性的json格式转化为数组
            //将this.files指针指向数组，数组的slice方法
            that.check();
        }
    }

    check() {
        var temp = [];
        this.lists=[];
        var that=this;
        for (var i = 0; i < this.data.length; i++) {
            temp[i] = this.data[i];
        }

        for (var i = 0; i < temp.length; i++) {//遍历上传的文件
            var obj = this.createList();//创建一个列表
            var read = new FileReader();
            read.readAsDataURL(temp[i]);
            (function (obj, read) {
                read.onload = function (e) {
                    obj.img.src = e.target.result;
                }
            })(obj, read)

            if (!(temp[i].size < this.size && this.type.indexOf(temp[i].type) > -1)) {//不符合条件的

                obj.message.style.display = "block";
                obj.message.innerHTML = "不符合条件";

                //temp[i]不符合条件  在data中查找和temp[i]一样的，进行删除
                for (var j = 0; j < temp.length; j++) {
                    if (this.data[i] === temp[j]) {
                        console.log(this.data.length)
                        this.data.splice(i, 1);
                    }
                }
                obj.del.onclick=function () {
                    this.parentNode.parentNode.removeChild(this.parentNode)
                }
            }
            else{//符合条件的
                this.lists.push(obj)
                // console.log(obj)
            }
        }
        //遍历符合条件的
        for(var i=0;i<this.lists.length;i++){
            this.lists[i].del.index=i;
            this.lists[i].del.onclick=function () {
                  this.parentNode.parentNode.removeChild(this.parentNode);//删除父节点
                  that.data.splice(this.index,1)     //删除数据
            }
        }
    }

    up(url,callback) {
        var that = this;
        console.log( this.uploadBtn)
        this.uploadBtn.onclick=function () {
            if (!url) {
                console.error("必须要传入地址");
                return;
            }

            for (var i = 0; i < that.data.length; i++) {
                var form = new FormData();
                form.append("file", that.data[i]);

                var ajax = new XMLHttpRequest();

                ajax.onload = function () {
                    console.log(ajax.response);
                    callback(ajax.response);
                }

                !function(i) {
                    ajax.upload.onprogress = function (e) {
                        var total = e.total;
                        var loaded = e.loaded;
                        var bili = loaded / total * 100 + "%";
                        var back = that.lists[i].back;
                        back.style.width = bili;
                    }
                }(i)
                ajax.open("post", url);
                ajax.send(form);
            }
        }

    }
}

