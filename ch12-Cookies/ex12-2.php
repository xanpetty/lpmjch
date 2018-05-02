<?php

    // authentication with input checking

    $username = 'admin';
    $password = 'letmein';

    if (
            isset($_SERVER['PHP_AUTH_USER']) &&
            isset($_SERVER['PHP_AUTH_PW'])
        )
    {
        if ($_SERVER['PHP_AUTH_USER'] == $username &&
            $_SERVER['PHP_AUTH_PW']   == $password)
        {echo "you are logged in";}
        else die("Unvalid username / password combination");
    }
    else
    {
        header('WWW-Authenticate: Basic realm="Restricted Section"');
        header('HTTP/1.0 401 Unauthorized');
        die ("Please enter your username and password");
    }
