<?php require_once'../database.php';?>
<?php
    $guest_PhoneNumber = $_POST["guest_PhoneNumber"];
    $create_randomnumber=$_POST["randomnumber"];
    if($guest_PhoneNumber!=-1){
        $sql="DELETE FROM `client` WHERE `phonenumber`=$guest_PhoneNumber";
        $result=$conn -> query($sql);
        }
    else{
        $sql1="DELETE FROM `room` WHERE `random`=$create_randomnumber";
        $sql2="DELETE FROM `client` WHERE `randomnumber`=$create_randomnumber";
        $result=$conn -> query($sql2);
        $result1=$conn -> query($sql1);
        unlink($create_randomnumber.'.php');
    }
        ?>