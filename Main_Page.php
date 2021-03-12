<?php
include 'Connect.php';
session_start(); 
if($_SESSION["Login"] != 'Admin' && $_SESSION["Login"] != 'User' ){
  $_SESSION["Login"] = 'Guest';
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PAKIN CITY</title>
  <link rel="shortcut icon" type="image/x-icon" href="Pic/Icon.jpg" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="Css/sign_in_from.css" rel="stylesheet" />
  <link href="Css/test.css" rel="stylesheet" />
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      
      margin-bottom: 0;
      background-image: url("Pic/Pic1.jpg") ;
      background-repeat: no-repeat, repeat;
      color: white;
    }
   
    /* Add a gray background color and some padding to the footer */
    
    footer {
      background-color: #f2f2f2;
    }

  </style>
</head>
<body>
<!-- script -->
<script>
function goBack() {
  window.history.back();
}
</script>
<!-- script -->
<div class="jumbotron">
  <div class="container text-center">
  <h1 style="font-family:'Courier New'" >「Pakin City」</h1>    
  <marquee direction="left"><p style="font-family:'Courier New'">「ถ้าคุณกำลังมองหาร้านขายอุปกรณ์คุณภาพ ที่ซื้อได้ชัวปาบและมีของมากมาย Pakin City !!!」</p></marquee>  
  </div>
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="">Pakin City</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="IndexTest.php">หน้าหลัก</a></li>
        <li><a href="#" onClick="alert('Coming Soon! (ทำไม่ทันง่ะ)');">ค้นหาสินค้า</a></li>
        <li><a href="Show_Product.php">สินค้าทั้งหมด</a></li>
        <li><a href="Payment.php">ช่องทางการชำระเงิน</a></li>          
        <li><a href="Report_From.php">แจ้งปัญหา</a></li>   
        <li><a href="Profile.php">ติดต่อเรา</a></li>    

        <script>
        function myFunction() {   
        document.getElementById("demo").style.color = "red";
        }
        </script>
      </ul>   
      <ul class="nav navbar-nav navbar-right"> 
      <?php
      if($_SESSION["Login"] == 'Admin') {
        echo '<li><a href="Admin_Commands.php"><span class="glyphicon glyphicon glyphicon-wrench"></span> คำสั่งแอดมิน</a></li>'; 
        echo '<li><a href="#"><span class="glyphicon glyphicon-shopping-user"></span>'.$_SESSION["User"].'</a></li>'; 
        echo '<li><a href="Logout.php"> ออกจากระบบ</a></li>';
      }
      elseif($_SESSION["Login"] == 'User') {
        echo '<li><a href="Cart_From.php"><span class="glyphicon glyphicon-shopping-cart"></span> รถเข็น</a></li>'; 
        echo '<li><a href="Show_Order.php"><span class="glyphicon glyphicon-file"></span> ใบสั่งซื้อ</a></li>'; 
        echo '<li><a href="#"><span class="glyphicon glyphicon-shopping-user"></span>'.$_SESSION["User"].'</a></li>'; 
        echo '<li><a href="Logout.php"> ออกจากระบบ</a></li>';
      }
      else
      {
        echo '<li><a href="SI_FROM.php"><span class="glyphicon glyphicon-user"></span> เข้าสู่ระบบ</a></li>';
      }
      
      ?>
      </ul>
    </div>
  </div>
</nav>

</body>
</html>