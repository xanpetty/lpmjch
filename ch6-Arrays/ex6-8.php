<?php

    // walking through an associative array with 'each' and 'list'

    $paper = array('copier' => "Copier & Multipurpose",
                   'inkjet' => "Inkjet Printer",
                   'laser'  => "Laser Printer",
                   'photo'  => "Photo Paper");

    while (list($item, $description) = each($paper)) { echo "$item: $description\n"; }
