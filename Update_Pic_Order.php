<?php
    session_start(); 
    include('Connect.php');
    $upload = $_FILES['fileupload'];
    if($upload != '') {   
    $path="PicOrder/";  
    date_default_timezone_set('Asia/Bangkok');
    $date = date("Ymd");	
         $numrand = (mt_rand());
    $type = strrchr($_FILES['fileupload']['name'],".");
                $newname = $date.$numrand.$type;
                $path_copy=$path.$newname;
                $path_link="PicOrder/".$newname;
    move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);  

    $id =  $_POST['order_id'];
    $sql= "UPDATE order_product SET order_img  = '$newname',
    status = 'อัพภาพแล้วรอการตรวจสอบ'
    WHERE order_id =  $id ";
  
    if ($con->query($sql) === TRUE) {
    header("Location: Show_Order.php");
    }
    else 
    {
    echo "Error updating record: " . $con->error;
    }
}
?>