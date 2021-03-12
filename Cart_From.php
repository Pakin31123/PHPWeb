
<?php
include 'Main_Page.php';
$id = $_SESSION["UserID"];
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
  font-size: 16px;
  margin-left: 38px;
  margin-right: auto;

  cursor: pointer;
}

.button1 {background-color: #4CAF50;} /* Green */

h3{
text-align: center;
color:cadetblue;
}
</style>
</head>
<body>
<jumbotron class="container-fluid text-center">

<?php 
?>
<legend><a href=""><i class="glyphicon glyphicon-shopping-cart"></i></a> รถเข็น</legend>
<?php
//สร้างไว้เก็บค่า
$Money = 0;
$AllProduct = '';
$sql = "SELECT * FROM cart WHERE user_id = $id " or die("Error");
$result = mysqli_query($con, $sql);
  while($row = mysqli_fetch_array($result)) {
      $FakeCost = ($row['product_price']*2);
      $Money += $row['product_price']; 
echo '<div class="text-center>';
echo '<div class="row">';
echo    '<div class="col-sm-3">';
echo      '<div class="panel panel-primary">';
echo        '<div class="panel-heading">'.$row['product_name'].'</div>';
echo        '<div class="panel-body"><img src="PicUpload/'.$row['product_img'].'" class="img-responsive" alt="Image"></div>';
echo        '<div class="panel-footer">'."<h1>ราคาพิเศษ ".$row['product_price'].".-".'</h1><h5>ราคาปกติ <S>'.$FakeCost.'</S>.-</h5>';  
if($AllProduct != '')
{
$AllProduct .= " , ";
}
$AllProduct .= $row['product_name'];


?>  
<hr>
<!-- แสดงรายละเอียดสินค้า -->
<details>
    <summary>รายละเอียดสินค้า </summary>
    <br>
    <textarea id="w3review" name="w3review" rows="4" cols="36.5">
    <?php
    $Check = $row['product_id'];
    $Newsql = "SELECT * FROM product WHERE product_id = $Check " or die("Error");
    $Newresult = mysqli_query($con, $Newsql);
    $Newrow = mysqli_fetch_array($Newresult);
    echo $Newrow['product_detail'];
    ?>
  </textarea>
</details>
<hr>
<div>
<?php

echo '<a href="Delete.php?id='.$row["CartID"].'&checktable=cart">ลบออกจากรถเข็น</a>';

?>
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
<div id="logreg-forms">
<form class="form-signin" method="post" action="Order_post.php">
<h3>ยอดเงินค่าใช้จ่ายรวม</h3>
<?php
echo '<input type="text" name="money" class="form-control" placeholder="" required="" disabled value="'.$Money.'" style="text-align: right">';  


    $Usersql = "SELECT * FROM user WHERE user_id = $id " or die("Error");
    $Useresult = mysqli_query($con, $Usersql);
    $Userrow = mysqli_fetch_array($Useresult);

echo '<input type="hidden" name="user_id" value="'.$_SESSION["UserID"].'">';
echo '<input type="hidden" name="user_name" value="'.$_SESSION["User"].'">';
echo '<input type="hidden" name="address" value="'.$Userrow["address"].'">';
echo '<input type="hidden" name="phone" value="'.$Userrow["phone"].'">';
echo '<input type="hidden" name="product_name" value="'.$AllProduct.'">';
echo '<input type="hidden" name="All_product_price" value="'.$Money.'">';
//
?>      
<button class="btn btn-info btn-block" type="submit" ><i class="fas fa-sign-in-alt"></i> ยืนยันการซื้อขาย</button>
<br>

</form>
</div>


</body>
</html>
