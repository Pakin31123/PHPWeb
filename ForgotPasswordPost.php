

    <?php
    $email = $_POST['email'];
    $sql = "SELECT * FROM user Where email='".$email."'";                           
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    if(!$row){
        echo "Not Found Username or Email!";
    }
    else
    {
    
    $strTo = $row["email"];
    $strSubject = "Your Account information username and password.";
    $strHeader = "Content-type: text/html; charset=windows-874\n"; // or UTF-8 //
    $strHeader .= "From: webmaster@thaicreate.com\nReply-To: webmaster@thaicreate.com";
    $strMessage = "";
    $strMessage .= "Email : ".$row["email"]."<br>";
    $strMessage .= "Password : ".$row["password"]."<br>";
    $strMessage .= "=================================<br>";
    $strMessage .= "By Pakin_City<br>";
    $flgSend = mail($strTo,$strSubject,$strMessage,$strHeader);     
    }
    
    ?>
