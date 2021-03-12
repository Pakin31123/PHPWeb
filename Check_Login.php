<?php
session_start(); 
        if(isset($_POST['email'])){
                  include 'Connect.php';
                  $email = $_POST['email'];
                  $password = $_POST['password'];
                  $sql = "SELECT * FROM user WHERE email='".$email."' and password='".$password."'";            
                  $result = mysqli_query($con,$sql);
                  if(mysqli_num_rows($result)==1){
                    
                      $row = mysqli_fetch_array($result);
                      $_SESSION["UserID"] = $row["user_id"];
                      $_SESSION["User"] = $row["firstname"]." ".$row["lastname"];
                      $_SESSION["Status"] = $row["status"];
                      if($_SESSION["Status"]=="Admin"){ 
                        $_SESSION["Login"]  = "Admin";
                        Header("Location: IndexTest.php");

                      }
                      if ($_SESSION["Status"]=="User"){  
                        $_SESSION["Login"]  = "User";
                        Header("Location: IndexTest.php");
                      }           
                  }
                  else
                  {
                    echo "<script>";
                        echo "alert(\" Email หรือ  Password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: SI_FROM.php");

        }
?>