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
    <style type="text/css">
        .mBox {
            width: 100%;
            height: 100vh;
            background: rgba(0, 0 ,0 , .3);
            position: absolute;
            top: 0;
            left: 0;
            z-index: 9999;
        }

        MessageBox {
            width: 75%;
            height: 50vh;
            border-radius: 5px;
            margin-bottom: auto;
            vertical-align: middle;
            padding-top: 20vh;
            position: relative;
        }

        .mBox > MessageBox > a {
            display: block;
            position: absolute;
            top: 0;
            right: 0;
            width: 4vh;
            height: 4vh;
            margin-top: 20.5vh;
            margin-right: 0.5vh;
            border-radius: 0 5px 0 0;
            background: url("http://img.b8bb.cn/icon.png") no-repeat;
            background-size: 100%;
        }

        MessageBox > stitle {
            width: 100%;
            height: 5vh;
            border-radius: 5px 5px 0 0;
            text-align: center;
            line-height: 5vh;
            font-size: 2.3vh;
            font-weight: 600;
        }

        MessageBox > sBox {
            width: 100%;
            height: 45vh;
            text-align: center;
            border-radius: 0 0 5px 5px;
        }

        MessageBox > sBox > p {
            padding-top: 10px;
            font-size: 1.8vh;
        }
    </style>
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