<?php

    // demonstrates use of ternary operator

    function fuel_check($fuel) { $fuel = $fuel <= 1.0 ? 10.0 : $fuel; return $fuel; }

    $gas = 0.5;
    print("Current gallons of fuel: " . $gas .  "\n");
    $gas = fuel_check($gas);
    print("Stopped for fuel and now there are " . $gas . " gallons of fuel.\n");
