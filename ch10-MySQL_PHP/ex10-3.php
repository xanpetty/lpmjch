<php

    // example of a query

    $query  = "Select * from classics";
    $result = $conn->query($query);
    if (!$result) die($conn->error);
