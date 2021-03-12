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
<jumbotron class="container-fluid text-center">
<div class="container text-center">
        <legend><i class="glyphicon glyphicon-envelope"></i> แจ้งปัญหา</legend>
            
                    <div class="btn-group" role="group">
                                 <form class="form-horizontal" action="Report_Post.php" method="Post" enctype="multipart/form-data" name="report" id="report">
                                  <div class="form-group">
                                    <label for="filter">ตัวอย่างปัญหา</label>
                                    <select class="form-control" name="report_name">
                                        <option value="" selected require disabled>-</option>
                                        <option value="สินค้ามีปัญหา">สินค้ามีปัญหา</option>
                                        <option value="ต้องการเปลี่ยนสินค้า">ต้องการเปลี่ยนสินค้า</option>
                                        <option value="สินค้าไม่ตรงตามที่สั่ง">สินค้าไม่ตรงตามที่สั่ง</option>
                                        <option value="ระบบสมาชิกมีปัญหา">ระบบสมาชิกมีปัญหา</option>
                                        <option value="ไม่สามารถชำระเงินได้">ไม่สามารถชำระเงินได้</option>
                                        <option value="อื่นๆ">อื่นๆ</option>
                                    </select>    
                                    </div>                                                              
                                    <div class="form-group">
                                    <label for="filter">ชื่อผู้แจ้ง</label>
                                    <input type="text" name="report_who" class="form-control" placeholder="" require/>                                           
                                    </div>
                                    <div class="form-group">
                                    <label for="filter">เบอร์ติดต่อ</label>
                                    <input type="text" name="report_phone" class="form-control" placeholder="" require />                                           
                                    </div>
                                    <div class="form-group">
                                    <label for="filter">รายละเอียด</label>                                                                          
                                    </div>
                                    <textarea id="w3review" name="report_dietail" rows="10" cols="50" require>
                                    </textarea>  
                                    <br>
                                    <br>
                                    <input type="submit" value="ยืนยัน">
                                    <input type="button" onclick="goBack()" value="กลับ">  
                                </from>   
                                <br><br>
                                <br><br>
                        </div>                    
                    </div>
                
            </div>
          </div>
        </div>
</body>
</html>
