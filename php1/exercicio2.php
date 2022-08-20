<?php

for ($x = 0; $x < 20; $x++) {
    echo str_repeat('-', $x) . '<br>';
}

for ($a = 0; $a < 20; $a++) {
    for ($b = 0; $b < $a; $b++) {
        echo '-';
    }
    echo '<br>';
}