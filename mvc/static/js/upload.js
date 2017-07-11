class upload {
    constructor() {
        this.type = "image/gif,image/jpg,image/jpg,image/jpeg";
        this.size = 1024 * 1024 * 10;
        this.constyle = {
            width: "600px",
            height: "auto",
            border: "1px solid #fff"
        };
        this.stylebtn = {
            width: "150px",
            height: "40px",
            background: "orange"
        };
        this.selectBtnsty={
            width: "150px",
            height: "40px",
            background: "#f2e75b",
            left:"50px"
        }
        this.uploadstyle = {
            width: "150px",
            height: "40px",
            background: "#ccc",
            borderRadius: "10px",
            textAlign: "center",
            text: "上传",
            left:"50px"
        }
        this.imgcontyle = {
            width: "200px",
            height: "auto",
            border: "1px solid #ccc",
            margin: "10px"
        }
        this.message = {
            text: "正常",
        }
        this.lists = [];
    }

    createView(params = {}) {
        //创建大容器
        this.createContainer(params.container, params.parent, ()=> {
            //创建选择按钮
            this.createSelectBtn(params.selectBtn);
            //创建提交按钮
            this.createUpload(params.uploadBtn);
            //创建预览的区间
            this.creatP(params.creatp)
            //创建列表
            // this.createList(params.list)
            //注册change事件
            this.change();
        })
    }

    change() {
        var that = this;
        this.selectBtn.onchange = function () {
            that.data = Array.prototype.slice.call(this.files)
            that.check()
        }
    }

    check() {
        var that = this;
        var tmp = [];
        for (var i = 0; i < this.data.length; i++) {
            tmp[i] = this.data[i];
        }
        for (var i = 0; i < tmp.length; i++) {
            var obj = this.createList();
            var readobj = new FileReader;
            readobj.readAsDataURL(tmp[i]);
            (function (obj, readobj) {
                readobj.onload = function (e) {
                    obj.img.src = e.target.result;
                }
            })(obj, readobj);
            if (!(tmp[i].size < this.size && this.type.indexOf(tmp[i].type) > -1)) {
                obj.message.display = "block";
                obj.message.innerHTML = "格式错误";
                for (var j = 0; j < tmp.length; j++) {
                    if (this.data[i] == tmp[j]) {
                        this.data.splice(i, 1);
                    }
                }
                obj.del.onclick = function () {
                    this.parentNode.parentNode.removeChild(this.parentNode);
                }
            }
            else {
                this.lists.push(obj)
            }
        }
        for (var i = 0; i < tmp.lastIndexOf; i++) {
            this.lists[i].del.index = i;
            this.lists[i].del.onclick = function () {
                this.parentNode.parentNode.removeChild(this.parentNode);
                that.data.splice(index, 1);
            }
        }

    }

    up(url, callback) {
        var that = this;
        this.uploadBtn.onclick = function () {
            if (!url) {
                console.error("必须输入错误");
                return;
            }
            for (let i = 0; i < that.data.length; i++) {
                var form = new FormData();
                form.append("file", that.data[i]);
                var ajax = new XMLHttpRequest();
                ajax.open("post", url);
                ajax.onload = function () {
                    console.log(ajax.response)
                    callback(ajax.response)
                }
                !function (i) {
                    ajax.upload.onprogress = function (e) {
                        var total = e.total;
                        var loaded = e.loaded;
                        var bili = loaded / total * 100 + "%";
                        var back = that.lists[i].back;
                        back.style.width = bili;
                    }
                }(i)
                ajax.send(form);
            }
        }
    }

    createContainer(container, parent, callback) {
        if (container) {
            this.container = container;
            this.parent = parent;
            return;
        }
        if (!parent) {
            console.log("父容器没有设置")
            return;
        }
        this.parent = parent;
        this.container = document.createElement("div");
        this.container.style.cssText = "overflow:hidden;width:" + this.constyle.width + ";height:auto;border:" + this.constyle.border + "";
        this.parent.appendChild(this.container);
        callback();
    }

    createSelectBtn(btnEle) {
        if (btnEle) {
            this.selectBtn = btnEle;
            return;
        }
        var div = document.createElement("div");
        div.style.cssText =
            "width:" + this.selectBtnsty.width + ";height:" + this.selectBtnsty.height + ";background:" +
            this.selectBtnsty.background + ";position:relative;text-align:center;line-height:40px;color:#fff;border-radius:10px;float:left;margin-left:"+this.selectBtnsty.left +"";
        var span = document.createElement("span");
        span.innerHTML = "选择图片";
        var input = document.createElement("input");
        input.style.cssText = "position:absolute;left:0;top:0;width:" + this.stylebtn.width + ";height:" + this.stylebtn.height + ";opacity:0;cursor:pointer";
        input.type = "file";
        input.multiple = "multiple";
        // input.name="file";
        input.accept = this.type;
        div.appendChild(span);
        div.appendChild(input);
        this.selectBtn = input;
        this.container.appendChild(div);
    }

    createUpload(uploadBtn) {
        if (uploadBtn) {
            this.uploadBtn = uploadBtn;
            return;
        }
        var div = document.createElement("div");
        div.style.cssText = "width:" + this.uploadstyle.width + ";height:" + this.uploadstyle.height + ";background:#ccc;" +
            "border-radius:" + this.uploadstyle.borderRadius + ";margin-top: 20px;text-align:center;line-height:40px;cursor:pointer;float:left;margin-left:"+this.uploadstyle.left+"";
        var span = document.createElement("span");
        span.innerHTML = this.uploadstyle.text;
        div.appendChild(span);
        this.container.appendChild(div);
        this.uploadBtn = div;
    }

    creatP(con) {
        if (con) {
            this.creatP = con;
            return;
        }
        var con = document.createElement("div");
        con.style.cssText = "width:600px;height:auto;overflow:hidden;";
        this.creatP = con;//
        this.container.insertBefore(con, this.uploadBtn);
    }

    createList(list) {
        if (list) {
            this.list = list;
            return;
        }
        //1.创建列表容器
        var div = document.createElement("div");
        div.style.cssText = "width:" + this.imgcontyle.width + ";overflow:hidden;float:left;border:" + this.imgcontyle.border + ";position:relative;margin:" + this.imgcontyle.margin + "";
        //2.放入图片
        var img = document.createElement("img")
        img.style.cssText = "width:100%;height:170px;float:left;";
        //3.进度条
        var progress = document.createElement("div");
        progress.style.cssText = "width:0%;height:20px;position:absolute;left:0;bottom:0;";
        //4.进度条背景
        var back = document.createElement("div");
        back.style.cssText = "width:40%;height:20px;float:left;background:orange";
        //5.提示信息
        var message = document.createElement("div");
        message.style.cssText = "width:70%;height:50px;line-height:50px;text-align:center;position:absolute;left:0;right:0;top:0;bottom:0;margin:auto;color:#fff;display:none;";
        message.innerHTML = this.message.text;
        //6.删除按钮
        var del = document.createElement("div");
        del.style.cssText = "width:50px;height:50px;line-height:50px;text-align:center;position:absolute;right:0;top:0;display:none;cursor:pointer;color:#fff";
        del.innerHTML = "-";
        this.p = div;
        div.appendChild(img);
        div.appendChild(progress);
        div.appendChild(back);
        div.appendChild(message);
        div.appendChild(del);
        this.creatP.appendChild(div)
        div.onmouseover = function () {
            del.style.display = "block";
            message.style.display = "block"
        }
        div.onmouseout = function () {
            del.style.display = "none";
            message.style.display = "none";
        }
        del.onclick = function () {
            var parent = this.parentNode;
            console.log(parent)
            var parentnode = parent.parentNode;
            console.log(parentnode)
            parentnode.removeChild(parent);
        }
        return {
            img: img,
            progress: progress,
            back: back,
            message: message,
            del: del
        }
    }

    /*
     * createList返回值
     * 以及错误的信息
     *
     * */
}
// obj.size = 1024 * 20;
