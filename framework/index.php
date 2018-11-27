<?php
/**
 * 入口文件
 * 1、定义常量
 * 2、加载函数库
 * 3、启动框架
 *
 * Created by PhpStorm.
 * User: Derek
 * Date: 2018/11/27
 * Time: 19:52
 */

// 根目录
define('GNAF', realpath('.' . DIRECTORY_SEPARATOR));
// 核心目录
define('CORE', GNAF . DIRECTORY_SEPARATOR . 'core');
// app业务逻辑
define('APP', GNAF . DIRECTORY_SEPARATOR . 'app');

define('DEBUG', true);

if (DEBUG) {
    ini_set('display_errors', 'On');
} else {
    ini_set('display_errors', 'Off');
}

include CORE . DIRECTORY_SEPARATOR . 'common' . DIRECTORY_SEPARATOR . 'function.php';
include CORE . DIRECTORY_SEPARATOR . 'common' . DIRECTORY_SEPARATOR . 'gnaf.php';

\core\gnaf::run();