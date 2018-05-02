<?php

    // function to destroy session cookie

    function destroy_session_and_data()
    {
        session_start();
        $_SESSIOn = array();
        setcookie(session_name(), '', time() - 2592000, '/');
        session_destroy();
    }
