<?php

    require_once '../login.php';
    $connection = new mysqli($hn,$un,$pw,$db);

    if ($connection->connect_error) die($connection->connect_error);

    $query = "create table users (
        forename varchar(32) not null,
        surname  varchar(32) not null,
        username varchar(32) not null unique,
        password varchar(32) not null
    )";
    $result = $connection->query($query);
    if (!$result) die($connection->error);

    $salt1 = "qm&h*";
    $salt2 = "pg!@";

    $forename = 'Bill';
    $surname  = 'Smith';
    $username = 'bsmith';
    $password = 'mysecret';
    $token    = hash('ripemd128', $salt1 . $password . $salt2);

    add_user($connection, $forename, $surname, $username, $token);

    $forename = 'Pauline';
    $surname  = 'Jones';
    $username = 'pjones';
    $password = 'acrobat';
    $token    = hash('ripemd128', $salt1 . $password . $salt2);

    add_user($connection, $forename, $surname, $username, $token);

    function add_user($connection, $fn, $sn, $un, $pw)
    {
        $query  = "insert into users values('$fn', '$sn', '$un', '$pw')";
        $result = $connection->query($query);
        if (!$result) die($connection->error);
    }
