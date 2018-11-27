<?php
/**
 * Created by PhpStorm.
 * User: Derek
 * Date: 2018/11/24
 * Time: 3:14
 */
$out = 123;
$out2 = 456;
function func1(&$out, $out2) {
    # 可以更改$out的值
}

function func2($min = 123) {
    echo $min;
}

# Counter可以是一个类
function func3(Counter $counter) {

}

func2(111);
func2();