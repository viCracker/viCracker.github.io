<?php
include('connection.php');

$q1 = $_REQUEST['outline_administered'];
$q2 = $_REQUEST['outline_objectives'];
$q3 = $_REQUEST['done_assignment'];
$q4 = $_REQUEST['ass_marked'];
$q5 = $_REQUEST['attendance'];
$q6 = $_REQUEST['comm_skills'];
$q7 = $_REQUEST['consultation'];
$q8 = $_REQUEST['presentability'];
$q9 = $_REQUEST['Attitude'];
$q10 = $_REQUEST['Overall'];

$sql = "INSERT into evaluation values('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10')";


?>