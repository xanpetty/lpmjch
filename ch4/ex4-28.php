<?php

    // demonstrate the while loop
    $fuel = 10.0;

    print("Driving");
    while ($fuel > 1) { $fuel = $fuel - 0.5; print '.'; }
    print("\nCurrent fuel level " . $fuel . " gallons. \nNow refueling.\n");
    $fuel = 10.0;
    print("There are now " . $fuel . " gallons of fuel.\n");
