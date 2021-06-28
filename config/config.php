<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '3112');
    define('DB_NAME', 'event-manager');
    /* Attempt to connect to database */
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    //check connection
    if($link === false){
        die("ERROR: Could not connect to server." . mysqli_connect_error());
    }
?>