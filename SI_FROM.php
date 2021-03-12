<?php
include 'Main_Page.php';
?>
<!DOCTYPE html>
<html lang="en">
<head> 
</head>
<body>
<div id="logreg-forms">
        <form class="form-signin" method="post" action="Check_Login.php">
        <legend><i class="glyphicon glyphicon-user"></i> เข้าสู่ระบบ</legend>
            <input type="email" name="email" class="form-control" placeholder="อีเมล" required="" autofocus="">
            <input type="password" name="password" class="form-control" placeholder="รหัสผ่าน" required="">        
            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> เข้าสู่ระบบ</button>
            <a href="ForgotPassword.php" id="forgot_pswd">ลืมรหัสผ่าน?</a>
            <hr>

            <a href="SU_FROM.php"><button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> ลงทะเบียนบัญชีใหม่</button></a>
            </form>
            <br>        
    </div>
</body>
</html>