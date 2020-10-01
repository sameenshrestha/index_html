<?php
include('../config/database.php');

if($_POST){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $SQL = "UPDATE users set first_name = '$first_name' , last_name = '$last_name' , address = '$address' , email = '$email' WHERE id = '$id'";
    $result = $conn->query($SQL);
    if($result){
        header ('location:c../index.php');
    }
    esle {
        echo $conn->error;
    }
}
?>