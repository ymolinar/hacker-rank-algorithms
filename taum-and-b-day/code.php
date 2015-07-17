<?php
/**
 * Created by PhpStorm.
 * User: yulier
 * Date: 17/07/15
 * Time: 11:34
 */
$tc = (int) readline('');
$as = array();
for ($t = 0; $t < $tc; $t++) {
    list($b, $w) = explode(' ', readline(''));
    list($x, $y, $z) = explode(' ', readline(''));
    $u = array(($b * $x) + ($w * $y), ($b * ($y + $z)) + ($w * $y), ($b * $x) + ($w * ($x + $z)));
    sort($u);
    $as[] = $u[0];
}
print implode(PHP_EOL, $as) . PHP_EOL;