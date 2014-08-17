<?php

$n = 1234;

echo returnNumbers($n);
function returnNumbers($n)
{
    $output = array();
    for ($i = 102; $i <= 999; $i++) {
        if (((string)$i == implode("", array_unique(str_split((string)$i)))) && $i <= $n) {
            $output[] = $i;
        }
    }
    if (sizeof($output) == 0) {
        return "no";
    }
    return implode("\n", $output);
}