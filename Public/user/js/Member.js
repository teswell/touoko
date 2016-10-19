
function setupLabel() {
    if ($('.label_check input').length) {
        $('.label_check').each(function () {
            $(this).removeClass('x_on');
        });
        $('.label_check input:checked').each(function () {
            $(this).parent('label').addClass('x_on');
        });
    };
    if ($('.label_radio input').length) {
        $('.label_radio').each(function () {
            $(this).removeClass('l_on');
        });
        $('.label_radio input:checked').each(function () {
            $(this).parent('label').addClass('l_on');
        });
    };
}
//个人中心积分提示框
function infoShow(obj) {
    var that = obj;
    that.show();
}
//标签选中切换
function labelChange(obj, objstyle) {
    var that = obj;
    var nowAttr = that.attr('class').indexOf(objstyle) > 0 ? that.removeClass(objstyle) : that.addClass(objstyle);;
}

$(function () {

    $('body').addClass('add-js');
    $('.label_check,.label_radio').click(function () {
        setupLabel();
    });
    setupLabel();
    $('.user-how').hover(function () {
        $('.user-info').toggle();
    });
    $('.label_lb1').click(function () {
        labelChange($(this), 'label_special1');
    });
    $('.label_lb2').click(function () {
        labelChange($(this), 'label_special2');
    });
    $('.label_lb3').click(function () {
        labelChange($(this), 'label_special3');
    })
});
//我的账单tab
$(document).ready(function () {
    var click_info = $(".bill-tab-ul li");
    var info_tab = $(".bill-tab-info");
    click_info.each(function (i) {
        $(this).attr({ "index": i });
    });
    click_info.click(function () {
        click_info.removeClass();
        $(this).addClass("bill-active");
        $(".bill-input-btn").removeAttr("disabled", " ")
        $(".bill-input-btn2").removeClass().addClass("bill-input-btn");
        $(".bill-input-btn").attr("disabled", "disabled")
        info_tab.css({ "display": "none" });
        var obj = $(this).attr("index");
        info_tab.eq(obj).css({ "display": "block" });
    });
    //我的账单
    $(".bill-tab-info-list").click(function () {
        $(".bill-tab-info-list").find("em").removeClass();
        $(".bill-tab-info-list").find("img").removeClass();
        $(this).find("em").addClass("em-bg");
        $(this).find("img").addClass("b-bg");
        $(".bill-input-btn").removeAttr("disabled", " ")
        $(".bill-input-btn").addClass("bill-input-btn2").removeClass("bill-input-btn");
    })
    //支付
    $("#bill-input-btn2").click(function () {
        $(".bill-mask").fadeIn(100);
        $("#bill-show1").slideDown(200);
    });
    $("#finish-btn").click(function () {
        $(".bill-mask").fadeIn(100);
        $(".bill-show,.bill-showClause").slideDown(200);
    });
    $(".bill-close").click(function () {
        $(".bill-mask").fadeOut(100);
        $("#bill-show1").slideUp(200);
    });


    //账单驳回前验证
    $("#btnShowReject").click(function () {
        $(".uploadprogress h3").html("").hide();
        $("span.error-txt").text("").hide();
        $.post("/myorder/reject", { id: $("#hdId").val()}, function (data) {
            if (data.result) {
                $(".bill-mask").fadeIn(100);
                $(".bill-show2,.bill-showClause").slideDown(200);
            }
            else {
                alert(data.message);
            }
        }).error(function (data) {
            if (data.status == 401) {
                alert("登录超时，请重新登陆");
                window.location = "/member/login";
            }
            else {
                alert("网络错误，请刷新后重试");
            }
        })
    });
    $(".bill-close").click(function () {
        $(".bill-mask").fadeOut(100);
        $(".bill-show2,.bill-showClause").slideUp(200);
    });
    //账单驳回
    $("#btnReject").click(function () {
        var content = $("#txtRejectContent").val();
        if (content == "") {
            $(".error-txt").css({
                "display": "block"
            }).text("必须填写说明");
            return;
        }
        //var fileName = $("#attachfile").val();
        //if (fileName)
        //{
        //    var str = fileName.split('.');
        //    var extense = str[str.length - 1].toLowerCase();
        //    if (extense != "jpg" && extense != "png") {
        //        $(".user-r-textarea").find("span").css({
        //            "display": "block"
        //        }).text("只能上传jpg、png格式的图片");
        //        return;
        //    }
        //}
        if (content && content.length <= 500) {
            $("#RejectForm").submit();
            //$.post("/myorder/reject", { id: $("#hdId").val(), content: content,isDoReject:true }, function (data) {
            //    if (data.result) {
            //        $("#finish-btn").hide();
            //        $("#olReject").append("<li>我：" + content + "<span style='color:gray;'>" + data.date + "</span></li>");
            //        $("#divReject").show();
            //    }
            //    alert(data.message);
            //    $(".bill-mask").fadeOut(100);
            //    $(".bill-show2,.bill-showClause").slideUp(200);
            //}).error(function (data) {
            //    if (data.status == 401) {
            //        alert("登录超时，请重新登陆");
            //        window.location = "/member/login";
            //    }
            //    else {
            //        alert("网络错误，请刷新后重试");
            //    }
            //})
        }

    })
    var textinfo = $(".user-r-textarea").find("textarea");
    textinfo.keyup(function () {
        $("span.error-txt").css({
            "display": "none"
        })
    })
    //$("#aPay").click(function () {
    //    $.post("/myorder/pay", { id: $("#hdId").val() }, function (data) {
    //        if (data.url) {
    //            window.open(data.url, "_blank");
    //        }
    //        else {
    //            alert(data.message);
    //        }
    //    })
    //})
    //同意条款
    $(".finish-close").click(function () {
        $(".bill-mask").fadeOut(100);
        $(".bill-show,.bill-showClause").slideUp(200);
    });
    //$(".bill-mask").click(function () {
    //    $(".bill-mask").fadeOut(100);
    //    $(".bill-show,.bill-showClause").slideUp(200);
    //});
    //注册页面
    $("#c-checked").unbind("click").click(function () {
        if ($(this).attr("checked") == "checked") {
            $(".regin_btn").attr("disabled", "disabled")
            $(".regin_btn").addClass("btn-dis");
            $(this).removeAttr("checked");
        } else {
            $(".regin_btn").removeAttr("disabled")
            $(this).attr("checked", "checked");
            $(".regin_btn").removeClass("btn-dis");
        }
    });
});
$(function () {
    $("textarea[maxlength]").keyup(function () {
        var obj = $(this);
        var max = parseInt(obj.attr("maxlength"), 500);
        if (max > 0) {
            if (obj.val().length > max) {
                obj.val(obj.val().substr(0, max));
            }
        }
    })
    $("textarea[maxlength]").blur(function () {
        var obj = $(this);
        var max = parseInt(obj.attr("maxlength"), 500);
        if (max > 0) {
            if (obj.val().length > max) {
                obj.val(obj.val().substr(0, max));
            }
        }
    })
})