//ajax删除
function remove_delete(id,url){
    var txt =  "确定要删除吗?";
    var option = { onOk: function(){ remove_ajax(id,url) }};
    window.wxc.xcConfirm(txt, window.wxc.xcConfirm.typeEnum.warning,option);
}

//ajax删除
function remove_ajax(id,url){
    $.ajax({
        type: "POST",
        url: url,
        data: { 'id':id },
        dataType: "json",
        success: function(data){
            if (data.status == 1) {
                window.wxc.xcConfirm('删除成功', window.wxc.xcConfirm.typeEnum.success);
                window.location.reload();
            }else {
                window.wxc.xcConfirm('删除失败', window.wxc.xcConfirm.typeEnum.error);
                window.location.reload();
            }
        }
    });
}

function statusChange(id,url,status) {
    $.ajax({
        type: "POST",
        url: url,
        data: { 'status':status ,'id':id},
        dataType: "json",
        success: function(data){
            if (data.status == 1) {
                window.wxc.xcConfirm('更改成功', window.wxc.xcConfirm.typeEnum.success);
                window.location.reload();
            }else {
                window.wxc.xcConfirm('更改失败', window.wxc.xcConfirm.typeEnum.error);
                window.location.reload();
            }
        }
    });
}
