<?php
    // require('config.php');

    $servername = getenv('host');
    $dbname = getenv('dbname');
    $username = getenv('username');
    $password = getenv('password');

      try {
        $conn = new mysqli($servername, $username, $password, $dbname);
          
          // ERRMODE_EXCEPTION: 拋出 exceptions 異常。ATTR_ERRMODE：錯誤報告。
      } catch (PDOException $e){

        echo "Connected Failed: " . $e->getMessage();
      }

?>