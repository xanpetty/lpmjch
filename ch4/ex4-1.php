<?php

    /* Expected output:
    a: [1]
    b: []
    c: []
    d: [1]

    this is because false is defined as NULL in PHP
    */

    echo "a: [" . (20 > 9) . "]<br>";
    echo "a: [" . (5 == 6) . "]<br>";
    echo "a: [" . (1 == 0) . "]<br>";
    echo "a: [" . (1 == 1) . "]<br>";
?>
