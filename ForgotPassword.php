<?php
include 'Main_Page.php';
?>
<!DOCTYPE html>
<html lang="en">
<head> 
</head>
<body>
<div id="logreg-forms">
        <form class="form-signin" method="post" action="ForgotPasswordPost.php">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">ลืมรหัสผ่าน</h1>
            <hr>
            <input type="email" name="email" class="form-control" placeholder="ปิดปรับปรุงครับแก้ไม่ได้สักที" required="" autofocus="" disabled>    
            <hr>
            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> ยืนยัน</button>
            <a href="SI_FROM.php"><button class="btn btn-success btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> กลับ</button></a>
            </form>
            <br>        
    </div>



</body>
</html>

