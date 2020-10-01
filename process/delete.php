<?php
    include('../config/database.php');
    if($_GET && $_GET['id']){
        $sql = "DELETE FROM users where id = ". $_GET ['id'];
        $result = $conn->query($sql);
        if(result){
            header ('location:../index.php');
        }
        else{
            echo $conn->eroor;
        }

    }
    else{
        echo "you forgot the id";
    }
?>