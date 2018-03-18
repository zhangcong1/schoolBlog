
class upload {
    constructor () {
        /*选择按钮样式*/
        this.selectBtnCon = "请选择"
        this.selectBtnStyle = `
            width:500px;
            height:50px;
            background: rgba(153,93,31,0.5);
            border-radius: 5px;
        `
        /*上传按钮样式*/
        this.upBtnCon = "点击上传"
        this.upBtnStyle = `
            width:500px;
            height:50px;
            background:#cccccc;
            border-radius: 5px;
            border:none;
        `
        /*预览视图样式*/
        this.preViewStyle = `
            width:488px;
            height:auto;
            border: 1px solid #cccccc;
            padding: 5px;
            overflow:hidden;
        `
        /*多图片预览样式*/
        this.imgBoxStyle = `
            width: 150px;
            height: 150px;
            border: 1px solid #777777;
            float:left;
            border-radius: 5px;
            margin: 5px 175px;
        `
        /*进度条样式*/
        this.progressStyle = `
            width: 100%;
            height: 20px;
            position: absolute;
            left:0;
            bottom: 0;
        `
        this.backStyle = `
            width: 0%;
            height: 20px;
            background:  rgba(153,93,31,0.5);
        `
        /*错误容器样式*/
        this.errorStyle = `
            width: 100%;
            height: 50px;
            background :rgba(0,0,0,0.7);
            color: red;
            text-align:center;
            line-height: 50px;
            position: absolute;
            top: 0;
            bottom: 0;
            left:0;
            right:0;
            margin: auto;
        `
        /*删除按钮*/
        this.delStyle = `
            width: 20px;
            height: 20px;
            border: 1px solid #000;
            position: absolute;
            top:5px;
            right: 5px;
            text-align:center;
            line-height: 20px;
        `
        /*判断条件*/
        this.size = 1024*1024*70;
        this.type = "image/jpeg,image/png,image/gif";
        this.list = [];
        this.data = [];
        this.fileName = "file";
        this.sizeFlag = true;
        this.typeFlag = true;
        this.multipleFlag = false;
    }
    /*创建视图*/
    createView(params){
        let that = this;
        this.createSelect(params.parent,params.selectBtn,function () {
            /*创建预览视图*/
            that.preView(params.preView);
            /*创建上传按钮*/
            that.createUpBtn(params.upBtn);
            /*选择文件*/
            that.change();
        })
    }
    /*创建按钮*/
    createSelect(parentObj,btnObj,callback){
        if(!parentObj){
            console.error("必须指定父元素");
        }else{
            this.parent = parentObj;
        }
        /*创建选择按钮*/
        if(!btnObj){
            let selectBox = document.createElement("div");
            selectBox.style.cssText = this.selectBtnStyle;
            selectBox.style.textAlign = "center";
            selectBox.style.position = "relative";
            selectBox.innerHTML = this.selectBtnCon;

            let selectBtn = document.createElement("input");
            if(this.multipleFlag){
                selectBtn.multiple = "multiple";
            }
            selectBtn.type = "file";
            selectBtn.style.cssText = `
                opacity:0;
                position:absolute;
                left:0;
                top:0;
                width: 100%;
                height:100%;
            `
            selectBox.appendChild(selectBtn);
            parentObj.appendChild(selectBox);
            selectBox.style.lineHeight = `${selectBox.offsetHeight}px`;
            this.selectBtn = selectBtn;
            callback();
        }
    }
    createUpBtn(obj){
        if(obj){
            this.upBtn = obj;
        }else{
           /*创建上传按钮*/
            let upBtn = document.createElement("div");
            upBtn.innerHTML = this.upBtnCon;
            upBtn.style.cssText = this.upBtnStyle;
            upBtn.style.textAlign = "center";
            this.parent.appendChild(upBtn);
            upBtn.style.lineHeight = `${upBtn.offsetHeight}px`;
            this.upBtn = upBtn;
        }
    }
    preView(obj){
        if(obj){
            this.preView = obj;
        }else{
            /*创建预览视图*/
            let preView = document.createElement("div");
            preView.style.cssText = this.preViewStyle;
            this.parent.appendChild(preView);
            this.preView = preView;
        }
    }
    /*上传按钮事件*/
    change(){
        let that = this;
        this.selectBtn.onchange = function () {
            let data = Array.prototype.slice.call(this.files);
            that.data = data;
            that.check();
        }
    }
    /*检查获取到的每个元素*/
    check(){
        let that = this;
        let temp = [];
        for(let i = 0; i < this.data.length;i++){
            var obj = this.createList(this.data[i]);
            temp[i] = this.data[i];
            that.list[i] = obj;
            obj.del.index = i;
            /*移入显示删除按钮*/
            !function (obj) {
                obj.list.onmouseenter = function () {
                    obj.del.style.display = "block";
                }
                obj.list.onmouseleave = function () {
                    obj.del.style.display = "none";
                }
            }(obj)
            /*点击删除*/
            obj.del.onclick  =  function () {
                this.parentNode.parentNode.removeChild(this.parentNode);
                let tempdata = that.data[this.index];
                for(let j = 0;j < that.data.length;j++){
                    if(tempdata == that.data[j]) {
                        that.data.splice(j, 1);
                        that.list.splice(j, i);
                    }
                }
                console.log(that.data);
            }
            /*判断文件类型*/
            if(this.type.indexOf(this.data[i].type) < 0 ){
                let tempdata = temp[i];
                for(let j = 0;j < that.data.length;j++){
                    if(tempdata == that.data[j]) {
                        that.data.splice(j, 1);
                        that.list.splice(j, i);
                    }
                }
                obj.error.style.display = "block";
                obj.error.innerHTML = "文件类型不符"
                this.typeFlag = false;
            }else {
                this.typeFlag = true;
            }
            /*判断文件大小*/
            if(this.data[i]){
                if(this.data[i].size > this.size){
                    let tempdata = temp[i];
                    for(let j = 0;j < that.data.length;j++){
                        if(tempdata == that.data[j]) {
                            that.data.splice(j, 1);
                            that.list.splice(j, i);
                        }
                    }
                    obj.error.style.display = "block";
                    obj.error.innerHTML = "文件过大";
                    this.sizeFlag = false;
                }else{
                    this.sizeFlag = true;
                }
            }
        }
    }
    createList(data){
        let imgBoxs =document.createElement("div");
        imgBoxs.style.cssText = this.imgBoxStyle;
        imgBoxs.style.position = "relative";
        /*验证文件类型是否正确并且将上传图片预览*/
        let tempType = "image/jpeg,image/png,image/gif";
        if(tempType.indexOf(data.type) > -1){
            let fileR = new FileReader();
            fileR.onload = function (e) {
                imgBoxs.style.backgroundImage = `url(${e.target.result})`;
                imgBoxs.style.backgroundSize = "cover";
            }
            fileR.readAsDataURL(data);
        }else{
            let notice  = document.createElement("div");
            notice.innerHTML = "未知类型";
            imgBoxs.appendChild(notice);
        }
        /*进度条容器*/
        let progress = document.createElement("div")
        progress.style.cssText = this.progressStyle;
        /*进度条*/
        let back = document.createElement("div");
        back.style.cssText = this.backStyle;
        /*错误容器*/
        let error = document.createElement("div");
        error.style.cssText = this.errorStyle;
        error.style.display = "none";
        error.innerHTML = "错误信息";
        /*删除按钮*/
        let del = document.createElement("div");
        del.style.cssText = this.delStyle;
        del.style.display = "none";
        del.innerHTML = "X";
        progress.appendChild(back);
        imgBoxs.appendChild(progress);
        imgBoxs.appendChild(error);
        imgBoxs.appendChild(del);
        this.preView.appendChild(imgBoxs);
        return {
            error:error,
            del:del,
            back:back,
            list:imgBoxs,
        }
    }
    up(url,callback){
        let that = this;
        this.upBtn.onclick = function () {
            if(!that.typeFlag){
                alert("文件类型不符，无法上传");
                return;
            }
            if(!that.sizeFlag){
                alert("文件过大，无法上传");
                return;
            }
            let reponseArr = [];
            for(let i = 0; i < that.data.length; i ++){
                let formObj = new FormData();
                formObj.append(that.fileName,that.data[i]);
                var ajax = new XMLHttpRequest();
                !function (index,ajax) {
                    ajax.upload.onprogress = function (e) {
                        let bili = (e.loaded/e.total)*100+"%";
                        that.list[i].back.style.width = bili;
                    }
                    ajax.onload = function () {
                        reponseArr.push(ajax.response);
                        callback(reponseArr);
                    }
                    ajax.open("post",url);
                    ajax.send(formObj);
                }(i,ajax)

            }
        }
    }
}