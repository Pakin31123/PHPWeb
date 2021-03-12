<?php
include 'Main_Page.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

<style>
</style>
</head>
<body>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM product WHERE product_id = $id";            
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
?>

<form class="form-horizontal" action="Update_Post.php" method="post" enctype="multipart/form-data" name="upfile" id="upfile">
<fieldset>
<legend><i class="glyphicon glyphicon glyphicon-wrench"></i> แก้ไขข้อมูล</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_id">รหัสสินค้า</label>  
  <div class="col-md-4">
  <?php
  echo '<input id="product_id" name="product_id" placeholder="" class="form-control input-md" required="" type="text" disabled value="'.$row['product_id'].'">'; 
  echo '<input type="hidden" id="product_id_test" name="product_id_test" value="'.$row['product_id'].'">';
  ?>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">ชื่อสินค้า</label>  
  <div class="col-md-4">
      <?php
  echo '<input id="product_name" name="product_name" placeholder="ชื่อสินค้า" class="form-control input-md" required="" type="text" value="'.$row['product_name'].'">'; 
    
      ?>
  </div>
</div>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_type">ประเภทสินค้า</label>
  <div class="col-md-4">
    <select id="product_type" name="product_type" class="form-control" required>
    <?php
    echo '<option value="'.$row['product_type'].'" selected >'.$row['product_type'].'</option>';
    $Testsql = "SELECT * FROM all_product_type";
    $Testresult = mysqli_query($con,$Testsql);
    $Testrow = mysqli_num_rows($Testresult);
    if ($Testrow > 0) {
    while ($Testrow = mysqli_fetch_assoc($Testresult))
    {
      echo "<option value='" . $Testrow['type_name'] . "'>" . $Testrow['type_name'] . "</option>";
    }
}
    ?>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_price">ราคาสินค้า</label>  
  <div class="col-md-4">
      <?php
  echo '<input id="product_price" name="product_price" placeholder="กรอกตัวเลขเท่านั้น" class="form-control input-md" required="" type="text" value="'.$row['product_price'].'">';
       ?>
  </div>
</div>
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_detail">รายละเอียดสินค้า</label>
  <div class="col-md-4">             
    <textarea class="form-control" name="product_detail" name="product_detail" placeholder="รายละเอียดสินค้า..." rows="5" required>
    <?php
    echo $row['product_detail'];
    ?>
    </textarea>
    
    </div>
</div>  
<br>
<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">เลือกรูปภาพ</label>
  <div class="col-md-4">
    <input type="file" name="fileupload" id="fileupload" required/></br>
  </div>
</div>


 
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
      <button id="singlebutton" name="singlebutton" class="btn btn-primary" type="submit">ยืนยัน</button>
      <button id="singlebutton" name="singlebutton" class="btn btn-primary" onclick="goBack()" type="button">กลับ</button>
  </div>
  </div>
</fieldset>
</form>

</body>
</html>
