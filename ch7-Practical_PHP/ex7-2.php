<?php

    // demonstrates string padding

    echo "<pre>";   // enables viewing spaces

    $h = 'Rasmus';

    printf("[%s]\n",        $h);    // standard string output
    printf("[%12s]\n",      $h);    // right justify with spaces to width 12
    printf("[%-12s]\n",     $h);    // left justify with spaces to width 12
    printf("[%012s]\n",     $h);    // zero pads to width of 12
    printf("[%'#12s]\n",    $h);    // pads to 12 with specially defined character '#'

    $d = 'Rasmus Lerdorf';  // Original creator of PHP

    printf("[%12.8s]\n",    $d);    // right justify, cutoff of 8 characters
    printf("[%-12.12s]\n",  $d);    // left justify, cutoff of 12 characters
    printf("[%-'@12.10s]\n",$d);    // left justify, pad '@', cutoff 10 characters

    echo "</pre>";
