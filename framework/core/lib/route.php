<?php
/**
 * Created by PhpStorm.
 * User: Derek
 * Date: 2018/11/27
 * Time: 20:12
 */
namespace core\lib;

class route
{
    public $ctrl;
    public $action;

    function __construct()
    {
        if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/') {
            $path = $_SERVER['REQUEST_URI'];
            $patharr = explode('/', trim($path, '/'));
            if (isset($patharr[2])) {
                $this->ctrl = $patharr[2];
                unset($patharr[2]);
            }
            if (isset($patharr[3])) {
                $this->action = $patharr[3];
                unset($patharr[3]);
            } else {
                $this->action = config::get('ACTION', 'route');
            }

            $count = count($patharr) + 2;
            $i = 2;
            while ($i < $count) {
                if (isset($patharr[$i + 1])) {
                    $_GET[$patharr[$i]] = $patharr[$i + 1];
                }
                $i += 2;
            }
        } else {
            $this->ctrl = config::get('CTRL', 'index');
            $this->action = config::get('ACTION', 'index');
        }
    }
}