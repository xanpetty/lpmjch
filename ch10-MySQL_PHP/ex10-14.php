<?php

    // see id after inserting new row

    require_once '../login.php';
    $conn = new mysqli($hn,$un,$pw,$db);
    if ($conn->connect_error) die($conn->connect_error);

    $query = "insert into cats values(null, 'Lion', 'Leroy', 7)";
    $result = $conn->query($query);
    if (!$result) die ("Database access failed: " . $conn->error);

    print_r($conn);

    // example in text was wrong and last part was: "$result->insert_id;"
    print("The insert ID was: " . $conn->insert_id);
