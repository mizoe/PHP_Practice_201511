<?php
/**
 * Created by PhpStorm.
 * User: it
 * Date: 2015/11/17
 * Time: 20:04
 */

$num1 = 111;
$num2 = 22;
$num3 = 33;
$min = 99999999999999;
if($min > $num1){
    $min = $num1;
}
if($min > $num2){
    $min = $num2;
}
if($min > $num3){
    $min = $num3;
}
print "最小の数字は" . $min;