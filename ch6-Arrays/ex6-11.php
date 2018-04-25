<?php

    // create a multidimensional numeric array

    $chessboard = array(
        array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'),
        array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
        array('_', '_', '_', '_', '_', '_', '_', '_'),
        array('_', '_', '_', '_', '_', '_', '_', '_'),
        array('_', '_', '_', '_', '_', '_', '_', '_'),
        array('_', '_', '_', '_', '_', '_', '_', '_'),
        array('P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
        array('R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R')
    );

    echo "<pre>";

    foreach($chessboard as $row)
    {
        foreach ($row as $piece) { echo "$piece "; }

        echo "<br>";
    }

    echo "</pre>";
