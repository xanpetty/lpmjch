<?php

    // valid and invalid property definitions
    // default values must be constants and not the result of a function or expression

    class Test
    {
        public $name = "Paul Smith";    // valid
        public $age  = 42;               // valid
        public $time = time();          // not valid, fails with error
        public $score = 4 * 2;          // not valid
    }
