<?php

    // demonstrate moving a file

    if (!rename('testfile2.txt', 'testfile2.new')) echo "Could not rename file.";
    else echo "File renamed 'testfile2.new'";
