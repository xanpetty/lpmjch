<?php

    // example 10-8 on pg 249 in the book

    require_once '../login.php';

    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);

    // change table to get different results
    $table = 'cats';

    $query = "describe {$table}";
    $result = $conn->query($query);
    if (!$result) die ("Database access failed: " . $conn->error);

    $rows = $result->num_rows;

    print("<h3> Current table: {$table} </h3>");

    print("<table>
             <tr>
               <th>Column</th>
               <th>Type</th>
               <th>Null</th>
               <th>Key</th>
             </tr>");

    for ($j = 0; $j < $rows; ++$j)
    {
        $result->data_seek($j);
        $row = $result->fetch_array(MYSQLI_NUM);

        print('<tr>');
        for ($k = 0; $k < 4; ++$k) { print("<td>$row[$k]</td>"); }
        print('</tr>');
    }

    print("</table");
