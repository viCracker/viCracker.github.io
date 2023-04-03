<?php
session_start();
unset($_SESSION["regno"]);
header("Location:index.html");
?>