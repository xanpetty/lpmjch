<?php

    // loop to print 12 times table
    // demonstrates do...while loop

    $count = 1;

    echo "The 12 times table:<br><br>";
    do { echo "$count times 12 is " . $count * 12 . "<br>"; }
    while (++$count <= 12);
