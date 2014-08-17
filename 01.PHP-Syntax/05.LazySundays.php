<?php

$currMonth = date("n");
$currDayOfMonth = date("1-${currMonth}-Y");
$sundays = array();
while (date("D", strtotime($currDayOfMonth)) != "Sun") {
    $currDayOfMonth = date("d-n-Y", strtotime($currDayOfMonth . ' + 1 days'));
}
$sundays[] = date("jS F, Y", strtotime($currDayOfMonth));
while (date("n", strtotime($currDayOfMonth . " + 1 weeks")) == $currMonth) {
    $currDayOfMonth = date("d-n-Y", strtotime($currDayOfMonth . " + 1 weeks"));
    $sundays[] = date("jS F, Y", strtotime($currDayOfMonth));
}
echo "During " . date("F", strtotime(date("d") . "-" . $currMonth . "-" . date("Y"))) . " there are " . sizeof($sundays) . " Sundays:" . "\n";
echo implode("\n", $sundays);