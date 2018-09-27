<?php 

    // Require constants file
    require 'constants.php';

    // Connection to DB
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(mysqli_connect_errno()){
        echo 'Cannot connect to Database..';
    }