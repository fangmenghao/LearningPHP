<?php
/**
 * Created by PhpStorm.
 * User: Derek
 * Date: 2018/11/29
 * Time: 21:41
 */

namespace core\lib;

class model extends \PDO
{
    function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=test";
        $username = "root";
        $password = "123456";
        try {
            parent::__construct($dsn, $username, $password);
        } catch (\PDOException $e) {
            p($e->getMessage());
        }
    }
}