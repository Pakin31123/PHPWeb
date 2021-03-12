<?php
include 'Connect.php';
$sql ="INSERT INTO `report`(`report_id`, `report_name`, `report_who`, `report_phone`, `report_detail`) 
VALUES (Null,'{$_POST['report_name']}','{$_POST['report_who']}','{$_POST['report_phone']}','{$_POST['report_dietail']}')";
if ($con->query($sql) === TRUE) {
    echo "<script type='text/javascript'>";
    echo "alert('อัพรายงานเรียบร้อยแล้ว');";
    echo "window.location = 'IndexTest.php'; ";
    echo "</script>";
} 
else 
{
    echo "<script type='text/javascript'>";
    echo "alert('ไม่สามารถอัพรายงานได้');";
    echo "window.location = 'Cart_From.php'; ";
    echo "</script>";	
}
$con->close();

?>
