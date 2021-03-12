<?php
$id = $_GET['id'];
$check = $_GET['checktable'];
include 'Main_Page.php';
if($check == 'product'){
$sql = "DELETE FROM product WHERE product_id = $id"; 

        if (mysqli_query($con, $sql)) {
            mysqli_close($con);
            header('Location: Del_Edit_Product.php');
            exit;
        } else {
            echo "ไม่สามารถลบได้";
        }
}
elseif($check == 'user'){
{
        $sql = "DELETE FROM user WHERE user_id = $id"; 

        if (mysqli_query($con, $sql)) {
            mysqli_close($con);
            header('Location: Show_User.php');
            exit;
        } else {
            echo "ไม่สามารถลบได้";
}
}
}
elseif($check == 'cart'){
    {
            $sql = "DELETE FROM cart WHERE CartID = $id"; 
    
            if (mysqli_query($con, $sql)) {
                mysqli_close($con);
                header('Location: Cart_From.php');
                exit;
            } else {
                echo "ไม่สามารถลบได้";
                
}
}
}
elseif($check == 'order'){
    {
            $sql = "DELETE FROM order_product WHERE order_id = $id"; 
    
            if (mysqli_query($con, $sql)) {
                mysqli_close($con);
                header('Location: Show_Order.php');
                exit;
            } else {
                echo "ไม่สามารถลบได้";
                
}
}
}
elseif($check == 'report'){
    {
            $sql = "DELETE FROM report WHERE report_id = $id"; 

            if (mysqli_query($con, $sql)) {
                mysqli_close($con);
                header('Location: Show_Report.php');
                exit;
            } else {
                echo "ไม่สามารถลบได้";
                
}
}
}
?>