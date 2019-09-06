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
                    console.log(e);
                    alert(e.name);
                }
            }
        });
    </script>
EOT;

?>