<?php

    // demonstrate $this

    class User
    {
        public $name, $password;

        function get_password() { return $this->password; }
    }
