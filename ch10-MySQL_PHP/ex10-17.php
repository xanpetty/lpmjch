<?php

    // safely access MySQL with user input

    require_once '../login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);

    $user  = mysql_fix_string($conn, $_POST['user']);
    $pass  = mysql_fix_string($conn, $_POST['pass']);
    $query = "select * from users where user='$user' and pass='$pass'";

    function mysql_fix_string($conn, $string)
    {
        if (get_magic_quotes_gpc()) { $string = stripslashes($string); }

        return $conn->real_escape_string($string);
    }
