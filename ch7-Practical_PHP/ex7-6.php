<?php

    // read a file with fread

    $fh = fopen("testfile.txt", 'r') or die("Could not open file. Does it exist?");

    $text = fread($fh, 3);      // requests 3 characters from file
    $text2 = fread($fh, 6);
    fclose($fh);
    echo $text;
    echo $text2;
