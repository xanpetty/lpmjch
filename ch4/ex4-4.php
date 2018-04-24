<?php

    /*
        demonstrates the difference between an expression and a statement
        an expression is evaluated and has a value
        a statement is a line of code that gets executed
    */
    $daysInYear = 366; //Expression

    $today = date("z");

    $daysUntilNewYear = $daysInYear - $today;

    if ($daysUntilNewYear < 30)
    {
        print("Not long now until the new year.");
    } else
    {
        echo($daysUntilNewYear . " days left until the new year");
    }
