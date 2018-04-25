<?php

    // defining a class with static properties

    $temp = new Test();

    echo "Test A: " . Test::$static_property  . "<br>";
    echo "Test B: " . $temp->get_sp()         . "<br>";
    echo "Test C: " . $temp->$static_property . "<br>"; // fails with error cannot access empty property

    class Test
    {
        static $static_property = "I'm static";

        function get_sp() { return self::$static_property; }

    }
