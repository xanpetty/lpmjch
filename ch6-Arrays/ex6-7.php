<?php

    // demonstrate foreach loop with an array

    $paper = array('copier' => "Copier & Multipurpose",
                   'inkjet' => "Inkjet Printer",
                   'laser'  => "Laser Printer",
                   'photo'  => "Photo Paper");

    foreach($paper as $item => $description){ echo "$item: $description\n"; }
