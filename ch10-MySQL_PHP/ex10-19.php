<?php

    // issuing prepared statements

    require_once '../login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);

    $stmt = $conn->prepare('insert into classics values(?,?,?,?,?)');
    $stmt->bind_param('sssss', $author, $title, $category, $year, $isbn);

    $author   = 'Emily Brontë';
    $title    = 'Wuthering Heights';
    $category = 'Classic Fiction';
    $year     = '1847';
    $isbn     = '9780553212587';

    $stmt->execute();
    printf("%d Row inserted.\n", $stmt->affected_rows);
    $stmt->close();
    $conn->close();
