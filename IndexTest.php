
<?php
include 'Main_Page.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    
.td{
    text-align: center;

}

.img-responsive{
    max-width: 250px;
    max-height: 150px;
    margin-left: auto;
    margin-right: auto;

}

h1 {

    font-size: 25px;
    color:red;
}
.button {
  border: none;
  color: white;
  padding: 12px 50px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;

  cursor: pointer;
}

.button1 {background-color: #4CAF50;} /* Green */


table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>
<jumbotron class="container-fluid text-center">
<form name="Add_Cart" method="post" action="Add_Cart.php">

<?php

$sql = "SELECT * FROM product ORDER BY product_id DESC LIMIT 8;" or die("Error");
$result = mysqli_query($con, $sql);
echo '<legend><i class="glyphicon glyphicon-fire"></i>    สินค้ามาใหม่</legend>';
$Num = 0;
  while($row = mysqli_fetch_array($result)) {
      $FakeCost = ($row['product_price']*2);
echo '<div class="text-center>';
echo '<div class="row">';
echo    '<div class="col-sm-3">';
echo      '<div class="panel panel-primary">';
echo        '<div class="panel-heading">'.$row['product_name'].'</div>';
echo        '<div class="panel-body"><img src="PicUpload/'.$row['product_img'].'" class="img-responsive" alt="Image"></div>';
echo        '<div class="panel-footer">'."<h1>ราคาพิเศษ ".$row['product_price'].".-".'</h1><h5>ราคาปกติ <S>'.$FakeCost.'</S>.-</h5>';  
?>  
<hr>
<!-- แสดงรายละเอียดสินค้า -->
<details>
    <summary>รายละเอียดสินค้า </summary>
    <br>
    <textarea id="w3review" name="w3review" rows="4" cols="36.5">
    <?php
    echo $row['product_detail'];
    ?>
  </textarea>
</details>
<hr>
<div>
<!-- เช็ค User-->
<?php
if($_SESSION["Login"] == 'Guest' )
{
?>
<table >
<tr>
<a href="SI_FROM.php" style="font-size: 20px">เพิ่มเข้ารถเข็น</a>
</tr>
</table>
<?php
}
else
{
?>
<?php

//$sql = "INSERT INTO cart (user_id,user_name,product_id,product_name,product_price,product_img,Cart_status) เอามาดูเฉยๆว่าจะโยนไรมั้ง



    echo '<a style="font-size: 20px" href="Add_Cart.php?user_id='.$_SESSION["UserID"].'&user_name='.$_SESSION["User"].'&product_id='.$row['product_id'].'&product_name='.$row['product_name'].'&product_price='.$row['product_price'].'&product_img='.$row['product_img'].'">เพิ่มเข้ารถเข็น</a>';

  ?>
  <br>

  <!-- ปุุ่มเก่า ปัญหาเยอะไม่ใช่แม่งละ
  <a href="Cart_From.php"><button type="submit" class="button button1">เพิ่มเข้ารถเข็น</button></a>
  -->

<?php
}

?>
<!-- เช็ค User-->

</div>
<br>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
  }
?>
</jumbotron>
</body>
</html>
