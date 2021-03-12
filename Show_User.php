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
echo '<legend><i class="glyphicon glyphicon glyphicon-wrench"></i> แสดงและลบสมาชิก</legend>';
$query = "SELECT * FROM user WHERE status = 'User'" or die("Error:");
$result = mysqli_query($con, $query);
echo "<table class="."w3-table-all w3-centered".">";
  //หัวข้อตาราง
  echo "
  <tr>
    <td>รหัสสมาชิก</td>
    <td>ชื่อ</td>
    <td>นามสกุล</td>
    <td>ที่อยู่</td>
    <td>เบอร์โทรศัพท์</td>
    <td>รหัสผ่าน</td>
    <td>อีเมล</td>
    <td>คำสั่ง</td>

  </tr>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td>" .$row["user_id"] .  "</td> ";
    echo "<td>" .$row["firstname"] .  "</td> ";
    echo "<td>" .$row["lastname"] .  "</td> ";
    echo "<td>" .$row["address"] .  "</td> ";
    echo "<td>" .$row["phone"] .  "</td> ";
    echo "<td>" .$row["password"] .  "</td> ";
    echo "<td>" .$row["email"] .  "</td> ";

    echo "<td><a href='Delete.php?id=".$row['user_id']."&checktable=user'>ลบข้อมูล</a></td>"; 
  echo "</tr>";
  }
echo "</table>";
?>
</div>
</body>
</html>