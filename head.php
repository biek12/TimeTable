<?php

print <<< EOT
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--  开启国产浏览器开启高速渲染  -->
    <meta name="renderer" content="webkit">
    <!--  确保适当的绘制和触屏缩放  -->
    <title>课表系统 - $class</title>
    <link rel="stylesheet" href="http://file.comnod.cn/Timetable.css">
    <link rel="stylesheet" href="http://file.comnod.cn/bootstrap.css">
    <script type="text/javascript" src="http://file.comnod.cn/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="http://file.comnod.cn/template.js"></script>
    <script type="text/javascript" src="http://file.comnod.cn/Timetables.js"></script>
    <!--  解决安卓浏览器问题  -->
    <script type="text/javascript">
        $(function () {
            var nua = navigator.userAgent;
            var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1);
            if (isAndroid) {
                $('select.form-control').removeClass('form-control').css('width', '100%');
            }
        });
    </script>
EOT;
?>