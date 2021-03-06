<?php
/**
 * 函数库
 *
 * Created by PhpStorm.
 * User: Derek
 * Date: 2018/11/27
 * Time: 19:56
 */

/*
 * 打印函数
 */
function p($var) {
    if (is_bool($var)) {
        var_dump($var);
    } else if (is_null($var)) {
        var_dump($var);
    } else {
        echo "<pre style='position:relative;z-index:1000;padding:10px;border-radius:5px;background:#F5F5F5;border:1px solid #aaa;font-size:14px;line-height:18px;opacity:0.9;'>" .
            print_r($var, true) . "</pre>";
    }
}

/**
 * 调试输出函数
 *
 * @param $val 调试输出源数据
 * @param bool $dump 是否启用var_dump调试
 * @param bool $exit 是否调试结束后设置断点
 */
function debug($val, $dump = false, $exit = true)
{
    if ($dump) {
        $func = 'var_dump';
    } else {
        $func = (is_array($val) || is_object($val)) ? 'print_r' : 'printf';
    }
    header("Content-type: text/html; charset=utf-8");
    echo '<pre>debug output:<hr />';
    $func($val);
    echo '</pre>';
    if ($exit) {
        exit;
    }
}