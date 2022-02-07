<?php


include('connect.php');
$id=$_GET['id'];
$a=mysqli_query($conn,"update  rack set rack_status='True' where id='$id'");

header("location:rack_list.php");




?>