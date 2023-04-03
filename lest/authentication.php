<?php
session_start();      
    include('connection.php');  
    $username = $_REQUEST['regno'];  
    $password = $_REQUEST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from student where reg_no = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        $_SESSION['regno'] = $row['reg_no'];
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>"; 
            header("Location: students.php");
        }
        else{  
            header("Location: login.html");  
            echo "<h1> Login failed. Invalid username or password.</h1>";
            
        }     
?>  