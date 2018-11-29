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
        $route = new lib\route();
        $controllerClass = $route->ctrl;
        $action = $route->action;
        $controller = APP . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . ucfirst($controllerClass) . 'Controller.php';
        $obj = '\\' . MODULE . '\controller\\' . ucfirst($controllerClass) . 'Controller';
        if (is_file($controller)){
            include_once $controller;
            $ctrl = new $obj();
            $ctrl->$action();
        }else{
            throw new \Exception('找不到控制器' . $controllerClass);
        }
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