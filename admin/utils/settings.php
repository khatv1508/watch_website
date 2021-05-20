<?php
    // define('DB_SERVER', 'https://watch-web-shop.000webhostapp.com/');
    // define('DB_USERNAME', 'id16850513_root');
    // define('DB_PASSWORD', 'znOu\Dq~d<G*T8l%');
    // define('DB_NAME', 'id16850513_dongho');

    // php local
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'dongho');

    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // check connect
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }