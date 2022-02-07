<?php


include('connect.php');
$id=$_GET['id'];
$a=mysqli_query($conn,"update  assign_rack set status='True' where id='$id'");

header("location:assign_rack_list.php");




?>