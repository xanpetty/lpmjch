<?php

    // deleting data

    require_once '../login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);

    $query = "delete from cats where name='Growler'";
    $result = $conn->query($query);
    if (!$result) die ("Database access failed: " . $conn->error);
