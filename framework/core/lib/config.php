<?php
/**
 * Created by PhpStorm.
 * User: Derek
 * Date: 2018/12/1
 * Time: 0:14
 */

namespace core\lib;

class config
{
    public static $conf = array();

    public static function get($name, $file)
    {
        if (isset(self::$conf[$file])) {
            return self::$conf[$file][$name];
        }

        $path = GNAF . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . $file . '.php';
        if (is_file($path)) {
            $conf = include $path;
            if (isset($conf[$name])) {
                self::$conf[$file] = $conf;
                return $conf[$name];
            } else {
                throw new \Exception('没有该配置项' . $name);
            }
        } else {
            throw new \Exception('找不到配置文件' . $file);
        }
    }

}