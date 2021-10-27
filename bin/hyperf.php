#!/usr/bin/env php
<?php

// 设置运行时错误输出
ini_set("display_errors", 'on');
// 设置启动时错误输出
ini_set('display_startup_errors', 'on');
// 设置内存限制
ini_set('memory_limit', '1G');

// 设置输出所有错误
error_reporting(E_ALL);
// 定义两个常量 BASE_PATH SWOOLE_HOOK_FLAGS
// BASE_PATH:__DIR__为当前全路径 dirname(__DIR__)取当前目录的上级目录
// 可以加入 `echo BASE_PATH`运行 `php bin/hyperf.php`查看结果。
// 我的示例文件中:为`/home/vagrant/hyperf-source-analysis`
! defined('BASE_PATH') && define('BASE_PATH', dirname(__DIR__, 1));

// todo:暂时不看
! defined('SWOOLE_HOOK_FLAGS') && define('SWOOLE_HOOK_FLAGS', SWOOLE_HOOK_ALL);
//require BASE_PATH

// 自调用匿名函数 创建自己的作用域并保持全局命名空间是干净的.
(function () {
    // 此时我们再执行 `php bin/hyperf.php`
    echo 'self-call' . PHP_EOL;
})();
