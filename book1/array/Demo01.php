<?php
/**
 * Created by PhpStorm.
 * User: Derek
 * Date: 2018/11/24
 * Time: 12:43
 */

$city[0] = "tets";
$city["test"] = "ttt";

var_dump($city);
echo "<br/>";

unset($city);

$city[] = "1";
$city[] = "2";
$city[] = "3";

var_dump($city);
echo "<br/>";

unset($city);

$city = array(
    0 => 0,
    "1" => 1,
    "test" => "1",
    2 => "fff"
);

var_dump($city);
echo "<br/>";
