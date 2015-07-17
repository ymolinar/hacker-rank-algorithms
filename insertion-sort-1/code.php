<?php
/**
 * Created by PhpStorm.
 * User: yulier
 * Date: 17/07/15
 * Time: 13:17
 */
function  insertionSort($ar)
{
    if (1 === count($ar)) {
        print $ar[0] . PHP_EOL;
    } elseif (2 === count($ar)) {
        $p = $ar[1];
        $ar[1] = $ar[0];
        print implode(' ', $ar) . PHP_EOL;
        $ar[0] = $p;
        print implode(' ', $ar) . PHP_EOL;
    } else {
        $i = count($ar) - 2;
        $p = $ar[count($ar) - 1];
        while ($i >= 0) {
            if ($ar[$i] <= $p) {
                $ar[$i + 1] = $p;
                break;
            } else {
                $ar[$i + 1] = $ar[$i];
                $i--;
                print implode(' ', $ar) . PHP_EOL;
            }
        }
        if (0 > $i) {
            $ar[0] = $p;
        }
        print implode(' ', $ar) . PHP_EOL;
    }
}

$fp = fopen('php://stdin', 'r');
fscanf($fp, '%d', $m);
$ar = array();
$s = fgets($fp);
$ar = explode(' ', $s);
$l = count($ar);
for ($i = 0; $i < $l; $ar[$i++] += 0) {
    ;
}
insertionSort($ar);