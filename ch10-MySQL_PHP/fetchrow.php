<?php

    // copy of query.php but it fetches a row at a time

    require_once '../login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);

    $query = "select * from classics";
    $result = $conn->query($query);
    if (!result) die($conn->error);

    $rows = $result->num_rows;

    for ($j = 0; $j < $rows; ++$j)
    {
        $result->data_seek($j);
        $row = $result->fetch_array(MYSQLI_ASSOC);

        echo 'Author: ' .   $row['author'] . '<br>';
        $result->data_seek($j);
        echo 'Title: ' .    $row['title'] . '<br>';
        $result->data_seek($j);
        echo 'Category: ' . $row['category'] . '<br>';
        $result->data_seek($j);
        echo 'Year: ' .     $row['year'] . '<br>';
        $result->data_seek($j);
        echo 'ISBN: ' .     $row['isbn'] . '<br><br>';
    }

    $result->close();
    $conn->close();
