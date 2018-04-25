<?php

    // demonstrate foreach loop with an array

    $paper = array("Copier", "Inkjet", "Laser", "Photo");

    $j = 0;

    foreach($paper as $item)
    {
        echo "$j: $item\n";
        ++$j;
    }
