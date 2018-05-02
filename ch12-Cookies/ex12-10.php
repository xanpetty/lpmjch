<?php

    // session regeneration so that attackers can't take over a session that was left open
    // by another user as easily

    if (!isset($_SESSION['initiated']))
    {
        session_regenerate_id();
        $_SESSION['initiated'] = 1;
    }

    if (!isset($_SESSION['count'])) { $_SESSION['count'] = 0; }
    else { ++$_SESSION['count']; }

    print($_SESSION['count']);
    print('<br>');
    print_r($_SESSION);
