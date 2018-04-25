<?php
    // demonstrates PHP is loosely typed and that numbers that are strings will be converted
    // to numbers

    $a = "1000";
    $b = "+1000";

    if ($a == $b) echo "1";
    if ($a === $b) echo "2";

    // the output is 1 because when converted they are both equal to 1000 however === checks
    // identity of the strings and doesn't convert them to a number
