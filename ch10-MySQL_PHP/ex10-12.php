<?php

    // update info in cats table

    require_once '../login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);

    $query = "update cats set name='Charlie' where name='Charly'";
    $result = $conn->query($query);
    if (!$result) die ("Database access failed: " . $conn->error);
