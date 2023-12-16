<?php
// Enter your code here, enjoy!

$int = array('1', '2', '3', '4', '2', '4', '3');
$count = count($int);
$d = 1;
for ($i = 0; $i < $count; $i++) {
    if ($int[$i] == $int[$d]) {
        echo $int[$d];
    }

    $d++;
}
