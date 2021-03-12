<?php
    include('Connect.php');
    $upload = $_FILES['fileupload'];
    if($upload != '') {   
    $path="PicUpload/";  
    date_default_timezone_set('Asia/Bangkok');
    $date = date("Ymd");	
         $numrand = (mt_rand());
     $type = strrchr($_FILES['fileupload']['name'],".");
        
                $newname = $date.$numrand.$type;
                $path_copy=$path.$newname;
                $path_link="PicUpload/".$newname;
    
    move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);  
    $sql= "UPDATE product SET  
    product_name    = '{$_POST['product_name']}',
    product_type    = '{$_POST['product_type']}',
    product_price   = '{$_POST['product_price']}',
    product_detail  = '{$_POST['product_detail']}',
    product_img     = '$newname'
    WHERE product_id = {$_POST['product_id_test']}";
    
    if ($con->query($sql) === TRUE) {
    header("Location: Del_Edit_Product.php");
    }
    else 
    {
    echo "Error updating record: " . $con->error;
    }
}
?>