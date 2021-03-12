<?php
include 'Connect.php';
    $id =  $_GET['id'];
    $sql= "UPDATE order_product SET status = 'ใบเสร็จถูกต้องกำลังส่งของ'
    WHERE order_id =  $id ";

    if ($con->query($sql) === TRUE) {
    header("Location: Show_Order_With_Admin.php");
    }
    else 
    {
    echo "Error updating record: " . $con->error;
    }

?>
