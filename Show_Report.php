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
echo '<legend><i class="glyphicon glyphicon-phone-alt"></i>  รายงานปัญหาที่ได้รับ</legend>';
$id = $_SESSION["UserID"];
$query = "SELECT * FROM report " or die("Error:");
$result = mysqli_query($con, $query);
echo "<table class="."w3-table-all w3-centered".">";
  //หัวข้อตาราง
  echo "
  <tr>
    <td>เลขที่รายงาน</td>
    <td>เรื่องที่แจ้ง</td>
    <td>ชื่อ</td>
    <td>เบอร์ติดต่อ</td>
    <td>รายละเอียด</td>
    <td>วันที่แจ้ง</td>
  </tr>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td>" .$row["report_id"] .  "</td> ";
    echo "<td>" .$row["report_name"] .  "</td> ";
    echo "<td>" .$row["report_who"] .  "</td> ";
    echo "<td>" .$row["report_phone"] .  "</td> ";
    echo "<td>" .$row["report_detail"] .  "</td> ";
    echo "<td>" .$row["dateup"] .  "</td> ";

  ?>
  <?php
    echo "<td><a href='Delete.php?id=".$row['report_id']."&checktable=report'>ลบรายงาน</a></td>"; 
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