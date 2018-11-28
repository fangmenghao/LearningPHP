<?php
/**
 * 启动类
 *
 * Created by PhpStorm.
 * User: Derek
 * Date: 2018/11/27
 * Time: 20:05
 */
namespace core;

class gnaf
{
    public static $classMap = array();

    /**
     * 启动函数
     */
    public static function run()
    {
        p('启动');
        new lib\route();
    }

    /**
     * 自动加载类库函数
     */
    public static function load($class)
    {
        // '\core\route' --> '/core/route.php'
        $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
        $file = GNAF . DIRECTORY_SEPARATOR . $class . '.php';
        // 检测缓存中是否存在
        if (isset($classMap[$class])) {
            return true;
        }

        if (is_file($file)) {
            include_once $file;
            self::$classMap[$class] = $class;
        } else {
            return false;
        }
    }
}