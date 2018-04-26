<?php

    // check validity of date with checkdate() function

    $month =    9; // September
    $day   =   31; // 31; September only has 30 days
    $year  = 2018;

    if (checkdate($month, $day, $year)) { echo "Date is valid"; }
    else { echo "Date is invalid."; }
