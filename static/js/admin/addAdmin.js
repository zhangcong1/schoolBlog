let uploads=new upload();
uploads.multipleFlag = true;
uploads.createView({parent:document.querySelector('.form-group.parent')});
let arr=[];
uploads.up("index.php?m=admin&f=adminM&a=upload",function (e) {
    arr.push(e);
    console.log(arr.join(';'));
    document.querySelector('input[type=hidden]').setAttribute('value',arr.join(';'));
});