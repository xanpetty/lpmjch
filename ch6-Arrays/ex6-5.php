<?php

    // adding items using array keyword

    $p1 = array("Copier", "Inkjet", "Laser", "Photo");

    echo "p1 element: " . $p1[2] . "<br>";

    $p2 = array('copier' => "Copier & Multipurpose",
                'inkjet' => "Inkjet Printer",
                'laser'  => "Laser Printer",
                'photo'  => "Photo Paper");

    echo "p2 element: " . $p2['inkjet'] . "<br>";
