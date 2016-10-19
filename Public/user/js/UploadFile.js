$(function () {

    $("#uploadAvatar").on("change", function () {
        uploadAvatar($(this));
    })
})


function uploadAvatar(file)
{
    //获取附件名
    var pos = file.val().lastIndexOf("\\");
    var fileName = file.val().substring(pos + 1);
    //获取文件后缀名
    var HzName = /\.[^\.]+/.exec(fileName);

    if (!(HzName == ".jpg" || HzName == ".JPG" || HzName == ".jpeg" || HzName == ".JPEG" || HzName == ".png" || HzName == ".PNG" || HzName == ".gif" || HzName == ".GIF")) {
        //$("#showMsg span").append("上传的附件需后缀为jpg/jpeg/png/gif的图片哦")
        alert("上传的附件需后缀为jpg/jpeg/png/gif的图片哦");
        return;
    }
    else {
        var filesize = file[0].files[0].size
        var maxsize = 2 * 1024 * 1024;//20M  
        if (filesize > maxsize) {
            //$("#showMsg span").append("上传的图片不能大于2M哦！")
            alert("上传的图片不能大于2M哦！");
            return;
        }
        //清空附件列表
        ajaxFileUpload(file.val().substring(pos + 1));

    }
}

//ajax图片附件上传
function ajaxFileUpload(fileName) {
    $.ajaxFileUpload
    (
        {
            url: '/Home/uploadAvatar', //用于文件上传的服务器端请求地址
            secureuri: false, //一般设置为false
            fileElementId: 'uploadAvatar', //文件上传控件的id属性
            dataType: 'Json', //返回值类型 一般设置为json
            success: function (data, status)  //服务器成功响应处理函数
            {
                if (typeof (data.error) != 'undefined') {
                    return;
                }
                //保存图片路径
                $("#avatar").attr("src", data);
                $("#hiddAvatar").val(data);
            }

        }
    )
    $("#uploadAvatar").on("change", function () {
        uploadAvatar($(this));
    });
}