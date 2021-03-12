<?php
include 'Main_Page.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    #logreg-forms{
    width:412px;
    margin:10vh auto;
    }
    .form-control { margin-bottom: 10px; }   
  </style>
</head>
<body>
<div id="logreg-forms">
<div class="container text-center">
    <div class="row" >
        <div class="col-xs-12 col-sm-12 col-md-4 well-sm">
            <legend><i class="glyphicon glyphicon-user"></i></a> ลงทะเบียน</legend>
            <form name="SUFROM" method="post" action="SU_POST.php">
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" name="firstname" placeholder="ชื่อจริง" type="text"
                        required autofocus />
                </div>
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" name="lastname" placeholder="นามสกุล" type="text" required />
                </div>
            </div>
            <input class="form-control" name="address" placeholder="ที่อยู่อาศัย(สำหรับส่งของ)" type="text" />
            <input class="form-control" name="phone" placeholder="เบอร์ติดต่อ" type="text" />
            <input class="form-control" name="email" placeholder="อีเมลของคุณ" type="email" />
            <input class="form-control" name="re_email" placeholder="ใส่อีเมลอีกครั้ง" type="email" />
            <input class="form-control" name="password" placeholder="รหัสผ่าน" type="password" />
            <input class="form-control" name="re_password" placeholder="ใส่รหัสผ่านอีกครั้ง" type="password" />    
            <hr>    
            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i>ยืนยันการลงทะเบียน</button>
            <a href="SI_FROM.php"><button class="btn btn-primary btn-block" type="button" ><i class="fas fa-user-plus"></i>กลับหน้าเข้าสู่ระบบ</button>      
            </form>
            
        </div>
    </div>
</div>
            
    </div>

</body>
</html>