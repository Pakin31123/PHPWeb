<?php
include 'Connect.php';
$sql = "INSERT INTO `order_product`(`order_id`, `user_id`, `user_name`, `address`, `phone`, `product_name`, `all_price`, `dateup`, `status`) 
VALUES (NULL, '{$_POST['user_id']}', '{$_POST['user_name']}', '{$_POST['address']}','{$_POST['phone']}','{$_POST['product_name']}', '{$_POST['All_product_price']}',Null, 'รอการชำระเงิน')";
        if ($con->query($sql) === TRUE) {

            //ล้างรถเข็น--------------------//
            $id = $_POST['user_id'];
            $Delsql = "DELETE FROM cart WHERE user_id = $id"; 
            if (mysqli_query($con, $Delsql)) {
            }
    

            //--------------------------//


            echo "<script type='text/javascript'>";
            echo "alert('เพิ่มใบสั่งซื้อสินค้าสำเร็จ');";
            echo "window.location = 'Cart_From.php'; ";
            echo "</script>";
        } 
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('เพิ่มใบสั่งซื้อสินค้าไม่สำเร็จ');";
            echo "window.location = 'Cart_From.php'; ";
            echo "</script>";	
        }

        $con->close();
?>
