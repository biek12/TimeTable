<?php

// 从文件中读取数据到PHP变量
$json_string = file_get_contents('json/data.json');

// 用参数true把JSON字符串强制转成PHP数组
$data = json_decode($json_string, true);

class api {
    private $m_class;
    public function SetClass($data) {
        return $data;
    }
}