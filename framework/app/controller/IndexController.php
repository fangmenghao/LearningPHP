<?php
/**
 * Created by PhpStorm.
 * User: Derek
 * Date: 2018/11/28
 * Time: 22:39
 */
namespace app\controller;

class IndexController extends \core\gnaf
{
    public function index() {
        $this->assign('data', 'Gnaf');
        $this->display('index.html');
    }
}