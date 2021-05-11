<?php
    // define('DB_SERVER', 'sql6.freemysqlhosting.net');
    // define('DB_USERNAME', 'sql6411442');
    // define('DB_PASSWORD', 'MITAm4BqdA');
    // define('DB_NAME', 'sql6411442');

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