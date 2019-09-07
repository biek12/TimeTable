<?php

// 从文件中读取数据到PHP变量
$json_string = file_get_contents('./data.json');
// 用参数true把JSON字符串强制转成PHP数组
$data = json_decode($json_string, true);

// 课程数据转换
$lesson_data = json_encode($data[$class]);
// 时间数据转换
$courseType = json_encode($data['courseType']);
// 周数据
$week_data_big = json_encode($data['week'][0]);
$week_data_small = json_encode($data['week'][1]);

print <<< EOT
    <script type="text/javascript">
        $('.main').html(template('TimeTable', TimeTable));
        var week = $(window).innerWidth() > 360 ? $week_data_big : $week_data_small;
        // 实例化(初始化课表)
        var Timetable = new Timetables({
            el: '#coursesTable',
            timetables: $lesson_data,
            week: week,
            timetableType: $courseType,
            highlightWeek: new Date().getDay(),
            styles: {
                    Gheight: 50
            },
            gridOnClick: function (e) {
                if (e.name != "") {
                    var str = cutStr(e.name);
                    $('.sCourse').html("课程：" + str[0]);
                    $('.sTech').html("教师：" + str[1]);
                    if (str[2] != null) {
                        $('.sRoom').html("教室：" + str[2]);
                    }
                    $('.mBox').fadeIn();
                }
            }
        });
        
        function closeInfo() {
            $('.mBox').fadeOut();
        }
        
        // 切割字符串
        function cutStr(str) {
            // 字符串：算法与程序设计项目实践@张强 - CSB402
            // 先进行第一次切割，将 @字符替换成 .
            str = str.split("@").join(".");
            // 再进行第二次切割，将 - 字符串替换成 .
            str = str.split(" - ").join(".");
            // 再通过split(".") ，将每个逗号处将它分解，最终切割成 [ "算法与程序设计项目实践", "张强", "CSB402" ]
            str = str.split('.');
            return str;
        }
    </script>
EOT;

?>