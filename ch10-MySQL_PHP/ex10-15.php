<<?php

    // performing a secondary query

    require_once '../login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);

    $query = "select * from customers";
    $result = $conn->query($query);
    if (!$result) die ("Database access failed: " . $conn->error);

    $rows = $result->num_rows;

    for ($j = 0; $j < $rows; ++$j)
    {
        $result->data_seek($j);
        $row = $result->fetch_array(MYSQLI_NUM);
        print("$row[0] purchased ISBN $row[1]:<br>");
        $subquery = "select * from classics where isbn='$row[1]'";
        $subresult = $conn->query($query);
        if (!$subresult) die ("Database access failed: " . $conn->error);

        $subrow = $subresult->fetch_array(MYSQLI_NUM);
        echo " '$subrow[1]' by $subrow[0]<br>";
    }
