<?php

    // copy a file

    copy('testfile.txt', 'testfile2.txt') or die("Could not copy file.");
    echo "File copied.";
