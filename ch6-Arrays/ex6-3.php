<?php

    // demonstrates adding items to an array

    $paper[] = "Copier";
    $paper[] = "Inkjet";
    $paper[] = "Laser";
    $paper[] = "Photo";

    for ($j = 0; $j < 4; ++$j) { echo "$j: $paper[$j]\n"; }
