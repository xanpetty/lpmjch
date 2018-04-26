<?php

    // delete a file

    if (!unlink('testfile2.new')) echo "Could not delete file";
    else echo "testfile2.new deleted";
