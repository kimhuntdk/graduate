<?php
 session_start();
 require_once( "./db_connect.php" );
 $mysqli = connect();

 $username = $_POST['username'];  
 $password = $_POST['password'];  
   
     //to prevent from mysqli injection  
     $username = stripcslashes($username);  
     $password = stripcslashes($password);  
     $username = mysqli_real_escape_string($mysqli, $username);  
     $password = mysqli_real_escape_string($mysqli, $password);  
   
     $sql = "select *from member where username = '$username' and password = '$password'";  
     $result = mysqli_query($mysqli, $sql);  
    //  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    //  $count = mysqli_num_rows($result);  
       
     if(mysqli_num_rows($result)==1) {
        $row = mysqli_fetch_array($result);

        $_SESSION["ID"] = $row["ID"];
        $_SESSION["name"] = $row["name"];
        $_SESSION["level"] = $row["level"];

        if($_SESSION["level"]=="3"){ 
            // echo "admin";
          Header("Location: index.php");
        }
        else { 
            // echo "member";
              Header("Location: index.php");
            }
       
    }
    else{

    // Header("Location: index.php"); //user & password incorrect back to login again
    echo "<script>";
    echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
    echo "window.history.back()";
    echo "</script>";
    }   
mysqli_close($mysqli);


?>