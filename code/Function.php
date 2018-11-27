<?php
/**
 * Created by PhpStorm.
 * User: Derek
 * Date: 2018/11/25
 * Time: 9:34
 */

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