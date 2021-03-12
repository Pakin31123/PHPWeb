<meta charset="UTF-8">
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

$sql = "INSERT INTO product (product_name,product_type,product_price,product_detail,product_img)
VALUES ('{$_POST['product_name']}','{$_POST['product_type']}', '{$_POST['product_price']}','{$_POST['product_detail']}','$newname')";

        if ($con->query($sql) === TRUE) {
            echo "<script type='text/javascript'>";
            echo "alert('เพิ่มสินค้าสำเร็จ');";
            echo "window.location = 'Add_From.php'; ";
            echo "</script>";
        } 
        else
        {
            echo "<script type='text/javascript'>";
            echo "alert('เพิ่มสินค้าไม่สำเร็จ');";
            echo "window.location = 'Add_From.php'; ";
            echo "</script>";	
        }

        $con->close();
	
}
else
{
    echo "<script type='text/javascript'>";
    echo "alert('ไม่พบข้อมูลสินค้า');";
    echo "window.location = 'Add_From.php'; ";
    echo "</script>";
}
?>