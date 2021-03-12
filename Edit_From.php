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
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend style="text-align: center"><i class="glyphicon glyphicon-sort"></i> เพิ่มสินค้า</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_id">รหัสสินค้า</label>  
  <div class="col-md-4">
  <input id="product_id" name="product_id" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">ชื่อสินค้า</label>  
  <div class="col-md-4">
  <input id="product_name" name="product_name" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">ประเภทสินค้า</label>
  <div class="col-md-4">
    <select id="product_categorie" name="product_categorie" class="form-control">
    <option value="0" selected>-</option>
    <option value="1">Featured</option>
    <option value="2">Most popular</option>
    <option value="3">Top rated</option>
    <option value="4">Most commented</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">ราคาสินค้า</label>  
  <div class="col-md-4">
  <input id="available_quantity" name="available_quantity" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_description">รายละเอียดสินค้า</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="product_description" name="product_description"></textarea>
  </div>
</div>  
 <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">เลือกรูปภาพ</label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">ยืนยัน</button>
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">ยกเลิก</button>
  </div>
  </div>

</fieldset>
</form>
</body>
</html>
