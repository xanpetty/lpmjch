<?php

    // retrieve session variables

    session_start();

    if ( isset($_SESSION['username']) )
    {
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        $forename = $_SESSION['forename'];
        $surname  = $_SESSION['surname'];

        print("Welcome back {$forename}.<br>
               Your full name is {$forename} {$surname}.<br>
               Your username is {$username}
               and your password is {$password}.");
    }
    else print("Please <a href='ex12-5.php'>click here</a> to log in.");
