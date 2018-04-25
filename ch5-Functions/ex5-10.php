<?php

    // Declare a class and examine an object

    $object = new User;
    print_r($object);

    class User
    {
        public $name, $password;

        function save_user() { echo "Save user code goes here."; }
    }

