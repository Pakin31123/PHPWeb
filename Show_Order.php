<?php
include 'Main_Page.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.img-responsive{
    max-width: 200px;
    max-height: 100px;
    margin-left: auto;
    margin-right: auto;

}
td 
{
    height: 50px; 
    width: 50px;
    text-align: center;
    vertical-align: middle;
}


</style>
</head>
<body>
<jumbotron class="container-fluid text-center">
<div class="w3-container">
<?php
echo '<legend><a href=""><i class="glyphicon glyphicon glyphicon-wrench"></i></a> แสดงใบสั่งซื้อ</legend>';
$id = $_SESSION["UserID"];
$query = "SELECT * FROM order_product WHERE user_id = $id " or die("Error:");
$result = mysqli_query($con, $query);
echo "<table class="."w3-table-all w3-centered".">";
  //หัวข้อตาราง
  echo "
  <tr>
    <td>เลขที่ใบสั่งซื้อ</td>
    <td>รหัสผู้ใช้</td>
    <td>ชื่อ</td>
    <td>ที่อยู่</td>
    <td>เบอร์โทรศัพท์</td>
    <td>สินค้าที่ซื้อไป</td>
    <td>ราคารวม</td>
    <td>วันที่สั่งซื้อ</td>
    <td>สถานะ</td>
    <td>อัพใบชำระเงิน</td>



  </tr>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td>" .$row["order_id"] .  "</td> ";
    echo "<td>" .$row["user_id"] .  "</td> ";
    echo "<td>" .$row["user_name"] .  "</td> ";
    echo "<td>" .$row["address"] .  "</td> ";
    echo "<td>" .$row["phone"] .  "</td> ";
    echo "<td>" .$row["product_name"] .  "</td> ";
    echo "<td>" .$row["all_price"] .  "</td> ";
    echo "<td>" .$row["dateup"] .  "</td> ";
    echo "<td>" .$row["status"] .  "</td> ";
  ?>
    <form action="Update_Pic_Order.php" method="post" enctype="multipart/form-data" name="upfile" id="upfile">
  <?php
    echo '<td><input type="file" name="fileupload" id="fileupload" /></br>'; 
    echo  '<input type="hidden" name="order_id" value="'.$row['order_id'].'">';

    echo  '<input type="submit" name="button" id="button" value="อัพโหลด" /></td>';
    echo "<td><a href='Delete.php?id=".$row['order_id']."&checktable=order'>ยกเลิกใบสั่งซื้อ</a></td>"; 
  ?>  
    </form>
  <?php


  echo "</tr>";
  }
echo "</table>";
?>
</div>
</jumbotron>

</body>
</html>