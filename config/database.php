<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'shehani');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'rr_parking');

    $connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if ($connection->connect_error) {
        die('Connection Failed ' . $connection->connect_error);
    }

?>