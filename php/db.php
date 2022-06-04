<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '1111');
    define('DB_NAME', 'accounting');
    define('DB_PORT', '3306');

    $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
    if ($mysql->connect_errno) {
//        exit('Error db is naebnuta');
        echo 'pizda';
    }


    $mysql->set_charset('utf8');

    $result = mysqli_query($mysql, "SELECT * FROM accounting.constructor_test");

    if ($result == null) {
        echo 'pizda';
    }
//
//    $mysql->close();
//
//    if ($mysql->connect_errno) {
//        exit('Error db is naebnuta');
//        echo 'pizda';
//    }

?>