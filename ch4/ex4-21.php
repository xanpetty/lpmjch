<?php

    // demonstrates if, elseif, else

    $bankBalance = 88;

    print($bankBalance . "\n");

    if     ($bankBalance < 100) { $money = 100; $bankBalance += $money; } // this is ridiculous
    elseif ($bankBalance > 200) { $savings += 100; $bankBalance -= 100; }
    else                        { $savings += 50;  $bankBalance -= 50;  }

    print($bankBalance . "\n");
