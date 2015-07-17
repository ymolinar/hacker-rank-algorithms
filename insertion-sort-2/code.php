<?php
/**
 * Created by PhpStorm.
 * User: yulier
 * Date: 17/07/15
 * Time: 13:28
 */

function  insertionSort($ar)
{
    $l = count($ar);
    for ($i = 1; $i < $l; $i++) {
        $x = $ar[$i];
        $j = $i;
        while ($j > 0 && $ar[$j - 1] > $x) {
            $ar[$j] = $ar[$j - 1];
            $j--;
        }
        $ar[$j] = $x;
        print implode(' ', $ar) . PHP_EOL;
    }
}

$fp = fopen('php://stdin', 'r');


fscanf($fp, '%d', $m);
$temp = fgets($fp);
$arr = explode(' ', $temp);

for ($i = 0; $i < $m; $i++) {
    $arr[$i] = (int) $arr[$i];
}
insertionSort($arr);