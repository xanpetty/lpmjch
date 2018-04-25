<?php

    // demonstrate multiple dimension array

    $products = array(
        'paper' => array(
            'copier' => "Copier & Multipurpose",
            'inkjet' => "Inkjet Printer",
            'laser'  => "Laser Printer",
            'photo'  => "Photo Paper"),

        'pens'  => array(
            'ball'   => "Ball Point",
            'hilite' => "Highlighters",
            'marker' => "Markers"),

        'misc'  => array(
            'tape'   => "Sticky Tape",
            'glue'   => "Adhesives",
            'clips'  => "Paperclips")
    );

    echo "<pre>";

    foreach($products as $section => $items)
        foreach($items as $key => $value)
            echo "$section:\t$key\t($value)\n";

    echo $products['misc']['glue'] . "\n";
    echo $products[0][0] . "\n";  // fails because that's not how the array was defined

    echo "</pre>";
