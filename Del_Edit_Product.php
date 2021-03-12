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
<div class="w3-container">
<?php
$query = "SELECT * FROM product ORDER BY product_id asc" or die("Error:");
$result = mysqli_query($con, $query);
echo '<legend><a href=""><i class="glyphicon glyphicon glyphicon-wrench"></i></a> ลบและแก้ไขสินค้า</legend>';
echo "<table class="."w3-table-all w3-centered".">";
  //หัวข้อตาราง
  echo "
  <tr>
    <td>รหัสสินค้า</td>
    <td>ชื่อสินค้า</td>
    <td>ประเภทสินค้า</td>
    <td>ราคาสินค้า</td>
    <td>รายละเอียดสินค้า</td>
    <td>ภาพตัวอย่างสินค้า</td>
    <td>คำสั่ง</td>
  </tr>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td>" .$row["product_id"] .  "</td> ";
    echo "<td>" .$row["product_name"] .  "</td> ";
    echo "<td>" .$row["product_type"] .  "</td> ";
    echo "<td>" .$row["product_price"] .  "</td> ";
    echo "<td>" .$row["product_detail"] .  "</td> ";
    echo '<td><div class="panel-body"><img src="PicUpload/'.$row['product_img'].'" class="img-responsive" alt="Image"></div></td>';
    echo "<td><a href='Update.php?id=".$row['product_id']."'>แก้ไขข้อมูล</a></td>"; 
    echo "<td><a href='Delete.php?id=".$row['product_id']."&checktable=product'>ลบข้อมูล</a></td>"; 
  echo "</tr>";
  }
echo "</table>";
?>
</div>
</body>
</html>