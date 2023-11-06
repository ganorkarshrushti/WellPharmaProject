<?php
include('config.php');

if(isset($_POST['submit']))
{   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];

    $sql = "INSERT INTO contact (Name, Phone , Email, Message) VALUES ('$name', '$phone', '$email', '$msg');";
    mysqli_query($conn,$sql);
}
?>