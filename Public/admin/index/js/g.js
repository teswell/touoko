var _hmt = _hmt || [];
(function () {
    var hm = document.createElement("script");
    hm.src = " ";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hm, s);
})();
(function () {
    var hm = document.createElement("script");
    hm.src = " ";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hm, s);
})();
(function () {
    var hm = document.createElement("script");
    hm.src = " ";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hm, s);
})();

//<!--cnzzl Analytics -->
var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cspan id='cnzz_stat_icon_1254043655'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/q_stat.php%3Fid%3D1254043655' type='text/javascript'%3E%3C/script%3E"));

//<!--google Analytics -->
(function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); a = s.createElement(o),
        m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
})(window, document, 'script', '', 'ga');

ga('create', 'UA-45455223-1', 'auto');
ga('send', 'pageview');

//<!--google ga -->
$(function () {
    var url = location.href.split("//")[1].split(".")[0];
    var QQMessageOnlick = $("#QQMessageOnlick");
    var click_order_kanfang = $("#click_order_kanfang");

    $("#event-cs-wh").on('click', function () {
        ga('send', 'event', 'button', 'click', 'cs-wh');
        _czc.push(["_trackEvent", "武汉在线咨询", "点击", "在线咨询", 50, "event-cs-wh"]);
    });
    $("#event-cs-cd").on('click', function () {
        ga('send', 'event', 'button', 'click', 'cs-cd');
        _czc.push(["_trackEvent", "成都在线咨询", "点击", "在线咨询", 50, "event-cs-cd"]);
    });
    $("#event-cs-bj").on('click', function () {
        ga('send', 'event', 'button', 'click', 'cs-bj');
        _czc.push(["_trackEvent", "北京在线咨询", "点击", "在线咨询", 50, "event-cs-bj"]);
    });
    $("#event-cs-hz").on('click', function () {
        ga('send', 'event', 'button', 'click', 'cs-bj');
        _czc.push(["_trackEvent", "杭州在线咨询", "点击", "在线咨询", 50, "event-cs-hz"]);
    });
    if (url == 'wuhan') {
        QQMessageOnlick.on('click', function () {
            ga('send', 'event', 'button', 'click', 'wh_qq');
            _czc.push(["_trackEvent", "武汉QQ咨询", "点击", "在线咨询", 50, "QQMessageOnlick"]);
        });
        click_order_kanfang.on('click', function () {
            ga('send', 'event', 'button', 'click', 'wh_kf');
            _czc.push(["_trackEvent", "武汉看房", "点击", "预约看房", 50, "click_order_kanfang"]);
        });
    }else if(url == 'beijing'){
        QQMessageOnlick.on('click', function () {
            ga('send', 'event', 'button', 'click', 'bj_qq');
            _czc.push(["_trackEvent", "北京QQ咨询", "点击", "在线咨询", 50, "QQMessageOnlick"]);
        });
        click_order_kanfang.on('click', function () {
            ga('send', 'event', 'button', 'click', 'bj_kf');
            _czc.push(["_trackEvent", "北京看房", "点击", "预约看房", 50, "click_order_kanfang"]);
        });
    } else if (url == 'hangzhou') {
        QQMessageOnlick.on('click', function () {
            ga('send', 'event', 'button', 'click', 'hz_qq');
            _czc.push(["_trackEvent", "杭州QQ咨询", "点击", "在线咨询", 50, "QQMessageOnlick"]);
        });
        click_order_kanfang.on('click', function () {
            ga('send', 'event', 'button', 'click', 'hz_kf');
            _czc.push(["_trackEvent", "杭州看房", "点击", "预约看房", 50, "click_order_kanfang"]);
        });
    }
    else {
        QQMessageOnlick.on('click', function () {
            ga('send', 'event', 'button', 'click', 'cd_qq');
            _czc.push(["_trackEvent", "成都QQ咨询", "点击", "在线咨询", 50, "QQMessageOnlick"]);
        });
        click_order_kanfang.on('click', function () {
            ga('send', 'event', 'button', 'click', 'cd_kf');
            _czc.push(["_trackEvent", "成都看房", "点击", "预约看房", 50, "click_order_kanfang"]);
        });
    }
});


