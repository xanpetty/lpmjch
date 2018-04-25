<?php

    // clean up full names
    // similar to 5-2 but demonstrates passing variable by reference

    $n = array("WILLIAM", "henry", "gatES");
    fix_names($n[0],$n[1],$n[2]);
    echo $n[0] . " " . $n[1] . " " . $n[2] . "\n";

    function fix_names(&$n0, &$n1, &$n2)
    {
        $n0 = ucfirst(strtolower($n0));
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
    }
