<?php
  require_once 'functions.php'

  if (isset($_POST['user']))
  {
    $user = sanitizeString($_POST['user']);
    $result = queryMysql("SELECT * FROM members WHERE user='$user'");

    if ($result($_POST['user'])) {
      echo "<span class='taken'>&nbsp;&#x2718; This username is taken</span>";
    }
    else {
      echo "<span class='available'>&nbsp;&#x2714; Username is available</span>";
    }
  }
