<?php

    // create a table for zoo's big cats

    require_once '../login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);

    $query = "create table cats(
        id smallint not null auto_increment,
        family varchar(32) not null,
        name varchar(32) not null,
        age tinyint not null,
        primary key (id)
    )";

    $result = $conn->query($query);
    if (!$result) die ("Database access failed: " . $conn->error);
