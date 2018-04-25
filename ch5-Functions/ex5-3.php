<?php

    // clean up full names
    // similar to 5-2 but demonstrates use of arrays

    $n = fix_names("WILLIAM", "henry", "gatES");
    echo $n[0] . " " . $n[1] . " " . $n[2] . "\n";

    function fix_names($n1, $n2, $n3)
    {
        $n0 = ucfirst(strtolower($n1));
        $n1 = ucfirst(strtolower($n2));
        $n2 = ucfirst(strtolower($n3));

        return array($n0, $n1, $n2);
    }
