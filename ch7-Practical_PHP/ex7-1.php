<?php

    // demonstrate printf output

    echo "<pre>";   // enables viewing of the spaces

    // pad to 15 spaces
    printf("The result is $%15f\n", 123.42 / 12);

    // pad to 15 spaces, fill with zeroes
    printf("The result is $%015f\n", 123.42 / 12);

    // Pad to 15 spaces, 2 decimal places precision
    printf("The result is $%15.2f\n", 123.42 / 12);

    // pad to 15 spaces, 2 decimal spaces precision, fill with zeroes
    printf("The result is $%015.2f\n", 123.42 / 12);

    // pad to 15 spaces, 2 decimal places precision, fill with # symbol
    printf("The result is $%'#15.2f\n", 123.42 / 12);

