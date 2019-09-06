<?php
// 设置响应头
header('Content-Type: text/html; charset=UTF-8');
$class = '';

// 取得请求连接
$old_url = $_SERVER["REQUEST_URI"];

//echo $old_url . '</br>';
// 检查链接中是否存在 ?
$check = strpos($old_url, '?');
//如果存在 ?
if($check !== false) {
    //如果 ? 后面没有参数，如 http://localhost/index.php?
    if(substr($old_url, $check + 1) == ''){
        require_once './head.php';
        AddLesson();
    } else {
        // 如果 ? 后面有参数，如 http://localhost/index.php?class=
        // 则判断 class 后面是否有正确的参数
        if( $_REQUEST['class'] != null ) {
            $class = $_REQUEST['class'];
            require_once './head.php';
            Lesson($class);
        } else {
            // 如果 class 后面没有参数
            // 则直接切换 捐赠作者 或者 请求添加课程表
            require_once './head.php';
            AddLesson();
        }
    }
} else {
    require_once './head.php';
    AddLesson();
}

function Lesson($class) {
    print <<<EOT
        <div class="container-fluid">
            <h1 class="text-center">绵阳职业技术学院</h1>
            <p class="text-right">$class</p>
        </div>
        <hr>
        <div class="main"></div>
        <script id="TimeTable" type="text/html">
            <main id="main" class="container-fluid">
                <div id="coursesTable"></div>
            </main>
        </script>
EOT;
    require_once './model/script.php';
}

function AddLesson() {
    print <<<ETO
    <div class="container">
        <h1 class="text-center">当前链接参数错误！</h1>
        <hr>
        <P class="text-center text-warning"> 请在当前链接后面加上 <b class="text-success"> ?class=你的班级 </b>，例如：<b class="text-success">time.comnod.com?class=软件181</b> </P>
        <p class="text-center text-danger"> 如果你的课表还没有在我们网站上上传，将会出现参数错误，请发送你的课表到<b class="text-success"> admin@b8bb.cn </b>，我们将尽快完成收录，届时，我们将通过邮件通知您 </p>
        <hr>
        <h3 class="text-center"> 捐助作者 </h3>
        <img class="img-responsive center-block" src="http://img.b8bb.cn/1.jpg">
    </div>
ETO;
}
?>