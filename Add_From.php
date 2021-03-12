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
<form class="form-horizontal" action="Add_POST.php" method="post" enctype="multipart/form-data" name="upfile" id="upfile">
<fieldset>
<legend><i class="glyphicon glyphicon-sort"></i> เพิ่มสินค้า</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_id">รหัสสินค้า</label>  
  <div class="col-md-4">
  <?php
 $sql = "SELECT * FROM product";            
 $result = mysqli_query($con,$sql);
 $row = (mysqli_num_rows($result));
 $row++;
  echo '<input id="product_id" name="product_id" placeholder="" class="form-control input-md" required="" type="text" disabled value="'.$row.'">'; 
  ?>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">ชื่อสินค้า</label>  
  <div class="col-md-4">
  <input id="product_name" name="product_name" placeholder="ชื่อสินค้า" class="form-control input-md" required="" type="text">
    
  </div>
</div>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_type">ประเภทสินค้า</label>
  <div class="col-md-4">
    <select id="product_type" name="product_type" class="form-control" required>
    <option value="" selected disabled>กรุณาเลือกประเภท</option>
    <?php
    $sql = "SELECT * FROM all_product_type";
    $result = mysqli_query($con,$sql);
    $row = mysqli_num_rows($result);
    if ($row > 0) {
    while ($row = mysqli_fetch_assoc($result))
    {
      echo "<option value='".$row['type_name']."'>".$row['type_name']."</option>";
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
  <input id="product_price" name="product_price" placeholder="กรอกตัวเลขเท่านั้น" class="form-control input-md" required="" type="text" onKeyUp="if(this.value*1!=this.value) this.value='' ;" >
    
  </div>
</div>
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_detail">รายละเอียดสินค้า</label>
  <div class="col-md-4">                     
    <textarea class="form-control" name="product_detail" name="product_detail" placeholder="รายละเอียดสินค้า..." rows="5"	 required></textarea>
  </div>
</div>  
<br>
 <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">เลือกรูปภาพ</label>
  <div class="col-md-4">
    <input type="file" name="fileupload" id="fileupload"  required="required"/></br>

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
