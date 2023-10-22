<?php
/* program_variabile.php */

$mixedVar = 1;

$integerVar = 2;
$stringVar = "text";
$listVar = ["", 22];

function test_string(string $s) {
    echo $s;
}

test_string($listVar);
