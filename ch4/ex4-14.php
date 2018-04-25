<?php

    // demonstrates inequality and not identical operators
    // it returns 2 because the strings are not identical however
    // it doesn't return 1 because the strings are converted to equal integers first

    $a = "1000";
    $b = "+1000";

    if ($a != $b) echo "1";
    if ($a !== $b) echo "2";
