<?php
  require_once 'header.php';

  echo "<br><span class='main'> Welcome to $appname,";

  if ($loggedin) echo " $user, you are logged in.";
  else           echo ' please sign up and/or log in.';
?>

    </span>
  </body>
</html>
