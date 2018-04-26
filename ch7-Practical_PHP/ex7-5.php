<?php

    // read from a file

    $fh = fopen("testfile.txt", 'r') or die("Can not open file. Does it exist?");

    $line = fgets($fh);
    fclose($fh);
    echo $line;
