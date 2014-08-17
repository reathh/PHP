<?php

$str = "hello";
$int = 5;
$float = 5.5;
$arr = array(1,2,3);
$obj = (object)["obj", "1"];

echo printOutput($str) . "\n";
echo printOutput($int) . "\n";
echo printOutput($float) . "\n";
echo printOutput($arr) . "\n";
echo printOutput($obj) . "\n";

function printOutput($input)
{
    if (is_numeric($input)) {
        return var_dump($input);
    } else {
        return gettype($input);
    }
}
