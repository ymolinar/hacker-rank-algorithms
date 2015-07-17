<?php
/**
 * Created by PhpStorm.
 * User: yulier
 * Date: 17/07/15
 * Time: 13:07
 */
$tc = (int) readline('');
$as = array();
for ($t = 0; $t < $tc; $t++) {
    $s = readline('');
    $d = $i = 0;
    $j = 1;
    while ($j < strlen($s)) {
        if ($s[$i] === $s[$j]) {
            $d++;
            $j++;
        } else {
            $i = $j;
            $j++;
        }
    }
    $as[] = $d;
}
print implode(PHP_EOL, $as) . PHP_EOL;