<?php
session_start();
include('connection.php');

$sql = "SELECT * FROM student WHERE fname='Robert';";
$result = mysqli_query($con,$sql);
$resultCheck = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);

$usql = "SELECT * from unit;";
$uresult = mysqli_query($con,$usql);
$uresultCheck = mysqli_num_rows($uresult);
$urow = mysqli_fetch_assoc($uresult);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="students.css">
    <title>Lest</title>
</head>

<body>

    <div class="banner">
        <div class="top">
        
            <div class="nav">
            <span>LEST</span>
            <a id="sign" href="logout.php">LogOut</a>
            <a href="#units">Units</a>
            </div>

            <div class="info"> 
              <h3>Profile Information</h3>
                <img src="why.jpg" alt="" width="100px" height="90px">
                <div class="text">
                <span>Name</span> <br> <?php echo $row['fname'];?> <?php echo $row['lname'];?><br>
                <span>Registration Number</span> <br> <?php 
                if($_SESSION['regno']){
                    echo $_SESSION['regno'];
                }else{
                    header("location:login.html");
                }
                ?><br>
                <span>Email</span> <br> <?php echo $row['email'];?><br>
                <span>Phone</span> <br> <?php echo $row['s_phone'];?><br>
                <span>Password</span> <br> <?php echo $row['password'];?><br>
                <span>Evaluation</span> <br> 0 out of <?php echo $row['units_no'];?> <br>
                <a href="#">Change Details</a>
                </div>    
            </div>
        </div>
    </div>

    <div class="bottom">
        <div class="units" id="units">
            <table class="content-table">
                <thead>
                <tr>
                    
                    <th>Code</th>
                    <th>Title</th>
                    <th>Lecturer</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while($urow=$uresult->fetch_assoc()){
                ?>
                <tr>
                    
                    <td><?php echo $urow['unit_code'];?></td>
                    <td><?php echo $urow['unit_title'];?></td>
                    <td><?php echo $urow['unit_lecturer'];?></td>
                    <td><a href="evalform.php">Evaluate</a></td>
                </tr>
                <?php
                }
                ?>
                <!-- <tr>
                   
                    <td>CCS 3353</td>
                    <td>Research Methodology and Group Project</td>
                    <td>Mrs. Mwadulo</td>
                    <td><a href="">Evaluate</a></td>
                </tr>
                <tr>
                    
                    <td>CCS 3354</td>
                    <td>Data Mining</td>
                    <td>Mr.Lazy</td>
                    <td><a href="">Evaluate</a></td>
                </tr>
                <tr>
                   
                    <td>CCS 3355</td>
                    <td>Compiler Construction</td>
                    <td>Dr. Blahblah</td>
                    <td><a href="">Evaluate</a></td>
                </tr>
                <tr>
                    
                    <td>CCS 3380</td>
                    <td>Industrial Attachment</td>
                    <td>Prof. Ulimwengu</td>
                    <td><a href="">Evaluate</a></td>
                </tr>
                <tr>
                   
                    <td>CIT 3253</td>
                    <td>Network Administration and Management</td>
                    <td>Daktari</td>
                    <td><a href="">Evaluate</a></td>
                </tr>
                <tr>
                    
                    <td>CIT 3350</td>
                    <td>Mobile Application Development</td>
                    <td>Mr. Retard</td>
                    <td><a href="">Evaluate</a></td>
                </tr>
                <tr>
                   
                    <td>SSA 3320</td>
                    <td>Operations Research</td>
                    <td>Unknown</td>
                    <td><a href="evalform.html" id="evalbtn">Evaluate</a></td>
                </tr> -->
                </tbody>
        </table>

        <div class="footer">
            <div class="links">
                <ul>
                    <li><a href="#">contact Us</a></li>
                    <li><a href="#">Developers</a></li>
                </ul>
            </div>
            <div class="reach">
                <p style="font-size: 15px;">
                    Email: lest@gmail.co.ke <br>
                    Hotline:+2547 69246341
                </p>

            </div>
            Ts and Cs apply. Copyrights Reserved @lest2023
        </div>
    </div>

</body>
</html>