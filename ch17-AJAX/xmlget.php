<?php

  // demonstrate getting XML with AJAX

  if (isset($_GET['url']))
  {
    header('Content-type: text/xml');
    echo file_get_contents("http://".sanitizeString($_GET['url']));
  }

  function sanitizeString($var)
  {
    $var = strip_tags($var);
    $var = htmlentities($var);
    return stripslashes($var);
  }
