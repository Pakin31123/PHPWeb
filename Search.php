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
<div class="container text-center">
	<div class="row">
		<div class="col-md-12">
        <legend style="text-align: center"><a href=""><i class="glyphicon glyphicon-search"></i></a> ค้นหาสินค้า</legend>
            <div class="input-group" id="adv-search">
            
                <input type="text" class="form-control" placeholder="ค้นหาสินค้า" />
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <form class="form-horizontal" role="form">
                                  <div class="form-group">
                                    <label for="filter">ประเภทสินค้า</label>
                                    <select class="form-control">
                                        <option value="0" selected>-</option>
                                        <option value="1">Featured</option>
                                        <option value="2">Most popular</option>
                                        <option value="3">Top rated</option>
                                        <option value="4">Most commented</option>
                                    </select>    
                                    </div>                             
                                    <div class="form-group">
                                    <label for="filter">ยี่ห้อสินค้า</label>
                                    <select class="form-control">
                                        <option value="0" selected>-</option>
                                        <option value="1">Featured</option>
                                        <option value="2">Most popular</option>
                                        <option value="3">Top rated</option>
                                        <option value="4">Most commented</option>
                                    </select>       
                                    </div>  
                                    <div class="form-group">
                                    <label for="filter">ช่วงราคา</label><br>
                                    <label for="filter">***********</label><br>
                                    <label for="filter">ราคาต่ำสุด</label>
                                    <input type="text" class="form-control" placeholder="" />                                           
                                    </div>
                                    <div class="form-group">
                                    <label for="filter">ราคาสูงสุด</label>
                                    <input type="text" class="form-control" placeholder="" />                                           
                                    </div>
                                </from>    
                        </div>
                        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </div>
                </div>
            </div>
          </div>
        </div>
	</div>
</div>
<!-- แสดงสินค้า -->


</body>
</html>

