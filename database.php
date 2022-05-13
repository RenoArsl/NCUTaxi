<?php
    // require('config.php');

    $servername = getenv('host');
    $dbname = getenv('dbname');
    $username = getenv('username');
    $password = getenv('password');

    $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Error " . mysqli_error($conn));
    if ($error = mysqli_connect_error()) {
      echo '<pre>' . print_r($error, TRUE) . '</pre>';
    }
?>