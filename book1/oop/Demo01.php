<?php

/**
 * Created by PhpStorm.
 * User: Derek
 * Date: 2018/11/25
 * Time: 0:00
 */
class Foo
{
    private $title;

    function __construct($title="123")
    {
        $this->title = $title;
        echo $this->title;
        echo "<br/>";
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "destruct";
    }

    static public function test() {
        self::test();
    }

    static function getString() : int {
        return "1";
    }
}

$f = new Foo();
echo $f->getString();