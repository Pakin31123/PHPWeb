<?php
include 'Connect.php';
$sql = "INSERT INTO user (firstname, lastname,address,phone,password,email,status)
    VALUES ('{$_POST['firstname']}','{$_POST['lastname']}','{$_POST['address']}','{$_POST['phone']}','{$_POST['password']}','{$_POST['email']}','User')";

    if ($con->query($sql) === TRUE) {

        header("Location: Complete.php");

    } else {
    echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();

?>