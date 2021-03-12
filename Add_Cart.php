<?php
session_start();
include 'Connect.php';
$sql = "INSERT INTO `cart` (`CartID`, `user_id`, `user_name`, `product_id`, `product_name`, `product_price`, `product_img`, `Cart_status`) 
VALUES (NULL, '{$_GET['user_id']}', '{$_GET['user_name']}', '{$_GET['product_id']}', '{$_GET['product_name']}', '{$_GET['product_price']}', '{$_GET['product_img']}', 'รอดำเนินการ')";

if ($con->query($sql) === TRUE) {
    echo "<script type='text/javascript'>";
    echo "alert('เพิ่มสินค้าสำเร็จ');";
    echo "window.location = 'Show_Product.php'; ";
    echo "</script>";
} 
else 
{
    
    echo "<script type='text/javascript'>";
    echo "alert('เพิ่มสินค้าไม่สำเร็จ');";
    echo "window.location = 'Show_Product.php'; ";
    echo "</script>";	
}
?>