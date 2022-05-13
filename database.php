<?php
    // require('config.php');

    $servername = getenv('host');
    $dbname = getenv('dbname');
    $username = getenv('username');
    $password = getenv('password');

      try {
        $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Error " . mysqli_error($conn));
        if ($error = mysqli_connect_error()) {
            echo '<pre>' . print_r($error, TRUE) . '</pre>';
        }
          // ERRMODE_EXCEPTION: 拋出 exceptions 異常。ATTR_ERRMODE：錯誤報告。
      } catch (PDOException $e){

        echo "Connected Failed: " . $e->getMessage();
      }

?>